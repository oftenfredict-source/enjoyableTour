<div class="row">
   @foreach ($parks as $slug => $park)
      <div class="col-xl-4 col-lg-6 col-md-6">
         <div class="tp-tour-dayfilter-item tp-destination-one-item p-relative mb-30">
            <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
               <img class="w-100" src="{{ asset($park['image']) }}" alt="{{ $park['name'] }}" style="height:420px;object-fit:cover;">
               <div class="tp-destination-one-content tp-destination-content">
                  <div class="tp-destination-one-left">
                     <h2 class="tp-destination-title common-underline mb-0"><a href="{{ route('parks.show', $slug) }}">{{ $park['name'] }}</a></h2>
                     <span class="tp-destination-one-duration">{{ $park['region'] }} · {{ $park['days'] }}</span>
                  </div>
                  <a href="{{ route('parks.show', $slug) }}" class="tp-destination-one-btn">Open</a>
               </div>
            </div>
         </div>
      </div>
   @endforeach
</div>
