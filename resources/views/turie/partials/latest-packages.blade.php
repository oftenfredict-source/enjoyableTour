      <!-- tp-tour-area-start -->
      <div class="tp-tour-area tp-tour-ptb pt-140 pb-110" data-bg-color="#f7f9f9">
         <div class="container">
            <div class="row align-items-end mb-20">
               <div class="col-lg-8">
                  <div class="tp-about-section-title p-relative pb-20">
                     <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Fresh picks</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Latest travel packages</h2>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="text-lg-end mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <a href="{{ url('/tour-grid') }}" class="tp-btn-solid">
                        View All Deals
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M9.1792 4.59106H0.500053" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M5.64265 8.68182C5.64265 8.68182 9.49999 5.66888 9.5 4.59086C9.50001 3.51284 5.64258 0.5 5.64258 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               @forelse (($packages ?? collect()) as $index => $tour)
                  @include('turie.partials.package-card', [
                     'tour' => $tour,
                     'delay' => '.'.(2 + ($index % 4)).'s',
                  ])
               @empty
                  <div class="col-12">
                     <p class="text-center mb-0">Tour packages coming soon. Add them from the admin panel.</p>
                  </div>
               @endforelse
            </div>
         </div>
      </div>
      <!-- tp-tour-area-end -->
