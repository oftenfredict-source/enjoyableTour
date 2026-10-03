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
      <div class="tp-breadcrumb-area tp-breadcrumb-ptb tp-breadcrumb-overly bg-position" data-background="{{ asset('turiehtml-10/turie/assets/img/breadcrumb/bg-11.jpg') }}">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-breadcrumb-wrap text-center">
                     <h2 class="tp-breadcrumb-title fs-112 text-center mb-0">Testimonial</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- tp-testimonial-area-start -->
      <div class="tp-testimonial-area tp-testimonial-inner tp-tour-ptb-2  pt-140 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Travel-friendly modern features</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-2.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">jasonwalker</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Easy customization for travel</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-3.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">matthewcole</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-4.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">ethanbrooks</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-5.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">danielharper</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-6.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">ryanmitchell</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-7.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">alexcarter</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-8.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">jacobmorris</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-testimonial-item">
                     <div class="tp-testimonial-rating mb-15">
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                        <span>
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                           </svg>
                        </span>
                     </div>
                     <h3 class="tp-testimonial-title mb-20">Perfect travel website design</h3>
                     <p class="mb-40">“This service has taken my business to a whole new
                        level. The design and functionality are both outstanding
                        and user friendly. The team consistently provided timely
                        support and exceeded my expectations.”</p>
                     <div class="d-flex align-items-center">
                        <div class="tp-testimonial-user d-flex align-items-center mr-15">
                           <span class="tp-testimonial-qoute">
                              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.48383 5.61582C3.24966 7.8498 -1.96259 3.38176 2.50271 1.14818C8.82337 -2.01345 10.6942 14.552 2.50271 19.02" stroke="white" stroke-width="1.5" />
                                 <path d="M15.6791 5.61582C13.445 7.8498 8.23272 3.38176 12.698 1.14818C19.0187 -2.01345 20.8896 14.552 12.698 19.02" stroke="white" stroke-width="1.5" />
                              </svg>
                           </span>
                           <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-9.png') }}" alt="">
                        </div>
                        <div class="tp-testimonial-avatar-info">
                           <h3 class="tp-testimonial-avatar-title">nathanreed</h3>
                           <span class="tp-testimonial-avatar-pos">Product Designer</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-testimonial-area-end -->

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
