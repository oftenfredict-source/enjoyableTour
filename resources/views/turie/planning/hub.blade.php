<div class="row">
   @foreach ($tools as $key => $tool)
      @if ($key !== 'hub')
         <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="tp-tour-dayfilter-item tp-destination-one-item p-relative mb-30">
               <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                  <img class="w-100" src="{{ asset($tool['image']) }}" alt="{{ $tool['label'] }}" style="height:420px;object-fit:cover;">
                  <div class="tp-destination-one-content tp-destination-content">
                     <div class="tp-destination-one-left">
                        <h2 class="tp-destination-title common-underline mb-0"><a href="{{ $tool['url'] }}">{{ $tool['label'] }}</a></h2>
                        <span class="tp-destination-one-duration">{{ $tool['text'] }}</span>
                     </div>
                     <a href="{{ $tool['url'] }}" class="tp-destination-one-btn">Open</a>
                  </div>
               </div>
            </div>
         </div>
      @endif
   @endforeach
</div>
