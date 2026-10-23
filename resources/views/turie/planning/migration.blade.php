@php
   $track = [];
   foreach ($guide['months'] as $number => $month) {
      if ($number === 12) {
         $track[] = '900,640';
      }
      $track[] = $month['x'].','.$month['y'];
   }
   $track[] = $track[0];
@endphp
<div class="et-mig" id="et-mig">
   <div class="et-mig-months">
      @foreach ($guide['names'] as $number => $name)
         <a href="{{ route('plan.migration', ['month' => $number]) }}" class="{{ $guide['month'] === $number ? 'is-active' : '' }}" data-month="{{ $number }}">{{ substr($name, 0, 3) }}</a>
      @endforeach
   </div>
   <div class="et-mig-layout">
      <div>
         <div class="et-kili-map et-mig-photo">
            <img src="{{ asset('images/planning/serengeti.jpg') }}" alt="Aerial view looking north across the Serengeti, the Mara River, and Ngorongoro">
            @foreach ($guide['months'] as $number => $month)
               @php
                  $herd = 'plains';
                  if (in_array($number, [6, 8, 9], true)) {
                     $herd = 'crossing';
                  } elseif (in_array($number, [4, 5, 7, 10, 11], true)) {
                     $herd = 'column';
                  }
               @endphp
               @php
                  $anchor = 50;
                  if ($month['y'] > 620) {
                     $anchor = 78;
                  } elseif ($month['y'] < 210) {
                     $anchor = 28;
                  }
               @endphp
               <div class="et-mig-herd {{ $guide['month'] === $number ? 'is-on' : '' }}" data-month="{{ $number }}" style="left: {{ $month['x'] / 10 }}%; top: {{ $month['y'] / 7.5 }}%; transform: translate(-50%, -{{ $anchor }}%);">
                  <img src="{{ asset('images/planning/herd-'.$herd.'.jpg') }}" alt="">
               </div>
            @endforeach
            <svg viewBox="0 0 1000 750" preserveAspectRatio="none" role="img" aria-label="The yearly wildebeest migration drawn on the Serengeti">
               <polyline class="et-route-halo" fill="none" stroke="#ffffff" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" points="{{ implode(' ', $track) }}"></polyline>
               <polyline class="et-route-line et-route-far" fill="none" stroke="#b77e01" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="9 8" points="{{ implode(' ', $track) }}"></polyline>
               @foreach ($guide['months'] as $number => $month)
                  @php
                     $right = $month['x'] > 780;
                     $low = $month['y'] < 170;
                     $tx = $right ? $month['x'] - 16 : $month['x'] + 16;
                     $ty = $low ? $month['y'] + 28 : $month['y'] - 14;
                  @endphp
                  <g class="et-mig-stop {{ $guide['month'] === $number ? 'is-on' : '' }}" data-month="{{ $number }}">
                     <circle class="et-mig-ring" cx="{{ $month['x'] }}" cy="{{ $month['y'] }}" r="18"></circle>
                     <circle class="et-mig-dot" cx="{{ $month['x'] }}" cy="{{ $month['y'] }}" r="8"></circle>
                     <text x="{{ $tx }}" y="{{ $ty }}" text-anchor="{{ $right ? 'end' : 'start' }}">{{ $month['pin'] }}</text>
                  </g>
               @endforeach
               <g class="et-mig-home">
                  <circle cx="640" cy="545" r="7"></circle>
                  <text x="656" y="530">Ngorongoro</text>
               </g>
            </svg>
         </div>
         <p class="et-plan-fine">Looking north. The animals on the photo are the herds for this month, and they move when you change the month. The gold line is the yearly circuit. Ngorongoro, the crater on the right, holds wildlife all year.</p>
      </div>
      <article class="et-plan-panel" id="et-mig-copy">
         <p class="et-plan-kicker" id="et-mig-updated">{{ $guide['updated'] }}</p>
         <h2 id="et-mig-title">{{ $guide['name'] }} · {{ $guide['current']['title'] }}</h2>
         <p class="et-plan-best" id="et-mig-place">{{ $guide['current']['place'] }}</p>
         <p id="et-mig-text">{{ $guide['current']['text'] }}</p>
         <h3 class="et-animal-label">Usually with the herds</h3>
         <ul class="et-animal-strip" id="et-mig-animals">
            @foreach ($guide['current']['animals'] as $animal)
               <li>{{ $animal }}</li>
            @endforeach
         </ul>
         <p class="et-plan-fine">Lions, elephants, giraffe, and buffalo are in these parks all year. The names above are the animals that travel with the migration.</p>
         <a class="et-plan-wa" id="et-mig-wa" href="{{ $guide['whatsapp'] }}" target="_blank" rel="noopener">Plan this month on WhatsApp</a>
      </article>
   </div>
</div>
<script type="application/json" id="et-mig-data">{!! json_encode(['months' => $guide['months'], 'names' => $guide['names'], 'phone' => preg_replace('/\D+/', '', (string) config('app.contact_phone'))]) !!}</script>
@include('turie.planning.tours', ['tours' => $guide['tours'], 'heading' => 'Serengeti safaris'])
