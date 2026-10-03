      <!-- tp-tour-area-start -->
      <div class="tp-tour-area pt-30 pb-50" data-bg-color="#f7f9f9">
         <div class="container">
            <div class="row align-items-end mb-20">
               <div class="col-lg-8">
                  <div class="tp-about-section-title p-relative pb-20">
                     <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Fresh picks</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Latest travel packages</h2>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="et-packages-actions mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     @if (($packages ?? collect())->count() > 1)
                        <div class="et-packages-nav">
                           <button type="button" class="et-packages-prev" aria-label="Previous packages"><i class="fa-solid fa-arrow-left"></i></button>
                           <button type="button" class="et-packages-next" aria-label="Next packages"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                     @endif
                     <a href="{{ route('tours.index') }}" class="tp-btn-solid">
                        View All Deals
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M9.1792 4.59106H0.500053" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M5.64265 8.68182C5.64265 8.68182 9.49999 5.66888 9.5 4.59086C9.50001 3.51284 5.64258 0.5 5.64258 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            @if (($packages ?? collect())->isNotEmpty())
               <div class="swiper et-packages-slider">
                  <div class="swiper-wrapper">
                     @foreach ($packages as $tour)
                        @include('turie.partials.package-card', [
                           'tour' => $tour,
                           'colClass' => 'swiper-slide',
                           'animate' => false,
                        ])
                     @endforeach
                  </div>
                  <div class="et-packages-pagination"></div>
               </div>
            @else
               <p class="text-center mb-0">Tour packages coming soon. Add them from the admin panel.</p>
            @endif
         </div>
      </div>
      <!-- tp-tour-area-end -->

      @once
         @push('et-scripts')
            <script>
               document.addEventListener('DOMContentLoaded', function () {
                  if (typeof Swiper === 'undefined' || !document.querySelector('.et-packages-slider')) return;
                  new Swiper('.et-packages-slider', {
                     slidesPerView: 1,
                     spaceBetween: 24,
                     loop: true,
                     speed: 700,
                     autoplay: { delay: 4000, disableOnInteraction: false, pauseOnMouseEnter: true },
                     navigation: { nextEl: '.et-packages-next', prevEl: '.et-packages-prev' },
                     pagination: { el: '.et-packages-pagination', clickable: true },
                     breakpoints: {
                        768: { slidesPerView: 2 },
                        1200: { slidesPerView: 3 },
                     },
                  });
               });
            </script>
         @endpush
      @endonce
