@php
   $heroSlides = [
      ['image' => 'images/home/hero-zanzibar.jpg', 'badge' => 'Zanzibar', 'before' => 'Let’s Explore Your', 'highlight' => 'Beach', 'after' => 'Escape.'],
      ['image' => 'images/home/hero-safari.jpg', 'badge' => 'Serengeti', 'before' => 'Discover The Wild', 'highlight' => 'Safari', 'after' => 'Life.'],
      ['image' => 'images/home/hero-trekking.jpg', 'badge' => 'Kilimanjaro', 'before' => 'Conquer The Roof', 'highlight' => 'Of Africa', 'after' => '.'],
      ['image' => 'images/home/hero-bg.jpg', 'badge' => 'Tanzania', 'before' => 'Where Will Your', 'highlight' => 'Journey', 'after' => 'Go.'],
   ];
   $heroPhone = config('app.contact_phone');
   $heroPhoneLink = preg_replace('/[^0-9+]/', '', (string) $heroPhone);
@endphp

<!-- et-hero-slider-start -->
<section class="et-hero p-relative">
   <div class="swiper et-hero-slider">
      <div class="swiper-wrapper">
         @foreach ($heroSlides as $slide)
            <div class="swiper-slide et-hero-slide">
               <div class="et-hero-bg" style="background-image: url('{{ asset($slide['image']) }}');"></div>
               <div class="container">
                  <div class="et-hero-content text-center">
                     <span class="et-hero-badge">{{ $slide['badge'] }}</span>
                     <h1 class="et-hero-title">
                        {{ $slide['before'] }}<br>
                        <span class="et-hero-highlight">{{ $slide['highlight'] }}</span>{{ $slide['after'] === '.' ? '.' : ' '.$slide['after'] }}
                     </h1>
                     <div class="et-hero-actions">
                        @if ($heroPhone)
                           <a href="tel:{{ $heroPhoneLink }}" class="et-hero-call">
                              <span class="et-hero-call-icon"><i class="fa-light fa-phone-volume"></i></span>
                              <span class="et-hero-call-text">
                                 <small>To More Inquiry</small>
                                 <strong>{{ $heroPhone }}</strong>
                              </span>
                           </a>
                        @endif
                        <div class="et-hero-rating">
                           <span class="et-hero-rating-logo">
                              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7" cy="13" r="4" stroke="currentColor" stroke-width="2"/><circle cx="17" cy="13" r="4" stroke="currentColor" stroke-width="2"/><circle cx="7" cy="13" r="1.4" fill="currentColor"/><circle cx="17" cy="13" r="1.4" fill="currentColor"/><path d="M3 8.5C5.5 6.5 8.6 5.5 12 5.5s6.5 1 9 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                           </span>
                           <span class="et-hero-rating-body">
                              <strong>Tripadvisor</strong>
                              <span class="et-hero-rating-row">
                                 <span class="et-hero-rating-dots">@for ($i = 0; $i < 5; $i++)<i></i>@endfor</span>
                                 <span>5.0 /5.0</span>
                              </span>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
   <button type="button" class="et-hero-arrow et-hero-prev" aria-label="Previous slide"><i class="fa-regular fa-arrow-left"></i></button>
   <button type="button" class="et-hero-arrow et-hero-next" aria-label="Next slide"><i class="fa-regular fa-arrow-right"></i></button>
   <img class="et-hero-shape" src="{{ asset('turiehtml-10/turie/assets/img/hero/shape.png') }}" alt="">
</section>
<!-- et-hero-slider-end -->

@once
   @push('et-scripts')
      <script>
         document.addEventListener('DOMContentLoaded', function () {
            if (typeof Swiper === 'undefined' || !document.querySelector('.et-hero-slider')) return;
            new Swiper('.et-hero-slider', {
               effect: 'fade',
               fadeEffect: { crossFade: true },
               loop: true,
               speed: 1200,
               autoplay: { delay: 6000, disableOnInteraction: false },
               navigation: { nextEl: '.et-hero-next', prevEl: '.et-hero-prev' },
            });
         });
      </script>
   @endpush
@endonce
