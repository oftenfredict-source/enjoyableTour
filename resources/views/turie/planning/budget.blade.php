<div class="row">
   <div class="col-lg-4 mb-30">
      <aside class="tp-filter-sidebar et-finder-sidebar">
<form class="et-plan-form" id="et-budget-form" method="get" action="{{ route('plan.budget') }}">
   <label>Days
      <input type="number" name="days" min="1" max="21" value="{{ $estimate['days'] }}">
   </label>
   <label>Guests
      <input type="number" name="guests" min="1" max="12" value="{{ $estimate['guests'] }}">
   </label>
   <fieldset>
      <legend>Parks</legend>
      @foreach ($parks as $key => $park)
         <label class="et-check"><input type="checkbox" name="parks[]" value="{{ $key }}" @checked(in_array($key, $estimate['parks'], true))> {{ $park['name'] }}</label>
      @endforeach
   </fieldset>
   <label>Vehicle
      <select name="vehicle">
         <option value="private" @selected($estimate['vehicle'] === 'private')>Private 4x4</option>
         <option value="shared" @selected($estimate['vehicle'] === 'shared')>Shared vehicle</option>
      </select>
   </label>
   <label>Stay
      <select name="stay">
         <option value="camping" @selected($estimate['stay'] === 'camping')>Camping</option>
         <option value="mid" @selected($estimate['stay'] === 'mid')>Mid-range lodge</option>
         <option value="luxury" @selected($estimate['stay'] === 'luxury')>Luxury camp</option>
      </select>
   </label>
   <button class="tp-btn" type="submit">Update estimate</button>
</form>
      </aside>
   </div>
   <div class="col-lg-8 mb-30">
<div class="et-plan-panel" id="et-budget-result">
   <div class="et-budget-head">
      <p class="et-plan-kicker">Planning range for {{ $estimate['guests'] }} {{ $estimate['guests'] === 1 ? 'guest' : 'guests' }}, {{ $estimate['days'] }} days</p>
      <h2 id="et-budget-total">{{ \App\Support\PlanningData::money($estimate['total_low']) }} – {{ \App\Support\PlanningData::money($estimate['total_high']) }}</h2>
      <p id="et-budget-each">About {{ \App\Support\PlanningData::money($estimate['per_low']) }} – {{ \App\Support\PlanningData::money($estimate['per_high']) }} per person.</p>
   </div>
   <ul class="et-budget-lines">
      @foreach ($estimate['lines'] as $line)
         <li>
            <div class="et-budget-row">
               <strong>{{ $line['label'] }}</strong>
               <b>{{ \App\Support\PlanningData::money($line['low']) }} – {{ \App\Support\PlanningData::money($line['high']) }}</b>
            </div>
            <span>{{ $line['note'] }}</span>
         </li>
      @endforeach
   </ul>
   <p class="et-plan-fine">Park fees use non-resident adult {{ \App\Support\PlanningData::FEE_YEAR }} TANAPA and NCAA rates. The higher park-fee figure includes 18% VAT. Lodge and vehicle figures are typical operator ranges. Enjoyable Tour confirms the quote before you book.</p>
   <a class="et-plan-wa" id="et-budget-wa" href="{{ $estimate['whatsapp'] }}" target="_blank" rel="noopener">Send this range on WhatsApp</a>
</div>
   </div>
</div>
<script type="application/json" id="et-budget-data">{!! json_encode($rates) !!}</script>
