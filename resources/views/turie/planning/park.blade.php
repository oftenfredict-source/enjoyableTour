<article class="row align-items-start">
   <div class="col-lg-5 mb-30">
      <img class="w-100" src="{{ asset($park['image']) }}" alt="{{ $park['name'] }}" style="height:420px;object-fit:cover;">
   </div>
   <div class="col-lg-7 mb-30">
      <div class="et-plan-panel">
      <p class="et-plan-kicker">{{ $park['region'] }} · {{ $park['days'] }}</p>
      <p>{{ $park['summary'] }}</p>
      <h2>Highlights</h2>
      <ul>
         @foreach ($park['highlights'] as $highlight)
            <li>{{ $highlight }}</li>
         @endforeach
      </ul>
      <h2>Wildlife</h2>
      <div class="et-chips">
         @foreach ($park['wildlife'] as $animal)
            <span>{{ $animal }}</span>
         @endforeach
      </div>
      <h2>A simple shape for the days</h2>
      <ol class="et-kili-days">
         @foreach ($park['itinerary'] as $day)
            <li>{{ $day }}</li>
         @endforeach
      </ol>
      <a class="et-plan-wa" href="{{ $park['whatsapp'] }}" target="_blank" rel="noopener">Plan {{ $park['name'] }} on WhatsApp</a>
      </div>
   </div>
</article>
@include('turie.planning.tours', ['tours' => $park['tours'], 'heading' => 'Departures for this park'])
