<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Find Your Tour | {{ config('app.name') }}</title>
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

   <!-- filter offcanvas area start -->
   <div class="tp-filter-offcanvas-area">
      <div class="tp-filter-offcanvas-wrapper">
         <div class="tp-filter-offcanvas-close">
            <button type="button" class="tp-filter-offcanvas-close-btn filter-close-btn">
               <i class="fa-solid fa-xmark"></i>
               Close
            </button>
         </div>
         <div class="tp-filter-sidebar">
            <div class="tp-filter-item">
               <div class="tp-filter-top tp-filter-collapse mb-20">
                  <h2 class="tp-filter-title">Filter by price</h2>
                  <span class="tp-filter-icon">
                     <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 5.67157L5.08579 1.08578C5.86683 0.304736 7.13316 0.304735 7.91421 1.08578L12.5 5.67157" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </span>
               </div>
               <div class="tp-filter-item-content box-collapse">
                  <div class="range-slider">
                     <input type="text" class="js-range-slider" value="">
                  </div>
               </div>
            </div>
            <div class="tp-filter-item">
               <div class="tp-filter-top tp-filter-collapse mb-20">
                  <h2 class="tp-filter-title">Activities</h2>
                  <span class="tp-filter-icon">
                     <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 5.67157L5.08579 1.08578C5.86683 0.304736 7.13316 0.304735 7.91421 1.08578L12.5 5.67157" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </span>
               </div>
               <div class="tp-filter-checkbox box-collapse">
                  <div class="tp-header-search p-relative tp-filter-search mb-25">
                     <form action="#">
                        <input class="tp-input" type="text" placeholder="Search your tours">
                        <button class="tp-header-search-btn" type="submit">
                           <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.64267 10.7857C8.48288 10.7857 10.7853 8.48318 10.7853 5.64286C10.7853 2.80254 8.48288 0.5 5.64267 0.5C2.80245 0.5 0.5 2.80254 0.5 5.64286C0.5 8.48318 2.80245 10.7857 5.64267 10.7857Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M12.5 12.5L9.92871 9.92857" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </button>
                     </form>
                  </div>
                  <div class="read-more-wrapper">
                     <ul class="load-more-content">
                        <li class="checkbox-item">
                           <input id="activities" type="checkbox">
                           <label for="activities">City Explorations</label>
                        </li>
                        <li class="checkbox-item">
                           <input id="activities-2" type="checkbox">
                           <label for="activities-2">Family Adventures</label>
                        </li>
                        <li class="checkbox-item">
                           <input id="activities-3" type="checkbox">
                           <label for="activities-3">Wellness Retreats</label>
                        </li>
                        <li class="checkbox-item">
                           <input id="activities-4" type="checkbox">
                           <label for="activities-4">Nightlife Tours</label>
                        </li>
                        <li class="checkbox-item">
                           <input id="activities-5" type="checkbox">
                           <label for="activities-5">Food Journeys</label>
                        </li>
                        <li class="checkbox-item">
                           <input id="activities-6" type="checkbox">
                           <label for="activities-6">Wellness Retreats</label>
                        </li>
                        <li class="checkbox-item">
                           <input id="activities-7" type="checkbox">
                           <label for="activities-7">Nightlife Tours</label>
                        </li>
                        <li class="checkbox-item">
                           <input id="activities-8" type="checkbox">
                           <label for="activities-8">Food Journeys</label>
                        </li>
                     </ul>
                     <button class="toggle-btn">Read More..</button>
                  </div>
               </div>
            </div>
            <div class="tp-filter-item">
               <div class="tp-filter-top tp-filter-collapse mb-20">
                  <h2 class="tp-filter-title">Tour Type</h2>
                  <span class="tp-filter-icon">
                     <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 5.67157L5.08579 1.08578C5.86683 0.304736 7.13316 0.304735 7.91421 1.08578L12.5 5.67157" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </span>
               </div>
               <div class="tp-filter-checkbox box-collapse">
                  <ul>
                     <li class="checkbox-item">
                        <input id="tour" type="checkbox">
                        <label for="tour">City Tour</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="tour-2" type="checkbox">
                        <label for="tour-2">Wildlife Safari</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="tour-3" type="checkbox">
                        <label for="tour-3">Honeymoon Tour</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="tour-4" type="checkbox">
                        <label for="tour-4">Desert Safari</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="tour-5" type="checkbox">
                        <label for="tour-5">Festival Tour</label>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="tp-filter-item">
               <div class="tp-filter-top tp-filter-collapse mb-20">
                  <h2 class="tp-filter-title">Durations</h2>
                  <span class="tp-filter-icon">
                     <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 5.67157L5.08579 1.08578C5.86683 0.304736 7.13316 0.304735 7.91421 1.08578L12.5 5.67157" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </span>
               </div>
               <div class="tp-filter-checkbox read-more-wrapper box-collapse">
                  <ul class="load-more-content">
                     <li class="checkbox-item">
                        <input id="durations" type="checkbox">
                        <label for="durations">1 to 2 Hours</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="durations-2" type="checkbox">
                        <label for="durations-2">6 to 8 Hours</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="durations-3" type="checkbox">
                        <label for="durations-3">3 to 5 Days</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="durations-4" type="checkbox">
                        <label for="durations-4">10 to 14 Days</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="durations-5" type="checkbox">
                        <label for="durations-5">1 to 2 Months</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="durations-6" type="checkbox">
                        <label for="durations-6">3 to 5 Months</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="durations-7" type="checkbox">
                        <label for="durations-7">8 to 10 Months</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="durations-8" type="checkbox">
                        <label for="durations-8">10 to 12 Months</label>
                     </li>
                  </ul>
                  <button class="toggle-btn">Read More..</button>
               </div>
            </div>
            <div class="tp-filter-item">
               <div class="tp-filter-top tp-filter-collapse mb-20">
                  <h2 class="tp-filter-title">Time of Day</h2>
                  <span class="tp-filter-icon">
                     <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 5.67157L5.08579 1.08578C5.86683 0.304736 7.13316 0.304735 7.91421 1.08578L12.5 5.67157" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </span>
               </div>
               <div class="tp-filter-checkbox box-collapse">
                  <ul>
                     <li class="checkbox-item">
                        <input id="time" type="checkbox">
                        <label for="time">Morning (6:00 AM – 11:00 AM)</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="time-2" type="checkbox">
                        <label for="time-2">Afternoon (12:00 PM – 5:00 PM)</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="time-3" type="checkbox">
                        <label for="time-3">Evening (6:00 PM – 9:00 PM)</label>
                     </li>
                     <li class="checkbox-item">
                        <input id="time-4" type="checkbox">
                        <label for="time-4">Night (9:00 PM – 12:00 AM)</label>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="tp-filter-item">
               <div class="tp-filter-top tp-filter-collapse mb-20">
                  <h2 class="tp-filter-title">Traveller Reviews</h2>
                  <span class="tp-filter-icon">
                     <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 5.67157L5.08579 1.08578C5.86683 0.304736 7.13316 0.304735 7.91421 1.08578L12.5 5.67157" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </span>
               </div>
               <div class="tp-filter-checkbox box-collapse">
                  <ul>
                     <li class="checkbox-item">
                        <input id="reviews" type="checkbox">
                        <label for="reviews" class="tp-filter-ratings-wrap">
                           <span class="tp-filter-ratings">
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="#E7E7E7" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="#E7E7E7" />
                                 </svg>
                              </i>
                           </span>
                           <span>(160) Review</span>
                        </label>
                     </li>
                     <li class="checkbox-item">
                        <input id="reviews-2" type="checkbox">
                        <label for="reviews-2" class="tp-filter-ratings-wrap">
                           <span class="tp-filter-ratings">
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="#E7E7E7" />
                                 </svg>
                              </i>
                           </span>
                           <span>(290) Review</span>
                        </label>
                     </li>
                     <li class="checkbox-item">
                        <input id="reviews-3" type="checkbox">
                        <label for="reviews-3" class="tp-filter-ratings-wrap">
                           <span class="tp-filter-ratings">
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                              <i>
                                 <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.36067 0L9.63512 4.60778L14.7213 5.35121L11.041 8.93586L11.9096 14L7.36067 11.6078L2.81178 14L3.68034 8.93586L0 5.35121L5.08622 4.60778L7.36067 0Z" fill="currentColor" />
                                 </svg>
                              </i>
                           </span>
                           <span>(170) Review</span>
                        </label>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- filter offcanvas area end -->

   @include('turie.partials.site-header')

   <main>

      @include('turie.partials.tour-finder-content')

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
   <script src="{{ asset('turiehtml-10/turie/assets/js/typed.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/wow.min.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/ajax-form.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/slider-init.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/main.js') }}"></script>
</body>

</html>
