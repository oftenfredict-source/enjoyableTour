<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>{{ $tour->title }} — {{ config('app.name') }}</title>
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

   <!-- tp-enquiry-form-modal -->
   <div class="tp-enquiry-form-modal modal fade" id="staticBackdrop" role="region" data-bs-keyboard="false" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
               <div class="tp-booking-sidebar-item tp-booking-sidebar-form tp-enquiry-form p-relative">
                  <div class="tp-tour-badge p-absolute">
                     <span class="discount tp-ff-inter fw-700">{{ $tour->discount_badge ?: '- Best Deal' }}</span>
                  </div>
                  <div class="tp-tour-price mb-20">
                     <div class="tp-tour-top-price lh-1">
                        <span class="tp-tour-prefix lh-1 fw-600 mb-5 d-inline-block">From:</span>
                     </div>
                     <div class="tp-tour-bottom-price">
                        <span class="tp-tour-new-price fw-700">{{ $tour->formatPrice() }}</span>
                        <span class="tp-tour-suffix">from person</span>
                     </div>
                  </div>
                  <div class="tp-booking-form">
                     <form action="#">
                        <div class="tp-booking-wrap p-relative">
                           <div class="tp-booking-location p-relative">
                              <div class="row gx-10">
                                 <div class="col-xl-6">
                                    <div class="tp-booking-location-input mb-15">
                                       <input class="tp-input" type="text" name="name" placeholder="First name">
                                    </div>
                                 </div>
                                 <div class="col-xl-6">
                                    <div class="tp-booking-location-input mb-15">
                                       <input class="tp-input" type="text" name="name" placeholder="Last name">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-booking-location-input mb-15">
                                       <input class="tp-input" type="text" name="adults" placeholder="02 Adults">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-booking-location-input mb-15">
                                       <input class="tp-input" type="text" name="phone" placeholder="Phone">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-booking-location-input mb-15">
                                       <textarea class="tp-input tp-textarea" id="textarea"  placeholder="Your question"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button class="tp-btn tp-btn-xl w-100 mb-20" type="submit">Connect with an Expert</button>
                           <p class="tp-booking-help text-center mb-0">Need help with booking? <a href="#">Send us a message.</a></p>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- tp-enquiry-form-modal -->

   <header class="tp-header-height">

      <!-- header-area-start -->
      <div id="header-sticky" class="tp-header-blur tp-header-area tp-header-border tp-header-lg-ptb">
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
                              <li class="has-dropdown">
                                 <a href="{{ url('/') }}">Home</a>
                                 <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}">Home 01</a></li>
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
                              <li class="has-dropdown">
                                 <a href="{{ url('/city-details-2') }}">Detonations</a>
                                 <div class="sub-menu tp-megamenu-wrapper">
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
                              <li class="has-dropdown active">
                                 <a href="{{ url('/tour-grid') }}">Tour Listing</a>
                                 <ul class="sub-menu">
                                    <li><a href="{{ url('/tour-grid') }}">Tour Grid</a></li>
                                    <li><a href="{{ url('/tour-grid-sidebar') }}">Tour Grid Sidebar</a></li>
                                    <li><a href="{{ url('/tour-grid-map') }}">Tour Grid Map</a></li>
                                    <li><a href="{{ url('/tour-list-map') }}">Tour List Map</a></li>
                                    <li><a href="{{ url('/tour-list-left-sidebar') }}">Tour List Left Sidebar</a></li>
                                    <li><a href="{{ url('/tour-list-right-sidebar') }}">Tour List Right Sidebar</a></li>
                                    <li><a href="{{ url('/tour-details') }}">Tour Details 01</a></li>
                                    <li class="active"><a href="{{ url('/tour-details-2') }}">Tour Details 02</a></li>
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
                           <div class="tp-header-typing-wrap">
                              <span class="typed-text"></span>
                              <div class="typed-strings d-none">
                                 <span>Singapore</span>
                                 <span>Maldives</span>
                                 <span>Dubai</span>
                                 <span>Thailand</span>
                                 <span>Vietnam</span>
                                 <span>Kashmir</span>
                              </div>
                           </div>
                           <input class="tp-input" type="text" placeholder="Search for">
                           <button class="tp-header-search-btn" type="submit">
                              <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.64267 10.7857C8.48288 10.7857 10.7853 8.48318 10.7853 5.64286C10.7853 2.80254 8.48288 0.5 5.64267 0.5C2.80245 0.5 0.5 2.80254 0.5 5.64286C0.5 8.48318 2.80245 10.7857 5.64267 10.7857Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M12.5 12.5L9.92871 9.92857" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </form>
                     </div>
                     <div class="tp-header-contact ml-10 d-none d-sm-block">
                        <a href="tel:(406)555-0120">(406) 555-0120</a>
                     </div>
                     <div class="tp-header-top-menu-item tp-header-login ml-10 d-none d-xl-block">
                        <span class="tp-header-login-btn" id="tp-header-login-btn">
                           <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.84473 8.18158C10.3622 8.18158 13.3237 10.6105 13.5391 13.7441L13.5361 13.8535C13.5034 14.097 13.2968 14.2697 13.0654 14.289L13.0645 14.29C12.7649 14.313 12.5416 14.0808 12.5195 13.8163V13.8144C12.3342 11.2383 9.85653 9.20209 6.84473 9.20209C3.81703 9.20222 1.34055 11.2545 1.1709 13.83V13.832C1.15142 14.0657 0.978315 14.2535 0.763672 14.2968L0.668945 14.3056H0.625V14.3046C0.335307 14.282 0.128516 14.0353 0.151367 13.7597C0.366927 10.6106 3.32725 8.18171 6.84473 8.18158Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                              <path d="M6.84473 0.149597C8.94337 0.149833 10.6426 1.84973 10.6426 3.94843C10.6423 6.04692 8.94322 7.74604 6.84473 7.74628C4.74603 7.74628 3.04613 6.04707 3.0459 3.94843C3.0459 1.84958 4.74588 0.149597 6.84473 0.149597ZM6.84473 1.18573C5.32757 1.18573 4.08203 2.43127 4.08203 3.94843C4.08227 5.46538 5.32772 6.71014 6.84473 6.71014C8.36154 6.7099 9.60621 5.46524 9.60645 3.94843C9.60645 2.43141 8.36169 1.18597 6.84473 1.18573Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                           </svg>
                        </span>
                        <ul>
                           <li>
                              <a href="{{ url('/login') }}"><i class="icon far fa-user"></i> Login</a>
                           </li>
                           <li>
                              <a href="{{ url('/register') }}"> <i class="icon fas fa-user-plus"></i> Register</a>
                           </li>
                        </ul>
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
@php
  $resolveImg = function ($img) use ($tour) {
      if (blank($img)) return $tour->imageUrl();
      if (\Illuminate\Support\Str::startsWith($img, ['http://', 'https://', '/'])) return $img;
      if (\Illuminate\Support\Str::startsWith($img, ['turiehtml-10/', 'images/', 'storage/'])) return asset($img);
      return asset('storage/'.$img);
  };
  $gallery = collect($tour->gallery ?: [])->map($resolveImg)->filter()->values()->all();
  if (empty($gallery)) {
      $gallery = [
          $tour->imageUrl(),
          asset('turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-2.jpg'),
          asset('turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-3.jpg'),
          asset('turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-4.jpg'),
          asset('turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-5.jpg'),
      ];
  }
  // duplicate first slides like template if few images
  while (count($gallery) < 5) {
      $gallery[] = $gallery[count($gallery) % max(1, count($gallery))];
  }
  $destinations = $tour->destinations ?: [];
  $included = $tour->included ?: [];
  $excluded = $tour->excluded ?: [];
  $places = $tour->places ?: [];
  $itinerary = $tour->itinerary ?: [];
  $faqs = $tour->faqs ?: [];
  $durationOptions = $tour->duration_options ?: [];
  $routeArrow = '<span><svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 3.18201C0.223858 3.18201 0 3.40586 0 3.68201C0 3.95815 0.223858 4.18201 0.5 4.18201V3.68201V3.18201ZM16.8536 4.03556C17.0488 3.8403 17.0488 3.52372 16.8536 3.32845L13.6716 0.146473C13.4763 -0.0487893 13.1597 -0.0487893 12.9645 0.146473C12.7692 0.341735 12.7692 0.658318 12.9645 0.85358L15.7929 3.68201L12.9645 6.51043C12.7692 6.7057 12.7692 7.02228 12.9645 7.21754C13.1597 7.4128 13.4763 7.4128 13.6716 7.21754L16.8536 4.03556ZM0.5 3.68201V4.18201H16.5V3.68201V3.18201H0.5V3.68201Z" fill="currentColor" /></svg></span>';
  $checkSvg = '<svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7643 0.235294C10.45 -0.0784314 9.97857 -0.0784314 9.66428 0.235294L3.77143 6.11765L1.33571 3.68628C1.02143 3.37255 0.55 3.37255 0.235714 3.68628C-0.0785714 4 -0.0785714 4.47059 0.235714 4.78431L3.22143 7.76471C3.37857 7.92157 3.53571 8 3.77143 8C4.00714 8 4.16429 7.92157 4.32143 7.76471L10.7643 1.33333C11.0786 1.01961 11.0786 0.54902 10.7643 0.235294Z" fill="#73B458" /></svg>';
  $crossSvg = '<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.71314 3.99386L7.85964 0.847356C7.95072 0.753055 8.00112 0.626754 7.99998 0.495655C7.99884 0.364557 7.94626 0.239151 7.85355 0.146447C7.76085 0.0537425 7.63544 0.00115811 7.50434 1.89013e-05C7.37325 -0.00112031 7.24694 0.0492769 7.15264 0.140356L4.00614 3.28686L0.859644 0.140356C0.765343 0.0492769 0.639042 -0.00112031 0.507944 1.89013e-05C0.376845 0.00115811 0.251439 0.0537425 0.158735 0.146447C0.0660308 0.239151 0.0134464 0.364557 0.0123072 0.495655C0.011168 0.626754 0.0615652 0.753055 0.152644 0.847356L3.29914 3.99386L0.152644 7.14036C0.104889 7.18648 0.0667977 7.24165 0.0405932 7.30265C0.0143887 7.36366 0.000595786 7.42927 1.88782e-05 7.49566C-0.00055803 7.56205 0.012093 7.62788 0.0372334 7.68933C0.0623738 7.75078 0.0995004 7.80661 0.146447 7.85355C0.193393 7.9005 0.249219 7.93763 0.310667 7.96277C0.372115 7.98791 0.437955 8.00056 0.504345 7.99998C0.570734 7.9994 0.636344 7.98561 0.697346 7.95941C0.758348 7.9332 0.813521 7.89511 0.859644 7.84736L4.00614 4.70086L7.15264 7.84736C7.24694 7.93844 7.37325 7.98883 7.50434 7.98769C7.63544 7.98655 7.76085 7.93397 7.85355 7.84127C7.94626 7.74856 7.99884 7.62315 7.99998 7.49206C8.00112 7.36096 7.95072 7.23466 7.85964 7.14036L4.71314 3.99386Z" fill="#FD4621" /></svg>';
