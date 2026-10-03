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
      <div class="tp-offcanvas-menu mb-50 d-block d-xl-none">
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

   <!-- cart mini area start -->
   <div class="cartmini__area">
      <div class="cartmini__wrapper d-flex justify-content-between flex-column">
         <div class="cartmini__top-wrapper">
            <div class="cartmini__top p-relative">
               <div class="cartmini__top-title">
                  <h4>Shopping cart</h4>
               </div>
               <div class="cartmini__close">
                  <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
               </div>
            </div>
            <div class="cartmini__shipping">
               <p> Free Shipping for all orders over <span>$50</span></p>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
            </div>
            <div class="cartmini__widget">
               <div class="cartmini__widget-item">
                  <div class="cartmini__thumb">
                     <a href="{{ url('/shop-details') }}">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/product/small/shop-thumb-1.png') }}" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5 class="cartmini__title"><a href="{{ url('/shop-details') }}">Woven Chair</a></h5>
                     <div class="cartmini__price-wrapper">
                        <span class="cartmini__price">$120.00</span>
                        <span class="cartmini__quantity">x2</span>
                     </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
               </div>
               <div class="cartmini__widget-item">
                  <div class="cartmini__thumb">
                     <a href="{{ url('/shop-details') }}">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/product/small/shop-thumb-2.png') }}" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5 class="cartmini__title"><a href="{{ url('/shop-details') }}">Paxous Chair</a></h5>
                     <div class="cartmini__price-wrapper">
                        <span class="cartmini__price">$120.00</span>
                        <span class="cartmini__quantity">x2</span>
                     </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
               </div>
               <div class="cartmini__widget-item">
                  <div class="cartmini__thumb">
                     <a href="{{ url('/shop-details') }}">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/product/small/shop-thumb-3.png') }}" alt="">
                     </a>
                  </div>
                  <div class="cartmini__content">
                     <h5 class="cartmini__title"><a href="{{ url('/shop-details') }}">Plush White Chair</a></h5>
                     <div class="cartmini__price-wrapper">
                        <span class="cartmini__price">$120.00</span>
                        <span class="cartmini__quantity">x2</span>
                     </div>
                  </div>
                  <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
               </div>
            </div>
            <!-- for wp -->
         </div>
         <div class="cartmini__checkout">
            <div class="cartmini__checkout-title mb-30">
               <h4>Subtotal:</h4>
               <span>$113.00</span>
            </div>
            <div class="cartmini__checkout-btn">
               <a href="{{ url('/cart') }}" class="tp-btn w-100 mb-10 text-center"> View Cart</a>
               <a href="{{ url('/checkout') }}" class="tp-btn tp-btn-black-red w-100 text-center"> Checkout</a>
            </div>
         </div>
      </div>
   </div>
   <!-- cart mini area end -->


   <header class="tp-header-height">

      <!-- header-area-start -->
      <div class="tp-header-6-top">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-5 d-none d-lg-block">
                  <div class="tp-header-6-info-wrap">
                     <div class="tp-header-6-info-item d-inline-flex align-items-center mr-45">
                        <span class="tp-header-6-info-icon mr-10">
                           <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.13079 6.19648L4.03777 4.28952C4.42677 3.90052 4.56137 3.32574 4.40404 2.79859C4.28102 2.38639 4.14241 1.89085 4.05028 1.46711C3.96506 1.07519 3.62116 0.75 3.22009 0.75H2.13079C1.32865 0.75 0.669916 1.40277 0.757904 2.20007C1.42679 8.26081 6.23918 13.0732 12.2999 13.7421C13.0973 13.8301 13.75 13.1713 13.75 12.3692V11.2799C13.75 10.8789 13.4235 10.5498 13.0289 10.478C12.5936 10.3989 12.133 10.2692 11.7477 10.1463C11.1941 9.9698 10.5788 10.0939 10.168 10.5047L8.30351 12.3692" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </span>
                        <div class="tp-header-6-info-text mt-5">
                           <span class="d-block lh-1">Drop a line</span>
                           <a href="tel:+00(123)45688" class="fw-500 lh-1">+00(123)456 88</a>
                        </div>
                     </div>
                     <div class="tp-header-6-info-item d-inline-flex align-items-center">
                        <span class="tp-header-6-info-icon mr-10">
                           <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.75 2.66174L6.03643 5.65707C7.98534 6.76133 8.80878 6.76133 10.7577 5.65707L16.0441 2.66174" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                              <path d="M0.762059 8.3784C0.812048 10.7227 0.837047 11.8947 1.70203 12.7631C2.567 13.6313 3.77084 13.6615 6.17852 13.722C7.66241 13.7593 9.13171 13.7593 10.6156 13.722C13.0233 13.6615 14.2271 13.6313 15.0921 12.7631C15.9571 11.8947 15.9821 10.7227 16.032 8.3784C16.0482 7.62463 16.0482 6.87537 16.032 6.1216C15.9821 3.77736 15.9571 2.60525 15.0921 1.73698C14.2271 0.868706 13.0233 0.838462 10.6156 0.777966C9.13171 0.740679 7.6624 0.740679 6.17851 0.777959C3.77084 0.838447 2.567 0.868691 1.70202 1.73697C0.837039 2.60524 0.812048 3.77736 0.762052 6.1216C0.745978 6.87537 0.745985 7.62463 0.762059 8.3784Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                           </svg>
                        </span>
                        <div class="tp-header-6-info-text mt-5">
                           <span class="d-block lh-1">Email</span>
                           <a href="mailto:turie@gmail.com" class="fw-500 lh-1">turie@gmail.com</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col-6">
                  <div class="tp-header-logo text-lg-center">
                     <a href="{{ url('/') }}">
                        <img  width="56" height="56" src="{{ asset('enjoyable-tour-logo.png') }}"  alt="Enjoyable Tour" style="object-fit:contain;">
                     </a>
                  </div>
               </div>
               <div class="col-lg-5 col-6">
                  <div class="tp-header-option d-flex align-items-center justify-content-end">
                     <button class="tp-header-cart cartmini-open-btn p-relative d-none d-md-block">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M7.19971 16L16.7916 15.2006C19.7929 14.9506 20.4667 14.295 20.7993 11.3018L21.4995 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" />
                           <path d="M5 5H22.5997" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" />
                           <path d="M5.00025 22.6C6.21526 22.6 7.20021 21.615 7.20021 20.4C7.20021 19.185 6.21526 18.2 5.00025 18.2C3.78525 18.2 2.80029 19.185 2.80029 20.4C2.80029 21.615 3.78525 22.6 5.00025 22.6Z" stroke="currentColor" stroke-width="1.2" />
                           <path d="M17.0999 22.6C18.3149 22.6 19.2998 21.615 19.2998 20.4C19.2998 19.185 18.3149 18.2 17.0999 18.2C15.8849 18.2 14.8999 19.185 14.8999 20.4C14.8999 21.615 15.8849 22.6 17.0999 22.6Z" stroke="currentColor" stroke-width="1.2" />
                           <path d="M7.19971 20.4H14.8996" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" />
                           <path d="M0.600098 0.599976H1.66268C2.70181 0.599976 3.6076 1.28703 3.85963 2.2664L7.13235 14.9841C7.29774 15.6269 7.1562 16.3077 6.74705 16.8378L5.69535 18.2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                        <span>2</span>
                     </button>
                     <div class="tp-header-contact ml-20 d-none d-sm-block">
                        <a href="{{ url('/register') }}">Sign Up</a>
                     </div>
                     <div class="tp-header-toogle-wrapper ml-10">
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
      <div id="header-sticky" class="tp-header-area tp-header-lg-ptb tp-header-blur d-none d-xl-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-6">
                  <div class="tp-header-left">
                     <div class="tp-main-menu tp-menu-dropdown">
                        <nav class="tp-mobile-menu-active">
                           <ul>
                              <li class="has-dropdown active">
                                 <a href="{{ url('/') }}">Home</a>
                                 <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}">Home 01</a></li>
                                    <li><a href="{{ url('/index-2') }}">Home 02</a></li>
                                    <li><a href="{{ url('/index-3') }}">Home 03</a></li>
                                    <li><a href="{{ url('/index-4') }}">Home 04</a></li>
                                    <li><a href="{{ url('/index-5') }}">Home 05</a></li>
                                    <li class="active"><a href="{{ url('/index-6') }}">Home 06</a></li>
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
               </div>
               <div class="col-xl-5 col-6">
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
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header-area-end -->

   </header>

   <main>

      <!-- tp-hero-6-area-start -->
      <div class="tp-hero-6-spacing tp-hero-bg z-index-2 p-relative">
         <div class="tp-hero-two-video tp-hero-6-video p-absolute fix">
            <video loop="" muted="" autoplay="" playsinline="">
               <source src="https://html.aqlova.com/videos/turie/video-4.mp4" type="video/mp4">
            </video>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-hero-6-content">
                     <span class="tp-hero-6-subtitle fw-700 text-white tp-ff-dancing mb-15 d-inline-block">Popular Destination</span>
                     <h4 class="tp-hero-6-title fw-600 text-white">Turn every destination<br> Into pure wonder</h4>
                     <p class="tp-hero-6-dec fw-500 text-white">Explore <span class="d-inline-block lh-1">10,300+</span> Popular Destinations</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-hero-6-area-end -->

      <!-- tp-booking-form-area-start -->
      <div class="tp-booking-form-area">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-booking-form tp-booking-6-form">
                     <form action="#">
                        <div class="tp-booking-wrap d-flex p-relative align-items-end">
                           <div class="tp-booking-location tp-booking-col-1 p-relative">
                              <span class="tp-booking-6-title fw-500 d-inline-block mb-5">Location</span>
                              <div class="tp-booking-location-input tp-booking-toggle p-relative">
                                 <span class="tp-booking-input-icon">
                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.7 6.22727C11.7 10.6818 6.1 14.5 6.1 14.5C6.1 14.5 0.5 10.6818 0.5 6.22727C0.5 4.70831 1.09 3.25155 2.1402 2.17748C3.19041 1.10341 4.61479 0.5 6.1 0.5C7.58521 0.5 9.00959 1.10341 10.0598 2.17748C11.11 3.25155 11.7 4.70831 11.7 6.22727Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M6.09714 8.13583C7.12807 8.13583 7.9638 7.28124 7.9638 6.22705C7.9638 5.17286 7.12807 4.31827 6.09714 4.31827C5.0662 4.31827 4.23047 5.17286 4.23047 6.22705C4.23047 7.28124 5.0662 8.13583 6.09714 8.13583Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </span>
                                 <input class="tp-input" type="text" placeholder="Where to ?">
                              </div>
                              <div class="tp-booking-location-list tp-booking-toggle-active">
                                 <div class="tp-booking-location-inner">
                                    <span class="tp-booking-location-suggested">Suggested destinations</span>
                                    <ul>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/01.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Nearby</span>
                                             <p>Find what’s around you</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/02.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Toronto, Canada</span>
                                             <p>For sights like CN Tower</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/03.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Bangkok, Thailand</span>
                                             <p>For its bustling nightlife</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/04.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>London, United Kingdom</span>
                                             <p>For its stunning architecture</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/05.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Vancouver, Canada</span>
                                             <p>For sights like Stanley Park</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/06.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Kolkata, India</span>
                                             <p>For its top-notch dining</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/07.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Mississauga, Canada</span>
                                             <p>For a tour abroad</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/08.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Downtown Montreal, Canada</span>
                                             <p>For sights like Notre-Dame</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/09.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>New Delhi, India</span>
                                             <p>For its stunning architecture</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/10.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Istanbul, Türkiye</span>
                                             <p>For its bustling nightlife</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/11.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Paris, France</span>
                                             <p>For sights like Eiffel Tower</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/12.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Burnaby, Canada</span>
                                             <p>For nature-lovers</p>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-booking-location-icon">
                                             <img src="{{ asset('turiehtml-10/turie/assets/img/booking-form/13.png') }}" alt="booking">
                                          </div>
                                          <div class="tp-booking-location-content">
                                             <span>Rome, Italy</span>
                                             <p>For a tour abroad</p>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-booking-location tp-booking-col-2 tp-booking-datepicker p-relative">
                              <span class="tp-booking-6-title fw-500 d-inline-block mb-5">Check In - Check Out</span>
                              <div class="tp-booking-location-input tp-booking-toggle p-relative">
                                 <span class="tp-booking-input-icon">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M12.9444 2.00001H2.05556C1.19645 2.00001 0.5 2.67159 0.5 3.50001V14C0.5 14.8284 1.19645 15.5 2.05556 15.5H12.9444C13.8036 15.5 14.5 14.8284 14.5 14V3.50001C14.5 2.67159 13.8036 2.00001 12.9444 2.00001Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M10.6113 0.5V3.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M4.39062 0.5V3.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M0.5 6.5H14.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </span>
                                 <input class="tp-multi-datepicker tp-input" id="date" type="text" name="date" placeholder="Select dates">
                              </div>
                           </div>
                           <div class="tp-booking-location tp-booking-col-3 tp-booking-nohide p-relative">
                              <span class="tp-booking-6-title fw-500 d-inline-block mb-5">Guests</span>
                              <div class="tp-booking-location-input tp-booking-toggle p-relative">
                                 <span class="tp-booking-input-icon">
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M12.651 6.13333C12.651 4.45807 11.2408 3.1 9.50127 3.1C7.76173 3.1 6.35156 4.45807 6.35156 6.13333C6.35156 7.8086 7.76173 9.16667 9.50127 9.16667C11.2408 9.16667 12.651 7.8086 12.651 6.13333Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M12.6337 6.43658C12.9235 6.52117 13.2308 6.56667 13.5492 6.56667C15.2887 6.56667 16.6989 5.2086 16.6989 3.53333C16.6989 1.85807 15.2887 0.5 13.5492 0.5C11.9159 0.5 10.573 1.69721 10.415 3.23011" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M8.5856 3.23011C8.42766 1.69721 7.08474 0.5 5.45146 0.5C3.71193 0.5 2.30176 1.85807 2.30176 3.53333C2.30176 5.2086 3.71193 6.56667 5.45146 6.56667C5.76986 6.56667 6.07722 6.52117 6.36692 6.43658" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M18.5003 10.9C18.5003 8.50679 16.2844 6.56667 13.5508 6.56667" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M14.4479 13.5C14.4479 11.1068 12.2319 9.16667 9.49837 9.16667C6.76481 9.16667 4.54883 11.1068 4.54883 13.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M5.44954 6.56667C2.71598 6.56667 0.5 8.50679 0.5 10.9" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </span>
                                 <input class="tp-input" type="text" placeholder="2 adults, 1 children">
                              </div>
                              <div class="tp-booking-quantity-wrap tp-booking-toggle-active">
                                 <ul class="tp-booking-quantity-list">
                                    <li>
                                       <div class="tp-booking-quantity-content">
                                          <span>Adult</span>
                                          <p>Ages 13 or adove</p>
                                       </div>
                                       <div class="tp-booking-quantity">
                                          <span class="tp-dreckment">
                                             <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                          <input class="tp-input" type="text" value="1">
                                          <span class="tp-increment">
                                             <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-booking-quantity-content">
                                          <span>Children</span>
                                          <p>Ages 2 – 12</p>
                                       </div>
                                       <div class="tp-booking-quantity">
                                          <span class="tp-dreckment">
                                             <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                          <input class="tp-input" type="text" value="1">
                                          <span class="tp-increment">
                                             <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-booking-quantity-content">
                                          <span>Infants</span>
                                          <p>Under 2</p>
                                       </div>
                                       <div class="tp-booking-quantity">
                                          <span class="tp-dreckment">
                                             <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                          <input class="tp-input" type="text" value="1">
                                          <span class="tp-increment">
                                             <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="tp-booking-quantity-content">
                                          <span>Pets</span>
                                          <p><a href="#">Service animal?</a></p>
                                       </div>
                                       <div class="tp-booking-quantity">
                                          <span class="tp-dreckment">
                                             <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                          <input class="tp-input" type="text" value="1">
                                          <span class="tp-increment">
                                             <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tp-booking-submit-btn">
                              <button type="submit">
                                 <svg class="mr-5" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.21389 15.9286C12.4742 15.9286 15.9278 12.4748 15.9278 8.21431C15.9278 3.95381 12.4742 0.5 8.21389 0.5C3.95363 0.5 0.5 3.95381 0.5 8.21431C0.5 12.4748 3.95363 15.9286 8.21389 15.9286Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.4995 18.5L14.6426 14.6429" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 Search
                              </button>
                           </div>
                        </div>
                     </form>
                     <p class="tp-booking-6-dec mt-10">Can’t find what you’re looking for? Create your <a href="#" class="common-underline">Custom Itinerary</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-booking-form-area-end -->

      <!-- tp-destination-area-start -->
      <div class="tp-destination-area tp-tour-ptb-2 pt-130 pb-110 p-relative z-index-2">
         <div class="container">
            <div class="row align-items-end mb-20">
               <div class="col-lg-8">
                  <div class="tp-about-section-title p-relative pb-20">
                     <span class="tp-section-5-subtitle fw-700 d-flex align-items-center mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <svg class="mr-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 0L15.2411 8.75891L24 12L15.2411 15.2411L12 24L8.75891 15.2411L0 12L8.75891 8.75891L12 0Z" fill="#FD4621" />
                        </svg>
                        Popular Destination
                     </span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">Explore iconic travel spots.</h2>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="text-lg-end mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                     <a href="{{ url('/city-details') }}" class="tp-btn tp-btn-border">
                        See More
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M0.599651 0.600037C0.599651 0.600037 5.59961 4.28245 5.59961 5.60004C5.59961 6.9177 0.599609 10.6 0.599609 10.6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-tour-dayfilter-item tp-destination-one-item tp-destination-4-item p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                        <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/destination/eight/thumb.jpg') }}" alt="">
                        <div class="tp-destination-one-content tp-destination-content">
                           <div class="tp-destination-one-left">
                              <h2 class="tp-destination-title common-underline mb-0"><a href="{{ url('/city-details-2') }}">Shibuya crossing</a></h2>
                           </div>
                           <div class="tp-bounce">
                              <a href="{{ url('/city-details-2') }}" class="tp-destination-two-btn">
                                 <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4922 5.8927H0.900117" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.17626 10.8854C7.17626 10.8854 11.8838 7.20828 11.8838 5.89264C11.8838 4.57699 7.17618 0.900024 7.17618 0.900024" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-tour-dayfilter-item tp-destination-one-item tp-destination-4-item p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                     <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                        <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/destination/eight/thumb-2.jpg') }}" alt="">
                        <div class="tp-destination-one-content tp-destination-content">
                           <div class="tp-destination-one-left">
                              <h2 class="tp-destination-title common-underline mb-0"><a href="{{ url('/city-details-2') }}">Tokyo skytree</a></h2>
                           </div>
                           <div class="tp-bounce">
                              <a href="{{ url('/city-details-2') }}" class="tp-destination-two-btn">
                                 <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4922 5.8927H0.900117" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.17626 10.8854C7.17626 10.8854 11.8838 7.20828 11.8838 5.89264C11.8838 4.57699 7.17618 0.900024 7.17618 0.900024" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-tour-dayfilter-item tp-destination-one-item tp-destination-4-item p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                        <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/destination/eight/thumb-3.jpg') }}" alt="">
                        <div class="tp-destination-one-content tp-destination-content">
                           <div class="tp-destination-one-left">
                              <h2 class="tp-destination-title common-underline mb-0"><a href="{{ url('/city-details-2') }}">Akihabara</a></h2>
                           </div>
                           <div class="tp-bounce">
                              <a href="{{ url('/city-details-2') }}" class="tp-destination-two-btn">
                                 <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4922 5.8927H0.900117" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.17626 10.8854C7.17626 10.8854 11.8838 7.20828 11.8838 5.89264C11.8838 4.57699 7.17618 0.900024 7.17618 0.900024" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-tour-dayfilter-item tp-destination-one-item tp-destination-4-item p-relative mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                     <div class="tp-destination-one-thumb tp-tour-dayfilter-thumb p-relative fix">
                        <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/destination/eight/thumb-4.jpg') }}" alt="">
                        <div class="tp-destination-one-content tp-destination-content">
                           <div class="tp-destination-one-left">
                              <h2 class="tp-destination-title common-underline mb-0"><a href="{{ url('/city-details-2') }}">Osaka castle</a></h2>
                           </div>
                           <div class="tp-bounce">
                              <a href="{{ url('/city-details-2') }}" class="tp-destination-two-btn">
                                 <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4922 5.8927H0.900117" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.17626 10.8854C7.17626 10.8854 11.8838 7.20828 11.8838 5.89264C11.8838 4.57699 7.17618 0.900024 7.17618 0.900024" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-destination-area-end -->

      <!-- tp-about-area-start -->
      <div class="tp-about-area tp-about-7 p-relative tp-tour-ptb z-index-2 pt-110 pb-90" data-bg-color="#fff6f5">
         <img class="tp-about-3-shape tptranslateX2" src="{{ asset('turiehtml-10/turie/assets/img/about/three/shape.png') }}" alt="">
         <img class="tp-about-7-shape p-absolute tptranslateY2" src="{{ asset('turiehtml-10/turie/assets/img/about/saven/shape.png') }}" alt="">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6">
                  <div class="tp-about-3-thumb p-relative mb-30 wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                     <img src="{{ asset('turiehtml-10/turie/assets/img/about/saven/thumb.jpg') }}" alt="">
                     <div class="tp-about-3-review">
                        <p class="fw-500 mb-30">“Traveling with this agency
                           was truly life changing. Every
                           detail was perfectly organized
                           from flights.”</p>
                        <div class="tp-about-rating  d-flex flex-wrap align-items-center">
                           <img class="mr-10" src="{{ asset('turiehtml-10/turie/assets/img/about/user.png') }}" alt="">
                           <h3 class="tp-about-rating-title mb-0 mr-10 text-white">4.8</h3>
                           <div class="tp-about-rating-wrap lh-1">
                              <div class="tp-about-rating-icon">
                                 <span>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.30915 0L8.25867 3.94953L12.6183 4.58675L9.46372 7.65931L10.2082 12L6.30915 9.94953L2.41009 12L3.15457 7.65931L0 4.58675L4.35962 3.94953L6.30915 0Z" fill="#FD4621" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.30915 0L8.25867 3.94953L12.6183 4.58675L9.46372 7.65931L10.2082 12L6.30915 9.94953L2.41009 12L3.15457 7.65931L0 4.58675L4.35962 3.94953L6.30915 0Z" fill="#FD4621" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.30915 0L8.25867 3.94953L12.6183 4.58675L9.46372 7.65931L10.2082 12L6.30915 9.94953L2.41009 12L3.15457 7.65931L0 4.58675L4.35962 3.94953L6.30915 0Z" fill="#FD4621" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.30915 0L8.25867 3.94953L12.6183 4.58675L9.46372 7.65931L10.2082 12L6.30915 9.94953L2.41009 12L3.15457 7.65931L0 4.58675L4.35962 3.94953L6.30915 0Z" fill="#FD4621" />
                                    </svg>
                                 </span>
                                 <span>
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.30915 0L8.25867 3.94953L12.6183 4.58675L9.46372 7.65931L10.2082 12L6.30915 9.94953L2.41009 12L3.15457 7.65931L0 4.58675L4.35962 3.94953L6.30915 0Z" fill="#FD4621" />
                                    </svg>
                                 </span>
                              </div>
                              <a href="#">Based on 204 Reviews
                                 <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.09091 7.40436C2.09091 7.40436 6.50619 7.74971 7.12799 7.12799C7.74971 6.50619 7.4043 2.09091 7.4043 2.09091M6.86364 6.86364L0.5 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="tp-about-3-content mb-30 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="tp-about-3-section-title p-relative pb-20">
                        <span class="tp-section-5-subtitle fw-700 d-flex align-items-center mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                           <svg class="mr-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12 0L15.2411 8.75891L24 12L15.2411 15.2411L12 24L8.75891 15.2411L0 12L8.75891 8.75891L12 0Z" fill="#FD4621" />
                           </svg>
                           Popular Destination
                        </span>
                        <h2 class="tp-section-title fw-600 mb-15">Incredible travel destinations<br> across the globe.</h2>
                        <p class="mb-20">Since our journey began, we’ve inspired countless travellers to explore breath-taking destinations,
                     creating unforgettable memories across the globe — and we continue.</p>
                     </div>
                     <div class="tp-about-3-awards-wrap mb-55">
                        <div class="tp-about-3-awards-item d-inline-flex align-items-center">
                           <span class="d-inline-block mr-15">
                              <svg width="51" height="43" viewBox="0 0 51 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M50.9547 22.1297C50.9224 22.1031 50.8757 22.0946 50.8392 22.1069C50.7947 22.1206 50.754 22.1325 50.7155 22.1437L50.6967 22.1492C50.6018 22.177 50.5199 22.2007 50.4387 22.2333C49.1563 22.7429 48.1467 23.6158 47.3521 24.9019C47.1559 25.2197 47.0039 25.5501 46.8828 25.8795C47.0814 24.7714 47.1274 24.3397 47.1625 23.0999C47.1642 23.0479 47.1642 22.995 47.1642 22.9424C47.1642 22.799 47.1642 22.6635 47.1955 22.5399C47.2331 22.3934 47.3087 22.2473 47.3818 22.1059C47.4024 22.0659 47.4229 22.0259 47.4399 21.9907C47.4458 21.9838 47.4649 21.9722 47.4723 21.971C47.839 21.915 48.1633 21.7593 48.464 21.4951C48.767 21.2276 49.0161 20.9001 49.2046 20.5214C49.8814 19.1644 50.22 17.6644 50.2114 16.0637C50.2107 15.9093 50.1925 15.7589 50.1726 15.5954C50.1635 15.5222 50.1543 15.4473 50.1466 15.3697C50.1423 15.3271 50.1161 15.2893 50.0781 15.2709C50.0407 15.2527 49.9954 15.254 49.9576 15.2769C49.9347 15.2912 49.9151 15.3028 49.8974 15.3132C49.863 15.3336 49.8368 15.3496 49.812 15.3675C49.2347 15.7813 48.7255 16.2965 48.2985 16.8983C47.6015 17.882 47.1962 18.9942 47.087 20.2178C47.0761 20.0814 47.0651 19.945 47.0541 19.8086L47.0503 19.7592C47.0075 19.2244 46.9633 18.6714 46.9272 18.1276C46.9181 17.99 46.8917 17.856 46.8661 17.7264C46.8168 17.4772 46.7701 17.2419 46.8448 16.9953C46.8618 16.9396 46.8761 16.8835 46.8904 16.8275C46.9257 16.6888 47.0961 16.4752 47.3577 16.2416L47.3676 16.2328C47.4641 16.151 47.9598 15.6974 48.2411 14.8003C48.5265 13.8889 48.5049 12.9365 48.4892 12.2411L48.4888 12.2226C48.4678 11.2667 48.3645 10.5464 48.1539 9.88661C48.1266 9.80225 48.0943 9.71903 48.06 9.63159C48.0423 9.58608 48.0241 9.53904 48.0055 9.48983C47.9901 9.44815 47.9533 9.41786 47.9102 9.4107L47.8891 9.40878C47.8518 9.40878 47.8169 9.42553 47.7933 9.45442L47.5886 9.70382C46.6074 10.9006 46.1253 12.3042 46.1555 13.8757C46.1607 14.1525 46.1814 14.4364 46.2181 14.7295C45.9687 13.8688 45.6762 13.031 45.3436 12.225C45.3367 12.2074 45.3323 12.1855 45.3317 12.167L45.3294 12.0568C45.326 11.8978 45.3224 11.7333 45.3292 11.5714C45.3302 11.5446 45.3476 11.4964 45.3838 11.449C45.4352 11.3811 45.4922 11.3147 45.5512 11.2457C45.6518 11.1286 45.7558 11.0077 45.8381 10.8696C46.1032 10.4256 46.2277 9.90093 46.2298 9.21844C46.2333 8.41502 46.1095 7.56954 45.8395 6.5575C45.692 6.0054 45.4693 5.28814 45.0546 4.63786C45.0265 4.59414 44.995 4.55298 44.9615 4.50939C44.9465 4.49008 44.9306 4.4695 44.9145 4.44739C44.891 4.41581 44.8585 4.39741 44.8061 4.39741C44.7643 4.40048 44.727 4.42425 44.7061 4.46119C44.1856 5.40063 43.9264 6.40423 43.9141 7.5294C43.9036 8.46756 44.0501 9.27481 44.2338 9.91282C43.7663 9.05878 43.2468 8.23363 42.6837 7.45092L42.6708 7.43315C42.658 7.41615 42.6527 7.40784 42.6535 7.41372C42.6181 7.16048 42.5936 6.95787 42.5766 6.78146C42.577 6.77878 42.5803 6.76395 42.6066 6.71998C42.6438 6.65657 42.6846 6.59444 42.7279 6.52874C42.8149 6.39656 42.9046 6.25978 42.9621 6.10664C43.1357 5.6444 43.1747 5.12017 43.081 4.50453C42.8753 3.14197 42.2747 1.91505 41.2451 0.753445C41.1391 0.634178 41.022 0.528717 40.8982 0.417248L40.8639 0.386185C40.8155 0.342339 40.7657 0.29747 40.7155 0.250045C40.6835 0.219621 40.6378 0.208244 40.5934 0.221283C40.5515 0.234577 40.5191 0.269347 40.5092 0.312554L40.4867 0.41124C40.4713 0.47669 40.4594 0.528334 40.4506 0.580233C40.3121 1.4073 40.3222 2.29317 40.4817 3.28872C40.6399 4.27609 40.9553 5.12771 41.4391 5.86747C40.7136 5.01253 40.0078 4.29463 39.2702 3.65841C39.2669 3.65407 39.2621 3.6409 39.2617 3.63758C39.3193 3.14095 39.1969 2.67309 38.887 2.20727C38.4801 1.59509 37.9147 1.1285 37.2065 0.820684C36.7828 0.636863 36.3437 0.474133 35.9138 0.314728C35.7078 0.238284 35.5019 0.162097 35.2898 0.0804126C35.0767 -0.00433965 34.9856 -0.0194238 34.9361 0.0263398C34.8724 0.0856536 34.8878 0.136275 34.9155 0.228314L34.9245 0.258354C35.1844 1.13374 35.5292 1.82608 35.9791 2.37486C36.8049 3.38332 37.7706 3.89567 38.9301 3.94092C38.9707 3.94335 39.0029 3.9546 39.0161 3.96482C39.1793 4.08703 39.2995 4.18482 39.4057 4.28172C39.7417 4.58877 40.0725 4.91589 40.3962 5.2604C39.9148 4.96127 39.3264 4.82628 38.6637 4.85977C38.301 4.87805 37.941 4.93123 37.593 4.98262L37.5797 4.98466C37.4768 4.99975 37.3744 5.01471 37.2722 5.02915C37.0485 5.05945 36.823 5.09907 36.6239 5.13384C36.5432 5.14829 36.3506 5.19213 36.3062 5.28558C36.2909 5.31754 36.2921 5.35256 36.3095 5.38439C36.3249 5.41213 36.3417 5.43821 36.3602 5.46199C36.935 6.20788 37.5908 6.69914 38.3649 6.96362C39.3088 7.2878 40.1758 7.26109 40.9548 6.87976C41.0739 6.81419 41.2176 6.78095 41.3818 6.78095C41.5056 6.78095 41.5986 6.80051 41.6294 6.80754C41.6755 6.81521 41.7381 6.84103 41.7509 6.85765C42.2354 7.49463 42.6952 8.17495 43.1246 8.88966C42.7618 8.53684 42.2887 8.29895 41.6442 8.14402C41.0793 8.00941 40.5018 7.98052 39.9434 7.9524L39.7564 7.94294C39.5812 7.93399 39.4061 7.92287 39.2257 7.91149L38.9233 7.89283C38.8842 7.89283 38.847 7.91175 38.8242 7.94319C38.799 7.97707 38.793 8.02104 38.8079 8.06054C38.82 8.09352 38.8421 8.15169 38.8535 8.17112C39.4424 9.15619 40.134 9.83753 40.9675 10.2543C41.7822 10.6613 42.5184 10.7689 43.261 10.5913C43.3469 10.5706 43.4465 10.5596 43.5494 10.5596C43.8653 10.5596 44.0855 10.656 44.1318 10.7453C44.5403 11.588 44.9049 12.4638 45.2194 13.3571C44.8896 12.9024 44.4284 12.5331 43.8444 12.2569C43.2643 11.983 42.6603 11.7328 42.066 11.4864C41.8106 11.3808 41.5542 11.2749 41.2989 11.1665C41.2609 11.1498 41.2161 11.1533 41.1807 11.1767C41.1459 11.1998 41.1252 11.2384 41.1252 11.28C41.1252 11.3597 41.9727 13.712 43.2036 14.6389C43.7057 15.017 44.3242 15.406 45.1041 15.4243C45.3375 15.429 45.5788 15.462 45.7611 15.6692C45.789 15.7022 45.8259 15.7279 45.8662 15.7415C45.9285 15.762 45.9456 15.8001 45.9763 15.93C46.2289 16.9905 46.4128 18.0835 46.5261 19.1935C46.4918 19.0809 46.4521 18.9671 46.4064 18.8519C46.1309 18.1533 45.6673 17.5421 44.9474 16.9281C44.5763 16.6103 44.1877 16.3026 43.8118 16.0049L43.7939 15.9908C43.6228 15.8552 43.452 15.7201 43.2817 15.5833C43.2466 15.555 43.2123 15.5259 43.1725 15.4919L43.0663 15.4009C43.0291 15.3694 42.9738 15.3629 42.9303 15.3846C42.8857 15.4073 42.859 15.4541 42.8624 15.504C42.8677 15.5791 42.8719 15.65 42.8758 15.7182L42.8779 15.75C42.8863 15.8902 42.8943 16.0225 42.9084 16.1532C43.0416 17.4252 43.4199 18.4872 44.0648 19.3998C44.464 19.9639 45.0367 20.6535 45.9297 20.9796C46.1471 21.0593 46.3047 21.1801 46.4735 21.3969C46.6328 21.5999 46.6625 21.7854 46.6589 22.0188C46.6437 22.9966 46.574 23.9666 46.4512 24.9165C46.4224 24.6522 46.3616 24.38 46.2681 24.0972C46.0747 23.5118 45.7733 22.9425 45.3464 22.3571C44.978 21.8501 44.5947 21.3413 44.224 20.8491L44.1993 20.8162C44.0523 20.6213 43.9054 20.4261 43.7624 20.2351C43.7355 20.1958 43.6968 20.1818 43.6744 20.174C43.6427 20.1585 43.6049 20.157 43.5712 20.1713C43.5383 20.1854 43.513 20.2131 43.5018 20.2471L43.4975 20.2604C43.4914 20.2783 43.4865 20.2941 43.4839 20.31C43.2283 21.8345 43.3851 23.2004 43.9633 24.4861C44.2457 25.1148 44.6245 25.8266 45.2922 26.3386C45.5971 26.5724 45.8378 26.9005 45.97 27.2621C45.998 27.3399 45.997 27.3737 45.9938 27.3867C45.7111 28.5574 45.342 29.6865 44.8932 30.7552C45.0087 30.192 45.0008 29.6004 44.8689 28.9874C44.6816 28.1187 44.3597 27.2768 44.0726 26.5558L43.9866 26.3399C43.852 26.0021 43.7165 25.6615 43.5765 25.3086C43.5587 25.2635 43.5159 25.2326 43.4588 25.2298C43.4138 25.2298 43.3723 25.2555 43.3509 25.2972L43.3057 25.3821C43.2859 25.4193 43.2674 25.4539 43.2515 25.4897C42.674 26.7928 42.4789 28.1287 42.6721 29.4602C42.8101 30.4122 43.0441 31.094 43.4306 31.6707C43.6307 31.9689 43.8208 32.301 43.8553 32.7094C43.8635 32.806 43.8596 32.8726 43.8166 32.9484C43.329 33.8022 42.7824 34.6079 42.1838 35.3565C42.1861 35.3524 42.1882 35.3483 42.1905 35.3442C42.6212 34.5572 42.6342 33.7062 42.5903 32.9774C42.5523 32.3527 42.4807 31.7289 42.4118 31.1258L42.4079 31.0909C42.3801 30.8493 42.3525 30.6078 42.3273 30.3658C42.3127 30.2287 42.2965 30.0915 42.2798 29.9523L42.2577 29.7639C42.2528 29.7222 42.2274 29.6862 42.1908 29.668C42.1228 29.6325 42.0127 29.6873 41.8938 29.8279C41.0769 30.7942 40.5699 31.8861 40.3868 33.0736C40.197 34.3047 40.2999 35.3583 40.7018 36.2945C40.7126 36.3195 40.7123 36.3703 40.7122 36.3873L40.6906 36.926C40.6874 36.9648 40.6669 37.0085 40.65 37.0247C39.8342 37.8104 38.9361 38.4934 37.9722 39.0618C38.4285 38.6494 38.7565 38.1114 38.9691 37.4296C39.2047 36.6738 39.3256 35.8873 39.4428 35.1246L39.453 35.0567C39.4946 34.7888 39.5379 34.5214 39.5821 34.2481L39.6321 33.9391C39.6393 33.8941 39.6215 33.8491 39.5866 33.8222C39.552 33.7945 39.5019 33.7879 39.462 33.805L39.4184 33.823C39.3719 33.8421 39.3313 33.8591 39.2931 33.8787C37.471 34.7887 36.2716 36.9112 36.4411 38.9253C36.4677 39.2408 36.4388 39.5371 36.3526 39.8306C36.3446 39.8573 36.3187 39.8863 36.3083 39.8912C35.4428 40.2562 34.62 40.5224 33.792 40.7052C33.7495 40.7151 33.7157 40.7455 33.7019 40.7865C33.688 40.8278 33.6964 40.8727 33.7248 40.9064C33.8148 41.0131 33.8931 41.1277 33.9576 41.2477C33.984 41.2968 34.047 41.322 34.0942 41.3097C34.7688 41.1558 35.4257 40.9566 36.0473 40.717C36.0976 40.6968 36.1359 40.6872 36.1719 40.6931C36.3102 40.7115 36.4563 40.7399 36.6185 40.7801C36.652 40.7883 36.6797 40.8038 36.6802 40.8024C37.0346 41.5088 37.6436 41.9587 38.5426 42.1777C38.7382 42.2246 38.9399 42.2593 39.1421 42.2805C39.3538 42.3029 39.5899 42.3142 39.8437 42.3142C40.1952 42.3142 40.4459 42.2925 40.449 42.2923C41.2282 42.2051 41.8937 42.0297 42.4831 41.756C42.725 41.6439 43.0006 41.4929 43.2124 41.2233C43.2529 41.1717 43.2462 41.0972 43.197 41.0538C42.5982 40.5255 41.9886 40.1416 41.3329 39.8803C40.3615 39.4943 39.4767 39.3897 38.6093 39.5565C38.4797 39.5817 38.3532 39.6134 38.2302 39.6499C39.0415 39.1649 39.8184 38.5949 40.552 37.9455C40.5661 37.9327 40.5892 37.9214 40.6072 37.9183C40.7273 37.8983 40.8867 37.8738 41.0498 37.862C41.0649 37.862 41.084 37.8693 41.0862 37.8701C41.5282 38.3648 42.0977 38.6052 42.8273 38.6052C42.8645 38.6052 42.9018 38.6045 42.939 38.6032C43.7322 38.5776 44.5296 38.3597 45.3095 37.9551C45.8763 37.6594 46.4671 37.3151 46.9463 36.8018C47.0525 36.6876 47.1473 36.5585 47.2311 36.4446L47.2392 36.4335C47.2763 36.3833 47.3138 36.3326 47.3522 36.2826C47.3732 36.2557 47.382 36.2209 47.3765 36.1859C47.3707 36.1521 47.3511 36.1221 47.3177 36.1004C47.3093 36.0958 47.1064 35.987 46.9212 35.9153C45.681 35.436 44.4289 35.3869 43.2344 35.7718C42.8434 35.8975 42.4754 36.0862 42.117 36.347C42.7797 35.5766 43.3933 34.7322 43.9504 33.8236C43.9564 33.814 43.9723 33.788 43.9774 33.7833C44.0261 33.7522 44.0759 33.7228 44.1257 33.6938C44.2148 33.6415 44.307 33.5875 44.3937 33.523C44.4668 33.4684 44.4874 33.467 44.5613 33.5146C44.6659 33.5825 44.7874 33.6177 44.8934 33.6455C45.5134 33.8043 46.1384 33.7251 46.8297 33.4006C47.4612 33.1045 47.9467 32.6365 48.3775 32.175C49.0041 31.5019 49.4135 30.8946 49.6661 30.2636C49.7192 30.1311 49.757 29.9942 49.7964 29.8511C49.8126 29.791 49.8292 29.7309 49.8469 29.6718C49.8662 29.6084 49.8324 29.5413 49.7698 29.5192L49.7179 29.5153C49.4624 29.5153 47.1829 29.5527 45.8496 30.8464C45.5595 31.1278 45.2995 31.427 45.0621 31.7545C45.5896 30.6375 46.0369 29.4603 46.3973 28.2383L46.4026 28.2205C46.4069 28.2055 46.4135 28.1829 46.4178 28.1767L46.7665 27.6979C46.7796 27.6787 46.7811 27.6787 46.8015 27.6787C46.8106 27.6787 46.8206 27.6793 46.832 27.68L46.9065 27.6845C47.166 27.7006 47.3188 27.6983 47.4444 27.6786C47.9409 27.6002 48.3891 27.3502 48.8144 26.914C49.809 25.8939 50.4937 24.6212 50.9074 23.0236C50.9517 22.8524 50.9641 22.6796 50.9774 22.4963C50.9833 22.4132 50.9898 22.3276 50.9993 22.2391C51.0032 22.1967 50.9866 22.1561 50.9547 22.1297Z" fill="#111111" />
                                 <path d="M17.2067 40.704C16.3795 40.5213 15.5567 40.255 14.6911 39.8901C14.6807 39.8852 14.655 39.8562 14.647 39.8301C14.5607 39.536 14.5318 39.2397 14.5584 38.9242C14.7279 36.91 13.5284 34.7876 11.7067 33.8777C11.668 33.858 11.6276 33.841 11.5811 33.8219L11.5379 33.804C11.4968 33.7865 11.4468 33.7938 11.4137 33.8204C11.3779 33.848 11.3602 33.893 11.3675 33.9381L11.4173 34.247C11.4615 34.5203 11.5049 34.7877 11.5464 35.0554L11.5569 35.1254C11.6739 35.8862 11.7948 36.6728 12.0304 37.4286C12.243 38.1104 12.571 38.6485 13.0272 39.0607C12.0634 38.4924 11.1652 37.8094 10.3495 37.0239C10.3324 37.0074 10.3121 36.9636 10.3091 36.9276L10.2873 36.3885C10.2872 36.3694 10.2869 36.3185 10.2978 36.2933C10.6995 35.3573 10.8024 34.3037 10.6126 33.0726C10.4296 31.8852 9.92258 30.7932 9.10561 29.8269C9.00999 29.7138 8.92562 29.6565 8.8548 29.6565C8.83755 29.6565 8.82195 29.66 8.80968 29.6664C8.77209 29.6851 8.74666 29.7212 8.74167 29.763L8.71981 29.9511C8.70294 30.0907 8.6867 30.2277 8.67213 30.365C8.64695 30.6068 8.61934 30.8483 8.5916 31.0899L8.58763 31.1248C8.51861 31.7281 8.44702 32.3519 8.40918 32.9765C8.36521 33.7051 8.37825 34.5561 8.80891 35.3433C8.81121 35.3472 8.81326 35.3514 8.81556 35.3554C8.21692 34.6068 7.67044 33.8012 7.1829 32.9476C7.13982 32.8716 7.13611 32.805 7.14416 32.7084C7.1788 32.2997 7.36876 31.9676 7.56882 31.6698C7.95525 31.093 8.18918 30.4113 8.32737 29.4592C8.52052 28.1277 8.32545 26.792 7.74791 25.4889C7.73206 25.4529 7.71352 25.4183 7.69371 25.3811L7.64859 25.296C7.62698 25.2544 7.58083 25.2271 7.53213 25.2292C7.48355 25.2318 7.44073 25.2626 7.42309 25.3073C7.28299 25.6607 7.14749 26.0011 7.01288 26.3389L6.92685 26.5548C6.63974 27.2759 6.31773 28.1178 6.13059 28.9865C5.99867 29.5994 5.99061 30.191 6.1063 30.7542C5.65736 29.6857 5.28831 28.5566 5.00567 27.3857C5.00248 27.3727 5.00145 27.339 5.02945 27.2611C5.16163 26.8993 5.40233 26.5713 5.70734 26.3375C6.375 25.8254 6.75377 25.1137 7.03614 24.485C7.61433 23.1993 7.77118 21.8334 7.51551 20.309C7.51283 20.293 7.50797 20.2772 7.50222 20.2599L7.49762 20.2461C7.48649 20.212 7.46118 20.1844 7.42769 20.1699C7.39497 20.1562 7.35381 20.1588 7.32837 20.1713C7.3028 20.1807 7.26407 20.1948 7.23889 20.2318C7.09418 20.4251 6.9473 20.6201 6.8003 20.8151L6.77562 20.8479C6.40491 21.3402 6.02155 21.849 5.65314 22.3558C5.22631 22.9414 4.92488 23.5107 4.73147 24.0961C4.63816 24.3789 4.57718 24.6511 4.54842 24.9154C4.42557 23.9655 4.3559 22.9956 4.34069 22.0177C4.33711 21.7843 4.36677 21.5988 4.52618 21.3957C4.69491 21.1791 4.85253 21.0582 5.06984 20.9785C5.96274 20.6522 6.53556 19.9628 6.93477 19.3987C7.57968 18.4861 7.95794 17.4242 8.09114 16.1523C8.10533 16.0214 8.11338 15.889 8.12169 15.7489L8.12373 15.717C8.1277 15.6489 8.13192 15.578 8.13728 15.5028C8.14061 15.4529 8.11389 15.4062 8.06928 15.3835C8.02607 15.3618 7.97072 15.3682 7.93314 15.4L7.82717 15.4908C7.78728 15.5248 7.75315 15.5539 7.71774 15.5823C7.5476 15.719 7.37682 15.8542 7.20565 15.9898L7.18775 16.0039C6.81206 16.3015 6.42345 16.6092 6.05235 16.927C5.33228 17.5411 4.86864 18.1524 4.59316 18.851C4.54765 18.9661 4.50777 19.08 4.47351 19.1928C4.58677 18.0827 4.77072 16.9895 5.02331 15.9289C5.05399 15.7991 5.07112 15.761 5.13414 15.7403C5.17377 15.7269 5.21071 15.7011 5.23769 15.6691C5.42087 15.4609 5.66209 15.4279 5.89576 15.4232C6.67553 15.4049 7.29398 15.0159 7.79597 14.6378C9.02686 13.7107 9.87438 11.3586 9.87438 11.2789C9.87438 11.2373 9.85368 11.1986 9.81852 11.1752C9.78388 11.1523 9.73709 11.1491 9.70181 11.1648C9.44538 11.2736 9.18895 11.3796 8.92345 11.4894C8.33926 11.7316 7.73525 11.9819 7.15516 12.2556C6.57135 12.5319 6.11001 12.9013 5.7802 13.3559C6.09454 12.4627 6.45899 11.5871 6.86702 10.7456C6.91394 10.6548 7.13432 10.5584 7.45032 10.5584C7.55309 10.5584 7.65268 10.5694 7.73871 10.5901C8.48115 10.7681 9.21733 10.6602 10.0321 10.253C10.8657 9.83629 11.5573 9.15495 12.1463 8.16949C12.1576 8.15045 12.1797 8.09228 12.1916 8.05969C12.2065 8.0198 12.2005 7.97583 12.1757 7.94246C12.1527 7.91076 12.1159 7.89184 12.069 7.89184C12.0686 7.89184 12.0684 7.89184 12.068 7.89184L11.7737 7.91038C11.5933 7.92176 11.4182 7.93288 11.2431 7.94182L11.0561 7.95129C10.4977 7.97941 9.92015 8.0083 9.35513 8.1429C8.71074 8.29784 8.23763 8.53573 7.87485 8.88855C8.30423 8.17384 8.76404 7.49378 9.24839 6.85679C9.26143 6.83992 9.32394 6.8141 9.3752 6.80553C9.40077 6.79952 9.49383 6.77997 9.61757 6.77997C9.78171 6.77997 9.92539 6.81333 10.0472 6.88031C10.8212 7.25882 11.6905 7.28695 12.6343 6.96276C13.4084 6.69828 14.0641 6.20703 14.6388 5.46138C14.6575 5.43735 14.6743 5.41115 14.6897 5.38354C14.7072 5.35171 14.7083 5.31668 14.693 5.28472C14.6485 5.19141 14.456 5.14756 14.3749 5.13299C14.176 5.09822 13.9507 5.05859 13.7272 5.02829C13.6248 5.01397 13.5223 4.99902 13.4195 4.98381L13.4064 4.98176C13.0582 4.93037 12.6982 4.8772 12.3355 4.85892C11.6728 4.82504 11.0844 4.96029 10.6029 5.25967C10.9267 4.91503 11.2575 4.58804 11.5935 4.28086C11.6997 4.18397 11.8199 4.0863 11.9836 3.96371C11.9963 3.954 12.0285 3.94262 12.068 3.94032C13.2286 3.89494 14.1943 3.38259 15.0201 2.37426C15.4699 1.82535 15.8148 1.13301 16.0747 0.257624L16.0837 0.227584C16.1114 0.135545 16.1267 0.0849239 16.063 0.0256101C16.0137 -0.0201535 15.9271 -0.00660302 15.7018 0.0826233C15.4973 0.16124 15.2915 0.237555 15.0802 0.315916C14.6557 0.473276 14.2166 0.636005 13.7928 0.819827C13.0846 1.12764 12.5191 1.59423 12.1122 2.20641C11.8023 2.67223 11.6799 3.14022 11.7375 3.63467C11.7371 3.64017 11.7323 3.65334 11.7315 3.65487C10.9923 4.29313 10.2856 5.01167 9.56005 5.86687C10.0439 5.12711 10.3592 4.27537 10.5175 3.288C10.677 2.29257 10.6871 1.40657 10.5486 0.579504C10.5397 0.527732 10.5279 0.47596 10.5126 0.41115L10.49 0.311313C10.4798 0.26849 10.4476 0.233848 10.4053 0.220553C10.363 0.208026 10.3155 0.219147 10.284 0.249187C10.2333 0.296868 10.1837 0.341865 10.1353 0.385584L10.1012 0.416391C9.97716 0.528116 9.86007 0.633577 9.7541 0.752843C8.72441 1.91445 8.12386 3.14137 7.91818 4.5038C7.82448 5.11956 7.86334 5.6438 8.03706 6.10604C8.09459 6.25918 8.18433 6.39596 8.27368 6.53172C8.31459 6.59372 8.35549 6.65597 8.39295 6.71988C8.42056 6.76578 8.42286 6.77767 8.42273 6.77549C8.40573 6.95765 8.38131 7.16065 8.34833 7.40429C8.34693 7.40736 8.34233 7.41452 8.32763 7.43395L8.31574 7.45044C7.75264 8.23315 7.23313 9.0583 6.76565 9.91235C6.94948 9.27447 7.09584 8.46708 7.08549 7.52893C7.07296 6.40363 6.81385 5.40003 6.29306 4.46034C6.27248 4.42378 6.23515 4.4 6.18287 4.39642C6.1449 4.39642 6.10835 4.41521 6.08444 4.4473C6.06884 4.46903 6.05299 4.48948 6.03791 4.50891C6.00429 4.55238 5.97284 4.59354 5.94472 4.63751C5.53004 5.28779 5.30761 6.0048 5.15996 6.5569C4.89011 7.56945 4.76612 8.41493 4.76969 9.21784C4.77174 9.90033 4.89612 10.425 5.16124 10.8689C5.24369 11.0071 5.34749 11.128 5.4518 11.2497C5.50715 11.3143 5.56404 11.3806 5.61555 11.4486C5.6516 11.4959 5.66899 11.5441 5.67001 11.571C5.67679 11.7328 5.67321 11.8973 5.66975 12.0563L5.66733 12.1663C5.66694 12.1852 5.6626 12.2069 5.65608 12.2235C5.3232 13.03 5.0306 13.8682 4.78107 14.729C4.81776 14.4359 4.83847 14.1521 4.84371 13.8752C4.87388 12.3037 4.39182 10.9002 3.41059 9.70334L3.20606 9.4542C3.18241 9.42492 3.14739 9.40831 3.11006 9.40831L3.08961 9.4101C3.04589 9.41738 3.00907 9.44768 2.99386 9.48897C2.9752 9.5387 2.95692 9.58561 2.93915 9.63099C2.90489 9.71868 2.87255 9.80177 2.84519 9.88627C2.63465 10.5458 2.53137 11.2662 2.5104 12.2219L2.51002 12.2405C2.4943 12.9358 2.47269 13.8883 2.75827 14.7997C3.03937 15.697 3.5351 16.1504 3.63123 16.2318L3.64145 16.241C3.90313 16.4746 4.07352 16.6882 4.10881 16.8269C4.123 16.8829 4.13744 16.939 4.15431 16.9945C4.22897 17.2413 4.18231 17.4765 4.13194 17.7305C4.10689 17.8587 4.08081 17.9912 4.07173 18.127C4.03569 18.6708 3.99146 19.2238 3.94863 19.7586L3.9448 19.808C3.9338 19.9444 3.92281 20.0808 3.91195 20.2172C3.80278 18.9936 3.39755 17.8814 2.70036 16.8977C2.2734 16.2959 1.76438 15.781 1.18709 15.3669C1.16216 15.349 1.13596 15.333 1.10093 15.3122C1.08393 15.3024 1.06425 15.2906 1.04034 15.2756C1.00429 15.254 0.958018 15.2521 0.920819 15.2703C0.882725 15.2888 0.85652 15.3265 0.852174 15.3692C0.844376 15.4466 0.8353 15.5215 0.825712 15.5992C0.80641 15.7583 0.78813 15.9087 0.787363 16.0631C0.778798 17.6638 1.11742 19.1638 1.79416 20.5208C1.98271 20.8995 2.23186 21.227 2.53495 21.4946C2.83548 21.7586 3.15979 21.9143 3.52577 21.9703C3.53382 21.9717 3.55299 21.9833 3.55593 21.9856C3.57575 22.0254 3.59633 22.0653 3.61691 22.1053C3.69003 22.2465 3.76558 22.3927 3.80316 22.5392C3.83448 22.663 3.83448 22.7984 3.83448 22.9418C3.83448 22.9944 3.83448 23.0473 3.83614 23.0992C3.8713 24.3391 3.91744 24.771 4.11584 25.8789C3.99478 25.5494 3.84279 25.2191 3.64657 24.9013C2.85197 23.6152 1.84248 22.7423 0.560462 22.2329C0.478906 22.2 0.397094 22.1764 0.302243 22.1488L0.283324 22.1431C0.244847 22.1319 0.204068 22.1199 0.160478 22.1066C0.121106 22.0937 0.076237 22.1025 0.0441514 22.1291C0.0121935 22.1555 -0.00455239 22.196 -0.000333956 22.2382C0.00912557 22.3262 0.015645 22.4117 0.021653 22.4952C0.0348197 22.6782 0.0472193 22.8511 0.0915768 23.0221C0.505239 24.6199 1.1899 25.8924 2.18456 26.9126C2.60985 27.3488 3.05803 27.5988 3.55466 27.6772C3.67993 27.6968 3.83307 27.6992 4.09232 27.6831L4.16697 27.6786C4.17835 27.678 4.18832 27.6773 4.19739 27.6773C4.21785 27.6773 4.21951 27.6773 4.2337 27.6983L4.58102 28.1752C4.58549 28.1815 4.59201 28.2041 4.59648 28.2197L4.6016 28.2368C4.96208 29.4589 5.40936 30.636 5.93679 31.7531C5.69941 31.4255 5.43927 31.1264 5.14935 30.845C3.81607 29.5513 1.53658 29.5139 1.28105 29.5139L1.24922 29.5141L1.22915 29.5178C1.16651 29.5401 1.13264 29.6071 1.15194 29.6701C1.16971 29.7295 1.18632 29.7896 1.20537 29.8602C1.2418 29.9927 1.27964 30.1297 1.33269 30.2621C1.58529 30.8933 1.99473 31.5005 2.62149 32.1737C3.05215 32.6351 3.53766 33.1031 4.16901 33.3991C4.86045 33.7238 5.48478 33.803 6.10566 33.644C6.21125 33.6162 6.33269 33.5811 6.43713 33.5133C6.51152 33.4657 6.53185 33.4672 6.60497 33.5217C6.69164 33.5861 6.78381 33.6402 6.87329 33.6926C6.92276 33.7216 6.97261 33.7509 7.01914 33.7803C7.02656 33.7865 7.04241 33.8125 7.04829 33.8221C7.60538 34.7307 8.2191 35.5751 8.88177 36.3455C8.52334 36.0847 8.15531 35.896 7.7644 35.7703C6.56982 35.3854 5.31771 35.4344 4.07762 35.9139C3.89252 35.9856 3.68965 36.0943 3.6761 36.1019C3.64772 36.1206 3.62816 36.1508 3.62202 36.1854C3.61665 36.2194 3.62548 36.2542 3.64618 36.2808C3.68492 36.3311 3.72237 36.3818 3.75944 36.432L3.76762 36.443C3.85135 36.557 3.9462 36.686 4.05256 36.8003C4.53154 37.3138 5.12225 37.658 5.68931 37.9536C6.46908 38.3582 7.2665 38.5761 8.05956 38.6017C8.09689 38.603 8.13422 38.6037 8.17142 38.6037C8.90095 38.6037 9.47044 38.3633 9.90941 37.8715C9.91478 37.8677 9.93383 37.8604 9.94431 37.8603C10.112 37.8723 10.2714 37.8967 10.3906 37.9165C10.4094 37.9198 10.4325 37.9311 10.4469 37.9441C11.1803 38.5934 11.957 39.1632 12.7684 39.6482C12.6454 39.6118 12.5187 39.5801 12.3891 39.5547C11.522 39.388 10.6372 39.4925 9.66551 39.8786C9.00999 40.1399 8.40036 40.5237 7.80173 41.0521C7.75238 41.0954 7.74548 41.1699 7.78613 41.2216C7.99795 41.4912 8.27355 41.6421 8.51528 41.7541C9.10484 42.0281 9.77033 42.2035 10.5505 42.2906C10.5528 42.2908 10.8035 42.3125 11.155 42.3125C11.4087 42.3125 11.6448 42.3011 11.8564 42.2787C12.0586 42.2575 12.2604 42.2229 12.4561 42.1758C13.355 41.957 13.9641 41.507 14.3131 40.8084C14.3193 40.8024 14.3462 40.7868 14.3802 40.7785C14.5424 40.7383 14.6884 40.7099 14.8272 40.6913C14.8599 40.6861 14.9007 40.6949 14.9521 40.7156C15.5729 40.9548 16.2298 41.1541 16.9033 41.3077C16.9128 41.31 16.9226 41.3112 16.9325 41.3112C16.9777 41.3112 17.0194 41.2863 17.0414 41.2456C17.1057 41.126 17.184 41.0112 17.2742 40.9044C17.3024 40.8708 17.3108 40.8261 17.2969 40.7847C17.2836 40.7445 17.2499 40.7141 17.2067 40.704Z" fill="#111111" />
                                 <path d="M31.5634 24.207L36.6996 19.2003C36.8737 19.0306 36.9366 18.7764 36.8613 18.5452C36.7862 18.3137 36.5862 18.145 36.3454 18.1101L29.2478 17.0794L26.0731 10.6478C25.9655 10.4296 25.7433 10.2915 25.5001 10.2915C25.2568 10.2915 25.0345 10.4298 24.927 10.6478L21.7534 17.0794L14.6547 18.1101C14.414 18.145 14.2139 18.3138 14.1388 18.5452C14.0635 18.7764 14.1263 19.0306 14.3005 19.2003L19.4368 24.207L18.2249 31.2759C18.1837 31.5156 18.2823 31.758 18.4792 31.9009C18.6758 32.0439 18.9365 32.0629 19.1522 31.9496L25.5003 28.6126L31.8484 31.9496C31.9419 31.9988 32.044 32.023 32.1456 32.023C32.2782 32.023 32.41 31.9818 32.5213 31.9009C32.7182 31.7581 32.8169 31.5156 32.7756 31.2759L31.5634 24.207Z" fill="#111111" />
                              </svg>
                           </span>
                           <span class="tp-about-3-awards-text fw-500">Award Winning<br> Travel Agency</span>
                        </div>
                        <div class="tp-about-3-awards-item d-inline-flex align-items-center">
                           <span class="d-inline-block mr-15">
                              <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.5678 12.7972C11.5678 12.7972 -0.813843 18.032 0.0424522 27.9617C0.898747 37.8913 19.5683 45.169 43 23.7944C43 23.7944 13.4283 43.2184 4.37481 26.9351C4.37481 26.9351 1.48857 20.0053 11.5678 12.7972Z" fill="#111111" />
                                 <path d="M33.9456 7.45981C35.9596 7.90751 37.4649 9.70008 37.4649 11.843V25.452C36.2651 26.2599 35.0906 26.9726 33.9456 27.5995V7.45981Z" fill="#111111" />
                                 <path d="M37.4649 30.0557C34.7243 31.9981 24.7762 38.4704 13.842 38.5128C14.6447 39.2503 15.7164 39.7005 16.8937 39.7005H32.9599C35.448 39.7005 37.4649 37.6895 37.4649 35.2091V30.0557Z" fill="#111111" />
                                 <path d="M15.9886 7.44228V31.7667C14.3119 31.5949 13.0823 31.2826 12.3888 31.0698V11.843C12.3888 9.6717 13.9345 7.85988 15.9886 7.44228Z" fill="#111111" />
                                 <path d="M16.9553 7.35163V31.8452C20.7327 32.0755 26.3314 31.5256 32.979 28.112V7.35163C32.9726 7.35163 32.9663 7.35163 32.96 7.35163H16.9553Z" fill="#111111" />
                                 <path d="M21.4701 6.2596H20.3961V3.14629C20.3961 3.14629 19.7351 3.24514 19.8508 2.42149C19.9665 1.59787 20.0491 0.609494 22.1146 0H27.8483C27.8483 0 30.112 0.494191 30.1285 2.30615C30.1285 2.30615 30.2773 3.11331 29.5502 3.21213V6.25956H28.4762V3.1298H28.2779C28.2779 3.1298 28.4431 2.35558 27.5508 2.07554H22.2798C22.2798 2.07554 21.5527 2.53676 21.6684 3.1298H21.4247L21.4701 6.2596Z" fill="#111111" />
                                 <path d="M14.2163 39.7005C14.2163 39.7005 15.4391 41.2968 18.7769 40.8356C18.7769 40.8356 18.7108 42.6476 17.0584 42.9441C15.406 43.2405 13.8529 42.387 14.2163 39.7005Z" fill="#111111" />
                                 <path d="M35.7622 39.7005C35.7622 39.7005 34.5394 41.2968 31.2017 40.8356C31.2017 40.8356 31.2677 42.6476 32.9201 42.9441C34.5725 43.2405 36.1257 42.387 35.7622 39.7005Z" fill="#111111" />
                              </svg>
                           </span>
                           <span class="tp-about-3-awards-text fw-500">Professional &<br> Certified</span>
                        </div>
                     </div>
                     <div>
                        <a href="{{ url('/about') }}" class="tp-btn tp-btn-50">
                           About More
                           <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.599651 0.600098C0.599651 0.600098 5.59961 4.28251 5.59961 5.6001C5.59961 6.91776 0.599609 10.6001 0.599609 10.6001" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-about-area-end -->

      <!-- tp-tour-area-start -->
      <div class="tp-tour-area tp-tour-ptb tp-animate-tab pt-140 pb-110">
         <div class="container">
            <div class="row align-items-end mb-20">
               <div class="col-xl-6">
                  <div class="tp-about-section-title p-relative pb-20">
                      <span class="tp-section-5-subtitle fw-700 d-flex align-items-center mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <svg class="mr-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 0L15.2411 8.75891L24 12L15.2411 15.2411L12 24L8.75891 15.2411L0 12L8.75891 8.75891L12 0Z" fill="#FD4621" />
                        </svg>
                        Popular Packages
                     </span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Explore iconic travel.</h2>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="mb-40 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="tp-tour-tab">
                        <ul role="tablist">
                           <li class="nav-tab-item" role="presentation">   
                              <a href="#london" class="active" data-bs-toggle="tab">London</a>
                           </li>
                           <li class="nav-tab-item" role="presentation">
                              <a href="#bangkok"  data-bs-toggle="tab">Bangkok</a>
                           </li>
                           <li class="nav-tab-item" role="presentation">
                              <a href="#manchester"  data-bs-toggle="tab">Manchester city</a>
                           </li>
                           <li class="nav-tab-item" role="presentation">
                              <a href="#dubai"  data-bs-toggle="tab">Dubai</a>
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
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/01.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/01.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Chiang mai mountain eco adventure tour.</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$21,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$420</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/02.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/02.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Jungle walking tour with an  authentic cultural lunch</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$520</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/03.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/03.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Desert adventure safari with a Sunset dinner package</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$340</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/04.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">Trending</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/04.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Scenic nature journey with a delicious lunch basket</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$220</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/06.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/06.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Bangkok urban green nice spaces walking tour.</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$120</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/05.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/05.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Sukhothai historical sustainable cycling tour.</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$21,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$320</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/07.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/07.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Full-Day hiking adventure with Picnic Lunch Provided</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$560</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/09.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/09.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Sunset desert journey with a nomadic meal experience</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$11,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$320</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="bangkok" role="tabpanel">
                        <div class="row">
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/04.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">Trending</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/04.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Scenic nature journey with a delicious lunch basket</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$220</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/06.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/06.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Bangkok urban green nice spaces walking tour.</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$120</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/05.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/05.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Sukhothai historical sustainable cycling tour.</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$21,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$320</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/07.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/07.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Full-Day hiking adventure with Picnic Lunch Provided</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$560</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/09.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/09.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Sunset desert journey with a nomadic meal experience</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$11,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$320</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="manchester" role="tabpanel">
                        <div class="row">
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/05.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/05.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Sukhothai historical sustainable cycling tour.</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$21,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$320</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/07.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/07.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Full-Day hiking adventure with Picnic Lunch Provided</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$560</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/09.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/09.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Sunset desert journey with a nomadic meal experience</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$11,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$320</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="dubai" role="tabpanel">
                        <div class="row">
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/05.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/05.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Sukhothai historical sustainable cycling tour.</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$21,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$320</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/07.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/07.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Full-Day hiking adventure with Picnic Lunch Provided</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$560</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/09.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/09.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Sunset desert journey with a nomadic meal experience</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$11,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$320</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/01.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-badge">
                                       <span class="discount tp-ff-inter fw-700">- 25% Off</span>
                                    </div>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/01.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Chiang mai mountain eco adventure tour.</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                             <span class="tp-tour-old-price">$21,165</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$420</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                              <div class="tp-tour-item mb-30">
                                 <div class="tp-tour-thumb p-relative fix">
                                    <a href="{{ url('/tour-details-5') }}" class="image">
                                       <img src="{{ asset('turiehtml-10/turie/assets/img/tour/02.jpg') }}" alt="tour">
                                    </a>
                                    <span class="tp-tour-wishlist">
                                       <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <div class="tp-tour-media-meta">
                                       <a class="popup-image" href="{{ asset('turiehtml-10/turie/assets/img/tour/02.jpg') }}">
                                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" />
                                             <path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                                          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" />
                                             <path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" />
                                             <path d="M7.62451 5.74969C8.24583 5.74969 8.74951 5.24602 8.74951 4.62469C8.74951 4.00337 8.24583 3.49969 7.62451 3.49969C7.00319 3.49969 6.49951 4.00337 6.49951 4.62469C6.49951 5.24602 7.00319 5.74969 7.62451 5.74969Z" stroke="currentColor" />
                                          </svg>
                                       </a>
                                       <a href="https://www.google.com/maps" target="_blank">
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.70068 0.5V10.65" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M9.59863 2.95001V12.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-tour-content">
                                    <div class="tp-tour-meta d-flex align-items-center">
                                       <div class="tp-tour-review mr-5">
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                          <span>
                                             <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" />
                                             </svg>
                                          </span>
                                       </div>
                                       <span class="tp-tour-review-score tp-ff-inter">( 05 Reviews )</span>
                                    </div>
                                    <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-details-5') }}">Jungle walking tour with an  authentic cultural lunch</a></h3>
                                    <div class="tp-tour-info">
                                       <span>
                                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                          Bangkok
                                       </span>
                                       <span>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M5.99951 5.99971L8.44944 8.44943M10.5495 4.94971L7.04951 8.44971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          2 days
                                       </span>
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" />
                                             <path d="M11.2495 6.97223C13.0338 6.97223 14.4804 5.57933 14.4804 3.86111C14.4804 2.14289 13.0338 0.75 11.2495 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M8.01873 9.30505H4.78819C2.55796 9.30505 0.75 11.0461 0.75 13.1937C0.75 14.0528 1.47318 14.7492 2.36527 14.7492H10.4416C11.3338 14.7492 12.0569 14.0528 12.0569 13.1937C12.0569 11.0461 10.2489 9.30505 8.01873 9.30505Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                             <path d="M12.8643 9.30505C15.0947 9.30505 16.9028 11.0462 16.9028 13.1939C16.9028 14.0531 16.1796 14.7495 15.2874 14.7495H14.0758" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                          <span>1</span>-<span>8</span> user
                                       </span>
                                    </div>
                                    <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
                                       <div class="tp-tour-price">
                                          <div class="tp-tour-top-price">
                                             <span class="tp-tour-prefix">From:</span>
                                          </div>
                                          <div class="tp-tour-bottom-price">
                                             <span class="tp-tour-new-price fw-700">$520</span>
                                             <span class="tp-tour-suffix">/person</span>
                                          </div>
                                       </div>
                                       <div class="tp-tour-btn">
                                          <a href="{{ url('/tour-details-5') }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
                                       </div>
                                    </div>
                                 </div>
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

      <!-- tp-offer-banner-area-start -->
      <div class="tp-offer-banner-area pb-110">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 mb-30 wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".5s">
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
                        <a href="{{ url('/tour-details-5') }}" class="tp-btn">Booking Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mb-30 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".5s">
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
                        <a href="{{ url('/tour-details-5') }}" class="tp-btn">Booking Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-offer-banner-area-end -->

      <!-- tp-counter-area-start -->
      <div class="tp-counter-area pb-130 p-relative z-index-2">
         <img class="tp-counter-7-shape" src="{{ asset('turiehtml-10/turie/assets/img/counter/shape.png') }}" alt="">
         <img class="tp-counter-7-shape-2 d-none d-md-block" src="{{ asset('turiehtml-10/turie/assets/img/counter/shape-2.png') }}" alt="">
         <img class="tp-counter-7-shape-3 d-none d-lg-block" src="{{ asset('turiehtml-10/turie/assets/img/counter/thumb.png') }}" alt="">
         <img class="tp-counter-7-shape-4 d-none d-lg-block" src="{{ asset('turiehtml-10/turie/assets/img/counter/thumb-2.png') }}" alt="">
         <img class="tp-counter-7-shape-5 d-none d-xl-block" src="{{ asset('turiehtml-10/turie/assets/img/counter/thumb-3.png') }}" alt="">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-counter-7-content text-center">
                     <span class="tp-section-5-subtitle fw-700 d-flex align-items-center justify-content-center mb-25 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <svg class="mr-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 0L15.2411 8.75891L24 12L15.2411 15.2411L12 24L8.75891 15.2411L0 12L8.75891 8.75891L12 0Z" fill="#FD4621" />
                        </svg>
                        Travel Support
                     </span>
                     <h2 class="tp-section-title mb-75 fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Your Reliable Travel<br> Journey Guide</h2>
                     <h3 class="tp-counter-7-bigcount mb-0 text-uppercase fw-700"><span class="purecounter"  data-purecounter-start="0"  data-purecounter-end="14025236" data-purecounter-duration="2" data-purecounter-separator="true"></span>+</h3>
                     <h4 class="tp-counter-7-smtitle fw-600">Families & Travelers Connected All Over The World</h4>
                  </div>
               </div>
            </div>
            <div class="tp-counter-7-bottom d-flex align-items-center justify-content-between flex-wrap gap-4 pt-115">
               <div class="tp-counter-7-item tp-counter-7-border d-flex align-items-center">
                  <span class="tp-counter-7-icon mr-20">
                     <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1079_1761)">
                           <path d="M37.5563 6.44368C33.4012 2.28843 27.8764 0 22 0C16.1236 0 10.5988 2.28843 6.44368 6.44368C2.28834 10.5988 0 16.1236 0 22C0 27.8764 2.28834 33.4012 6.44368 37.5563C10.5988 41.7116 16.1236 44 22 44C27.8764 44 33.4012 41.7116 37.5563 37.5563C41.7117 33.4012 44 27.8764 44 22C44 16.1236 41.7117 10.5988 37.5563 6.44368ZM22 41.381C11.3133 41.381 2.61903 32.6867 2.61903 22C2.61903 11.3133 11.3133 2.61903 22 2.61903C32.6867 2.61903 41.381 11.3133 41.381 22C41.381 32.6867 32.6867 41.381 22 41.381Z" fill="currentColor" />
                           <path d="M17.2408 16.1904C15.0964 14.0458 11.6071 14.046 9.46266 16.1904C8.95125 16.7017 8.95125 17.5309 9.46266 18.0423C9.97416 18.5537 10.8034 18.5537 11.3147 18.0423C12.4381 16.9191 14.2658 16.9191 15.389 18.0423C15.6447 18.2981 15.9798 18.426 16.3149 18.426C16.65 18.426 16.9852 18.2981 17.2408 18.0423C17.7522 17.5309 17.7522 16.7018 17.2408 16.1904Z" fill="currentColor" />
                           <path d="M34.5367 16.1904C32.3923 14.046 28.903 14.0458 26.7586 16.1904C26.2471 16.7017 26.2471 17.5309 26.7586 18.0423C27.2701 18.5537 28.0993 18.5537 28.6106 18.0423C29.7338 16.9191 31.5615 16.919 32.6849 18.0423C32.9406 18.2981 33.2757 18.426 33.6108 18.426C33.9459 18.426 34.2811 18.2981 34.5367 18.0423C35.0481 17.5309 35.0481 16.7018 34.5367 16.1904Z" fill="currentColor" />
                           <path d="M33.6108 22.9604H10.3886C9.66537 22.9604 9.0791 23.5468 9.0791 24.27C9.0791 31.3944 14.8753 37.1906 21.9997 37.1906C29.1241 37.1906 34.9203 31.3944 34.9203 24.27C34.9203 23.5467 34.3341 22.9604 33.6108 22.9604ZM21.9997 34.5716C16.7629 34.5716 12.4261 30.644 11.781 25.5795H32.2185C31.5733 30.644 27.2366 34.5716 21.9997 34.5716Z" fill="currentColor" />
                        </g>
                     </svg>
                  </span>
                  <div class="tp-counter-7-content">
                     <h3 class="tp-counter-7-count fw-600 uppercase mb-0"><span class="purecounter"  data-purecounter-start="0"  data-purecounter-end="45" data-purecounter-duration="2" data-purecounter-separator="true"></span>K+</h3>
                     <span class="tp-counter-7-dec fw-500">Happy Customers</span>
                  </div>
               </div>
               <div class="tp-counter-7-item tp-counter-7-border d-flex align-items-center">
                  <span class="tp-counter-7-icon mr-20">
                     <svg width="44" height="39" viewBox="0 0 44 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M39.3243 16.8606H37.882L25.2002 4.99551C25.4267 4.5268 25.5443 4.01271 25.5436 3.49209C25.5424 1.56225 23.9767 -0.00115289 22.0469 6.37918e-07C20.117 0.00115416 18.5536 1.56687 18.5548 3.49671C18.554 4.01579 18.6716 4.52795 18.8981 4.99474L6.21632 16.8606H4.77404C2.16862 16.8606 0 19.005 0 21.6101V33.5205C0 36.126 2.16862 38.2207 4.77404 38.2207H39.3243C40.5693 38.2231 41.7636 37.7278 42.6418 36.845C43.5196 35.9625 44.0087 34.7656 43.9999 33.5205V21.6101C43.9999 19.005 41.9297 16.8606 39.3243 16.8606ZM22.0492 1.57879C23.1092 1.57879 23.9686 2.43816 23.9686 3.49824C23.9686 4.55833 23.1092 5.4177 22.0492 5.4177C20.9891 5.4177 20.1297 4.55833 20.1297 3.49824C20.1309 2.43854 20.9895 1.57994 22.0492 1.57879ZM19.8867 6.22786C21.1506 7.24065 22.9489 7.2395 24.2116 6.22478L35.578 16.8606H8.52029L19.8867 6.22786ZM42.4249 33.4959C42.4249 35.2354 41.0146 36.6458 39.2751 36.6458H4.72482C2.98531 36.6458 1.57494 35.2354 1.57494 33.4959V21.5854C1.57494 19.8459 2.98531 18.4356 4.72482 18.4356H39.2751C41.0146 18.4356 42.4249 19.8459 42.4249 21.5854V33.4959Z" fill="currentColor" />
                        <path d="M11.7829 25.7121C11.7829 25.4072 12.0686 25.1215 12.7672 25.1215C13.5743 25.1215 13.7616 25.4956 14.1157 25.4956C14.549 25.4956 14.7263 24.9543 14.7263 24.6886C14.7263 23.9207 13.289 23.8223 12.7672 23.8223C11.5368 23.8223 10.2476 24.3833 10.2476 25.8598C10.2476 28.1633 13.3678 27.9565 13.3678 29.1477C13.3678 29.6199 12.8657 29.7971 12.4131 29.7971C11.4976 29.7971 11.2023 29.0689 10.7397 29.0689C10.3656 29.0689 10.0703 29.561 10.0703 29.8956C10.0703 30.5454 11.1531 31.1752 12.4423 31.1752C13.8696 31.1752 14.9032 30.4073 14.9032 28.99C14.9032 26.5096 11.7829 26.6965 11.7829 25.7121Z" fill="currentColor" />
                        <path d="M18.9437 23.8809C17.5853 23.8809 16.5371 24.5107 16.5371 26.204V28.8125C16.5371 30.5055 17.5853 31.1353 18.9437 31.1353C20.3022 31.1353 21.3604 30.5055 21.3604 28.8125V26.204C21.3604 24.5111 20.3022 23.8809 18.9437 23.8809ZM19.8839 28.8125C19.8839 29.4916 19.5443 29.7969 18.993 29.7969C18.4416 29.7969 18.112 29.4916 18.112 28.8125V26.204C18.112 25.5246 18.442 25.2197 18.993 25.2197C19.5443 25.2197 19.8839 25.5246 19.8839 26.204V28.8125Z" fill="currentColor" />
                        <path d="M27.1484 29.7554H24.904V24.3438C24.904 24.0189 24.5003 23.8809 24.1166 23.8809C23.7328 23.8809 23.3291 24.0189 23.3291 24.3438V30.604C23.3291 30.9189 23.7032 31.0346 24.0377 31.0346H27.1484C27.4437 31.0346 27.5914 30.7297 27.5914 30.3948C27.5914 30.0603 27.4437 29.7554 27.1484 29.7554Z" fill="currentColor" />
                        <path d="M31.6068 23.8496H29.8642C29.4608 23.8496 29.2344 24.098 29.2344 24.3441V30.6142C29.2344 30.8603 29.4608 31.0349 29.8642 31.0349H31.6068C32.9649 31.0349 34.0576 30.4466 34.0576 28.7536V26.2039C34.0576 24.5113 32.9649 23.8496 31.6068 23.8496ZM32.4827 28.754C32.4827 29.4234 32.1578 29.7556 31.6068 29.7556H30.7109V25.2277H31.6068C32.1578 25.2277 32.4827 25.5349 32.4827 26.2043V28.754Z" fill="currentColor" />
                     </svg>
                  </span>
                  <div class="tp-counter-7-content">
                     <h3 class="tp-counter-7-count fw-600 uppercase mb-0"><span class="purecounter"  data-purecounter-start="0"  data-purecounter-end="1600" data-purecounter-duration="2" data-purecounter-separator="true"></span>+</h3>
                     <span class="tp-counter-7-dec fw-500">Happy Customers</span>
                  </div>
               </div>
               <div class="tp-counter-7-item tp-counter-7-border d-flex align-items-center">
                  <span class="tp-counter-7-icon mr-20">
                     <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1079_1788)">
                           <path d="M42.4691 24.5667C42.3389 24.6217 42.2289 24.7189 42.1574 24.8417C42.0309 25.0379 42.0089 25.2854 42.1024 25.5017C42.3188 25.96 42.4306 26.4605 42.4324 26.9684V26.9867C42.4306 27.2764 42.6048 27.5385 42.8724 27.6467C42.9586 27.6834 43.0521 27.7035 43.1474 27.7017C43.5453 27.6925 43.8624 27.3662 43.8624 26.9684C43.8624 26.2607 43.7139 25.5604 43.4224 24.915C43.2501 24.563 42.8284 24.409 42.4691 24.5667Z" fill="currentColor" />
                           <path d="M41.662 29.498C41.486 29.5035 41.3192 29.5677 41.1854 29.6814C40.793 30.0077 40.3365 30.2515 39.847 30.3964C39.4694 30.5009 39.2475 30.8914 39.352 31.269C39.4364 31.5752 39.7132 31.7879 40.0303 31.7897C40.0982 31.7934 40.166 31.7879 40.232 31.7714C40.9213 31.577 41.5594 31.2324 42.102 30.763C42.4064 30.51 42.4485 30.0609 42.1955 29.7565C42.0635 29.597 41.8692 29.5035 41.662 29.498Z" fill="currentColor" />
                           <path d="M40.0671 23.5947C40.3861 23.5928 40.6684 23.3857 40.7638 23.0813C40.8738 22.7073 40.6593 22.315 40.2853 22.205C40.2798 22.2032 40.2743 22.2013 40.2688 22.2013C39.8196 22.0583 39.3484 21.9887 38.8754 21.9997H38.2521C37.8579 21.9997 37.5371 22.3205 37.5371 22.7147C37.5371 23.1088 37.8579 23.4297 38.2521 23.4297H38.8754C39.2109 23.4407 39.5428 23.4883 39.8654 23.5763C39.9314 23.591 39.9993 23.5965 40.0671 23.5947Z" fill="currentColor" />
                           <path d="M36.3823 30.5249H34.549C34.1548 30.5249 33.834 30.8457 33.834 31.2399C33.834 31.6341 34.1548 31.9549 34.549 31.9549H36.3823C36.7765 31.9549 37.0973 31.6341 37.0973 31.2399C37.0973 30.8457 36.7783 30.5249 36.3823 30.5249Z" fill="currentColor" />
                           <path d="M35.3004 22.737C35.3004 22.7297 35.3004 22.7223 35.3004 22.715C35.3059 22.3263 34.9961 22.0055 34.6074 22C34.6001 22 34.5928 22 34.5854 22H32.7521C32.3579 22 32.0371 22.319 32.0371 22.715C32.0371 23.1092 32.3561 23.43 32.7521 23.43H34.5873C34.9741 23.4373 35.2949 23.1257 35.3004 22.737Z" fill="currentColor" />
                           <path d="M36.2904 11.183C38.2796 11.1775 39.8892 9.56053 39.8837 7.57137C39.8801 5.58403 38.2667 3.97437 36.2794 3.97803H36.2721C34.2829 3.98353 32.6732 5.60053 32.6787 7.5897C32.6842 9.57887 34.3012 11.1885 36.2904 11.183ZM36.2904 5.40803C37.4839 5.41353 38.4482 6.37787 38.4537 7.57137C38.4592 8.77037 37.4931 9.74753 36.2941 9.75303C36.2867 9.75303 36.2794 9.75303 36.2721 9.75303C35.0731 9.74753 34.1032 8.77037 34.1087 7.57137C34.1142 6.37237 35.0914 5.40253 36.2904 5.40803Z" fill="currentColor" />
                           <path d="M30.8823 30.5249H29.049C28.6548 30.5249 28.334 30.8457 28.334 31.2399C28.334 31.6341 28.6548 31.9549 29.049 31.9549H30.8823C31.2765 31.9549 31.5973 31.6341 31.5973 31.2399C31.5973 30.8457 31.2783 30.5249 30.8823 30.5249Z" fill="currentColor" />
                           <path d="M34.4208 17.7098C34.87 18.2745 35.552 18.6045 36.2725 18.6082C36.9967 18.6118 37.6805 18.28 38.1242 17.7098L42.3408 12.3565C44.946 9.03818 44.3685 4.23485 41.0502 1.62968C39.6733 0.549846 37.9683 -0.0258206 36.2175 -0.000153969C31.999 0.00534603 28.5853 3.43001 28.5908 7.64851C28.5927 9.35718 29.1683 11.0145 30.2225 12.3565L34.4208 17.7098ZM32.5032 2.71868C35.2403 0.619513 39.1618 1.13468 41.261 3.87185C42.0915 4.95535 42.5443 6.27901 42.5517 7.64485C42.5407 9.03268 42.0732 10.3802 41.2225 11.4765L37.0058 16.8298C36.6593 17.2295 36.0525 17.2735 35.6528 16.9252C35.618 16.8958 35.5868 16.8628 35.5575 16.8298L31.35 11.4765C29.2508 8.73935 29.7678 4.81968 32.5032 2.71868Z" fill="currentColor" />
                           <path d="M27.5461 14.9046H29.3977C29.7919 14.9046 30.1127 14.5838 30.1127 14.1896C30.1127 13.7954 29.7919 13.4746 29.3977 13.4746H27.5461C27.1519 13.4746 26.8311 13.7954 26.8311 14.1896C26.8329 14.5856 27.1519 14.9046 27.5461 14.9046Z" fill="currentColor" />
                           <path d="M29.8004 22.715C29.8004 22.3208 29.4796 22 29.0854 22H27.2521C26.8579 22 26.5371 22.3208 26.5371 22.715C26.5371 23.1092 26.8579 23.43 27.2521 23.43H29.0854C29.4814 23.43 29.8004 23.1092 29.8004 22.715Z" fill="currentColor" />
                           <path d="M25.3638 30.5249H23.5304C23.1363 30.5249 22.8154 30.8457 22.8154 31.2399C22.8154 31.6341 23.1363 31.9549 23.5304 31.9549H25.3638C25.7579 31.9549 26.0788 31.6341 26.0788 31.2399C26.0788 30.8457 25.7598 30.5249 25.3638 30.5249Z" fill="currentColor" />
                           <path d="M22.0461 14.9046H23.8794C24.2736 14.9046 24.5944 14.5838 24.5944 14.1896C24.5944 13.7954 24.2754 13.4746 23.8794 13.4746H22.0461C21.6519 13.4746 21.3311 13.7954 21.3311 14.1896C21.3329 14.5856 21.6519 14.9046 22.0461 14.9046Z" fill="currentColor" />
                           <path d="M24.2819 22.715C24.2819 22.3208 23.9611 22 23.5669 22H21.7336C21.3394 22 21.0186 22.3208 21.0186 22.715C21.0186 23.1092 21.3394 23.43 21.7336 23.43H23.5669C23.9629 23.43 24.2819 23.1092 24.2819 22.715Z" fill="currentColor" />
                           <path d="M19.8638 30.5249H18.0304C17.6363 30.5249 17.3154 30.8457 17.3154 31.2399C17.3154 31.6341 17.6363 31.9549 18.0304 31.9549H19.8638C20.2579 31.9549 20.5788 31.6341 20.5788 31.2399C20.5788 30.8457 20.2598 30.5249 19.8638 30.5249Z" fill="currentColor" />
                           <path d="M16.5461 14.9046H18.3794C18.7736 14.9046 19.0944 14.5838 19.0944 14.1896C19.0944 13.7954 18.7754 13.4746 18.3794 13.4746H16.5461C16.1519 13.4746 15.8311 13.7954 15.8311 14.1896C15.8329 14.5856 16.1519 14.9046 16.5461 14.9046Z" fill="currentColor" />
                           <path d="M18.782 22.7151C18.782 22.3209 18.4611 22.0001 18.067 22.0001H16.2336C15.845 21.9946 15.5241 22.3044 15.5186 22.6931C15.5186 22.7004 15.5186 22.7077 15.5186 22.7151C15.5131 23.1037 15.823 23.4246 16.2116 23.4301C16.219 23.4301 16.2263 23.4301 16.2336 23.4301H18.067C18.463 23.4301 18.782 23.1092 18.782 22.7151Z" fill="currentColor" />
                           <path d="M11.0461 14.9046H12.8794C13.2736 14.9046 13.5944 14.5838 13.5944 14.1896C13.5944 13.7954 13.2754 13.4746 12.8794 13.4746H11.0461C10.6519 13.4746 10.3311 13.7954 10.3311 14.1896C10.3329 14.5856 10.6519 14.9046 11.0461 14.9046Z" fill="currentColor" />
                           <path d="M10.7124 23.4301C10.7198 23.4301 10.7271 23.4301 10.7344 23.4301H12.5678C12.9619 23.4301 13.2828 23.1111 13.2828 22.7151C13.2828 22.3209 12.9638 22.0001 12.5678 22.0001H10.7326C10.3439 21.9946 10.0231 22.3044 10.0176 22.6931C10.0176 22.7004 10.0176 22.7077 10.0176 22.7151C10.0139 23.1037 10.3238 23.4246 10.7124 23.4301Z" fill="currentColor" />
                           <path d="M5.5275 14.9046H7.36083C7.755 14.9046 8.07583 14.5838 8.07583 14.1896C8.07583 13.7954 7.755 13.4746 7.36083 13.4746H5.5275C5.13333 13.4746 4.8125 13.7954 4.8125 14.1896C4.81433 14.5856 5.13333 14.9046 5.5275 14.9046Z" fill="currentColor" />
                           <path d="M7.70857 29.3696C5.72673 29.3751 4.12073 30.9811 4.11523 32.963C4.11707 34.9576 5.73223 36.5728 7.7269 36.5746C9.71607 36.5691 11.3257 34.9521 11.3202 32.963C11.3147 30.9738 9.69773 29.3641 7.70857 29.3696ZM7.7269 35.1446C6.5279 35.1465 5.5544 34.1748 5.55257 32.974C5.55073 31.775 6.5224 30.8015 7.72323 30.7996H7.7269C8.9259 30.7996 9.8994 31.7731 9.8994 32.9721C9.8994 34.1711 8.92773 35.1446 7.7269 35.1446Z" fill="currentColor" />
                           <path d="M5.21586 23.43H7.04919C7.44336 23.43 7.76419 23.111 7.76419 22.715C7.76419 22.3208 7.44519 22 7.04919 22H5.21402C4.81986 22 4.49902 22.3208 4.49902 22.715C4.49902 23.1092 4.82169 23.43 5.21586 23.43Z" fill="currentColor" />
                           <path d="M1.34738 22.1097C1.48305 22.2307 1.66088 22.2967 1.84238 22.293C2.04222 22.2912 2.23288 22.2123 2.37405 22.073C2.63255 21.7705 2.60872 21.3195 2.31905 21.0463C1.94872 20.7017 1.65538 20.2837 1.45738 19.818C1.31622 19.4587 0.909217 19.2808 0.549884 19.422C0.540717 19.4257 0.53155 19.4293 0.522384 19.433C0.15755 19.5852 -0.014783 20.0032 0.137384 20.368C0.42155 21.0225 0.83405 21.6147 1.34738 22.1097Z" fill="currentColor" />
                           <path d="M0.596011 17.1784C0.955344 17.3507 1.38801 17.204 1.56768 16.8484C1.80051 16.3955 2.12501 15.9959 2.52101 15.675C2.82901 15.4367 2.88401 14.993 2.64568 14.685C2.64201 14.6795 2.63651 14.6722 2.63101 14.6667C2.37801 14.366 1.93434 14.3184 1.62268 14.5567C1.07084 15.0114 0.614345 15.5724 0.284344 16.2067C0.110178 16.5624 0.247678 16.9914 0.596011 17.1784Z" fill="currentColor" />
                           <path d="M7.67234 25.3916C7.49451 25.3879 7.31668 25.3952 7.14068 25.4099C2.93318 25.6996 -0.243989 29.3461 0.0456775 33.5536C0.150177 35.0826 0.713011 36.5437 1.65901 37.7482L5.87568 43.1016C6.31934 43.6717 7.00318 44.0036 7.72734 43.9999C8.44968 43.9999 9.13168 43.6699 9.57901 43.1016L13.7773 37.7482C14.8388 36.4062 15.42 34.7471 15.4273 33.0366C15.4292 32.5196 15.3742 32.0026 15.2623 31.4966C14.5052 27.9161 11.3317 25.3641 7.67234 25.3916ZM12.659 36.8682L8.44234 42.2216C8.09584 42.6212 7.48901 42.6652 7.08934 42.3169C7.05451 42.2876 7.02334 42.2546 6.99401 42.2216L2.77734 36.8682C1.93401 35.7682 1.47201 34.4226 1.46651 33.0366C1.48301 29.5881 4.29168 26.8051 7.74018 26.8216C7.75484 26.8216 7.76951 26.8216 7.78234 26.8216C11.2162 26.8326 13.99 29.6247 13.979 33.0586C13.9753 34.4409 13.5097 35.7811 12.659 36.8682Z" fill="currentColor" />
                        </g>
                     </svg>
                  </span>
                  <div class="tp-counter-7-content">
                     <h3 class="tp-counter-7-count fw-600 uppercase mb-0"><span class="purecounter"  data-purecounter-start="0"  data-purecounter-end="80" data-purecounter-duration="2" data-purecounter-separator="true"></span>+</h3>
                     <span class="tp-counter-7-dec fw-500">Destinations</span>
                  </div>
               </div>
               <div class="tp-counter-7-item d-flex align-items-center">
                  <span class="tp-counter-7-icon mr-20">
                     <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.9805 19.1558C36.0006 18.8709 34.9978 18.9635 34.0523 19.4336L33.336 19.7905V14.621C33.336 13.6567 32.9235 12.7879 32.2702 12.1781C38.6595 10.7787 42.0919 11.3306 42.5904 12.5359C42.9973 13.5126 41.7538 15.8236 36.9805 19.1558ZM39.1293 21.579C39.1293 21.6395 39.1063 21.6787 39.049 21.7027L20.2824 29.8233C19.314 30.2417 18.1908 29.868 17.6579 28.9528L15.4976 25.205L15.5206 25.2058L18.1278 27.3511C18.8269 27.9279 19.7667 28.0349 20.5747 27.6317L34.6482 20.6292C35.4046 20.2525 36.1839 20.2294 36.9633 20.5624L39.049 21.4563C39.1064 21.48 39.1293 21.5175 39.1293 21.579ZM27.9037 27.9814L28.1787 34.8077C28.1835 34.8279 28.2157 34.8383 28.2188 34.8122L30.1098 27.0254L27.9037 27.9814ZM32.0008 37.3224V26.2073L31.6456 26.3613L29.5139 35.1274C29.3649 35.745 28.8263 36.1627 28.2074 36.1627C27.473 36.1627 26.8799 35.6003 26.8493 34.8628L26.5914 28.5485L20.8153 31.0492C19.4118 31.6542 17.7755 31.2584 16.8041 30.0565C15.2168 30.5389 13.5894 30.9698 12.0021 31.3162V37.3224C12.0021 38.4273 12.896 39.3265 14.002 39.3265H30.0009C31.1012 39.3265 32.0008 38.4273 32.0008 37.3224ZM28.9237 42.6648H26.792C26.7462 42.6648 26.7061 42.6247 26.7061 42.5802V40.6617H29.0097V42.5802C29.0096 42.6247 28.9695 42.6648 28.9237 42.6648ZM17.2969 42.5803C17.2969 42.6247 17.2569 42.6649 17.211 42.6649H15.0793C15.0335 42.6649 14.9934 42.6248 14.9934 42.5803V40.6618H17.2969V42.5803ZM1.41269 29.654C0.810989 28.1976 3.80796 24.7099 10.6671 20.7225V30.2311C5.2118 31.2895 1.91696 30.873 1.41269 29.654ZM24.8953 23.9906L26.9525 22.9667L20.2595 21.003L20.2423 21.0386L24.8953 23.9906ZM14.0021 12.6179C12.8961 12.6179 12.0022 13.5163 12.0022 14.6211V29.9516C13.2629 29.6693 14.6266 29.315 16.0822 28.8814L14.1854 25.5921C14.0479 25.358 14.0135 25.0853 14.0823 24.8237C14.1991 24.3802 14.4986 24.2409 14.8329 24.0476C15.3258 23.7617 15.9332 23.8124 16.3687 24.1749L18.976 26.3202C19.2682 26.5651 19.6407 26.6069 19.9845 26.435L23.4972 24.685L19.5318 22.1664C18.9531 21.8017 18.741 21.0849 19.0218 20.4634C19.3026 19.8422 19.9787 19.5296 20.6377 19.722L28.7116 22.0917L32.0008 20.4546V14.6211C32.0008 13.5162 31.1011 12.6179 30.0009 12.6179H14.0021ZM19.5318 4.44052H24.4713V11.2825H19.5318V4.44052ZM17.9846 1.33521H26.0185V3.10502H17.9846V1.33521ZM43.8224 12.0242C42.4128 8.62812 33.9262 10.3543 30.2188 11.2906C30.1443 11.2852 30.0755 11.2826 30.001 11.2826H25.8008V4.44062H26.0701C26.7749 4.44062 27.3536 3.86361 27.3536 3.15513V1.28558C27.3536 0.576918 26.7749 0 26.0701 0H17.9331C17.2283 0 16.6496 0.57682 16.6496 1.28558V3.15513C16.6496 3.86361 17.2283 4.44062 17.9331 4.44062H18.1967V11.2826H14.0021C12.1627 11.2826 10.6671 12.78 10.6671 14.6211V19.1841C7.2404 21.1223 4.45549 23.0924 2.59313 24.8951C0.415686 27.0014 -0.39808 28.7745 0.180655 30.1661C1.37565 33.0431 7.69082 32.1507 10.6671 31.5878V37.3224C10.6671 39.0478 11.9793 40.4721 13.6583 40.6438V42.5802C13.6583 43.3627 14.2944 44 15.0794 44H17.2111C17.9962 44 18.6323 43.3626 18.6323 42.5802V40.6617H25.3711V42.5802C25.3711 43.3627 26.0072 44 26.7922 44H28.9239C29.7089 44 30.345 43.3626 30.345 42.5802V40.6438C32.0183 40.4721 33.3362 39.0477 33.3362 37.3224V25.6304L39.5766 22.9286C40.7618 22.4168 40.7628 20.7374 39.5708 20.2275L38.4476 19.7468C40.247 18.4346 41.6394 17.1874 42.5849 16.0319C43.8625 14.4731 44.275 13.1245 43.8224 12.0242Z" fill="currentColor" />
                     </svg>
                  </span>
                  <div class="tp-counter-7-content">
                     <h3 class="tp-counter-7-count fw-600 uppercase mb-0"><span class="purecounter"  data-purecounter-start="0"  data-purecounter-end="150" data-purecounter-duration="2" data-purecounter-separator="true"></span>+</h3>
                     <span class="tp-counter-7-dec fw-500">Journey Buddies</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-counter-area-end -->

      <!-- tp-team-area-start -->
      <div class="tp-team-area tp-team-3-wrap tp-team-ptb pt-120 pb-80" data-bg-color="#f7f9f9">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-about-section-title p-relative pb-35 text-center">
                     <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Meet with guide</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Meet our travel experts</h2>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="tp-team-item mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="tp-team-thumb p-relative mb-25">
                        <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/team/guide.jpg') }}" alt="">
                        <div class="tp-team-social">
                           <a href="#">
                              <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.9738 0H8.70824C7.26476 0 5.8804 0.570412 4.8597 1.58575C3.83901 2.60109 3.26559 3.97819 3.26559 5.41409V8.66255H0V12.9938H3.26559V21.6564H7.61971V12.9938H10.8853L11.9738 8.66255H7.61971V5.41409C7.61971 5.12691 7.73439 4.85149 7.93853 4.64843C8.14267 4.44536 8.41954 4.33128 8.70824 4.33128H11.9738V0Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16.5387 0H19.7589L12.7238 8.0482L21 19H14.5198L9.44431 12.3578L3.63677 19H0.414685L7.93937 10.3915L0 0H6.6447L11.2325 6.07123L16.5387 0ZM15.4086 17.0708H17.1929L5.67515 1.8279H3.7604L15.4086 17.0708Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.7371 6.31525C16.4121 6.31525 18.0184 6.98068 19.2027 8.16515C20.3871 9.34962 21.0524 10.9561 21.0524 12.6312V19.9998H16.8422V12.6312C16.8422 12.0728 16.6204 11.5373 16.2257 11.1425C15.8309 10.7477 15.2954 10.5259 14.7371 10.5259C14.1788 10.5259 13.6434 10.7477 13.2486 11.1425C12.8538 11.5373 12.6321 12.0728 12.6321 12.6312V19.9998H8.42188V12.6312C8.42188 10.9561 9.08723 9.34962 10.2716 8.16515C11.4559 6.98068 13.0622 6.31525 14.7371 6.31525Z" fill="currentColor" />
                                 <path d="M4.21018 7.36487H0V19.9968H4.21018V7.36487Z" fill="currentColor" />
                                 <path d="M2.10509 4.21064C3.2677 4.21064 4.21018 3.26806 4.21018 2.10532C4.21018 0.942584 3.2677 0 2.10509 0C0.942481 0 0 0.942584 0 2.10532C0 3.26806 0.942481 4.21064 2.10509 4.21064Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <ellipse cx="10.25" cy="10.2492" rx="9.5" ry="9.4992" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M19.7469 11.4511C18.8664 11.286 17.9608 11.2 17.0367 11.2C11.952 11.2 7.42951 13.8051 4.54688 17.8494" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M16.9 3.59973C13.927 7.08349 9.4595 9.29925 4.46414 9.29925C3.18615 9.29925 1.94271 9.15422 0.75 8.88004" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M12.7369 19.7499C12.9749 18.5967 13.1 17.4024 13.1 16.1789C13.1 10.1791 10.0926 4.88027 5.5 1.70142" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="tp-team-content">
                        <span class="tp-team-subtitle d-inline-block lh-1 mb-10">Tourist guide</span>
                        <h2 class="tp-team-title"><a href="{{ url('/tour-guide-details') }}" class="common-underline">Alex Morgan</a></h2>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="tp-team-item mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="tp-team-thumb p-relative mb-25">
                        <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/team/guide-2.jpg') }}" alt="">
                        <div class="tp-team-social">
                           <a href="#">
                              <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.9738 0H8.70824C7.26476 0 5.8804 0.570412 4.8597 1.58575C3.83901 2.60109 3.26559 3.97819 3.26559 5.41409V8.66255H0V12.9938H3.26559V21.6564H7.61971V12.9938H10.8853L11.9738 8.66255H7.61971V5.41409C7.61971 5.12691 7.73439 4.85149 7.93853 4.64843C8.14267 4.44536 8.41954 4.33128 8.70824 4.33128H11.9738V0Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16.5387 0H19.7589L12.7238 8.0482L21 19H14.5198L9.44431 12.3578L3.63677 19H0.414685L7.93937 10.3915L0 0H6.6447L11.2325 6.07123L16.5387 0ZM15.4086 17.0708H17.1929L5.67515 1.8279H3.7604L15.4086 17.0708Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.7371 6.31525C16.4121 6.31525 18.0184 6.98068 19.2027 8.16515C20.3871 9.34962 21.0524 10.9561 21.0524 12.6312V19.9998H16.8422V12.6312C16.8422 12.0728 16.6204 11.5373 16.2257 11.1425C15.8309 10.7477 15.2954 10.5259 14.7371 10.5259C14.1788 10.5259 13.6434 10.7477 13.2486 11.1425C12.8538 11.5373 12.6321 12.0728 12.6321 12.6312V19.9998H8.42188V12.6312C8.42188 10.9561 9.08723 9.34962 10.2716 8.16515C11.4559 6.98068 13.0622 6.31525 14.7371 6.31525Z" fill="currentColor" />
                                 <path d="M4.21018 7.36487H0V19.9968H4.21018V7.36487Z" fill="currentColor" />
                                 <path d="M2.10509 4.21064C3.2677 4.21064 4.21018 3.26806 4.21018 2.10532C4.21018 0.942584 3.2677 0 2.10509 0C0.942481 0 0 0.942584 0 2.10532C0 3.26806 0.942481 4.21064 2.10509 4.21064Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <ellipse cx="10.25" cy="10.2492" rx="9.5" ry="9.4992" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M19.7469 11.4511C18.8664 11.286 17.9608 11.2 17.0367 11.2C11.952 11.2 7.42951 13.8051 4.54688 17.8494" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M16.9 3.59973C13.927 7.08349 9.4595 9.29925 4.46414 9.29925C3.18615 9.29925 1.94271 9.15422 0.75 8.88004" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M12.7369 19.7499C12.9749 18.5967 13.1 17.4024 13.1 16.1789C13.1 10.1791 10.0926 4.88027 5.5 1.70142" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="tp-team-content">
                        <span class="tp-team-subtitle d-inline-block lh-1 mb-10">Tourist guide</span>
                        <h2 class="tp-team-title"><a href="{{ url('/tour-guide-details') }}" class="common-underline">William Scott</a></h2>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="tp-team-item mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <div class="tp-team-thumb p-relative mb-25">
                        <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/team/guide-3.jpg') }}" alt="">
                        <div class="tp-team-social">
                           <a href="#">
                              <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.9738 0H8.70824C7.26476 0 5.8804 0.570412 4.8597 1.58575C3.83901 2.60109 3.26559 3.97819 3.26559 5.41409V8.66255H0V12.9938H3.26559V21.6564H7.61971V12.9938H10.8853L11.9738 8.66255H7.61971V5.41409C7.61971 5.12691 7.73439 4.85149 7.93853 4.64843C8.14267 4.44536 8.41954 4.33128 8.70824 4.33128H11.9738V0Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16.5387 0H19.7589L12.7238 8.0482L21 19H14.5198L9.44431 12.3578L3.63677 19H0.414685L7.93937 10.3915L0 0H6.6447L11.2325 6.07123L16.5387 0ZM15.4086 17.0708H17.1929L5.67515 1.8279H3.7604L15.4086 17.0708Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.7371 6.31525C16.4121 6.31525 18.0184 6.98068 19.2027 8.16515C20.3871 9.34962 21.0524 10.9561 21.0524 12.6312V19.9998H16.8422V12.6312C16.8422 12.0728 16.6204 11.5373 16.2257 11.1425C15.8309 10.7477 15.2954 10.5259 14.7371 10.5259C14.1788 10.5259 13.6434 10.7477 13.2486 11.1425C12.8538 11.5373 12.6321 12.0728 12.6321 12.6312V19.9998H8.42188V12.6312C8.42188 10.9561 9.08723 9.34962 10.2716 8.16515C11.4559 6.98068 13.0622 6.31525 14.7371 6.31525Z" fill="currentColor" />
                                 <path d="M4.21018 7.36487H0V19.9968H4.21018V7.36487Z" fill="currentColor" />
                                 <path d="M2.10509 4.21064C3.2677 4.21064 4.21018 3.26806 4.21018 2.10532C4.21018 0.942584 3.2677 0 2.10509 0C0.942481 0 0 0.942584 0 2.10532C0 3.26806 0.942481 4.21064 2.10509 4.21064Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <ellipse cx="10.25" cy="10.2492" rx="9.5" ry="9.4992" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M19.7469 11.4511C18.8664 11.286 17.9608 11.2 17.0367 11.2C11.952 11.2 7.42951 13.8051 4.54688 17.8494" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M16.9 3.59973C13.927 7.08349 9.4595 9.29925 4.46414 9.29925C3.18615 9.29925 1.94271 9.15422 0.75 8.88004" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M12.7369 19.7499C12.9749 18.5967 13.1 17.4024 13.1 16.1789C13.1 10.1791 10.0926 4.88027 5.5 1.70142" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="tp-team-content">
                        <span class="tp-team-subtitle d-inline-block lh-1 mb-10">Tourist guide</span>
                        <h2 class="tp-team-title"><a href="{{ url('/tour-guide-details') }}" class="common-underline">Sofia Bennett</a></h2>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="tp-team-item mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".9s">
                     <div class="tp-team-thumb p-relative mb-25">
                        <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/team/guide-4.jpg') }}" alt="">
                        <div class="tp-team-social">
                           <a href="#">
                              <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.9738 0H8.70824C7.26476 0 5.8804 0.570412 4.8597 1.58575C3.83901 2.60109 3.26559 3.97819 3.26559 5.41409V8.66255H0V12.9938H3.26559V21.6564H7.61971V12.9938H10.8853L11.9738 8.66255H7.61971V5.41409C7.61971 5.12691 7.73439 4.85149 7.93853 4.64843C8.14267 4.44536 8.41954 4.33128 8.70824 4.33128H11.9738V0Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16.5387 0H19.7589L12.7238 8.0482L21 19H14.5198L9.44431 12.3578L3.63677 19H0.414685L7.93937 10.3915L0 0H6.6447L11.2325 6.07123L16.5387 0ZM15.4086 17.0708H17.1929L5.67515 1.8279H3.7604L15.4086 17.0708Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.7371 6.31525C16.4121 6.31525 18.0184 6.98068 19.2027 8.16515C20.3871 9.34962 21.0524 10.9561 21.0524 12.6312V19.9998H16.8422V12.6312C16.8422 12.0728 16.6204 11.5373 16.2257 11.1425C15.8309 10.7477 15.2954 10.5259 14.7371 10.5259C14.1788 10.5259 13.6434 10.7477 13.2486 11.1425C12.8538 11.5373 12.6321 12.0728 12.6321 12.6312V19.9998H8.42188V12.6312C8.42188 10.9561 9.08723 9.34962 10.2716 8.16515C11.4559 6.98068 13.0622 6.31525 14.7371 6.31525Z" fill="currentColor" />
                                 <path d="M4.21018 7.36487H0V19.9968H4.21018V7.36487Z" fill="currentColor" />
                                 <path d="M2.10509 4.21064C3.2677 4.21064 4.21018 3.26806 4.21018 2.10532C4.21018 0.942584 3.2677 0 2.10509 0C0.942481 0 0 0.942584 0 2.10532C0 3.26806 0.942481 4.21064 2.10509 4.21064Z" fill="currentColor" />
                              </svg>
                           </a>
                           <a href="#">
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <ellipse cx="10.25" cy="10.2492" rx="9.5" ry="9.4992" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M19.7469 11.4511C18.8664 11.286 17.9608 11.2 17.0367 11.2C11.952 11.2 7.42951 13.8051 4.54688 17.8494" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M16.9 3.59973C13.927 7.08349 9.4595 9.29925 4.46414 9.29925C3.18615 9.29925 1.94271 9.15422 0.75 8.88004" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M12.7369 19.7499C12.9749 18.5967 13.1 17.4024 13.1 16.1789C13.1 10.1791 10.0926 4.88027 5.5 1.70142" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="tp-team-content">
                        <span class="tp-team-subtitle d-inline-block lh-1 mb-10">Tourist guide</span>
                        <h2 class="tp-team-title"><a href="{{ url('/tour-guide-details') }}" class="common-underline">Emma Lawson</a></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-team-area-end -->

      <!-- tp-testimonial-area-start -->
      <div class="tp-testimonial-area tp-testimonial-5 tp-tour-ptb pt-130 pb-80">
         <div class="container p-relative z-index-2">
            <div class="row">
               <div class="col-xl-5 col-lg-6 mb-30">
                  <div class="tp-testimonial-two-title-wrap d-inline-block mb-35">
                     <span class="tp-section-two-subtitle d-inline-block mb-10 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Our Tesimonial</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">Smiles From Our Wonderful Travelers</h2>
                  </div>
                  <div class="tp-testimonial-two-navigation tp-bounce d-none d-lg-flex wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <button class="tp-testimonial-two-prev bounce">
                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M8.59948 14.6001C8.59948 14.6001 0.599623 9.44462 0.599609 7.60001C0.599596 5.7554 8.59961 0.600098 8.59961 0.600098" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span></span>
                     </button>
                     <button class="tp-testimonial-two-next bounce">
                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M0.599743 14.6001C0.599743 14.6001 8.5996 9.44462 8.59961 7.60001C8.59962 5.7554 0.599609 0.600098 0.599609 0.600098" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span></span>
                     </button>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-12">
                  <div class="swiper tp-testimonial-two-slider mb-30 ml-110 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="tp-testimonial-two-content p-relative">
                              <div class="tp-testimonial-5-market mb-40">
                                 <span class="fw-600 text-uppercase d-block ">reviewed On</span>
                                 <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/five/envato.png') }}" alt="">
                              </div>
                              <p>“Turie made my vacation planning so simple!
                                 From booking flights to finding hidden destinations,
                                 everything felt effortless. The smart suggestions truly
                                 fit my travel style — I’ll never plan another!</p>
                              <div class="tp-testimonial-5-author">
                                 <h2>Christian B.</h2>
                                 <span>Mid-Level Developer</span>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tp-testimonial-two-content p-relative">
                              <div class="tp-testimonial-5-market mb-40">
                                 <span class="fw-600 text-uppercase d-block ">reviewed On</span>
                                 <img src="{{ asset('turiehtml-10/turie/assets/img/testimonial/five/envato.png') }}" alt="">
                              </div>
                              <p>“Turie made my vacation planning so simple!
                                 From booking flights to finding hidden destinations,
                                 everything felt effortless. The smart suggestions truly
                                 fit my travel style — I’ll never plan another!</p>
                              <div class="tp-testimonial-5-author">
                                 <h2>Christian B.</h2>
                                 <span>Mid-Level Developer</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tp-testimonial-two-navigation tp-bounce d-lg-none">
                     <button class="tp-testimonial-two-prev bounce">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M10 1L1 10L10 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span></span>
                     </button>
                     <button class="tp-testimonial-two-next bounce">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 1L10 10L1 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span></span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-testimonial-area-end -->

      <!-- tp-brands-area-start -->
      <div class="tp-brands-area tp-brands-5 fix pb-120">
         <div class="swiper tp-brands-slider">
            <div class="swiper-wrapper slide-transtion align-items-center">
               <div class="swiper-slide">
                  <div class="tp-brands-item">
                     <a href="#">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/brands/five/brand.png') }}" alt="">
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tp-brands-item">
                     <a href="#">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/brands/five/brand-2.png') }}" alt="">
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tp-brands-item">
                     <a href="#">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/brands/five/brand-3.png') }}" alt="">
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tp-brands-item">
                     <a href="#">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/brands/five/brand-4.png') }}" alt="">
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tp-brands-item">
                     <a href="#">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/brands/five/brand-5.png') }}" alt="">
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tp-brands-item">
                     <a href="#">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/brands/five/brand-2.png') }}" alt="">
                     </a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="tp-brands-item">
                     <a href="#">
                        <img src="{{ asset('turiehtml-10/turie/assets/img/brands/five/brand-3.png') }}" alt="">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-brands-area-start -->

      <!-- tp-video-area-start -->
      <div class="tp-video-area p-relative z-index-2 pb-70">
         <div class="tp-video-6-bg"></div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-video-6-wrap">
                     <div class="tp-video-6-inner mb-60">
                        <video loop="" muted="" autoplay="" playsinline="">
                           <source src="https://html.aqlova.com/videos/turie/video-5.mp4" type="video/mp4">
                        </video>
                        <div class="tp-video-6-popup">
                           <a class="popup-video" href="https://www.youtube.com/watch?v=tffjAlDbBGU">
                              <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M22.5 9.33735C25.8333 11.2619 25.8333 16.0731 22.5 17.9976L7.5 26.6579C4.16667 28.5824 -1.42102e-06 26.1767 -1.25278e-06 22.3277L-4.95676e-07 5.00723C-3.27431e-07 1.15823 4.16667 -1.2474 7.5 0.677098L22.5 9.33735Z" fill="currentColor" />
                              </svg>
                           </a>
                        </div>
                     </div>
                     <div class="tp-video-6-content pb-35 d-flex flex-wrap justify-content-between gap-4">
                        <h2 class="tp-section-title fw-600 text-white mb-20">Discover New Adventures</h2>
                        <div class="mb-20">
                           <a href="#" class="tp-btn tp-btn-white hover-border">
                              See More
                              <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M0.599651 0.600037C0.599651 0.600037 5.59961 4.28245 5.59961 5.60004C5.59961 6.9177 0.599609 10.6 0.599609 10.6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-video-area-end -->

      <!-- tp-blog-area-start -->
      <div class="tp-blog-area tp-tour-ptb pt-140 pb-110">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-blog-section-title p-relative pb-35 text-center">
                     <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Recent news feed</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Recent blogs & updates</h2>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-blog-item tp-blog-3-item mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="tp-blog-thumb fix mb-30">
                        <a href="{{ url('/blog-details') }}" class="d-block">
                           <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb.jpg') }}" alt="">
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
                        <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Strong teamwork helps small groups<br> tackle tough problems</a></h3>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-blog-item tp-blog-3-item mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="tp-blog-thumb fix mb-30">
                        <a href="{{ url('/blog-details') }}" class="d-block">
                           <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-2.jpg') }}" alt="">
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
                        <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Collaboration turns ideas powerful<br> results that overcome challenge.</a></h3>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="tp-blog-item tp-blog-3-item mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <div class="tp-blog-thumb fix mb-30">
                        <a href="{{ url('/blog-details') }}" class="d-block">
                           <img class="w-100" src="{{ asset('turiehtml-10/turie/assets/img/blog/three/thumb-3.jpg') }}" alt="">
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
                        <h3 class="tp-blog-title fw-600"><a href="{{ url('/blog-details') }}">Adventure Sports Destinations<br> Around The Globe</a></h3>
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
      <div class="tp-footer-area tp-footer-6 z-index-2 pt-115 p-relative" data-bg-color="#fff3ed">
         <img class="tp-footer-6-shape" src="{{ asset('turiehtml-10/turie/assets/img/footer/saven/shape.png') }}" alt="">
         <img class="tp-footer-6-shape-2" src="{{ asset('turiehtml-10/turie/assets/img/footer/saven/shape-3.png') }}" alt="">
         <img class="tp-footer-6-shape-3 tptranslateY2 d-none d-lg-block" src="{{ asset('turiehtml-10/turie/assets/img/footer/saven/shape-2.png') }}" alt="">
         <div class="container">
            <div class="tp-footer-subscribe-wrap pb-30">
               <div class="row">
                  <div class="col-xxl-7 col-xl-6 col-lg-5">
                     <div class="mb-30">
                        <a href="{{ url('/') }}"><img data-width="112px"  width="56" height="56" src="{{ asset('enjoyable-tour-logo.png') }}"  alt="Enjoyable Tour" style="object-fit:contain;"></a>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                     <div class="tp-footer-three-subscribe-form tp-footer-6-subscribe-form mb-20">
                        <h3 class="tp-footer-subscribe-title fs-32 fw-600 mb-10">Your Newsletter</h3>
                        <p class="mb-25">Sign up to receive email updates about our work and you can support people.</p>
                        <div class="tp-footer-subscribe-form p-relative">
                           <form action="#" class="p-relative">
                              <input class="tp-input" type="text" placeholder="email address">
                              <button class="tp-footer-subscribe-btn" type="submit">
                                 <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.8999 5.65039H0.650071" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.31703 10.6504C7.31703 10.6504 12.3169 6.9679 12.3169 5.65033C12.3169 4.33275 7.31694 0.650391 7.31694 0.650391" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                              </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-footer-widget-wrap pt-75 pb-65">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="tp-footer-widget mb-30">
                        <h3 class="tp-footer-widget-title fw-600 mb-15">Company</h3>
                        <div class="tp-footer-widget-menu">
                           <ul>
                              <li><a href="#">About us</a></li>
                              <li><a href="#">Carrer</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Partner</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="tp-footer-widget mb-30">
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
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="tp-footer-widget ml-60 mb-30">
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
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="tp-footer-widget ml-130 mb-30">
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
         <div class="tp-copyright-area pt-30 pb-165">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-copyright-text text-center">
                        <p class="tp-ff-inter mb-5">2026 <a href="#">Themepure </a>© All rights reserved</p>
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
   <script src="{{ asset('turiehtml-10/turie/assets/js/typed.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/wow.min.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/ajax-form.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/slider-init.js') }}"></script>
   <script src="{{ asset('turiehtml-10/turie/assets/js/main.js') }}"></script>
</body>

</html>
