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

      <!-- breadcrumb-area-start -->
      <div class="tp-breadcrumb-area tp-breadcrumb-ptb tp-breadcrumb-overly bg-position" data-background="{{ asset('turiehtml-10/turie/assets/img/breadcrumb/bg-9.jpg') }}">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-breadcrumb-wrap text-center">
                     <h2 class="tp-breadcrumb-title fs-112 text-center mb-0">Blog Standard</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- tp-blog-details-area-start -->
      <div class="tp-blog-area tp-tour-ptb-2 pt-140 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xxl-9 col-xl-8">
                  <div class="postbox-details-main-wrap mb-40 pr-135">
                      <article class="tp-postbox-item mb-65">
                        <div class="tp-postbox-thumb mb-30">
                           <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/details/thumb.jpg') }}" alt="">
                        </div>
                        <div class="tp-postbox-content">
                           <div class="tp-blog-meta mb-15">
                              <span>AI Trends</span>
                              <span>02 Feb, 2025</span>
                           </div>
                           <h2 class="tp-postbox-title mb-20"><a href="{{ url('/blog-details') }}">The 2025 Autumn Foliage Forecast for Japan has just been released! red maple leaves starting 30 Nov in Tokyo!</a></h2>
                           <p class="tp-postbox-text">In today’s digital world, understanding customer journeys is crucial for driving conversions, improving engagement, and maximizing ROI. A well-structured marketing funnel helps businesses track user behavior at every stage—from awareness to loyalty.</p>
                        </div>
                     </article>
                     <article class="tp-postbox-item mb-65">
                        <div class="p-relative">
                           <div class="swiper-container tp-postbox-thumb-slider-active mb-30 fix">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide tp-postbox-thumb">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/blog/details/thumb-3.jpg') }}" alt="">
                                 </div>
                                 <div class="swiper-slide tp-postbox-thumb">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/blog/details/thumb.jpg') }}" alt="">
                                 </div>
                                 <div class="swiper-slide tp-postbox-thumb">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/blog/details/thumb-4.jpg') }}" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="tp-postbox-slider-arrow-wrap d-none d-sm-block">
                              <button class="tp-postbox-arrow-prev">
                                 <i class="fa-sharp fa-solid fa-arrow-left"></i>
                              </button>
                              <button class="tp-postbox-arrow-next">
                                 <i class="fa-sharp fa-solid fa-arrow-right"></i>
                              </button>
                           </div>
                        </div>
                        <div class="tp-postbox-content">
                           <div class="tp-blog-meta mb-15">
                              <span>AI Trends</span>
                              <span>02 Feb, 2025</span>
                           </div>
                           <h2 class="tp-postbox-title mb-20"><a href="{{ url('/blog-details') }}">Behind the scenes of creative processes</a></h2>
                           <p class="tp-postbox-text">We believe that branding is more than just a logo—it’s about crafting a unique identity that resonates with your audience and drives business success. Our strategic and creative approach ensures that every brand we build is impactful, memorable, and results-driven.</p>
                        </div>
                     </article> 
                     <article class="tp-postbox-item mb-65">
                        <div class="tp-postbox-thumb p-relative mb-30">
                           <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/details/thumb-3.jpg') }}" alt="">
                           <div class="tp-video-6-popup">
                              <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                 <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.5 9.33735C25.8333 11.2619 25.8333 16.0731 22.5 17.9976L7.5 26.6579C4.16667 28.5824 -1.42102e-06 26.1767 -1.25278e-06 22.3277L-4.95676e-07 5.00723C-3.27431e-07 1.15823 4.16667 -1.2474 7.5 0.677098L22.5 9.33735Z" fill="currentColor" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="tp-postbox-content">
                           <div class="tp-blog-meta mb-15">
                              <span>AI Trends</span>
                              <span>02 Feb, 2025</span>
                           </div>
                           <h2 class="tp-postbox-title mb-20"><a href="{{ url('/blog-details') }}">Top 5 Web Design Mistakes That Hurt Conversions.</a></h2>
                           <p class="tp-postbox-text">We believe that branding is more than just a logo—it’s about crafting a unique identity that resonates with your audience and drives business success. Our strategic and creative approach ensures that every brand we build is impactful, memorable, and results-driven.</p>
                        </div>
                     </article>
                     <div class="tp-pagination text-center mt-50">
                        <nav>
                           <ul>
                              <li>
                                 <a href="#" class="tp-pagination-prev prev page-numbers">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M5.75 10.75L0.75 5.75L5.75 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">1</a>
                              </li>
                              <li>
                                 <span class="current">2</span>
                              </li>
                              <li>
                                 <a href="#">3</a>
                              </li>
                              <li>
                                 <a href="#" class="next page-numbers">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M0.75 10.75L5.75 5.75L0.75 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>                                     
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div> 
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-4">
                  <div class="sidebar-wrapper mb-40">
                     <div class="sidebar-widget mb-45">
                        <div class="sidebar-search">
                           <form action="#">
                              <div class="sidebar-search-input p-relative">
                                 <input type="text" placeholder="Search...">
                                 <button type="submit">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.50041 12.4999C9.81435 12.4999 12.5008 9.81363 12.5008 6.49995C12.5008 3.18627 9.81435 0.5 6.50041 0.5C3.18648 0.5 0.5 3.18627 0.5 6.49995C0.5 9.81363 3.18648 12.4999 6.50041 12.4999Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M14.5002 14.5L11.5 11.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-widget-title mb-30">Categories</h3>
                        <div class="sidebar-widget-category">
                           <ul>
                              <li>
                                 <a class="d-flex align-items-center justify-content-between" href="{{ url('/blog-standard') }}">
                                    Journey
                                    <span>08</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="d-flex align-items-center justify-content-between" href="{{ url('/blog-standard') }}">
                                    Adventure
                                    <span>04</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="d-flex align-items-center justify-content-between" href="{{ url('/blog-standard') }}">
                                    Ocean
                                    <span>12</span>
                                 </a>
                              </li>
                              <li>
                                 <a class="d-flex align-items-center justify-content-between" href="{{ url('/blog-standard') }}">
                                    Family Adventure
                                    <span>16</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-widget-title mb-30">Latest Posts</h3>
                        <div class="rc-post-wrap">
                           <div class="rc-post d-flex align-items-center">
                              <div class="rc-post-thumb">
                                 <a href="{{ url('/blog-details') }}">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/blog/rc/thumb.jpg') }}" alt="">
                                 </a>
                              </div>
                              <div class="rc-post-content">
                                 <div class="rc-post-category">
                                    <a href="#">Travel</a>
                                 </div>
                                 <h3 class="rc-post-title">
                                    <a href="{{ url('/blog-details') }}">Fueling ambition & Achieving your goals</a>
                                 </h3>
                                 <div class="rc-post-meta tp-blog-meta d-flex flex-wrap align-items-center ">
                                    <span>July 15, 2023</span>
                                    <span>12 Min</span>
                                 </div>
                              </div>
                           </div>
                           <div class="rc-post d-flex align-items-center">
                              <div class="rc-post-thumb">
                                 <a href="{{ url('/blog-details') }}">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/blog/rc/thumb-2.jpg') }}" alt="">
                                 </a>
                              </div>
                              <div class="rc-post-content">
                                 <div class="rc-post-category">
                                    <a href="#">Design</a>
                                 </div>
                                 <h3 class="rc-post-title">
                                    <a href="{{ url('/blog-details') }}">Behind the scenes of creative processes</a>
                                 </h3>
                                 <div class="rc-post-meta tp-blog-meta d-flex flex-wrap align-items-center ">
                                    <span>July 15, 2023</span>
                                    <span>1 Min</span>
                                 </div>
                              </div>
                           </div>
                           <div class="rc-post d-flex align-items-center">
                              <div class="rc-post-thumb">
                                 <a href="{{ url('/blog-details') }}">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/blog/rc/thumb-3.jpg') }}" alt="">
                                 </a>
                              </div>
                              <div class="rc-post-content">
                                 <div class="rc-post-category">
                                    <a href="#">Design</a>
                                 </div>
                                 <h3 class="rc-post-title">
                                    <a href="{{ url('/blog-details') }}">Starting seo as your home business</a>
                                 </h3>
                                 <div class="rc-post-meta tp-blog-meta d-flex flex-wrap align-items-center ">
                                    <span>July 15, 2023</span>
                                    <span>16 Min</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title mb-30">Popular Tag</h3>
                        <div class="sidebar-widget-content">
                           <div class="tagcloud">
                              <a href="#">Adventure</a>
                              <a href="#">Travel Tips</a>
                              <a href="#">City Tour</a>
                              <a href="#">Nature Escape</a>
                              <a href="#">Beach Life</a>
                              <a href="#">Mountain Hike</a>
                              <a href="#">Adventure</a>
                              <a href="#">Travel Tips</a>
                              <a href="#">City Tour</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-tour-details-area-end -->

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
