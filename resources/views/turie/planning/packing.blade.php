<div class="row">
   <div class="col-lg-4 mb-30">
      <aside class="tp-filter-sidebar et-finder-sidebar">
<form class="et-plan-form" method="get" action="{{ route('plan.packing') }}">
   <label>Trip
      <select name="trip">
         @foreach ($list['trips'] as $key => $label)
            <option value="{{ $key }}" @selected($list['trip'] === $key)>{{ $label }}</option>
         @endforeach
      </select>
   </label>
   <label>Season
      <select name="season">
         @foreach ($list['seasons'] as $key => $label)
            <option value="{{ $key }}" @selected($list['season'] === $key)>{{ $label }}</option>
         @endforeach
      </select>
   </label>
   <label class="et-check"><input type="checkbox" name="altitude" value="1" @checked($list['altitude']) @disabled($list['trip'] === 'trekking')> Include high-altitude kit</label>
   <button class="tp-btn" type="submit">Build the list</button>
</form>
      </aside>
   </div>
   <div class="col-lg-8 mb-30">
<div class="et-plan-panel" id="et-pack">
   <h2>{{ $list['trip_label'] }} · {{ $list['season_label'] }}</h2>
   @foreach ($list['groups'] as $group => $items)
      <h3>{{ $group }}</h3>
      <ul class="et-pack-list">
         @foreach ($items as $item)
            <li><label><input type="checkbox" checked> <span>{{ $item }}</span></label></li>
         @endforeach
      </ul>
   @endforeach
   <a class="et-plan-wa" id="et-pack-wa" href="{{ $list['whatsapp'] }}" target="_blank" rel="noopener">Send the ticked list on WhatsApp</a>
</div>
   </div>
</div>
