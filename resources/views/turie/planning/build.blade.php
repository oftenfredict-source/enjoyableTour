<div class="row">
   <div class="col-lg-4 mb-30">
      <aside class="tp-filter-sidebar et-finder-sidebar">
         <form class="et-plan-form" method="get" action="{{ route('plan.build') }}">
            <label>Month
               <select name="month">
                  @foreach ($months as $number => $name)
                     <option value="{{ $number }}" @selected($plan['month'] === $number)>{{ $name }}</option>
                  @endforeach
               </select>
            </label>
            <label>Days
               <input type="number" name="days" min="3" max="14" value="{{ $plan['days'] }}">
            </label>
            <label>Guests
               <input type="number" name="guests" min="1" max="12" value="{{ $plan['guests'] }}">
            </label>
            <fieldset>
               <legend>Parks</legend>
               @foreach ($parks as $key => $park)
                  <label class="et-check"><input type="checkbox" name="parks[]" value="{{ $key }}" @checked(in_array($key, $plan['parks'], true))> {{ $park['name'] }}</label>
               @endforeach
            </fieldset>
            <button class="tp-btn" type="submit">Build the safari</button>
         </form>
      </aside>
   </div>
   <div class="col-lg-8 mb-30">
      <div class="et-plan-panel">
         <p class="et-plan-kicker">{{ $plan['month_name'] }} · {{ $plan['days'] }} days · {{ $plan['guests'] }} {{ $plan['guests'] === 1 ? 'guest' : 'guests' }}</p>
         <h2>{{ $plan['month_name'] }} safari</h2>
         <p class="et-plan-best">{{ $plan['migration_line'] }}</p>
         <ol class="et-build-days">
            @foreach ($plan['outline'] as $day)
               <li>
                  <span class="et-kili-num">{{ $day['day'] }}</span>
                  <div>
                     <strong>{{ $day['title'] }}</strong>
                     <span>{{ $day['text'] }}</span>
                  </div>
               </li>
            @endforeach
         </ol>
         <div class="et-budget-head">
            <p class="et-plan-kicker">Planning range, mid-range lodge and a private 4x4</p>
            <h2>{{ \App\Support\PlanningData::money($plan['estimate']['total_low']) }} – {{ \App\Support\PlanningData::money($plan['estimate']['total_high']) }}</h2>
            <p>About {{ \App\Support\PlanningData::money($plan['estimate']['per_low']) }} – {{ \App\Support\PlanningData::money($plan['estimate']['per_high']) }} per person.</p>
         </div>
         <div class="et-plan-actions">
            <a class="et-plan-wa" href="{{ $plan['whatsapp'] }}" target="_blank" rel="noopener">Send this plan on WhatsApp</a>
            <a class="et-plan-more" href="{{ $plan['budget_url'] }}">Open the full budget</a>
         </div>
      </div>
   </div>
</div>
@include('turie.planning.tours', ['tours' => $plan['tours'], 'heading' => 'Trips that fit'])
