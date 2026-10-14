<form class="et-plan-panel et-kili-fit" id="et-kili-fit">
   <h2>Which route fits</h2>
   <div class="et-kili-fit-grid">
      <label>Days on the mountain
         <select name="days">
            @foreach ([6 => '6 days', 7 => '7 days', 8 => '8 days', 9 => '9 days'] as $value => $label)
               <option value="{{ $value }}" @selected($value === 8)>{{ $label }}</option>
            @endforeach
         </select>
      </label>
      <label>Your hiking
         <select name="hiking">
            <option value="new">First high mountain</option>
            <option value="regular">I hike often</option>
            <option value="strong">I have climbed at altitude</option>
         </select>
      </label>
      <label>Where you sleep
         <select name="sleep">
            <option value="either">Camping or huts</option>
            <option value="camping">Camping</option>
            <option value="huts">Huts</option>
         </select>
      </label>
   </div>
   <p class="et-plan-best" id="et-kili-why">{{ \App\Support\PlanningData::kiliMatch(8, 'new', 'either')['why'] }}</p>
</form>
<script type="application/json" id="et-kili-match">{!! json_encode(\App\Support\PlanningData::kiliMatches()) !!}</script>
<div class="et-kili" id="et-kili">
   <div class="et-kili-routes">
      @foreach ($routes as $route)
         <button type="button" class="et-kili-route {{ $route['slug'] === $selectedRoute['slug'] ? 'is-active' : '' }}" data-route="{{ $route['slug'] }}" data-fit="{{ $route['fit'] }}">
            <strong>{{ $route['name'] }}</strong>
            <span>{{ $route['days'] }} days · {{ $route['style'] }}</span>
         </button>
      @endforeach
   </div>
   @foreach ($routes as $route)
      <article class="et-plan-panel et-kili-detail {{ $route['slug'] === $selectedRoute['slug'] ? 'is-active' : '' }}" data-route="{{ $route['slug'] }}">
         <h2>{{ $route['name'] }}</h2>
         <p>{{ $route['summary'] }}</p>
         @php
            $track = \App\Support\PlanningData::kiliTrack($route['slug']);
            $points = $track['points'];
            $coords = fn (array $slice) => collect($slice)->map(fn ($point) => $point[0].','.$point[1])->implode(' ');
            $far = $track['far'] ?? null;
            $labels = [];
            $side = 1;
            foreach ($points as $point) {
               $x = $point[0];
               $y = $point[1] - 16;
               $anchor = $point[0] > 820 ? 'end' : 'middle';
               if ($anchor === 'end') {
                  $x -= 12;
               }
               foreach ($labels as $label) {
                  if (abs($label['px'] - $point[0]) < 120 && abs($label['py'] - $point[1]) < 70) {
                     $anchor = $side > 0 ? 'start' : 'end';
                     $x = $point[0] + ($side * 16);
                     $y = $point[1] + 5;
                     $side *= -1;
                     break;
                  }
               }
               $labels[] = ['px' => $point[0], 'py' => $point[1], 'x' => $x, 'y' => $y, 'anchor' => $anchor, 'name' => $point[2]];
            }
         @endphp
         <div class="et-kili-map">
            <img src="{{ asset('images/planning/kilimanjaro.jpg') }}" alt="Mount Kilimanjaro from the south, {{ $route['name'] }} route">
            <svg viewBox="0 0 1000 750" preserveAspectRatio="none" role="img" aria-label="{{ $route['name'] }} route on Kilimanjaro">
               @if ($far)
                  <polyline class="et-route-halo" points="{{ $coords(array_slice($points, 0, $far[0] + 1)) }}"></polyline>
                  <polyline class="et-route-line" points="{{ $coords(array_slice($points, 0, $far[0] + 1)) }}"></polyline>
                  <polyline class="et-route-halo et-route-far" points="{{ $coords(array_slice($points, $far[0], $far[1] - $far[0] + 1)) }}"></polyline>
                  <polyline class="et-route-line et-route-far" points="{{ $coords(array_slice($points, $far[0], $far[1] - $far[0] + 1)) }}"></polyline>
                  <polyline class="et-route-halo" points="{{ $coords(array_slice($points, $far[1])) }}"></polyline>
                  <polyline class="et-route-line" points="{{ $coords(array_slice($points, $far[1])) }}"></polyline>
               @else
                  <polyline class="et-route-halo" points="{{ $coords($points) }}"></polyline>
                  <polyline class="et-route-line" points="{{ $coords($points) }}"></polyline>
               @endif
               @foreach ($points as $point)
                  <circle cx="{{ $point[0] }}" cy="{{ $point[1] }}" r="{{ str_contains($point[2], 'Uhuru') ? 9 : 6 }}" class="{{ str_contains($point[2], 'Uhuru') ? 'is-summit' : '' }}"></circle>
               @endforeach
               @foreach ($labels as $label)
                  <text x="{{ $label['x'] }}" y="{{ $label['y'] }}" text-anchor="{{ $label['anchor'] }}">{{ $label['name'] }}</text>
               @endforeach
            </svg>
         </div>
         <p class="et-plan-fine">South-facing view. The gold line is the walking route and the dots are the camps, in order. Mawenzi is the rocky peak on the right.@if ($far) A dashed stretch is on the far side of the mountain.@endif</p>
         <div class="et-kili-lower">
            <section class="et-kili-walk">
               <h3>Day by day</h3>
               <ol>
                  @foreach ($route['days_detail'] as $day)
                     <li>
                        <span class="et-kili-num">{{ $loop->iteration }}</span>
                        <div>
                           <strong>{{ $day['camp'] }}</strong>
                           <em>{{ number_format($day['altitude']) }} m</em>
                           <span>{{ $day['note'] }}</span>
                        </div>
                     </li>
                  @endforeach
               </ol>
            </section>
            <aside class="et-kili-side">
               <div>
                  <h3>Altitude</h3>
                  <div class="et-alt">{!! $route['svg'] !!}</div>
               </div>
               <div>
                  <h3>Who it suits</h3>
                  <p>{{ $route['fit'] }}.</p>
                  <p class="et-plan-best">{{ $route['success'] }}.</p>
               </div>
               <div>
                  <h3>Before you book</h3>
                  <ul class="et-kili-tips">
                     @foreach ($route['tips'] as $tip)
                        <li>{{ $tip }}</li>
                     @endforeach
                  </ul>
               </div>
               <div class="et-plan-actions">
                  @if ($route['tour_url'])
                     <a class="tp-btn" href="{{ $route['tour_url'] }}">View the {{ $route['name'] }} trek</a>
                  @endif
                  <a class="et-plan-wa" href="{{ \App\Support\PlanningData::whatsapp('Hello Enjoyable Tour. I would like to climb Kilimanjaro on the '.$route['name'].' route ('.$route['days'].' days).') }}" target="_blank" rel="noopener">Ask about {{ $route['name'] }}</a>
               </div>
            </aside>
         </div>
      </article>
   @endforeach
</div>
<div class="et-plan-table-wrap">
   <h3>Compare the routes</h3>
   <table class="et-plan-table">
      <thead>
         <tr><th>Route</th><th>Days</th><th>Sleep</th><th>Best for</th></tr>
      </thead>
      <tbody>
         @foreach ($routes as $route)
            <tr data-route="{{ $route['slug'] }}" class="{{ $route['slug'] === $selectedRoute['slug'] ? 'is-active' : '' }}">
               <td>{{ $route['name'] }}</td>
               <td>{{ $route['days'] }}</td>
               <td>{{ $route['style'] }}</td>
               <td>{{ $route['fit'] }}</td>
            </tr>
         @endforeach
      </tbody>
   </table>
</div>
