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

      <!-- breadcrumb-area-start -->
      <div class="tp-breadcrumb-area tp-breadcrumb-ptb tp-breadcrumb-overly bg-position" data-background="{{ asset('turiehtml-10/turie/assets/img/breadcrumb/bg-15.jpg') }}">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-breadcrumb-wrap text-center">
                     <h2 class="tp-breadcrumb-title fs-112 text-center mb-0 lh-1">FAQ</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- tp-faq-area-start -->
      <div class="tp-faq-area tp-faq-city-ptb pt-135 pb-90">
         <div class="container container-1350">
            <div class="row gx-25">
               <div class="col-12">
                  <div class="text-center">
                     <h3 class="tp-tour-details-title fw-600 mb-50">Frequently Asked Questions</h3>
                  </div>
               </div>
               <div class="col-lg-6 mb-30">
                  <div class="tp-faq-wrap">
                     <div class="accordion" id="faq_general_faqaccordion">
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="faq-1">
                              <button class="accordion-button tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faq__collapse_one" aria-expanded="true" aria-controls="faq__collapse_one">
                                 <span class="accordion-btn"></span>
                                 <span class="tp-faq-title">What is included?</span>
                              </button>
                           </h2>
                           <div id="faq__collapse_one" class="accordion-collapse collapse show" role="region" aria-labelledby="faq-1" data-bs-parent="#faq_general_faqaccordion">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>Branding is the process of creating a unique identity for your business, including visuals messaging, and positioning. It helps build trust, recognition.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="faq-2">
                              <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faq__collapse_two" aria-expanded="false" aria-controls="faq__collapse_two">
                                 <span class="accordion-btn"></span>
                                 <span class="tp-faq-title">How do I make a payment for my booking?</span>
                              </button>
                           </h2>
                           <div id="faq__collapse_two" class="accordion-collapse collapse" role="region" aria-labelledby="faq-2" data-bs-parent="#faq_general_faqaccordion">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="faq-3">
                              <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faq__collapse_three" aria-expanded="false" aria-controls="faq__collapse_three">
                                 <span class="accordion-btn"></span>
                                 <span class="tp-faq-title">How can I customize my tour itinerary?</span>
                              </button>
                           </h2>
                           <div id="faq__collapse_three" class="accordion-collapse collapse" role="region" aria-labelledby="faq-3" data-bs-parent="#faq_general_faqaccordion">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="faq-4">
                              <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faq__collapse_four" aria-expanded="false" aria-controls="faq__collapse_four">
                                 <span class="accordion-btn"></span>
                                 <span class="tp-faq-title">Do you offer adventure trips?</span>
                              </button>
                           </h2>
                           <div id="faq__collapse_four" class="accordion-collapse collapse" role="region" aria-labelledby="faq-4" data-bs-parent="#faq_general_faqaccordion">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mb-30">
                  <div class="tp-faq-wrap">
                     <div class="accordion" id="general_faqaccordion">
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="order_one">
                              <button class="accordion-button tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_one" aria-expanded="true" aria-controls="order__collapse_one">
                                 <span class="accordion-btn"></span>
                                 <span class="tp-faq-title">What are the top things to do in Osaka?</span>
                              </button>
                           </h2>
                           <div id="order__collapse_one" class="accordion-collapse collapse" role="region" aria-labelledby="order_one" data-bs-parent="#general_faqaccordion">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>Branding is the process of creating a unique identity for your business, including visuals messaging, and positioning. It helps build trust, recognition.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="order_two">
                              <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_two" aria-expanded="false" aria-controls="order__collapse_two">
                                 <span class="accordion-btn"></span>
                                 <span class="tp-faq-title">What are the for families in Osaka?</span>
                              </button>
                           </h2>
                           <div id="order__collapse_two" class="accordion-collapse collapse show" role="region" aria-labelledby="order_two" data-bs-parent="#general_faqaccordion">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="order_three">
                              <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_three" aria-expanded="false" aria-controls="order__collapse_three">
                                 <span class="accordion-btn"></span>
                                 <span class="tp-faq-title">How can I customize my tour itinerary?</span>
                              </button>
                           </h2>
                           <div id="order__collapse_three" class="accordion-collapse collapse" role="region" aria-labelledby="order_three" data-bs-parent="#general_faqaccordion">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="order_four">
                              <button class="accordion-button collapsed tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#order__collapse_four" aria-expanded="false" aria-controls="order__collapse_four">
                                 <span class="accordion-btn"></span>
                                 <span class="tp-faq-title">Do you offer adventure trips?</span>
                              </button>
                           </h2>
                           <div id="order__collapse_four" class="accordion-collapse collapse" role="region" aria-labelledby="order_four" data-bs-parent="#general_faqaccordion">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-faq-area-end -->

      <!-- tp-contact-area-start -->
      <div class="tp-contact-area pb-110">
         <div class="container container-1350">
            <div class="row align-items-center">
               <div class="col-xl-6">
                  <div class="tp-faq-form mb-30">
                     <h2 class="tp-section-title fs-32 fw-600 mb-20">Send Your message!</h2>
                     <div class="tp-contact-form">
                        <form action="#">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="tp-review-input mb-20">
                                    <label class="tp-label mb-5" for="name">Name <span>*</span></label>
                                    <input class="tp-input" name="name" type="text" id="name" placeholder="Your Name...">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="tp-review-input mb-20">
                                    <label class="tp-label mb-5" for="email">Email <span>*</span></label>
                                    <input class="tp-input" name="email" type="email" id="email" placeholder="Your Email...">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="tp-review-input mb-20">
                                    <label class="tp-label mb-5" for="subject">Subject <span>*</span></label>
                                    <input class="tp-input" name="website" type="text" id="subject" placeholder="Your Subject">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="tp-review-input mb-15">
                                    <label class="tp-label mb-5" for="textarea">Message <span>*</span></label>
                                    <textarea class="tp-input tp-textarea" name="message" id="textarea"  placeholder="Write your message"></textarea>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="tp-review-input mb-30 d-flex align-items-start mb-25">
                                    <input class="tp-checkbox" type="checkbox" id="agree">
                                    <label class="tp-agree" for="agree">I agree that my submitted data is being <a href="{{ url('/privacy-policy') }}">collected and stored.</a></label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="tp-contact-btn">
                                    <button class="tp-btn" type="submit">Send Message</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="tp-faq-contact-content ml-60 mb-30">
                     <div class="tp-about-3-section-title p-relative pb-20">
                        <span class="tp-section-subtitle d-inline-block mb-15">Contact Us</span>
                        <h2 class="tp-section-title fw-600 mb-15">Contact With Us for<br> Your Any Help.</h2>
                        <p class="mb-10">Branding is the process of creating a unique identity for your<br> 
                           business, including visuals messaging, and positioning.</p>
                     </div>
                     <div class="tp-about-two-service icon-animetion-wrap mb-25 d-flex align-items-center wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <span class="tp-about-two-service-icon mr-15">
                           <svg class="icon-animetion-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.3064 18.1803C9.91618 18.5457 9.39445 18.75 8.85148 18.75C8.30851 18.75 7.78687 18.5457 7.39654 18.1803C3.82221 14.8134 -0.967827 11.0522 1.36813 5.59169C2.63116 2.63924 5.66299 0.75 8.85148 0.75C12.04 0.75 15.0718 2.63924 16.3349 5.59169C18.6679 11.0454 13.8896 14.825 10.3064 18.1803Z" stroke="currentColor" stroke-width="1.5" />
                              <path d="M12.0007 8.84995C12.0007 10.5897 10.5904 12 8.85068 12C7.11098 12 5.70068 10.5897 5.70068 8.84995C5.70068 7.11025 7.11098 5.69995 8.85068 5.69995C10.5904 5.69995 12.0007 7.11025 12.0007 8.84995Z" stroke="currentColor" stroke-width="1.5" />
                           </svg>
                        </span>
                        <div>
                           <h2 class="tp-about-two-service-title mb-5">Our Location</h2>
                           <p class="tp-about-two-service-dec mb-0">4140 Parker Rd. Allentown, New Mexico 31134</p>
                        </div>
                     </div>
                     <div class="tp-about-two-service icon-animetion-wrap mb-25 d-flex align-items-center wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <span class="tp-about-two-service-icon mr-15">
                           <svg class="icon-animetion-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.44992 7.45336L4.79697 5.10633C5.27574 4.62756 5.44141 3.92014 5.24777 3.27135C5.09636 2.76401 4.92576 2.15412 4.81237 1.63259C4.70749 1.15024 4.28422 0.75 3.7906 0.75H2.44992C1.46267 0.75 0.651923 1.55341 0.760216 2.53471C1.58346 9.99407 7.5064 15.917 14.9658 16.7403C15.9471 16.8485 16.7505 16.0378 16.7505 15.0505V13.7099C16.7505 13.2163 16.3486 12.8113 15.8629 12.723C15.3272 12.6255 14.7604 12.4659 14.2861 12.3147C13.6048 12.0974 12.8475 12.2502 12.3419 12.7558L10.0471 15.0505" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </span>
                        <div>
                           <h2 class="tp-about-two-service-title mb-5">Phone Number</h2>
                           <p class="tp-about-two-service-dec mb-0">+(704) 555-0127</p>
                        </div>
                     </div>
                     <div class="tp-about-two-service icon-animetion-wrap mb-25 d-flex align-items-center wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <span class="tp-about-two-service-icon mr-15">
                           <svg class="icon-animetion-icon" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.75 2.80872L6.44307 6.03446C8.5419 7.22366 9.42868 7.22366 11.5275 6.03446L17.2206 2.80872" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                              <path d="M0.762987 8.9652C0.816821 11.4898 0.843742 12.752 1.77526 13.6872C2.70677 14.6222 4.00321 14.6547 6.59609 14.7199C8.19413 14.76 9.77646 14.76 11.3745 14.7199C13.9674 14.6547 15.2638 14.6222 16.1954 13.6872C17.1269 12.752 17.1538 11.4898 17.2076 8.9652C17.2249 8.15345 17.2249 7.34655 17.2076 6.5348C17.1538 4.01024 17.1269 2.74796 16.1954 1.8129C15.2638 0.877837 13.9674 0.845267 11.3745 0.780118C9.77646 0.739962 8.19413 0.739962 6.59609 0.780109C4.00321 0.84525 2.70677 0.877821 1.77525 1.81289C0.843734 2.74795 0.816821 4.01023 0.762979 6.5348C0.745668 7.34655 0.745676 8.15345 0.762987 8.9652Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                           </svg>
                        </span>
                        <div>
                           <h2 class="tp-about-two-service-title mb-5">Send Email</h2>
                           <p class="tp-about-two-service-dec mb-0">info@gmail.com</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-contact-area-end -->

      <!-- tp-offer-banner-area-start -->
      <div class="tp-offer-banner-area tp-faq-banner tp-offer-banner-overly tp-offer-banner-six p-relative bg-position" data-background="{{ asset('turiehtml-10/turie/assets/img/offer/banner-2.jpg') }}">
         <div class="container">
            <div class="row">
               <div class="12">
                  <div class="tp-offer-banner-content text-center p-relative z-index-2">
                     <h2 class="tp-offer-banner-title text-white fw-600 wow fadeInUp mb-45" data-wow-duration=".9s" data-wow-delay=".3s">Capture Timeless <br> Beauty in Every Destination</h2>
                     <a href="{{ route('tours.finder') }}" class="tp-btn tp-btn-50 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">Book Now
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M0.75 5.75H10.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M5.75 0.75L10.75 5.75L5.75 10.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </div>
               </div>   
            </div>
         </div>
      </div>
      <!-- tp-offer-banner-area-end -->


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
