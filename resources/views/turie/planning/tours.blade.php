@if ($tours->isNotEmpty())
   <div class="et-plan-tours">
      <h2>{{ $heading }}</h2>
      <div class="row">
         @foreach ($tours as $tour)
            @include('turie.partials.package-card', ['tour' => $tour, 'colClass' => 'col-xl-4 col-md-6', 'animate' => false])
         @endforeach
      </div>
   </div>
@endif
