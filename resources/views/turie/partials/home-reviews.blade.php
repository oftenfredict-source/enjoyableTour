@php
   $reviewPlatforms = [
      'tripadvisor' => 'Tripadvisor',
      'facebook' => 'Facebook',
      'google' => 'Google',
   ];

   $reviewLogos = [
      'tripadvisor' => ['src' => 'images/logo/tripadvisor.png', 'wordmark' => true],
      'facebook' => ['src' => 'images/logo/facebook.png', 'wordmark' => false],
      'google' => ['src' => 'images/logo/google.png', 'wordmark' => true],
   ];

   $reviews = [
      'tripadvisor' => [
         ['name' => 'Sarah Mitchell', 'country' => 'United Kingdom', 'avatar' => 'images/home/avatar-1.jpg', 'date' => 'Aug 14, 2026', 'time' => '09:20 AM',
          'text' => 'Our Serengeti safari with Enjoyable Tour was unforgettable. Our guide spotted lions, leopards and the great migration, and every lodge was perfectly chosen.'],
         ['name' => 'James Carter', 'country' => 'United States', 'avatar' => 'images/home/avatar-2.jpg', 'date' => 'Jul 28, 2026', 'time' => '06:45 PM',
          'text' => 'With Enjoyable Tour we fulfilled our dream of climbing Kilimanjaro. We followed the Machame route for 7 days and the whole group reached Uhuru Peak.'],
         ['name' => 'Lucas Moreau', 'country' => 'France', 'avatar' => null, 'date' => 'Jun 09, 2026', 'time' => '11:10 AM',
          'text' => 'Five days across Serengeti and Ngorongoro Crater, and every moment exceeded our expectations. Professional crew, great food and a very comfortable vehicle.'],
         ['name' => 'Anna Keller', 'country' => 'Germany', 'avatar' => null, 'date' => 'May 21, 2026', 'time' => '03:30 PM',
          'text' => 'From the airport pickup in Kilimanjaro to the last game drive in Tarangire, everything was on time and well organised. Highly recommended!'],
      ],
      'facebook' => [
         ['name' => 'Mei Tanaka', 'country' => 'Japan', 'avatar' => 'images/home/avatar-3.jpg', 'date' => 'Sep 02, 2026', 'time' => '08:15 PM',
          'text' => 'Zanzibar was a dream. Stone Town spice tour, a sunset dhow cruise and a beautiful beach hotel. The team answered every message so quickly.'],
         ['name' => 'David Okafor', 'country' => 'Nigeria', 'avatar' => null, 'date' => 'Aug 19, 2026', 'time' => '10:05 AM',
          'text' => 'The Materuni waterfalls and coffee day trip from Moshi was the highlight of our holiday. Friendly guide and an amazing local lunch.'],
         ['name' => 'Isabella Rossi', 'country' => 'Italy', 'avatar' => null, 'date' => 'Jul 07, 2026', 'time' => '05:40 PM',
          'text' => 'Our honeymoon safari and Zanzibar combination was perfectly planned. Small special touches at every stop made it feel truly personal.'],
      ],
      'google' => [
         ['name' => 'Emily Johnson', 'country' => 'Australia', 'avatar' => null, 'date' => 'Sep 11, 2026', 'time' => '07:50 AM',
          'text' => 'Climbed Kilimanjaro on the Lemosho route. Safety checks twice a day, great tents and guides who kept us motivated all the way to the summit.'],
         ['name' => 'Pieter de Vries', 'country' => 'Netherlands', 'avatar' => null, 'date' => 'Aug 03, 2026', 'time' => '02:25 PM',
          'text' => 'Excellent value for a private safari. We saw the Big Five in three days and our driver knew exactly where to find the animals.'],
         ['name' => 'Carlos Mendes', 'country' => 'Brazil', 'avatar' => null, 'date' => 'Jun 26, 2026', 'time' => '04:10 PM',
          'text' => 'Very professional company in Moshi. Clear communication before the trip, fair prices and an unforgettable Arusha National Park day tour.'],
      ],
   ];
@endphp