@endphp

      <!-- tp-tour-details-area-start -->
      <div class="tp-tour-details-2-area tp-tour-details-2-spacing pt-80">
         <div class="tp-tour-details-2-gallery">
            <div class="swiper tp-instagram-slide">
               <div class="swiper-wrapper slide-transtion">
                  @foreach ($gallery as $gimg)
                  <div class="swiper-slide">
                     <div class="tp-instagram-thumb p-relative">
                        <a class="popup-image" href="{{ $gimg }}">
                           <img class="w-100" src="{{ $gimg }}" alt="{{ $tour->title }}">
                        </a>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
         <div class="tp-tour-details-2-content pt-60">
            <div class="container container-1350">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="tp-tour-details-content">
                        <h3 class="tp-tour-details-title fw-600 mb-30">{{ $tour->title }}</h3>
                        @if ($tour->overview)
                        <div class="mb-30">
                           @foreach (preg_split("/\n\s*\n/", trim($tour->overview)) as $paragraph)
                              @if (filled(trim($paragraph)))
                                 <p class="mb-15">{{ trim($paragraph) }}</p>
                              @endif
                           @endforeach
                        </div>
                        @endif
                        @if (!empty($tour->highlights))
                        <div class="tp-tour-details-highlight tp-tour-details-border pb-35 mb-40">
                           <h3 class="tp-tour-details-title fw-600 mb-20">Highlights</h3>
                           <ul style="display:grid;grid-template-columns:1fr 1fr;gap:8px 28px;list-style:none;padding:0;margin:0;">
                              @foreach ($tour->highlights as $highlight)
                                 <li style="display:flex;gap:8px;align-items:flex-start;margin:0;line-height:1.45;font-size:15px;color:var(--tp-grey-1,#555);">
                                    <span style="flex-shrink:0;margin-top:3px;line-height:1;">{!! $checkSvg !!}</span>
                                    <span>{{ $highlight }}</span>
                                 </li>
                              @endforeach
                           </ul>
                        </div>
                        @endif
                        <div class="tp-tour-details-destination d-flex align-items-start flex-wrap tp-tour-details-border pb-30 mb-35">
                           @if ($tour->duration_label)
                           <span class="tp-tour-details-destination-badge mr-15">{{ $tour->duration_label }}</span>
                           @endif
                           @if (count($destinations))
                           <div class="tp-tour-details-destination-list">
                              <ul>
                                 @foreach ($destinations as $dest)
                                 <li>
                                    <span class="tp-tour-details-destination-count fw-600 lh-1 mr-10">{{ $dest['days'] ?? '' }}</span>
                                    <div class="lh-1">
                                       <span class="tp-tour-details-destination-route fw-400 lh-1 d-inline-block">Days in</span>
                                       <h3 class="tp-tour-details-destination-city fw-500 lh-1 mb-0">{{ $dest['city'] ?? '' }}</h3>
                                    </div>
                                 </li>
                                 @endforeach
                              </ul>
                           </div>
                           @endif
                        </div>
                        <div class="tp-tour-details-info tp-tour-details-border pb-35 mb-50">
                           <ul>
                              <li>
                                 <span class="tp-tour-details-info-icon">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M0.5 19.5H22.4986" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M1.65744 13.1013C2.17043 12.7707 2.69265 12.2911 2.76767 11.6787C3.30797 7.26699 7.01126 3.85291 11.4993 3.85291C15.9874 3.85291 19.6906 7.26699 20.231 11.6787C20.306 12.2911 20.8282 12.7707 21.3412 13.1013C21.7959 13.3944 22.126 13.8752 22.2199 14.4478L22.4986 15.5882H0.5L0.778723 14.4478C0.872635 13.8752 1.20273 13.3944 1.65744 13.1013Z" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M11.4979 3.85294V0.5M11.4979 0.5H8.74805M11.4979 0.5H14.2477" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M19.1984 2.73535L18.6484 3.853M21.9482 5.52947L20.8493 6.08829" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M3.79866 2.73535L4.34862 3.853M2.1478 6.08829L1.04883 5.52947" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </span>
                                 <div class="tp-tour-details-info-content">
                                    <span>Accommodation</span>
                                    <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->accommodation ?: 'Safari Lodge' }}</h3>
                                 </div>
                              </li>
                              <li>
                                 <span class="tp-tour-details-info-icon">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M13.1 6.79993H8.9C6.2939 6.79993 5.75 7.34383 5.75 9.94993V21.4999H16.25V9.94993C16.25 7.34383 15.7061 6.79993 13.1 6.79993Z" stroke="#141B34" stroke-linejoin="round" />
                                       <path d="M9.94922 10.9999H12.0492M9.94922 14.1499H12.0492M9.94922 17.2999H12.0492" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M20.4508 21.4999V6.9948C20.4508 5.7051 20.4508 5.06024 20.1371 4.54202C19.8235 4.02381 19.2587 3.73542 18.1291 3.15865L13.5703 0.831009C12.3519 0.208863 12.0508 0.428124 12.0508 1.79005V6.48856" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M1.55078 21.4999V12.0499C1.55078 11.1812 1.73208 10.9999 2.60078 10.9999H5.75078" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M21.5 21.4999H0.5" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </span>
                                 <div class="tp-tour-details-info-content">
                                    <span>Departure City</span>
                                    <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->departure_city ?: 'Arusha' }}</h3>
                                 </div>
                              </li>
                              <li>
                                 <span class="tp-tour-details-info-icon">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M15.4376 5.4486L11.7614 4.76574L8.73253 0.80433C8.68453 0.741035 8.6196 0.695062 8.54648 0.672549L6.35857 0.0136455C6.16006 -0.0433097 5.95606 0.0832298 5.90299 0.296325C5.88564 0.366009 5.8862 0.439437 5.90462 0.508821L6.7195 3.7035L4.48694 3.36407C4.18927 2.63329 3.11764 0.385027 1.20136 0.125459C0.997457 0.0981547 0.811503 0.253397 0.786061 0.472282C0.782805 0.500286 0.78234 0.528638 0.784619 0.556742L1.15671 4.74976C1.16122 4.90565 1.24988 5.04442 1.38369 5.10517L17.5623 10.6759C17.7578 10.7439 17.9676 10.629 18.031 10.4192C18.0357 10.4039 18.0395 10.3882 18.0423 10.3724C18.2953 8.97873 18.0795 6.15542 15.4376 5.4486ZM17.3614 9.79736L1.84508 4.4263L1.55857 1.04792C3.05439 1.63095 3.85439 3.85126 3.86183 3.87522C3.90913 4.01149 4.02174 4.10938 4.15578 4.13079L7.16229 4.59003C7.28629 4.6087 7.41076 4.55918 7.49346 4.45825C7.57401 4.36171 7.60592 4.22918 7.57904 4.10284L6.7902 0.988024L8.23392 1.4233L11.2814 5.41665C11.3378 5.49038 11.417 5.53995 11.5046 5.55642L15.2888 6.25925C17.3093 6.79835 17.4209 8.86691 17.3614 9.79736Z" fill="black" />
                                       <path d="M19.6279 14.2013H0.372093C0.166605 14.2013 0 14.3801 0 14.6006C0 14.8212 0.166605 15 0.372093 15H19.6279C19.8334 15 20 14.8212 20 14.6006C20 14.3801 19.8334 14.2013 19.6279 14.2013Z" fill="black" />
                                    </svg>
                                 </span>
                                 <div class="tp-tour-details-info-content">
                                    <span>Arrival City</span>
                                    <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->arrival_city ?: ($tour->location ?: 'Tanzania') }}</h3>
                                 </div>
                              </li>
                              <li>
                                 <span class="tp-tour-details-info-icon">
                                    <svg width="31" height="21" viewBox="0 0 31 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M7.06744 20.5C3.44134 20.5 0.5 17.5136 0.5 13.832C0.5 10.1504 3.44134 7.16406 7.06744 7.16406C7.95905 7.16406 8.80915 7.34469 9.58426 7.67159" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M7.06836 7.16407C7.06836 3.48247 10.0097 0.5 13.6358 0.5C16.2751 0.5 18.5508 2.08066 19.5914 4.3601" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M7.06836 20.499H23.9835C27.5863 20.4724 30.5004 17.4967 30.5004 13.8321C30.5004 10.7604 28.4541 8.17387 25.6694 7.40107C25.5547 5.32351 23.86 3.66882 21.7869 3.66882C20.9721 3.66882 20.2186 3.92524 19.5914 4.36016C19.0113 4.7625 18.5449 5.32032 18.2494 5.97376" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M22.9121 18.3984H23.2913C24.3769 18.3903 25.3808 18.012 26.1862 17.3816" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M27.5039 15.8143C27.6704 15.5023 27.8046 15.1701 27.9018 14.8226" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </span>
                                 <div class="tp-tour-details-info-content">
                                    <span>Best Season</span>
                                    <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->best_season ?: 'Year-round' }}</h3>
                                 </div>
                              </li>
                              <li>
                                 <span class="tp-tour-details-info-icon">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M10.5 20.5L8.5 14.5H0.5L2.5 20.5H10.5ZM10.5 20.5H14.5" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M10.5 11.5V11C10.5 9.1144 10.5 8.17157 9.9142 7.58579C9.3284 7 8.38562 7 6.5 7C4.61438 7 3.67157 7 3.08579 7.58579C2.5 8.17157 2.5 9.1144 2.5 11V11.5" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M17.5 11.5C17.5 12.6046 16.6046 13.5 15.5 13.5C14.3954 13.5 13.5 12.6046 13.5 11.5C13.5 10.3954 14.3954 9.5 15.5 9.5C16.6046 9.5 17.5 10.3954 17.5 11.5Z" stroke="#141B34" />
                                       <path d="M8.5 2.5C8.5 3.60457 7.60457 4.5 6.5 4.5C5.39543 4.5 4.5 3.60457 4.5 2.5C4.5 1.39543 5.39543 0.5 6.5 0.5C7.60457 0.5 8.5 1.39543 8.5 2.5Z" stroke="#141B34" />
                                       <path d="M12.5 16H18.5C19.6046 16 20.5 16.8954 20.5 18V18.5C20.5 19.6046 19.6046 20.5 18.5 20.5H17.5" stroke="#141B34" stroke-linecap="round" />
                                    </svg>
                                 </span>
                                 <div class="tp-tour-details-info-content">
                                    <span>Guide</span>
                                    <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->guide_type ?: 'Guided' }}</h3>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="tp-tour-dayfilter mb-30">
                           <h3 class="tp-tour-details-title fw-600 mb-25">Choose Trip Duration</h3>
                           <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-5 row-cols-2 gx-15">
                              @forelse ($durationOptions as $opt)
                              <div class="col">
                                 <div class="tp-tour-dayfilter-item mb-10">
                                    <a href="#" class="tp-tour-dayfilter-thumb mb-10 p-relative fix d-block">
                                       <img class="w-100" src="{{ $resolveImg($opt['image'] ?? '') }}" alt="">
                                       <span class="tp-tour-dayfilter-duration fw-600 lh-1">{{ $opt['days'] ?? '' }} Days</span>
                                    </a>
                                    <div class="tp-tour-dayfilter-content">
                                       <span class="tp-tour-dayfilter-subtitle fw-400 d-block lh-1">Starting from</span>
                                       <span class="tp-tour-dayfilter-price fw-600">{{ isset($opt['price']) ? ($tour->currency === 'USD' ? '$' : $tour->currency.' ').number_format((float)$opt['price'], 0) : $tour->formatPrice() }}</span>
                                    </div>
                                 </div>
                              </div>
                              @empty
                              <div class="col">
                                 <div class="tp-tour-dayfilter-item mb-10">
                                    <a href="#" class="tp-tour-dayfilter-thumb mb-10 p-relative fix d-block">
                                       <img class="w-100" src="{{ $tour->imageUrl() }}" alt="">
                                       <span class="tp-tour-dayfilter-duration fw-600 lh-1">{{ $tour->duration_days ?: $tour->duration_label ?: 'Multi' }} {{ is_numeric($tour->duration_days) ? 'Days' : '' }}</span>
                                    </a>
                                    <div class="tp-tour-dayfilter-content">
                                       <span class="tp-tour-dayfilter-subtitle fw-400 d-block lh-1">Starting from</span>
                                       <span class="tp-tour-dayfilter-price fw-600">{{ $tour->formatPrice() }}</span>
                                    </div>
                                 </div>
                              </div>
                              @endforelse
                           </div>
                        </div>
                        <div class="tp-tour-destination-filters mb-55">
                           <h3 class="tp-tour-details-title fw-600 mb-20">Destination Routes</h3>
                           <ul>
                              @forelse ($destinations as $dest)
                              <li>
                                 <a href="#">{{ $dest['city'] ?? '' }}
                                    {!! $routeArrow !!}
                                 </a>
                              </li>
                              @empty
                              <li><a href="#">{{ $tour->location ?: 'Tanzania' }} {!! $routeArrow !!}</a></li>
                              @endforelse
                           </ul>
                        </div>
                        <div class="tp-tour-destination-filters tp-tour-destination-filters-2 tp-tour-details-border pb-40 mb-45">
                           <h3 class="tp-tour-details-title fw-600 mb-20">Stay Category</h3>
                           <ul>
                              <li>
                                 <a href="#">{{ $tour->stay_category ?: 'Deluxe' }}</a>
                              </li>
                           </ul>
                        </div>
                        <div class="tp-tour-details-highlight tp-tour-details-included  tp-tour-details-border pb-40 mb-40">
                           <h3 class="tp-tour-details-title fw-600 mb-20">What's included</h3>
                           <div class="tp-tour-details-included-list">
                              <div class="read-more-wrapper">
                                 <ul class="load-more-content">
                                    @forelse ($included as $item)
                                    <li>
                                       {!! $checkSvg !!}
                                       {{ $item }}
                                    </li>
                                    @empty
                                    <li>{!! $checkSvg !!} Guided tour service</li>
                                    <li>{!! $checkSvg !!} Accommodation</li>
                                    <li>{!! $checkSvg !!} Park fees</li>
                                    @endforelse
                                 </ul>
                                 <button class="toggle-btn">Read More..</button>
                              </div>
                              <div>
                                 <ul>
                                    @forelse ($excluded as $item)
                                    <li>
                                       {!! $crossSvg !!}
                                       {{ $item }}
                                    </li>
                                    @empty
                                    <li>{!! $crossSvg !!} Personal travel insurance</li>
                                    <li>{!! $crossSvg !!} Alcoholic beverages</li>
                                    @endforelse
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="tp-tour-details-place-wrap mb-15">
                           <h3 class="tp-tour-details-title fw-600 mb-25">Places You’ll See</h3>
                           <div class="row">
                              @forelse ($places as $place)
                              <div class="col-md-4 col-sm-6">
                                 <div class="tp-tour-details-place-thumb mb-30">
                                    <a class="popup-image" href="{{ $resolveImg($place['image'] ?? '') }}">
                                       <img class="w-100" src="{{ $resolveImg($place['image'] ?? '') }}" alt="{{ $place['name'] ?? '' }}">
                                    </a>
                                    <span class="fw-600">{{ $place['name'] ?? '' }}</span>
                                 </div>
                              </div>
                              @empty
                              <div class="col-md-4 col-sm-6">
                                 <div class="tp-tour-details-place-thumb mb-30">
                                    <a class="popup-image" href="{{ $tour->imageUrl() }}">
                                       <img class="w-100" src="{{ $tour->imageUrl() }}" alt="{{ $tour->location }}">
                                    </a>
                                    <span class="fw-600">{{ $tour->location ?: 'Tanzania' }}</span>
                                 </div>
                              </div>
                              @endforelse
                           </div>
                        </div>
                        <div class="tp-tour-itinerary-wrap mb-100">
                           <h3 class="tp-tour-details-title fw-600 mb-20">Tour Plan</h3>
                           <div class="p-relative mb-40">
                              <div class="swiper-container tp-tour-itinerary-slider-active fix">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="tp-tour-itinerary-thumb">
                                          <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/tour/details-2/itinerary/thumb.jpg') }}" alt="">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="tp-tour-itinerary-thumb">
                                          <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/tour/details-2/itinerary/thumb-2.jpg') }}" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-tour-itinerary-content d-flex align-items-center justify-content-between">
                                 <div class="tp-tour-itinerary-list">
                                    <div class="d-flex align-items-center">
                                       <span class="tp-tour-itinerary-count fw-600 lh-1 mr-10">{{ $tour->duration_days ?: count($destinations) ?: 1 }}</span>
                                       <div class="lh-1">
                                          <span class="tp-tour-itinerary-route fw-400 lh-1 mb-5 d-inline-block">Days in</span>
                                          <h3 class="tp-tour-itinerary-city fw-500 lh-1 mb-0">{{ $tour->location ?: 'Tanzania' }}</h3>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-tour-details-destination-img">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/tour/details-2/itinerary/user.png') }}" alt="">
                                 </div>
                              </div>
                              <div class="tp-tour-itinerary-slider-arrow">
                                 <button class="tp-tour-itinerary-arrow-prev">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.74995 0.75C6.74995 0.75 0.75 5.1689 0.75 6.75C0.75 8.3312 6.75 12.75 6.75 12.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </button>
                                 <button class="tp-tour-itinerary-arrow-next">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M0.750049 0.75C0.750049 0.75 6.75 5.1689 6.75 6.75C6.75 8.3312 0.75 12.75 0.75 12.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </button>
                              </div>
                           </div>
                           <div class="tp-tour-details-plan-list">
                              <ul>
                                 @forelse ($itinerary as $day)
                                 <li class="mb-30">
                                    <h4>{{ ($day['day'] ?? '') }}{{ !empty($day['title']) ? ': '.$day['title'] : '' }}</h4>
                                    @if (!empty($day['description']))
                                       <p>{{ $day['description'] }}</p>
                                    @endif
                                    @if (!empty($day['altitude']) || !empty($day['hiking_time']) || !empty($day['distance']) || !empty($day['meals']) || !empty($day['accommodation']))
                                       <ul style="list-style:none;padding-left:0;margin-top:12px;">
                                          @if (!empty($day['altitude']))
                                             <li class="mb-5"><strong>Altitude:</strong> {{ $day['altitude'] }}</li>
                                          @endif
                                          @if (!empty($day['hiking_time']))
                                             <li class="mb-5"><strong>Hiking Time:</strong> {{ $day['hiking_time'] }}</li>
                                          @endif
                                          @if (!empty($day['distance']))
                                             <li class="mb-5"><strong>Distance:</strong> {{ $day['distance'] }}</li>
                                          @endif
                                          @if (!empty($day['meals']))
                                             <li class="mb-5"><strong>Meals:</strong> {{ $day['meals'] }}</li>
                                          @endif
                                          @if (!empty($day['accommodation']))
                                             <li class="mb-5"><strong>Accommodation:</strong> {{ $day['accommodation'] }}</li>
                                          @endif
                                       </ul>
                                    @endif
                                 </li>
                                 @empty
                                 <li>
                                    <h4>Day 01: Arrival</h4>
                                    <p>{{ $tour->overview ?: 'Welcome and trip briefing with your guide.' }}</p>
                                 </li>
                                 @endforelse
                              </ul>
                              @if ($tour->notes)
                                 <div class="mt-30 p-3" style="background:#f7f9f9;border-radius:12px;">
                                    <p class="mb-0"><strong>Note:</strong> {{ $tour->notes }}</p>
                                 </div>
                              @endif
                           </div>
                        </div>
                        <!-- faq here -->
                        <div class="tp-faq-wrap mb-100">
                           <h3 class="tp-tour-details-title fw-600 mb-25">Frequently Asked Questions</h3>
                           <div class="accordion" id="general_faqaccordion">
                              @forelse ($faqs as $i => $faq)
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="order_{{ $i }}">
                                    <button class="accordion-button tp-faq-btn {{ $i ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_{{ $i }}" aria-expanded="{{ $i ? 'false' : 'true' }}" aria-controls="order__collapse_{{ $i }}">
                                       <span class="accordion-btn"></span>
                                       <span class="tp-faq-title">{{ $faq['question'] ?? '' }}</span>
                                    </button>
                                 </h2>
                                 <div id="order__collapse_{{ $i }}" class="accordion-collapse collapse {{ $i ? '' : 'show' }}" role="region" aria-labelledby="order_{{ $i }}" data-bs-parent="#general_faqaccordion">
                                    <div class="accordion-body tp-faq-details-para">
                                       <p>{{ $faq['answer'] ?? '' }}</p>
                                    </div>
                                 </div>
                              </div>
                              @empty
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="order_one">
                                    <button class="accordion-button tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_one" aria-expanded="true" aria-controls="order__collapse_one">
                                       <span class="accordion-btn"></span>
                                       <span class="tp-faq-title">What is included?</span>
                                    </button>
                                 </h2>
                                 <div id="order__collapse_one" class="accordion-collapse collapse show" role="region" aria-labelledby="order_one" data-bs-parent="#general_faqaccordion">
                                    <div class="accordion-body tp-faq-details-para">
                                       <p>Please contact us for a full inclusions list for this package.</p>
                                    </div>
                                 </div>
                              </div>
                              @endforelse
                           </div>
                        </div>
                        <div class="tp-review-wrap mb-25">
                           <h2 class="tp-tour-details-title fw-600 mb-25">Guest Reviews</h2>
                           <div class="tp-review-inner mb-30">
                              <div class="tp-review-rating">
                                 <span class="tp-review-rating-star">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M7.91033 0.690983C8.20968 -0.230327 9.51309 -0.230328 9.81244 0.690983L11.2188 5.01925C11.3527 5.43128 11.7366 5.71024 12.1698 5.71024H16.7208C17.6896 5.71024 18.0923 6.94985 17.3086 7.51925L13.6268 10.1943C13.2763 10.4489 13.1296 10.9003 13.2635 11.3123L14.6699 15.6406C14.9692 16.5619 13.9147 17.328 13.131 16.7586L9.44917 14.0836C9.09868 13.8289 8.62409 13.8289 8.2736 14.0836L4.59175 16.7586C3.80804 17.328 2.75356 16.5619 3.05291 15.6406L4.45925 11.3123C4.59312 10.9003 4.44647 10.4489 4.09598 10.1943L0.414132 7.51925C-0.369582 6.94985 0.0331929 5.71024 1.00192 5.71024H5.55293C5.98616 5.71024 6.37011 5.43128 6.50399 5.01925L7.91033 0.690983Z" fill="currentColor" />
                                    </svg>
                                 </span>
                                 <h2 class="tp-review-rating-title fw-500">{{ number_format((float) $tour->rating, 1) }}/5 Excellent</h2>
                                 <span class="tp-review-rating-number">({{ $tour->reviews_count }} reviews)</span>
                              </div>
                              <div class="row">
                                 <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="tp-review-rating-progress-wrap">
                                       <div class="tp-review-rating-progress">
                                          <span class="tp-review-rating-content">Guide</span>
                                          <div class="tp-review-rating-bar-item d-flex justify-content-between align-items-center">
                                             <div class="tp-review-rating-bar">
                                                <div class="single-progress" data-width="90%"></div>
                                             </div>
                                             <div class="tp-review-rating-bar-text">
                                             <span>4.8/5</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tp-review-rating-progress">
                                          <span class="tp-review-rating-content">Itinerary</span>
                                          <div class="tp-review-rating-bar-item d-flex justify-content-between align-items-center">
                                             <div class="tp-review-rating-bar">
                                                <div class="single-progress" data-width="100%"></div>
                                             </div>
                                             <div class="tp-review-rating-bar-text">
                                             <span>5/5</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tp-review-rating-progress">
                                          <span class="tp-review-rating-content">Check-in</span>
                                          <div class="tp-review-rating-bar-item d-flex justify-content-between align-items-center">
                                             <div class="tp-review-rating-bar">
                                                <div class="single-progress" data-width="90%"></div>
                                             </div>
                                             <div class="tp-review-rating-bar-text">
                                             <span>4.5/5</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="tp-review-rating-progress-wrap">
                                       <div class="tp-review-rating-progress">
                                          <span class="tp-review-rating-content">Transfer</span>
                                          <div class="tp-review-rating-bar-item d-flex justify-content-between align-items-center">
                                             <div class="tp-review-rating-bar">
                                                <div class="single-progress" data-width="100%"></div>
                                             </div>
                                             <div class="tp-review-rating-bar-text">
                                             <span>5/5</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tp-review-rating-progress">
                                          <span class="tp-review-rating-content">Worthily</span>
                                          <div class="tp-review-rating-bar-item d-flex justify-content-between align-items-center">
                                             <div class="tp-review-rating-bar">
                                                <div class="single-progress" data-width="85%"></div>
                                             </div>
                                             <div class="tp-review-rating-bar-text">
                                             <span>4.8/5</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tp-review-rating-progress">
                                          <span class="tp-review-rating-content">Value</span>
                                          <div class="tp-review-rating-bar-item d-flex justify-content-between align-items-center">
                                             <div class="tp-review-rating-bar">
                                                <div class="single-progress" data-width="100%"></div>
                                             </div>
                                             <div class="tp-review-rating-bar-text">
                                             <span>5/5</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-review-count">
                              <p class="mb-0">3 reviews on this Hotel - Showing 1 to 3</p>
                           </div>
                        </div>
                        <div class="tp-tour-review-list mb-25">
                           <div class="tp-tour-review-item">
                              <div class="tp-tour-review-avater">
                                 <div class="tp-tour-review-avater-thumb">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/review/avatar.jpg') }}" alt="review">
                                 </div>
                                 <div class="tp-tour-review-avater-info">
                                    <div class="tp-tour-review-rating">
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                    </div>
                                    <div class="tp-tour-review-avater-content">
                                       <h2 class="tp-tour-review-avater-title">Eleanor Fant <span>06 March, 2023 </span></h2>
                                       <p>Very nice sea view hotel, very clean tour with basic kitchen with cooking facility . Good sleeping
                                          quality, will definitely come back again. You need to have a car.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-tour-review-item">
                              <div class="tp-tour-review-avater">
                                 <div class="tp-tour-review-avater-thumb">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/review/avatar-2.jpg') }}" alt="review">
                                 </div>
                                 <div class="tp-tour-review-avater-info">
                                    <div class="tp-tour-review-rating">
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                    </div>
                                    <div class="tp-tour-review-avater-content">
                                       <h2 class="tp-tour-review-avater-title">Theodore Handle <span>12 April, 2023 </span></h2>
                                       <p>If you want to get away from city life, rent a car and book Joyuam. It is a no-frills<br>
                                          where you can enjoy fresh air and serene surrounding.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-tour-review-item">
                              <div class="tp-tour-review-avater">
                                 <div class="tp-tour-review-avater-thumb">
                                    <img src="{{ asset('turiehtml-10/turie/assets/img/review/avatar-3.jpg') }}" alt="review">
                                 </div>
                                 <div class="tp-tour-review-avater-info">
                                    <div class="tp-tour-review-rating">
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                       <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                    </div>
                                    <div class="tp-tour-review-avater-content">
                                       <h2 class="tp-tour-review-avater-title">Eleanor Fant <span>12 April, 2023 </span></h2>
                                       <p>Very nice sea view hotel, very clean room with basic kitchen with cooking facility sleeping
                                          quality, will definitely come back again. You need to have a car.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-tour-review-form-wrap">
                           <div class="tp-tour-review-form-btn">
                              <button id="showlogin" class="tp-btn mb-40">Write a review</button>
                           </div>
                           <div id="checkout-login" class="tp-tour-review-form-content mb-50">
                              <h2 class="tp-tour-details-title fw-600 mb-0">Add a review</h2>
                              <p class="mb-30">Your email address will not be published. Required fields are marked *</p>
                              <div class="tp-review-rates-wrap mb-25">
                                 <ul>
                                    <li>
                                       <div class="tp-review-item">
                                          <span class="tp-review-stats">Staff</span>
                                          <div class="tp-review-rates">
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-review-item">
                                          <span class="tp-review-stats">Switzerland</span>
                                          <div class="tp-review-rates">
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-review-item">
                                          <span class="tp-review-stats">Netherlands</span>
                                          <div class="tp-review-rates">
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-review-item">
                                          <span class="tp-review-stats">South Korea</span>
                                          <div class="tp-review-rates">
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-review-item">
                                          <span class="tp-review-stats">Maldives</span>
                                          <div class="tp-review-rates">
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-review-item">
                                          <span class="tp-review-stats">Denmark</span>
                                          <div class="tp-review-rates">
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-review-item">
                                          <span class="tp-review-stats">Hungary</span>
                                          <div class="tp-review-rates">
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                             <span><i class="fa-sharp fa-solid fa-star-sharp"></i></span>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tp-tour-review-form">
                                 <form action="#">
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6">
                                          <div class="tp-review-input mb-25">
                                             <label class="tp-label mb-5" for="name">Last Name *</label>
                                             <input class="tp-input" type="text" id="name" placeholder="Smith">
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-6">
                                          <div class="tp-review-input mb-25">
                                             <label class="tp-label mb-5" for="email">Email *</label>
                                             <input class="tp-input" type="email" id="email" placeholder="turie@mail.com">
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tp-review-input mb-25">
                                             <label class="tp-label mb-5" for="title">Title*</label>
                                             <input class="tp-input" type="email" id="title" placeholder="Joines">
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tp-review-input mb-15">
                                             <label class="tp-label mb-5" for="textarea2">Your Comment *</label>
                                             <textarea class="tp-input tp-textarea" id="textarea2"  placeholder="Leave us a  Comment..."></textarea>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tp-review-input mb-30 d-flex align-items-start mb-25">
                                             <input class="tp-checkbox" type="checkbox" id="agree">
                                             <label class="tp-agree" for="agree">I agree that my submitted data is being <a href="{{ url('/privacy-policy') }}">collected and stored.</a></label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tp-tour-review-form-btn">
                                             <button class="tp-btn" type="submit">Post Review</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <div class="tp-booking-sidebar-wrap ml-30 mb-15">
                        <div class="tp-booking-sidebar-item mb-40 tp-republic-day-sale p-relative">
                           <div class="tp-republic-current-rating p-absolute">
                              <span class="tp-republic-current-rating-icon d-inline-block">
                                 <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" />
                                 </svg>
                              </span>
                              <span class="tp-republic-current-rating-score">{{ $tour->rating }}</span>
                              <span class="tp-republic-current-rating-count">({{ $tour->reviews_count }})</span>
                           </div>
                           <div class="tp-republic-day-price-wrap tp-tour-details-border mb-35 pb-20">
                              <div class="tp-republic-day-price-top mb-10">
                                 <span class="tp-republic-day-price new-price">{{ $tour->formatPrice() }}</span>
                                 <span class="tp-republic-day-per">Per Adults</span>
                              </div>
                              @if($tour->old_price)<span class="tp-republic-day-price old-price">{{ $tour->formatPrice((float) $tour->old_price) }}</span>@endif
                           </div>
                           <button class="tp-btn tp-btn-xl w-100" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Send Enquiry</button>
                        </div>
                        <div class="tp-booking-sidebar-item tp-booking-sidebar-form tp-enquiry-form p-relative">
                           <div class="tp-tour-badge p-absolute">
                              <span class="discount tp-ff-inter fw-700">{{ $tour->discount_badge ?: '- Best Deal' }}</span>
                           </div>
                           <div class="tp-tour-price mb-20">
                              <div class="tp-tour-top-price lh-1">
                                 <span class="tp-tour-prefix lh-1 fw-600 mb-5 d-inline-block">From:</span>
                              </div>
                              <div class="tp-tour-bottom-price">
                                 <span class="tp-tour-new-price fw-700">{{ $tour->formatPrice() }}</span>
                                 <span class="tp-tour-suffix">from person</span>
                              </div>
                           </div>
                           <div class="tp-booking-form">
                              <form action="#">
                                 <div class="tp-booking-wrap p-relative">
                                    <div class="tp-booking-location p-relative">
                                       <div class="row gx-10">
                                          <div class="col-xl-6">
                                             <div class="tp-booking-location-input mb-15">
                                                <input class="tp-input" type="text" name="name" placeholder="First name">
                                             </div>
                                          </div>
                                          <div class="col-xl-6">
                                             <div class="tp-booking-location-input mb-15">
                                                <input class="tp-input" type="text" name="name" placeholder="Last name">
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="tp-booking-location-input mb-15">
                                                <input class="tp-input" type="text" name="adults" placeholder="02 Adults">
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="tp-booking-location-input mb-15">
                                                <input class="tp-input" type="text" name="phone" placeholder="Phone">
                                             </div>
                                          </div>
                                          <div class="col-lg-12">
                                             <div class="tp-booking-location-input mb-15">
                                                <textarea class="tp-input tp-textarea"  placeholder="Your question"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <button class="tp-btn tp-btn-xl w-100 mb-20" type="submit">Check Availability</button>
                                    <p class="tp-booking-help text-center mb-0">Need help with booking? <a href="#">Send us a message.</a></p>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-tour-details-area-end -->

      <!-- tp-tour-area-start -->
      <div class="tp-tour-area tp-tour-ptb-2 pt-80 pb-90">
         <div class="container container-1350">
            <div class="row">
               <div class="col-12">
                  <h3 class="tp-tour-details-title fw-600 mb-25">Latest Travel Packages</h3>
               </div>
               @forelse (($related ?? collect()) as $rel)
               <div class="col-xl-4 col-lg-6 col-md-6">
                  @include('turie.partials.package-card-inner', ['tour' => $rel])
               </div>
               @empty
               @endforelse
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
