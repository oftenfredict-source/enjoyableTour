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

   <!-- tp-offcanvas start -->
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-header mb-30">
         <div class="tp-offcanvas-logo">
            <a href="{{ url('/') }}"><img  width="56" height="56" src="{{ asset('enjoyable-tour-logo.png') }}"  alt="Enjoyable Tour" style="object-fit:contain;"></a>
         </div>
         <div class="tp-offcanvas-close">
            <button class="tp-offcanvas-close-button"><i class="fal fa-times"></i></button>
         </div>
      </div>
      <div class="tp-header-search p-relative mb-30">
         <form action="#">
            <input class="tp-input" type="text" placeholder="Search for Thailand">
            <button class="tp-header-search-btn" type="submit">
               <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.64267 10.7857C8.48288 10.7857 10.7853 8.48318 10.7853 5.64286C10.7853 2.80254 8.48288 0.5 5.64267 0.5C2.80245 0.5 0.5 2.80254 0.5 5.64286C0.5 8.48318 2.80245 10.7857 5.64267 10.7857Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M12.5 12.5L9.92871 9.92857" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
            </button>
         </form>
      </div>
      <div class="tp-offcanvas-menu mb-50">
         <nav> 
         </nav>
      </div>
      <div class="tp-offcanvas-content mb-40">
         <h3 class="tp-offcanvas-title"> Hello There!</h3>
         <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. </p>
      </div>
      <div class="tp-offcanvas-gallery mb-50">
         <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/01.jpg') }}"><img src="{{ asset('turiehtml-10/turie/assets/img/tour/01.jpg') }}" alt="tour"></a>
         <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/02.jpg') }}"><img src="{{ asset('turiehtml-10/turie/assets/img/tour/02.jpg') }}" alt="tour"></a>
         <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/03.jpg') }}"><img src="{{ asset('turiehtml-10/turie/assets/img/tour/03.jpg') }}" alt="tour"></a>
         <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/04.jpg') }}"><img src="{{ asset('turiehtml-10/turie/assets/img/tour/04.jpg') }}" alt="tour"></a>
      </div>
      <div class="tp-offcanvas-info mb-50">
         <h3 class="tp-offcanvas-title">Information</h3>
         <span><a href="#">+ 4 20 7700 1007</a></span>
         <span><a href="#">hello@turie.com</a></span>
         <span><a href="#">Avenue de Roma 158b, Lisboa</a></span>
      </div>
      <div class="tp-offcanvas-social">
         <h3 class="tp-offcanvas-title"> Follow Us</h3>
         <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
               <path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
            </svg>
         </a>
         <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
               <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z" fill="currentColor"></path>
            </svg>
         </a>
         <a href="#">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <circle cx="9.99991" cy="9.99991" r="8.38077" stroke="currentColor" stroke-width="1.5"></circle>
               <path d="M18.3799 11.0604C17.6032 10.9148 16.8043 10.8389 15.9891 10.8389C11.5034 10.8389 7.51372 13.1373 4.9707 16.7054" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
               <path d="M15.8665 4.13281C13.2437 7.2064 9.30255 9.16128 4.8957 9.16128C3.76828 9.16128 2.67133 9.03332 1.61914 8.79143" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
               <path d="M12.1938 18.3815C12.4039 17.3641 12.5142 16.3104 12.5142 15.2309C12.5142 9.93756 9.86111 5.26259 5.80957 2.45801" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
            </svg>
         </a>
         <a href="#">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
               <path d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z" stroke="currentColor" stroke-width="1.5"></path>
               <path d="M13.251 4.75391L13.242 4.75391" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
         </a>
      </div>
   </div>
   <div class="tp-offcanvas-overlay"></div>
   <!-- tp-offcanvas end -->


   <header class="tp-header-height">

      <!-- header-area-start -->
      <div class="tp-header-top-area tp-header-top-spacing d-none d-md-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4 col-md-6">
                  <div class="tp-header-top-info">
                     <ul>
                        <li><a href="tel:+00(123)45688">+00(123)45688</a></li>
                        <li><a href="mailto:turie@gmail.com">turie@gmail.com</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 d-none d-lg-block">
                  <div class="tp-header-top-discount text-center">
                     <p class="mb-0"><span>Save 50%</span> on Multi - day tours</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="tp-header-top-switcher-wrap d-flex justify-content-end">
                     <div class="tp-header-top-menu-item tp-header-top-lang">
                        <span class="tp-header-top-lang-toggle" id="tp-header-top-lang-toggle">English</span>
                        <ul>
                           <li>
                              <a href="#">Spanish</a>
                           </li>
                           <li>
                              <a href="#">Russian</a>
                           </li>
                           <li>
                              <a href="#">Portuguese</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tp-header-top-menu-item tp-header-top-currency ml-30">
                        <span class="tp-header-top-currency-toggle" id="tp-header-top-currency-toggle"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/01.png') }}" alt=""> USD</span>
                        <ul>
                           <li>
                              <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/01.png') }}" alt=""> Canada  </a>
                           </li>
                           <li>
                              <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/02.png') }}" alt=""> Malaysia  </a>
                           </li>
                           <li>
                              <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/03.png') }}" alt=""> Germany </a>
                           </li>
                           <li>
                              <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/04.png') }}" alt=""> Belize  </a>
                           </li>
                           <li>
                              <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/05.png') }}" alt=""> United States</a>
                           </li>
                           <li>
                              <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/06.png') }}" alt=""> China </a>
                           </li>
                           <li>
                              <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/07.png') }}" alt=""> Georgia </a>
                           </li>
                           <li>
                              <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/flag/08.png') }}" alt=""> India </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="header-sticky" class="tp-header-area tp-header-one tp-header-lg-ptb tp-header-blur p-relative">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-2 col-6">
                  <div class="tp-header-logo">
                     <a href="{{ url('/') }}">
                        <img  width="56" height="56" src="{{ asset('enjoyable-tour-logo.png') }}"  alt="Enjoyable Tour" style="object-fit:contain;">
                     </a>
                  </div>
               </div>
               <div class="col-xl-6 d-none d-xl-block">
                  <div class="tp-main-menu tp-menu-dropdown text-center">
                     <nav class="tp-mobile-menu-active">
                        <ul>
                           <li class="has-dropdown active">
                              <a href="{{ url('/') }}">Home</a>
                              <ul class="sub-menu">
                                 <li class="active"><a href="{{ url('/') }}">Home 01</a></li>
                                 <li><a href="{{ url('/index-2') }}">Home 02</a></li>
                                 <li><a href="{{ url('/index-3') }}">Home 03</a></li>
                                 <li><a href="{{ url('/index-4') }}">Home 04</a></li>
                                 <li><a href="{{ url('/index-5') }}">Home 05</a></li>
                                 <li><a href="{{ url('/index-6') }}">Home 06</a></li>
                                 <li><a href="{{ url('/index-7') }}">Home 07</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="{{ url('/about') }}">About Us</a>
                           </li>
                           <li>
                              <a href="{{ url('/contact') }}">Contact</a>
                           </li>
                           <li class="has-dropdown position-inherit">
                              <a href="{{ url('/city-details-2') }}">Detonations</a>
                              <div class="sub-menu tp-megamenu-wrapper tp-megamenu-center">
                                 <div class="row">
                                    <div class="col-xl-4">
                                       <div class="tp-megamenu-list">
                                          <ul>
                                             <li>
                                                <a href="{{ url('/city-details-2') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/menu/01.png') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Osaka</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-3') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/menu/02.png') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Sapporo</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-4') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/menu/03.png') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Narita</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-2') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/menu/04.png') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Los Angeles</span>
                                                   </div>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="tp-megamenu-list">
                                          <ul>
                                             <li>
                                                <a href="{{ url('/city-details-3') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/menu/05.png') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Greece</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-4') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/menu/06.png') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Turkey</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-2') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/destination/six/thumb.jpg') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Maldives</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-3') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/destination/six/thumb-2.jpg') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Canada</span>
                                                   </div>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="tp-megamenu-list">
                                          <ul>
                                             <li>
                                                <a href="{{ url('/city-details-4') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/destination/six/thumb-3.jpg') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Indonesia</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-2') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/destination/six/thumb-4.jpg') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Australia</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-3') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/destination/six/thumb-5.jpg') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Switzerland</span>
                                                   </div>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="{{ url('/city-details-4') }}" class="d-flex align-items-center gap-2">
                                                   <div class="tp-megamenu-list-thumb">
                                                      <img src="{{ asset('turiehtml-10/turie/assets/img/destination/six/thumb-6.jpg') }}" alt="des">
                                                   </div>
                                                   <div class="tp-megamenu-list-content">
                                                      <span class="tp-megamenu-list-subtitle">Things to do in</span>
                                                      <span class="tp-megamenu-list-title">Thailand</span>
                                                   </div>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="has-dropdown">
                              <a href="{{ url('/tour-grid') }}">Tour Listing</a>
                              <ul class="sub-menu">
                                 <li><a href="{{ url('/tour-grid') }}">Tour Grid</a></li>
                                 <li><a href="{{ url('/tour-grid-sidebar') }}">Tour Grid Sidebar</a></li>
                                 <li><a href="{{ url('/tour-grid-map') }}">Tour Grid Map</a></li>
                                 <li><a href="{{ url('/tour-list-map') }}">Tour List Map</a></li>
                                 <li><a href="{{ url('/tour-list-left-sidebar') }}">Tour List Left Sidebar</a></li>
                                 <li><a href="{{ url('/tour-list-right-sidebar') }}">Tour List Right Sidebar</a></li>
                                 <li><a href="{{ url('/tour-details') }}">Tour Details 01</a></li>
                                 <li><a href="{{ url('/tour-details-2') }}">Tour Details 02</a></li>
                                 <li><a href="{{ url('/tour-details-3') }}">Tour Details 03</a></li>
                                 <li><a href="{{ url('/tour-details-4') }}">Tour Details 04</a></li>
                                 <li><a href="{{ url('/tour-details-5') }}">Tour Details 05</a></li>
                                 <li><a href="{{ url('/tour-details-6') }}">Tour Details 06</a></li>
                                 <li><a href="{{ url('/tour-details-7') }}">Tour Details 07</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="{{ url('/blog') }}">Blog</a>
                              <ul class="sub-menu">
                                 <li><a href="{{ url('/blog') }}">Blog</a></li>
                                 <li><a href="{{ url('/blog-list') }}">Blog List</a></li>
                                 <li><a href="{{ url('/blog-standard') }}">Blog Standard</a></li>
                                 <li><a href="{{ url('/blog-details') }}">Blog Details</a></li>
                                 <li><a href="{{ url('/blog-details-2') }}">Blog Details 2</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="#">Page</a>
                              <ul class="sub-menu">
                                 <li><a href="{{ url('/about') }}">About</a></li>
                                 <li><a href="{{ url('/career') }}">Career</a></li>
                                 <li><a href="{{ url('/career-details') }}">Career Details</a></li>
                                 <li class="menu-item-has-children">
                                    <a href="{{ url('/shop') }}">Shop</a>
                                    <ul class="sub-menu">
                                       <li><a href="{{ url('/shop') }}">Shop</a></li>
                                       <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                                       <li><a href="{{ url('/cart') }}">Cart</a></li>
                                       <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                                       <li><a href="{{ url('/wishlist') }}">wishlist</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                    <a href="{{ url('/city-details') }}">Destination</a>
                                    <ul class="sub-menu">
                                       <li><a href="{{ url('/city-details') }}">City Details 01</a></li>
                                       <li><a href="{{ url('/city-details-2') }}">City Details 02</a></li>
                                       <li><a href="{{ url('/city-details-3') }}">City Details 03</a></li>
                                       <li><a href="{{ url('/city-details-4') }}">City Details 04</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                    <a href="{{ url('/tour-guide') }}">Tour Guide</a>
                                    <ul class="sub-menu">
                                       <li><a href="{{ url('/tour-guide') }}">Tour Guide</a></li>
                                       <li><a href="{{ url('/tour-guide-details') }}">Tour Guide Details</a></li>
                                       <li><a href="{{ url('/tour-checkout') }}">Tour Checkout</a></li>
                                    </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                    <a href="{{ url('/login') }}">Login</a>
                                    <ul class="sub-menu">
                                       <li><a href="{{ url('/login') }}">Login</a></li>
                                       <li><a href="{{ url('/register') }}">Register</a></li>
                                       <li><a href="{{ url('/forgot') }}">Forgot</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="{{ url('/contact') }}">Contact</a></li>
                                 <li><a href="{{ url('/faq') }}">Faq</a></li>
                                 <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                 <li><a href="{{ url('/testimonial') }}">Testimonial</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-4 col-6">
                  <div class="tp-header-option d-flex align-items-center justify-content-end">
                     <div class="tp-header-search p-relative d-none d-xl-block">
                        <form action="#">
                           <input class="tp-input" type="text" placeholder="Search destinations">
                           <button class="tp-header-search-btn" type="submit">
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.64267 10.7857C8.48288 10.7857 10.7853 8.48318 10.7853 5.64286C10.7853 2.80254 8.48288 0.5 5.64267 0.5C2.80245 0.5 0.5 2.80254 0.5 5.64286C0.5 8.48318 2.80245 10.7857 5.64267 10.7857Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M12.5 12.5L9.92871 9.92857" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </form>
                     </div>
                     <div class="tp-header-contact ml-10 d-none d-sm-block">
                        <a href="{{ url('/login') }}">Log in</a>
                     </div>
                     <div class="tp-header-toogle-wrapper d-xl-none ml-10">
                        <button class="tp-header-toogle">
                           <span></span>
                           <span></span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header-area-end -->

   </header>

   <main>

      <!-- tp-hero-area-start -->
      <div class="tp-hero-area tp-hero-bg bg-position z-index-2 p-relative" data-background="{{ asset('turiehtml-10/turie/assets/img/hero/bg.jpg') }}">
         <img class="tp-hero-shape" src="{{ asset('turiehtml-10/turie/assets/img/hero/shape.png') }}" alt="">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-6">
                  <div class="tp-hero-content  mb-30">
                     <span class="tp-hero-subtitle text-uppercase d-inline-block lh-1 mb-20 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Tour & Travel</span>
                     <h2 class="tp-hero-title fw-600 mb-10 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Where will your <br> Journey go.</h2>
                     <p class="tp-hero-dec mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">Exotic Journeys Crafted by Experts.</p>
                     <a href="{{ url('/about') }}" class="tp-btn tp-btn-xxl tp-btn-white wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">Get to Know Us</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-hero-area-end -->
      
      <!-- tp-destination-area-start -->
      <div class="tp-destination-area tp-section-pt tp-section-pb pt-120 pb-110">
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
      <div class="tp-service-area pt-90 pb-70 p-relative" data-bg-color="#f7f9f9">
         <img class="tp-service-shape" src="{{ asset('turiehtml-10/turie/assets/img/service/shape.png') }}" alt="">
         <div class="container">
            <div class="row justify-content-center mb-40">
               <div class="col-lg-8 text-center">
                  <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">Why Choose Us</span>
                  <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Travel with confidence in Tanzania</h2>
                  <p class="wow fadeInUp mb-0" data-wow-duration=".9s" data-wow-delay=".4s">Local experts for Trekking, Safaris, Day trips, and Zanzibar adventures.</p>
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

      <!-- tp-about-area-start -->
      <div class="tp-about-area pt-80 pb-70">
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
                                    <path d="M6.30915 0L8.25867 3.94953L12.6183 4.58675L9.46372 7.65931L10.2082 12L6.30915 9.94953L2.41009 12L3.15457 7.65931L0 4.58675L4.35962 3.94953L6.30915 0Z" fill="#FD4621" />
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

      @include('turie.partials.latest-packages')


      <!-- tp-offer-banner-area-start -->
      <div class="tp-offer-banner-area pb-80">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 mb-30 wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-offer-3-banner fix tp-offer-banner-overly h-100 p-relative bg-position" data-background="{{ asset('turiehtml-10/turie/assets/img/offer/3/banner.jpg') }}">
                     <div class="tp-offer-banner-content p-relative z-index-2">
                        <span class="tp-offer-banner-subtitle mb-10 d-inline-block">
                           <img src="{{ asset('turiehtml-10/turie/assets/img/offer/offer.png') }}" alt="">
                        </span>
                        <h2 class="tp-offer-banner-title fs-62 text-white fw-600 mb-15">50%</h2>
                        <h2 class="tp-offer-banner-title fs-30 text-white fw-600">Let’s Explore The world</h2>
                        <div class="tp-offer-banner-location mb-20">
                           <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.75 6.75C12.75 11.4167 6.75 15.4167 6.75 15.4167C6.75 15.4167 0.75 11.4167 0.75 6.75C0.75 5.1587 1.38214 3.63258 2.50736 2.50736C3.63258 1.38214 5.1587 0.75 6.75 0.75C8.3413 0.75 9.86742 1.38214 10.9926 2.50736C12.1179 3.63258 12.75 5.1587 12.75 6.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.75 8.75C7.85457 8.75 8.75 7.85457 8.75 6.75C8.75 5.64543 7.85457 4.75 6.75 4.75C5.64543 4.75 4.75 5.64543 4.75 6.75C4.75 7.85457 5.64543 8.75 6.75 8.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           <span>Bangkok. Thailand</span>
                        </div>
                        <a href="{{ url('/tour-details') }}" class="tp-btn">Booking Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mb-30 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-offer-3-banner fix tp-offer-banner-overly h-100 p-relative bg-position" data-background="{{ asset('turiehtml-10/turie/assets/img/offer/3/banner-2.jpg') }}">
                     <div class="tp-offer-banner-content p-relative z-index-2">
                        <h2 class="tp-offer-banner-title fs-42 text-white fw-600 mb-25">Clerlying<br> Hotel</h2>
                        <h2 class="tp-offer-banner-title fs-30 text-white fw-600">Get Hotels At 50% Off</h2>
                        <div class="tp-offer-banner-location mb-20">
                           <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.75 6.75C12.75 11.4167 6.75 15.4167 6.75 15.4167C6.75 15.4167 0.75 11.4167 0.75 6.75C0.75 5.1587 1.38214 3.63258 2.50736 2.50736C3.63258 1.38214 5.1587 0.75 6.75 0.75C8.3413 0.75 9.86742 1.38214 10.9926 2.50736C12.1179 3.63258 12.75 5.1587 12.75 6.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.75 8.75C7.85457 8.75 8.75 7.85457 8.75 6.75C8.75 5.64543 7.85457 4.75 6.75 4.75C5.64543 4.75 4.75 5.64543 4.75 6.75C4.75 7.85457 5.64543 8.75 6.75 8.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                           <span>Bangkok. Thailand</span>
                        </div>
                        <a href="{{ url('/tour-details') }}" class="tp-btn">Booking Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-offer-banner-area-end -->

      <!-- tp-chose-area-start -->
      <div class="tp-chose-area pt-100 pb-70">
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

      <!-- tp-testimonial-area-start -->
      <div class="tp-testimonial-area z-index-2 p-relative pt-110 pb-110" data-bg-color="#f7f9f9">
         <img class="tp-testimonial-shape" src="{{ asset('turiehtml-10/turie/assets/img/testimonial/shape.png') }}" alt="">
         <img class="tp-testimonial-shape-2" src="{{ asset('turiehtml-10/turie/assets/img/testimonial/shape-2.png') }}" alt="">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-testimonial-section-title text-center mb-25">
                     <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Out Testimonial</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Memorable journeys shared<br> by our travelers</h2>
                  </div>
                  <div class="swiper tp-testimonial-slide wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
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
                                       <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M15.9544 9.66589C15.4389 9.61447 14.3048 9.61447 14.3048 8.89269C14.3048 7.91349 15.7481 6.62482 18.0677 5.23299C18.7892 4.76894 20.2845 4.04748 20.2845 3.06796C20.2845 2.29475 19.7173 1.72787 18.5317 1.88245C17.3976 2.03702 15.6449 2.81022 13.3256 4.76894C10.9029 6.7794 8.63501 10.1299 8.63501 13.4287C8.63501 16.7793 10.9029 20.1298 14.5629 20.1298C17.5008 20.1298 20.0267 17.9134 20.0267 14.872C20.0264 12.5524 18.4286 9.87221 15.9544 9.66589Z" fill="white" />
                                          <path d="M8.70862 8.21671C8.28524 7.99542 7.82087 7.85061 7.31972 7.80896C6.80425 7.75754 5.67015 7.75754 5.67015 7.03575C5.67015 6.05656 7.1134 4.76789 9.43301 3.37606C10.1548 2.91201 11.6495 2.19054 11.6495 1.21102C11.6495 0.437821 11.0822 -0.129064 9.89674 0.0255115C8.76264 0.180087 7.00992 0.95329 4.69063 2.91201C2.26819 4.92246 0 8.27301 0 11.5721C0 14.9227 2.26787 18.2732 5.92789 18.2732C6.7883 18.2732 7.61292 18.0819 8.34935 17.7366C7.62724 16.431 7.24227 14.9204 7.24227 13.4293C7.24259 11.5881 7.83551 9.80249 8.70862 8.21671Z" fill="white" />
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
                        <div class="swiper-slide">
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
                                       <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M15.9544 9.66589C15.4389 9.61447 14.3048 9.61447 14.3048 8.89269C14.3048 7.91349 15.7481 6.62482 18.0677 5.23299C18.7892 4.76894 20.2845 4.04748 20.2845 3.06796C20.2845 2.29475 19.7173 1.72787 18.5317 1.88245C17.3976 2.03702 15.6449 2.81022 13.3256 4.76894C10.9029 6.7794 8.63501 10.1299 8.63501 13.4287C8.63501 16.7793 10.9029 20.1298 14.5629 20.1298C17.5008 20.1298 20.0267 17.9134 20.0267 14.872C20.0264 12.5524 18.4286 9.87221 15.9544 9.66589Z" fill="white" />
                                          <path d="M8.70862 8.21671C8.28524 7.99542 7.82087 7.85061 7.31972 7.80896C6.80425 7.75754 5.67015 7.75754 5.67015 7.03575C5.67015 6.05656 7.1134 4.76789 9.43301 3.37606C10.1548 2.91201 11.6495 2.19054 11.6495 1.21102C11.6495 0.437821 11.0822 -0.129064 9.89674 0.0255115C8.76264 0.180087 7.00992 0.95329 4.69063 2.91201C2.26819 4.92246 0 8.27301 0 11.5721C0 14.9227 2.26787 18.2732 5.92789 18.2732C6.7883 18.2732 7.61292 18.0819 8.34935 17.7366C7.62724 16.431 7.24227 14.9204 7.24227 13.4293C7.24259 11.5881 7.83551 9.80249 8.70862 8.21671Z" fill="white" />
                                       </svg>
                                    </span>
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-2.png') }}" alt="">
                                 </div>
                                 <div class="tp-testimonial-avatar-info">
                                    <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                    <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
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
                                       <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M15.9544 9.66589C15.4389 9.61447 14.3048 9.61447 14.3048 8.89269C14.3048 7.91349 15.7481 6.62482 18.0677 5.23299C18.7892 4.76894 20.2845 4.04748 20.2845 3.06796C20.2845 2.29475 19.7173 1.72787 18.5317 1.88245C17.3976 2.03702 15.6449 2.81022 13.3256 4.76894C10.9029 6.7794 8.63501 10.1299 8.63501 13.4287C8.63501 16.7793 10.9029 20.1298 14.5629 20.1298C17.5008 20.1298 20.0267 17.9134 20.0267 14.872C20.0264 12.5524 18.4286 9.87221 15.9544 9.66589Z" fill="white" />
                                          <path d="M8.70862 8.21671C8.28524 7.99542 7.82087 7.85061 7.31972 7.80896C6.80425 7.75754 5.67015 7.75754 5.67015 7.03575C5.67015 6.05656 7.1134 4.76789 9.43301 3.37606C10.1548 2.91201 11.6495 2.19054 11.6495 1.21102C11.6495 0.437821 11.0822 -0.129064 9.89674 0.0255115C8.76264 0.180087 7.00992 0.95329 4.69063 2.91201C2.26819 4.92246 0 8.27301 0 11.5721C0 14.9227 2.26787 18.2732 5.92789 18.2732C6.7883 18.2732 7.61292 18.0819 8.34935 17.7366C7.62724 16.431 7.24227 14.9204 7.24227 13.4293C7.24259 11.5881 7.83551 9.80249 8.70862 8.21671Z" fill="white" />
                                       </svg>
                                    </span>
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/avatar-3.png') }}" alt="">
                                 </div>
                                 <div class="tp-testimonial-avatar-info">
                                    <h3 class="tp-testimonial-avatar-title">Michael Lewis</h3>
                                    <span class="tp-testimonial-avatar-pos">Product Designer</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
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
                                       <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M15.9544 9.66589C15.4389 9.61447 14.3048 9.61447 14.3048 8.89269C14.3048 7.91349 15.7481 6.62482 18.0677 5.23299C18.7892 4.76894 20.2845 4.04748 20.2845 3.06796C20.2845 2.29475 19.7173 1.72787 18.5317 1.88245C17.3976 2.03702 15.6449 2.81022 13.3256 4.76894C10.9029 6.7794 8.63501 10.1299 8.63501 13.4287C8.63501 16.7793 10.9029 20.1298 14.5629 20.1298C17.5008 20.1298 20.0267 17.9134 20.0267 14.872C20.0264 12.5524 18.4286 9.87221 15.9544 9.66589Z" fill="white" />
                                          <path d="M8.70862 8.21671C8.28524 7.99542 7.82087 7.85061 7.31972 7.80896C6.80425 7.75754 5.67015 7.75754 5.67015 7.03575C5.67015 6.05656 7.1134 4.76789 9.43301 3.37606C10.1548 2.91201 11.6495 2.19054 11.6495 1.21102C11.6495 0.437821 11.0822 -0.129064 9.89674 0.0255115C8.76264 0.180087 7.00992 0.95329 4.69063 2.91201C2.26819 4.92246 0 8.27301 0 11.5721C0 14.9227 2.26787 18.2732 5.92789 18.2732C6.7883 18.2732 7.61292 18.0819 8.34935 17.7366C7.62724 16.431 7.24227 14.9204 7.24227 13.4293C7.24259 11.5881 7.83551 9.80249 8.70862 8.21671Z" fill="white" />
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
                     </div>
                  </div>
                  <div class="tp-testimonial-pagination mt-10"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-testimonial-area-end -->

      <!-- tp-blog-area-start -->
      <div class="tp-blog-area pt-140 pb-110 tp-section-pt tp-section-pb">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-testimonial-section-title text-center mb-50">
                     <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Out Latest Blog</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Recent blogs & updates</h2>
                  </div>
               </div>
               <div class="col-xl-7">
                  <div class="tp-blog-item tp-blog-col-1 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="tp-blog-thumb mb-30 fix">
                        <a href="{{ url('/blog-details') }}" class="d-block">
                            <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/thumb.jpg') }}" alt="">
                        </a>
                     </div>
                     <div class="tp-blog-content">
                        <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                           <span class="tp-blog-category">Adventure</span>
                           <div class="tp-blog-meta">
                              <span>Dec 12,2025</span>
                              <span>Admin</span>
                           </div>
                        </div>
                        <h3 class="tp-blog-title fw-600 mb-15"><a href="{{ url('/blog-details') }}">Experience vibrant festivals, explore the<br> amazing Amazon rainforest</a></h3>
                        <a href="{{ url('/blog-details') }}" class="tp-btn-solid">Learn more
                           <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.07141 4.67188L0.750023 4.67187" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M5.68092 8.59474C5.68092 8.59474 9.37927 5.70593 9.37927 4.67232C9.37928 3.63872 5.68086 0.75 5.68086 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-5">
                  <div class="tp-blog-item tp-blog-col-2 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                     <div class="tp-blog-thumb fix">
                        <a href="{{ url('/blog-details') }}" class="d-inline-block">
                            <img src="{{ asset('turiehtml-10/turie/assets/img/blog/thumb-sm.jpg') }}" alt="">
                        </a>
                     </div>
                     <div class="tp-blog-content">
                        <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                           <span class="tp-blog-category">Adventure</span>
                           <div class="tp-blog-meta">
                              <span>Dec 12,2025</span>
                           </div>
                        </div>
                        <h3 class="tp-blog-title fw-600 mb-15"><a href="{{ url('/blog-details') }}">Explore ancient pyramids & desert adventures.</a></h3>
                        <a href="{{ url('/blog-details') }}" class="tp-btn-solid">Learn more
                           <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.07141 4.67188L0.750023 4.67187" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M5.68092 8.59474C5.68092 8.59474 9.37927 5.70593 9.37927 4.67232C9.37928 3.63872 5.68086 0.75 5.68086 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </div>
                  </div>
                  <div class="tp-blog-item tp-blog-col-2 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="tp-blog-thumb fix">
                        <a href="{{ url('/blog-details') }}" class="d-inline-block">
                            <img src="{{ asset('turiehtml-10/turie/assets/img/blog/thumb-sm-2.jpg') }}" alt="">
                        </a>
                     </div>
                     <div class="tp-blog-content">
                        <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                           <span class="tp-blog-category">Adventure</span>
                           <div class="tp-blog-meta">
                              <span>Dec 12,2025</span>
                           </div>
                        </div>
                        <h3 class="tp-blog-title fw-600 mb-15"><a href="{{ url('/blog-details') }}">Collaboration turns ideas powerful results that</a></h3>
                        <a href="{{ url('/blog-details') }}" class="tp-btn-solid">Learn more
                           <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.07141 4.67188L0.750023 4.67187" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M5.68092 8.59474C5.68092 8.59474 9.37927 5.70593 9.37927 4.67232C9.37928 3.63872 5.68086 0.75 5.68086 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </div>
                  </div>
                  <div class="tp-blog-item tp-blog-col-2 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                     <div class="tp-blog-thumb fix">
                        <a href="{{ url('/blog-details') }}" class="d-inline-block">
                            <img src="{{ asset('turiehtml-10/turie/assets/img/blog/thumb-sm-3.jpg') }}" alt="">
                        </a>
                     </div>
                     <div class="tp-blog-content">
                        <div class="tp-blog-meta-wrap d-flex flex-wrap align-items-center mb-15">
                           <span class="tp-blog-category">Adventure</span>
                           <div class="tp-blog-meta">
                              <span>Dec 12,2025</span>
                           </div>
                        </div>
                        <h3 class="tp-blog-title fw-600 mb-15"><a href="{{ url('/blog-details') }}">Great minds working together can tackle even the toughest.</a></h3>
                        <a href="{{ url('/blog-details') }}" class="tp-btn-solid">Learn more
                           <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.07141 4.67188L0.750023 4.67187" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M5.68092 8.59474C5.68092 8.59474 9.37927 5.70593 9.37927 4.67232C9.37928 3.63872 5.68086 0.75 5.68086 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-blog-area-end -->


   </main>

   <footer>

      <!-- tp-footer-area-start -->
      <div class="tp-footer-area z-index-2 pt-70 p-relative" data-bg-color="#EBF8EB">
         <img class="tp-footer-shape" src="{{ asset('turiehtml-10/turie/assets/img/subscribe/shape.png') }}" alt="">
         <img class="tp-footer-shape-2" src="{{ asset('turiehtml-10/turie/assets/img/subscribe/shape-2.png') }}" alt="">
         <div class="container">
            <div class="tp-footer-subscribe-wrap pb-60">
               <div class="row justify-content-center">
                  <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                     <div class="tp-footer-subscribe-inner text-center wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <h3 class="tp-footer-subscribe-title fw-500 mb-30">Sign up now for amazing travel offers and deals!</h3>
                        <div class="tp-footer-subscribe-form p-relative">
                           <form action="#" class="mb-20 p-relative">
                              <span class="tp-footer-subscribe-icon">
                                 <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.1499 0.649902H14.1499C14.9749 0.649902 15.6499 1.3249 15.6499 2.1499V11.1499C15.6499 11.9749 14.9749 12.6499 14.1499 12.6499H2.1499C1.3249 12.6499 0.649902 11.9749 0.649902 11.1499V2.1499C0.649902 1.3249 1.3249 0.649902 2.1499 0.649902Z" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.6499 2.1499L8.1499 7.3999L0.649902 2.1499" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                              </span>
                              <input class="tp-input" type="text" placeholder="Enter your email ...">
                              <button class="tp-footer-subscribe-btn" type="submit">Subscribe</button>
                           </form>
                           <p>We are committed to protecting your <a href="#">privacy policy.</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-footer-widget-wrap pt-75 pb-65">
               <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                     <div class="tp-footer-widget tp-footer-col-1 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tp-footer-logo mb-20">
                           <a href="{{ url('/') }}">
                              <img  width="56" height="56" src="{{ asset('enjoyable-tour-logo.png') }}"  alt="Enjoyable Tour" style="object-fit:contain;">
                           </a>
                        </div>
                        <p class="tp-footer-dec">This service has taken my business to a<br>
                        whole new level. The design and functionality<br>
                        and user friendly.</p>
                        <div class="tp-footer-social">
                           <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="18" viewBox="0 0 12 18" fill="none">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M1.62839 7.77713C0.911363 7.77713 0.761719 7.91782 0.761719 8.59194V9.81416C0.761719 10.4883 0.911363 10.629 1.62839 10.629H3.36172V15.5179C3.36172 16.192 3.51136 16.3327 4.22839 16.3327H5.96172C6.67874 16.3327 6.82839 16.192 6.82839 15.5179V10.629H8.77466C9.31846 10.629 9.45859 10.5296 9.60798 10.038L9.97941 8.81579C10.2353 7.97368 10.0776 7.77713 9.14609 7.77713H6.82839V5.74009C6.82839 5.29008 7.21641 4.92527 7.69505 4.92527H10.1617C10.8787 4.92527 11.0284 4.78458 11.0284 4.11046V2.48083C11.0284 1.80671 10.8787 1.66602 10.1617 1.66602H7.69505C5.30182 1.66602 3.36172 3.49004 3.36172 5.74009V7.77713H1.62839Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                              </svg>
                           </a>
                           <a href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28884 0.714844H0.666992L6.14691 7.9153L1.01754 13.9556H3.38746L7.26697 9.38713L10.7118 13.9136H15.3337L9.69453 6.50391L9.70451 6.51669L14.5599 0.798959H12.19L8.58427 5.04503L5.28884 0.714844ZM3.21817 1.97588H4.65702L12.7825 12.6525H11.3436L3.21817 1.97588Z" fill="currentColor"/>
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="9.99991" cy="9.99991" r="8.38077" stroke="currentColor" stroke-width="1.5"/>
                                 <path d="M18.3799 11.0604C17.6032 10.9148 16.8043 10.8389 15.9891 10.8389C11.5034 10.8389 7.51372 13.1373 4.9707 16.7054" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                 <path d="M15.8665 4.13281C13.2437 7.2064 9.30255 9.16128 4.8957 9.16128C3.76828 9.16128 2.67133 9.03332 1.61914 8.79143" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                 <path d="M12.1938 18.3815C12.4039 17.3641 12.5142 16.3104 12.5142 15.2309C12.5142 9.93756 9.86111 5.26259 5.80957 2.45801" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.66602 8.99935C1.66602 5.54238 1.66602 3.8139 2.73996 2.73996C3.8139 1.66602 5.54238 1.66602 8.99935 1.66602C12.4563 1.66602 14.1848 1.66602 15.2587 2.73996C16.3327 3.8139 16.3327 5.54238 16.3327 8.99935C16.3327 12.4563 16.3327 14.1848 15.2587 15.2587C14.1848 16.3327 12.4563 16.3327 8.99935 16.3327C5.54238 16.3327 3.8139 16.3327 2.73996 15.2587C1.66602 14.1848 1.66602 12.4563 1.66602 8.99935Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                                 <path d="M12.4747 9.00103C12.4747 10.9195 10.9195 12.4747 9.00103 12.4747C7.08256 12.4747 5.52734 10.9195 5.52734 9.00103C5.52734 7.08256 7.08256 5.52734 9.00103 5.52734C10.9195 5.52734 12.4747 7.08256 12.4747 9.00103Z" stroke="currentColor" stroke-width="1.5"/>
                                 <path d="M13.251 4.75391L13.242 4.75391" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-6 col-sm-6">
                     <div class="tp-footer-widget tp-footer-col-2 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                        <h3 class="tp-footer-widget-title fw-600 mb-15">Company</h3>
                        <div class="tp-footer-widget-menu">
                           <ul>
                              <li><a href="{{ url('/about') }}">About us</a></li>
                              <li><a href="#">Carrer</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Partner</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6">
                     <div class="tp-footer-widget tp-footer-col-3 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <h3 class="tp-footer-widget-title fw-600 mb-15">Useful Links</h3>
                        <div class="tp-footer-widget-menu">
                           <ul>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">Terms & Conditions</a></li>
                              <li><a href="#">Register</a></li>
                              <li><a href="#">Stories</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-2 col-lg-4 col-md-4 col-sm-6">
                     <div class="tp-footer-widget tp-footer-col-4 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                        <h3 class="tp-footer-widget-title fw-600 mb-15">Services</h3>
                        <div class="tp-footer-widget-menu">
                           <ul>
                              <li><a href="#">Tour Packages</a></li>
                              <li><a href="#">Travel Guides & Tips</a></li>
                              <li><a href="#">Local Experiences</a></li>
                              <li><a href="#">Travel Insurance</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                     <div class="tp-footer-widget tp-footer-col-5 mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <h3 class="tp-footer-widget-title fw-600 mb-15">Contact</h3>
                        <div class="tp-footer-contact">
                           <a href="https://www.google.com/maps" target="_blank" class="location mb-20 d-inline-block">4140 Parker Rd. Allentown New Mexico 31134</a>
                           <span class="support d-block mb-10">Supporter :</span>
                           <a href="mailto:+(704)555-0127" class="phone">+(704) 555-0127</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid container-1856">
            <div class="tp-instagram-wrap wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
               <div class="swiper tp-instagram-slide">
                  <div class="swiper-wrapper slide-transtion">
                     <div class="swiper-slide">
                        <div class="tp-instagram-thumb p-relative">
                           <a href="#">
                              <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/footer/thumb.jpg') }}" alt="instagram">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-instagram-thumb p-relative">
                           <a href="#">
                              <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/footer/thumb-2.jpg') }}" alt="instagram">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-instagram-thumb p-relative">
                           <a href="#">
                              <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/footer/thumb-3.jpg') }}" alt="instagram">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-instagram-thumb p-relative">
                           <a href="#">
                              <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/footer/thumb-4.jpg') }}" alt="instagram">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-instagram-thumb p-relative">
                           <a href="#">
                              <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/footer/thumb-5.jpg') }}" alt="instagram">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-instagram-thumb p-relative">
                           <a href="#">
                              <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/footer/thumb-3.jpg') }}" alt="instagram">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-instagram-thumb p-relative">
                           <a href="#">
                              <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/footer/thumb-4.jpg') }}" alt="instagram">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-copyright-area pt-25 pb-15">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-5">
                     <div class="tp-copyright-text">
                        <p class="tp-ff-inter mb-5">2026 <a href="#">Themepure </a>© All rights reserved</p>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="tp-copyright-payment d-flex flex-wrap align-items-center justify-content-lg-end">
                        <p class="fw-500 mb-5">Payment Channels :</p>
                        <a href="#"><img src="{{ asset('turiehtml-10/turie/assets/img/footer/payment.png') }}" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-footer-area-end -->

   </footer>


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
</body>

</html>
