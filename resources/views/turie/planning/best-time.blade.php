<div class="row">
   <div class="col-lg-4 mb-30">
      <aside class="tp-filter-sidebar et-finder-sidebar">
<form class="et-plan-form" method="get" action="{{ route('plan.best-time') }}">
   <label>Park
      <select name="park">
         @foreach ($parks as $key => $park)
            <option value="{{ $key }}" @selected($result['park_key'] === $key)>{{ $park['name'] }}</option>
         @endforeach
      </select>
   </label>
   <label>Interest
      <select name="interest">
         @foreach ($interests as $key => $label)
            <option value="{{ $key }}" @selected($result['interest'] === $key)>{{ $label }}</option>
         @endforeach
      </select>
   </label>
   <label>Budget
      <select name="budget">
         @foreach ($budgets as $key => $label)
            <option value="{{ $key }}" @selected($result['budget'] === $key)>{{ $label }}</option>
         @endforeach
      </select>
   </label>
   <button class="tp-btn" type="submit">Show the months</button>
</form>
      </aside>
   </div>
   <div class="col-lg-8 mb-30">
<div class="et-plan-panel">
   <h2>{{ $result['park']['name'] }} for {{ strtolower($result['interest_label']) }}</h2>
   <p>{{ $result['advice'] }}</p>
   <ul class="et-month-key">
      <li class="score-2">Best</li>
      <li class="score-1">Good</li>
      <li class="score-0">Quiet</li>
   </ul>
   <div class="et-month-grid">
      @foreach ($result['months'] as $month)
         <button type="button" class="et-month score-{{ $month['score'] }} {{ $month['best'] ? 'is-best' : '' }}" data-note="{{ $month['note'] }}">
            <strong>{{ $month['short'] }}</strong>
            <span>{{ $month['best'] ? 'Best' : ($month['score'] === 1 ? 'Good' : 'Quiet') }}</span>
         </button>
      @endforeach
   </div>
   <p class="et-month-note" id="et-month-note">{{ collect($result['months'])->firstWhere('best', true)['note'] }}</p>
   <p class="et-plan-best">Strongest months: {{ implode(', ', $result['best_months']) }}.</p>
   <a class="et-plan-wa" href="{{ $result['whatsapp'] }}" target="_blank" rel="noopener">Ask about these months on WhatsApp</a>
</div>
   </div>
</div>

@include('turie.planning.tours', ['tours' => $result['tours'], 'heading' => 'Trips that fit'])
