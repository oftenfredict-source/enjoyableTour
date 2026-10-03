<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>{{ config('app.name') }}</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('enjoyable-tour-logo.png') }}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/swiper-bundle.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/font-awesome-pro.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/daterangepicker.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/range-slider.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/main.css') }}">
   <link rel="stylesheet" href="{{ asset('css/enjoyable.css') }}">
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- preloader-here start -->
   <div id="loading">
      <div class="loader">
         <div class="plane">
            <img src="{{ asset('turiehtml-10/turie/assets/img/preloader/fly.png') }}" class="plane-img">
         </div>
         <div class="earth-wrapper">
            <div class="earth"></div>
         </div>  
      </div>
   </div>
   <!-- preloader-here end -->


   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   @include('turie.partials.site-offcanvas')


   @include('turie.partials.site-header')

   <main>

      @include('turie.partials.home-hero')
      
      <!-- tp-about-area-start -->
      <div class="tp-about-area pt-80 pb-20">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-7">
                  <div class="tp-about-content mb-30">
                     <div class="tp-about-section-title p-relative pb-25" style="overflow:visible;">
                        <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">About Us</span>
                        <h2 class="tp-section-title fw-600 wow fadeInUp mb-0" data-wow-duration=".9s" data-wow-delay=".4s" style="position:relative;z-index:2;">Your local partner for<br>Tanzania adventures</h2>
                        <img class="tp-about-shape d-none d-xl-block" src="{{ asset('turiehtml-10/turie/assets/img/about/shape.png') }}" alt="" style="opacity:.35;z-index:1;pointer-events:none;">
                     </div>
                     <div class="tp-about-left-thumb p-relative wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <img class="w-100" src="{{ asset('images/home/about-1.jpg') }}" alt="Enjoyable Tour Tanzania" style="object-fit:cover;height:300px;">
                        <div class="tp-about-circale" style="top:auto;bottom:20px;left:20px;z-index:3;">
                           <h2 class="tp-about-circale-title text-uppercase fw-700 mb-0">12+</h2>
                           <div class="tp-about-circale-text">
                              <img class="rotate-infinite" src="{{ asset('turiehtml-10/turie/assets/img/about/text.png') }}" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="tp-about-right-content ml-45 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                     <div class="tp-about-left-thumb mb-25">
                        <img class="w-100" src="{{ asset('images/home/about-2.jpg') }}" alt="Safari Tanzania" style="object-fit:cover;height:220px;">
                     </div>
                     <p class="mb-25">
                        Enjoyable Tour is a Tanzania-based company specializing in Trekking, Safaris, and Day trips. From Kilimanjaro and Mount Meru to Serengeti game drives and Zanzibar coastal escapes, we plan every journey with local expertise and safety-first guiding.
                     </p>
                     <div class="tp-about-help-wrap mb-25 d-flex flex-wrap align-items-center">
                        <div class="mr-15 mb-10">
                           <a href="{{ url('/about') }}" class="tp-btn">More about us
                              <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.4922 5.89282H0.900117" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M7.1765 10.8855C7.1765 10.8855 11.884 7.20841 11.884 5.89276C11.884 4.57711 7.17642 0.900146 7.17642 0.900146" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </a>
                        </div>
                        <div class="tp-about-help d-flex align-items-center mb-10">
                           <span class="tp-about-help-icon mr-10">
                              <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M20.8696 10.8696C20.8696 9.67087 19.8943 8.69565 18.6957 8.69565H17.8261V7.3913C17.8261 3.31565 14.5104 0 10.4348 0C6.35913 0 3.04348 3.31565 3.04348 7.3913V8.69565H2.17391C0.975217 8.69565 0 9.67087 0 10.8696V13.4783C0 14.677 0.975217 15.6522 2.17391 15.6522H4.78261V8.69565H3.91304V7.3913C3.91304 3.79522 6.8387 0.869565 10.4348 0.869565C14.0309 0.869565 16.9565 3.79522 16.9565 7.3913V8.69565H16.087V15.6522H16.9565V17.8261C16.9565 18.5452 16.3713 19.1304 15.6522 19.1304H11.3043V20H15.6522C16.8509 20 17.8261 19.0248 17.8261 17.8261V15.6522H18.6957C19.8943 15.6522 20.8696 14.677 20.8696 13.4783V10.8696ZM3.91304 14.7826H2.17391C1.45478 14.7826 0.869565 14.1974 0.869565 13.4783V10.8696C0.869565 10.1504 1.45478 9.56522 2.17391 9.56522H3.91304V14.7826ZM20 13.4783C20 14.1974 19.4148 14.7826 18.6957 14.7826H16.9565V9.56522H18.6957C19.4148 9.56522 20 10.1504 20 10.8696V13.4783Z" fill="currentColor" />
                              </svg>
                           </span>
                           <div class="tp-about-help-text">
                              <span>Hotline</span>
                              <a href="tel:+255700000000">+255 700 000 000</a>
                           </div>
                        </div>
                     </div>
                     <div class="tp-about-rating d-flex flex-wrap align-items-center">
                        <img class="mr-10" src="{{ asset('enjoyable-tour-logo.png') }}" alt="Enjoyable Tour" width="40" height="40" style="object-fit:contain;border-radius:50%;background:#fff;">
                        <h3 class="tp-about-rating-title mb-0 mr-10">4.9</h3>
                        <div class="tp-about-rating-wrap lh-1">
                           <div class="tp-about-rating-icon">
                              @for ($i = 0; $i < 5; $i++)
                              <span>
                                 <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.30915 0L8.25867 3.94953L12.6183 4.58675L9.46372 7.65931L10.2082 12L6.30915 9.94953L2.41009 12L3.15457 7.65931L0 4.58675L4.35962 3.94953L6.30915 0Z" fill="#b77e01" />
                                 </svg>
                              </span>
                              @endfor
                           </div>
                           <a href="{{ url('/about') }}">Trusted Tanzania tours
                              <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.09091 7.40436C2.09091 7.40436 6.50619 7.74971 7.12799 7.12799C7.74971 6.50619 7.4043 2.09091 7.4043 2.09091M6.86364 6.86364L0.5 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-about-area-end -->

      <!-- tp-destination-area-start -->
      <div class="tp-destination-area pt-30 pb-50">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-section-title-wrap text-center mb-40">
                     <span class="tp-section-subtitle d-inline-block mb-10 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Main Categories</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Explore our most loved destinations</h2>
                  </div>
               </div>

               {{-- Safaris --}}
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-tour-dayfilter-item tp-destination-one-item p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                        <img class="w-100" src="{{ asset('images/categories/safaris.jpg') }}" alt="Safaris Tanzania" style="height:420px;object-fit:cover;">
                        <div class="tp-destination-one-content tp-destination-content">
                           <div class="tp-destination-one-left">
                              <h2 class="tp-destination-title common-underline mb-0"><a href="{{ \App\Models\Tour::categoryUrl('Safaris') }}">Safaris</a></h2>
                              <span class="tp-destination-one-duration">7 Parks</span>
                           </div>
                           <a href="{{ \App\Models\Tour::categoryUrl('Safaris') }}" class="tp-destination-one-btn">View All</a>
                        </div>
                     </div>
                  </div>
               </div>

               {{-- Day Trips --}}
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-tour-dayfilter-item tp-destination-one-item p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                     <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                        <img class="w-100" src="{{ asset('images/categories/daytrips.jpg') }}" alt="Day Trips Tanzania" style="height:420px;object-fit:cover;">
                        <div class="tp-destination-one-content tp-destination-content">
                           <div class="tp-destination-one-left">
                              <h2 class="tp-destination-title common-underline mb-0"><a href="{{ \App\Models\Tour::categoryUrl('Day Trips') }}">Day Trips</a></h2>
                              <span class="tp-destination-one-duration">7 Trips</span>
                           </div>
                           <a href="{{ \App\Models\Tour::categoryUrl('Day Trips') }}" class="tp-destination-one-btn">View All</a>
                        </div>
                     </div>
                  </div>
               </div>

               {{-- Trekking --}}
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-tour-dayfilter-item tp-destination-one-item p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                        <img class="w-100" src="{{ asset('images/categories/trekking.jpg') }}" alt="Trekking Tanzania" style="height:420px;object-fit:cover;">
                        <div class="tp-destination-one-content tp-destination-content">
                           <div class="tp-destination-one-left">
                              <h2 class="tp-destination-title common-underline mb-0"><a href="{{ \App\Models\Tour::categoryUrl('Trekking') }}">Trekking</a></h2>
                              <span class="tp-destination-one-duration">8 Routes</span>
                           </div>
                           <a href="{{ \App\Models\Tour::categoryUrl('Trekking') }}" class="tp-destination-one-btn">View All</a>
                        </div>
                     </div>
                  </div>
               </div>

               {{-- Zanzibar --}}
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-tour-dayfilter-item tp-destination-one-item p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                     <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                        <img class="w-100" src="{{ asset('images/categories/zanzibar.jpg') }}" alt="Zanzibar Tours" style="height:420px;object-fit:cover;">
                        <div class="tp-destination-one-content tp-destination-content">
                           <div class="tp-destination-one-left">
                              <h2 class="tp-destination-title common-underline mb-0"><a href="{{ \App\Models\Tour::categoryUrl('Zanzibar') }}">Zanzibar</a></h2>
                              <span class="tp-destination-one-duration">12 Tours</span>
                           </div>
                           <a href="{{ \App\Models\Tour::categoryUrl('Zanzibar') }}" class="tp-destination-one-btn">View All</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-destination-area-end -->

      <!-- tp-why-choose-area-start -->
      <div class="tp-service-area pt-80 pb-20 p-relative" data-bg-color="#f7f9f9">
         <img class="tp-service-shape" src="{{ asset('turiehtml-10/turie/assets/img/service/shape.png') }}" alt="">
         <div class="container">
            <div class="row justify-content-center mb-40">
               <div class="col-lg-8 text-center">
                  <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">Why Choose Us</span>
                  <h2 class="tp-section-title fw-600 mb-0 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Travel with confidence in Tanzania</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="tp-service-item icon-animetion-wrap text-center mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <span class="tp-service-icon mb-25">
                        <svg class="icon-animetion-icon" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 4V18M7.5 14.7123L8.5255 15.4812C9.89167 16.5067 12.1072 16.5067 13.4745 15.4812C14.8418 14.4557 14.8418 12.7943 13.4745 11.7688C12.792 11.2555 11.896 11 11 11C10.1542 11 9.30833 10.7433 8.66317 10.2312C7.37283 9.20567 7.37283 7.54433 8.66317 6.51883C9.9535 5.49333 12.0465 5.49333 13.3368 6.51883L13.821 6.90383M21.5 11C21.5 12.3789 21.2284 13.7443 20.7007 15.0182C20.1731 16.2921 19.3996 17.4496 18.4246 18.4246C17.4496 19.3996 16.2921 20.1731 15.0182 20.7007C13.7443 21.2284 12.3789 21.5 11 21.5C9.62112 21.5 8.25574 21.2284 6.98182 20.7007C5.70791 20.1731 4.55039 19.3996 3.57538 18.4246C2.60036 17.4496 1.82694 16.2921 1.29926 15.0182C0.77159 13.7443 0.5 12.3789 0.5 11C0.5 8.21523 1.60625 5.54451 3.57538 3.57538C5.54451 1.60625 8.21523 0.5 11 0.5C13.7848 0.5 16.4555 1.60625 18.4246 3.57538C20.3938 5.54451 21.5 8.21523 21.5 11Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                     <div class="tp-service-content">
                        <h2 class="tp-service-title fw-600">Local Knowledge</h2>
                        <p>Guides who know the parks, trails, seasons, and culture across Tanzania.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="tp-service-item icon-animetion-wrap text-center mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                     <span class="tp-service-icon mb-25">
                        <svg class="icon-animetion-icon" width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2502 0C14.0859 2.48887 17.551 3.66636 20.5249 3.388C21.0443 14.1417 17.1648 20.4924 10.2899 23.1429C3.65085 20.6621 -0.276102 14.5846 0.0151444 3.2249C3.50624 3.41191 6.93128 2.63936 10.2502 0ZM6.21559 12.5762C5.99849 12.386 5.9731 12.0515 6.15874 11.8291C6.34474 11.6066 6.6715 11.5808 6.8886 11.7709L9.00331 13.6307L13.636 8.41678C13.8287 8.2002 14.1563 8.18437 14.3681 8.38138C14.5795 8.57838 14.595 8.9138 14.4025 9.13058L9.43126 14.7257L9.43089 14.7253C9.24323 14.9364 8.92475 14.9581 8.71151 14.7713L6.21559 12.5762ZM10.2542 1.32872C13.6495 3.5317 16.7168 4.57414 19.3493 4.32761C19.8089 13.8464 16.375 19.468 10.2897 21.814C4.41291 19.6181 0.936536 14.2388 1.19448 4.18315C4.28486 4.34889 7.31655 3.66504 10.2542 1.32872Z" fill="black" />
                        </svg>
                     </span>
                     <div class="tp-service-content">
                        <h2 class="tp-service-title fw-600">Safety First</h2>
                        <p>Licensed operators, vetted safari vehicles, and mountain safety protocols.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="tp-service-item icon-animetion-wrap text-center mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <span class="tp-service-icon mb-25">
                        <svg class="icon-animetion-icon" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4.09302 15.3343C4.09302 15.3343 4.97168 13.5629 6.25072 13.5629C7.52976 13.5629 8.18335 15.0508 9.60089 15.0508C11.0174 15.0508 12.607 11.3197 14.2128 11.3197C15.8165 11.3197 16.97 13.907 16.97 13.907" stroke="#111111" stroke-linecap="round" stroke-linejoin="round" />
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M8.49549 7.37646C8.49549 8.30706 7.74127 9.06237 6.80958 9.06237C5.87898 9.06237 5.12476 8.30706 5.12476 7.37646C5.12476 6.44586 5.87898 5.69055 6.80958 5.69055C7.74127 5.69163 8.49549 6.44586 8.49549 7.37646Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round" />
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 10.5094C0.5 18.0159 3.00289 20.5188 10.5094 20.5188C18.0159 20.5188 20.5188 18.0159 20.5188 10.5094C20.5188 3.00289 18.0159 0.5 10.5094 0.5C3.00289 0.5 0.5 3.00289 0.5 10.5094Z" stroke="#111111" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                     <div class="tp-service-content">
                        <h2 class="tp-service-title fw-600">Custom Itineraries</h2>
                        <p>Private or group trips tailored to your dates, budget, and travel pace.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="tp-service-item icon-animetion-wrap text-center mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                     <span class="tp-service-icon mb-25">
                        <svg class="icon-animetion-icon" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M24 12.5C24 11.1215 22.8785 10 21.5 10H20.5V8.5C20.5 3.813 16.687 0 12 0C7.313 0 3.5 3.813 3.5 8.5V10H2.5C1.1215 10 0 11.1215 0 12.5V15.5C0 16.8785 1.1215 18 2.5 18H5.5V10H4.5V8.5C4.5 4.3645 7.8645 1 12 1C16.1355 1 19.5 4.3645 19.5 8.5V10H18.5V18H19.5V20.5C19.5 21.327 18.827 22 18 22H13V23H18C19.3785 23 20.5 21.8785 20.5 20.5V18H21.5C22.8785 18 24 16.8785 24 15.5V12.5ZM4.5 17H2.5C1.673 17 1 16.327 1 15.5V12.5C1 11.673 1.673 11 2.5 11H4.5V17ZM23 15.5C23 16.327 22.327 17 21.5 17H19.5V11H21.5C22.327 11 23 11.673 23 12.5V15.5Z" fill="#111111" />
                        </svg>
                     </span>
                     <div class="tp-service-content">
                        <h2 class="tp-service-title fw-600">Fair &amp; Transparent</h2>
                        <p>Clear pricing with no surprise fees on the trail, safari, or day trip.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-why-choose-area-end -->

      @include('turie.partials.latest-packages')

      <!-- tp-video-area-start -->
      <div class="tp-video-area tp-video-shadow p-relative z-index-2 fix">
         <div class="tp-video-frame p-absolute fix">
            <video loop="" muted="" autoplay="" playsinline="">
               <source src="https://html.aqlova.com/videos/turie/video.mp4" type="video/mp4">
            </video>
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="tp-video-wrap text-center">
                     <div class="tp-video-title-wrap d-inline-block pb-10 mb-35">
                        <span class="tp-section-two-subtitle text-white d-inline-block mb-5">11-05-2026</span>
                        <h4 class="tp-section-title text-white fw-600">Best In Travel</h4>
                     </div>
                     <div class="tp-video-content-wrap">
                        <div class="d-flex align-items-center justify-content-center mb-20">
                           <span class="mr-10 text-white fw-600">Present By :</span>
                           <img src="{{ asset('enjoyable-tour-logo.png') }}" alt="{{ config('app.name') }}" class="et-video-logo">
                        </div>
                        <p class="fw-500 text-white ">We transform your travel dreams into unforgettable realities.<br> From serene beaches to bustling cities.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-video-area-end -->


      <!-- tp-offer-banner-area-start -->
      <div class="tp-offer-banner-area pt-80 pb-20">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 mb-30 wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-offer-3-banner fix tp-offer-banner-overly h-100 p-relative bg-position" data-background="{{ asset('images/home/offer-safari.jpg') }}">
                     <div class="tp-offer-banner-content p-relative z-index-2">
                        <span class="tp-offer-banner-subtitle mb-10 d-inline-block">
                           <img src="{{ asset('turiehtml-10/turie/assets/img/offer/offer.png') }}" alt="">
                        </span>
                        <h2 class="tp-offer-banner-title fs-42 text-white fw-600 mb-15">Big Five<br> Safaris</h2>
                        <h2 class="tp-offer-banner-title fs-30 text-white fw-600">Explore the Serengeti</h2>
                        <div class="tp-offer-banner-location mb-20">
                           <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.75 6.75C12.75 11.4167 6.75 15.4167 6.75 15.4167C6.75 15.4167 0.75 11.4167 0.75 6.75C0.75 5.1587 1.38214 3.63258 2.50736 2.50736C3.63258 1.38214 5.1587 0.75 6.75 0.75C8.3413 0.75 9.86742 1.38214 10.9926 2.50736C12.1179 3.63258 12.75 5.1587 12.75 6.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.75 8.75C7.85457 8.75 8.75 7.85457 8.75 6.75C8.75 5.64543 7.85457 4.75 6.75 4.75C5.64543 4.75 4.75 5.64543 4.75 6.75C4.75 7.85457 5.64543 8.75 6.75 8.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           <span>Serengeti, Tanzania</span>
                        </div>
                        <a href="{{ route('tours.category', 'safaris') }}" class="tp-btn">View Safaris</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mb-30 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-offer-3-banner fix tp-offer-banner-overly h-100 p-relative bg-position" data-background="{{ asset('images/home/offer-zanzibar.jpg') }}">
                     <div class="tp-offer-banner-content p-relative z-index-2">
                        <h2 class="tp-offer-banner-title fs-42 text-white fw-600 mb-25">Zanzibar<br> Escapes</h2>
                        <h2 class="tp-offer-banner-title fs-30 text-white fw-600">Beaches, Spice &amp; Stone Town</h2>
                        <div class="tp-offer-banner-location mb-20">
                           <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.75 6.75C12.75 11.4167 6.75 15.4167 6.75 15.4167C6.75 15.4167 0.75 11.4167 0.75 6.75C0.75 5.1587 1.38214 3.63258 2.50736 2.50736C3.63258 1.38214 5.1587 0.75 6.75 0.75C8.3413 0.75 9.86742 1.38214 10.9926 2.50736C12.1179 3.63258 12.75 5.1587 12.75 6.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.75 8.75C7.85457 8.75 8.75 7.85457 8.75 6.75C8.75 5.64543 7.85457 4.75 6.75 4.75C5.64543 4.75 4.75 5.64543 4.75 6.75C4.75 7.85457 5.64543 8.75 6.75 8.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           <span>Zanzibar, Tanzania</span>
                        </div>
                        <a href="{{ route('tours.category', 'zanzibar') }}" class="tp-btn">View Zanzibar Tours</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-offer-banner-area-end -->

      <!-- tp-chose-area-start -->
      <div class="tp-chose-area pt-30 pb-40">
         <div class="container">
            <div class="row">
               <div class="col-xl-6">
                  <div class="tp-chose-section-title p-relative mb-50">
                     <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Our Promise</span>
                     <h2 class="tp-section-title fw-600 mb-10 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Why travelers book with Enjoyable Tour</h2>
                     <p class="mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">From mountain treks to wildlife safaris and Zanzibar escapes, we keep every trip personal, safe, and well organized.</p>
                     <a href="{{ url('/about') }}" class="tp-btn wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">Learn more
                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4922 5.89282H0.900117" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M7.1765 10.8855C7.1765 10.8855 11.884 7.20841 11.884 5.89276C11.884 4.57711 7.17642 0.900146 7.17642 0.900146" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="tp-chose-wrap">
                     <div class="tp-chose-item mb-40" data-bg-color="#f7e4fe">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="tp-chose-content">
                                 <h3 class="tp-chose-numbar">01</h3>
                                 <h4 class="tp-chose-title"><a href="{{ url('/tour-grid') }}">Expert local guides</a></h4>
                                 <p class="tp-chose-dec mb-25">Mountain and safari guides who know Kilimanjaro routes, Northern Circuit parks, and Zanzibar coast.</p>
                                 <a href="{{ url('/about') }}" class="tp-btn-solid">
                                    Learn more
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.3577 5.75L0.750066 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M7.03557 10.75C7.03557 10.75 11.75 7.06751 11.75 5.74994C11.75 4.43236 7.03549 0.75 7.03549 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="tp-chose-thumb ml-40">
                                 <img class="w-100" src="{{ asset('images/categories/trekking.jpg') }}" alt="Trekking guides" style="object-fit:cover;height:180px;">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tp-chose-item mb-40" data-bg-color="#ecf8f1">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="tp-chose-content">
                                 <h3 class="tp-chose-numbar">02</h3>
                                 <h4 class="tp-chose-title"><a href="{{ url('/tour-grid') }}">All-in-one Tanzania trips</a></h4>
                                 <p class="tp-chose-dec mb-25">Combine Trekking, Safaris, Day trips, and Zanzibar in one clear itinerary and quote.</p>
                                 <a href="{{ url('/tour-grid') }}" class="tp-btn-solid">
                                    View tours
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.3577 5.75L0.750066 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M7.03557 10.75C7.03557 10.75 11.75 7.06751 11.75 5.74994C11.75 4.43236 7.03549 0.75 7.03549 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="tp-chose-thumb ml-40">
                                 <img class="w-100" src="{{ asset('images/categories/safaris.jpg') }}" alt="Safari Tanzania" style="object-fit:cover;height:180px;">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tp-chose-item mb-40" data-bg-color="#fef9ce">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="tp-chose-content">
                                 <h3 class="tp-chose-numbar">03</h3>
                                 <h4 class="tp-chose-title"><a href="{{ url('/contact') }}">Fast &amp; friendly support</a></h4>
                                 <p class="tp-chose-dec mb-25">Quick replies on WhatsApp and email before, during, and after your Tanzania adventure.</p>
                                 <a href="{{ url('/contact') }}" class="tp-btn-solid">
                                    Contact us
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.3577 5.75L0.750066 5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M7.03557 10.75C7.03557 10.75 11.75 7.06751 11.75 5.74994C11.75 4.43236 7.03549 0.75 7.03549 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="tp-chose-thumb ml-40">
                                 <img class="w-100" src="{{ asset('images/categories/zanzibar.jpg') }}" alt="Zanzibar" style="object-fit:cover;height:180px;">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-chose-area-end -->

      @include('turie.partials.home-reviews')


   </main>

   @include('turie.partials.footer')


   <!-- JS here -->
   <script src="{{ asset('turiehtml-10/turie/assets/js/vendor/jquery.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/bootstrap-bundle.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/swiper-bundle.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/magnific-popup.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/nice-select.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/range-slider.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/purecounter.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/moment.min.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/daterangepicker.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/btnloadmore.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/wow.min.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/ajax-form.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/slider-init.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/main.js') }}"></script>
   @stack('et-scripts')
</body>

</html>