<!-- et-reviews-area-start -->
<div class="et-reviews-area pt-80 pb-80">
   <div class="container">
      <div class="tp-testimonial-section-title text-center mb-35">
         <span class="tp-section-subtitle d-inline-block mb-15">Our Testimonial</span>
         <h2 class="tp-section-title fw-600">Memorable journeys shared<br> by our travelers</h2>
      </div>

      <div class="et-reviews-tabs" role="tablist">
         @foreach ($reviewPlatforms as $platformKey => $platformLabel)
            <button type="button" class="et-reviews-tab is-{{ $platformKey }} {{ $loop->first ? 'active' : '' }}" data-et-review-tab="{{ $platformKey }}" role="tab" aria-label="{{ $platformLabel }} reviews">
               <img class="et-reviews-tab-logo {{ $reviewLogos[$platformKey]['wordmark'] ? 'is-wordmark' : '' }}" src="{{ asset($reviewLogos[$platformKey]['src']) }}" alt="{{ $platformLabel }}">
               @unless ($reviewLogos[$platformKey]['wordmark'])
                  <span>{{ $platformLabel }}</span>
               @endunless
            </button>
         @endforeach
      </div>

      @foreach ($reviews as $platformKey => $platformReviews)
         <div class="et-reviews-pane {{ $loop->first ? 'active' : '' }}" data-et-review-pane="{{ $platformKey }}">
            <button type="button" class="et-reviews-arrow et-reviews-prev" aria-label="Previous review"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="swiper et-reviews-slider">
               <div class="swiper-wrapper">
                  @foreach ($platformReviews as $review)
                     <div class="swiper-slide">
                        <div class="et-review-card is-{{ $platformKey }}">
                           <p class="et-review-text">{{ $review['text'] }}</p>
                           <div class="et-review-meta">
                              <div class="et-review-source">
                                 <span class="et-review-dots">
                                    @for ($i = 0; $i < 5; $i++)<i></i>@endfor
                                 </span>
                                 <span class="et-review-platform">
                                    <img class="{{ $reviewLogos[$platformKey]['wordmark'] ? 'is-wordmark' : '' }}" src="{{ asset($reviewLogos[$platformKey]['src']) }}" alt="{{ $reviewPlatforms[$platformKey] }}">
                                    @unless ($reviewLogos[$platformKey]['wordmark'])
                                       {{ $reviewPlatforms[$platformKey] }}
                                    @endunless
                                 </span>
                              </div>
                              <span class="et-review-quote" aria-hidden="true">&rdquo;</span>
                              <div class="et-review-date">
                                 <span>{{ $review['date'] }}</span>
                                 <small>{{ $review['time'] }}</small>
                              </div>
                           </div>
                        </div>
                        <div class="et-review-author">
                           @if ($review['avatar'])
                              <img src="{{ asset($review['avatar']) }}" alt="{{ $review['name'] }}">
                           @else
                              <span class="et-review-initials">{{ collect(explode(' ', $review['name']))->map(fn ($part) => mb_substr($part, 0, 1))->take(2)->implode('') }}</span>
                           @endif
                           <div>
                              <h4>{{ $review['name'] }}</h4>
                              <span>{{ $review['country'] }}</span>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
            <button type="button" class="et-reviews-arrow et-reviews-next" aria-label="Next review"><i class="fa-solid fa-chevron-right"></i></button>
         </div>
      @endforeach
   </div>
</div>
<!-- et-reviews-area-end -->

@once
   @push('et-scripts')
      <script>
         document.addEventListener('DOMContentLoaded', function () {
            if (typeof Swiper === 'undefined') return;
            var sliders = {};
            document.querySelectorAll('[data-et-review-pane]').forEach(function (pane) {
               sliders[pane.dataset.etReviewPane] = new Swiper(pane.querySelector('.et-reviews-slider'), {
                  slidesPerView: 1,
                  spaceBetween: 24,
                  speed: 600,
                  autoplay: { delay: 5000, disableOnInteraction: false, pauseOnMouseEnter: true },
                  navigation: { nextEl: pane.querySelector('.et-reviews-next'), prevEl: pane.querySelector('.et-reviews-prev') },
                  observer: true,
                  observeParents: true,
                  breakpoints: { 768: { slidesPerView: 2 }, 1200: { slidesPerView: 3 } },
               });
            });
            document.querySelectorAll('[data-et-review-tab]').forEach(function (tab) {
               tab.addEventListener('click', function () {
                  var key = tab.dataset.etReviewTab;
                  document.querySelectorAll('[data-et-review-tab]').forEach(function (t) { t.classList.toggle('active', t === tab); });
                  document.querySelectorAll('[data-et-review-pane]').forEach(function (p) { p.classList.toggle('active', p.dataset.etReviewPane === key); });
                  if (sliders[key]) { sliders[key].update(); sliders[key].slideTo(0, 0); }
               });
            });
         });
      </script>
   @endpush
@endonce
