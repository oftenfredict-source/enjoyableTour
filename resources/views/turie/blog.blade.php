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
                     <h2 class="tp-breadcrumb-title fs-112 text-center mb-0">Blog Grid</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- tp-blog-area-start -->
      <div class="tp-blog-area tp-tour-ptb tp-animate-tab pt-140 pb-140">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-blog-grid-tab mb-50 text-center">
                     <div class="tp-about-section-title p-relative pb-30">
                        <h2 class="tp-section-title fs-32 fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Travel articles</h2>
                        <p>Our expert travel guides bring every destination.</p>
                     </div>
                     <div class="tp-tour-tab">
                        <ul role="tablist">
                           <li class="nav-tab-item" role="presentation">   
                              <a href="#london" class="active" data-bs-toggle="tab">Art and culture</a>
                           </li>
                           <li class="nav-tab-item" role="presentation">
                              <a href="#bangkok"  data-bs-toggle="tab">Adventure</a>
                           </li>
                           <li class="nav-tab-item" role="presentation">
                              <a href="#manchester"  data-bs-toggle="tab">Nature</a>
                           </li>
                           <li class="nav-tab-item" role="presentation">
                              <a href="#dubai"  data-bs-toggle="tab">Beach Trips</a>
                           </li>
                           <li class="nav-tab-item" role="presentation">
                              <a href="#food"  data-bs-toggle="tab">Food & Travel</a>
                           </li>
                           <li class="nav-tab-item" role="presentation">
                              <a href="#travel"  data-bs-toggle="tab">Travel Tips</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="tab-content p-relative">
                     <div class="tab-pane active" id="london" role="tabpanel">
                        <div class="row">
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Culture</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Exploring Sacred Temples and Cultural Heritage</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-2.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">City</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Colorful City Life Surrounded by Green Hills</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-3.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Heritage</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Historic Architecture with Golden Artistic Details</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-4.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Nature</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Mountain View Journeys Filled with Natural Beauty</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-5.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Urban</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Peaceful Railway Routes Through Urban Landscapes</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-6.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Tradition</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Vibrant Street Temples Full of Local Traditions</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-7.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Europe</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Ancient Churches Showcasing Timeless European Design</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-8.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Classic</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Classic City Streets with Historic Building Charm</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-9.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Riverside</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Riverside Cities Blending History and Modern Life</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
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
                     </div>
                     <div class="tab-pane" id="bangkok" role="tabpanel">
                        <div class="row">
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-3.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Heritage</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Historic Architecture with Golden Artistic Details</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-4.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Nature</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Mountain View Journeys Filled with Natural Beauty</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-5.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Urban</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Peaceful Railway Routes Through Urban Landscapes</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-6.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Tradition</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Vibrant Street Temples Full of Local Traditions</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-7.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Europe</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Ancient Churches Showcasing Timeless European Design</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-8.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Classic</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Classic City Streets with Historic Building Charm</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-9.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Riverside</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Riverside Cities Blending History and Modern Life</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
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
                     </div>
                     <div class="tab-pane" id="manchester" role="tabpanel">
                        <div class="row">
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-5.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Urban</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Peaceful Railway Routes Through Urban Landscapes</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-6.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Tradition</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Vibrant Street Temples Full of Local Traditions</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-7.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Europe</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Ancient Churches Showcasing Timeless European Design</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-8.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Classic</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Classic City Streets with Historic Building Charm</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-9.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Riverside</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Riverside Cities Blending History and Modern Life</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
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
                     </div>
                     <div class="tab-pane" id="dubai" role="tabpanel">
                        <div class="row">
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-6.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Tradition</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Vibrant Street Temples Full of Local Traditions</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-7.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Europe</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Ancient Churches Showcasing Timeless European Design</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-8.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Classic</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Classic City Streets with Historic Building Charm</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-9.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Riverside</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Riverside Cities Blending History and Modern Life</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Culture</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Exploring Sacred Temples and Cultural Heritage</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-2.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">City</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Colorful City Life Surrounded by Green Hills</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-3.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Heritage</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Historic Architecture with Golden Artistic Details</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-4.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Nature</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Mountain View Journeys Filled with Natural Beauty</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-5.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Urban</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Peaceful Railway Routes Through Urban Landscapes</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
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
                     </div>
                     <div class="tab-pane" id="food" role="tabpanel">
                        <div class="row">
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-5.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Urban</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Peaceful Railway Routes Through Urban Landscapes</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-6.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Tradition</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Vibrant Street Temples Full of Local Traditions</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Culture</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Exploring Sacred Temples and Cultural Heritage</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-2.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">City</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Colorful City Life Surrounded by Green Hills</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-3.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Heritage</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Historic Architecture with Golden Artistic Details</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-4.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Nature</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Mountain View Journeys Filled with Natural Beauty</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-7.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Europe</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Ancient Churches Showcasing Timeless European Design</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-8.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Classic</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Classic City Streets with Historic Building Charm</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-9.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Riverside</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Riverside Cities Blending History and Modern Life</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
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
                     </div>
                     <div class="tab-pane" id="travel" role="tabpanel">
                        <div class="row">
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Culture</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Exploring Sacred Temples and Cultural Heritage</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-4.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Nature</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Mountain View Journeys Filled with Natural Beauty</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-7.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Europe</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Ancient Churches Showcasing Timeless European Design</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-8.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Classic</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Classic City Streets with Historic Building Charm</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-blog-item tp-blog-3-item mb-30">
                                 <div class="tp-blog-thumb fix mb-30">
                                    <a href="{{ url('/blog-details') }}" class="d-block">
                                       <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-9.jpg') }}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-blog-content">
                                    <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                                       <span class="tp-blog-category">Riverside</span>
                                       <div class="tp-blog-meta">
                                          <span>Dec 12,2025</span>
                                          <span>Admin</span>
                                       </div>
                                    </div>
                                    <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Riverside Cities Blending History and Modern Life</a></h3>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-tour-area-end -->

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
