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
      <div class="tp-breadcrumb-area tp-breadcrumb-ptb " data-bg-color="#f4f4f4">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-breadcrumb-wrap text-center">
                     <h2 class="tp-breadcrumb-title shadow-none text-black fs-112 text-center mb-0">Privacy Policy</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- tp-policy-area-start -->
      <div class="tp-policy-area pt-135 pb-60">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 offset-lg-1">
                  <div class="tp-policy-content">
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">Turie – Terms of Use</h2>
                        <p class="mb-0"><span class="text-black">Last Updated:</span> October 26, 2025</p>
                        <p>Welcome to Turie! Please read these Terms and Conditions (“Terms”) carefully before using our website, mobile app,
                        or any related services (collectively referred to as “Our Platform”). By accessing or using Turie, you agree to these Terms
                        and our Privacy Policy. If you do not agree, please stop using Turie immediately.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">1. About Turie</h2>
                        <p>Turie is a travel discovery and booking platform that helps users explore destinations, compare prices, and
                           make bookings for tours, activities, and travel services. We do not own, control, or operate any of the travel products
                           listed — they are provided by independent third-party providers (“Travel Partners”).</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">2. Acceptance of Terms</h2>
                        <p class="mb-5">By using Turie, you confirm that:</p>
                        <ul class="tp-policy-list ml-10 mb-5">
                           <li>You are at least 18 years old and legally able to enter into agreements.</li>
                           <li>You have read and agree to these Terms and our Privacy Policy.</li>
                           <li>You understand that using our Platform signifies your acceptance of all current and future updates to these Terms.</li>
                        </ul>
                        <p>Turie may revise these Terms at any time by posting an updated version on our Platform. Continued use means you accept the revised Terms.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">3. Role of Turie</h2>
                        <p class="mb-5">Turie acts solely as a search and booking interface.</p>
                        <p class="mb-5"> All bookings, products, and services are managed directly by our Travel Partners.</p>
                        <p class="mb-5">This means:</p>
                        <ul class="tp-policy-list ml-10">
                           <li>Turie does not handle payments or issue tickets directly (unless specified).</li>
                           <li>Any disputes, refunds, or claims must be handled with the respective provider.</li>
                           <li>You are responsible for reviewing and agreeing to each provider’s own terms and conditions.</li>
                        </ul>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">4. Booking Policy</h2>
                        <p class="mb-5">When you make a booking through Turie:</p>
                        <ul class="tp-policy-list ml-10 mb-5">
                           <li>The booking is created between you and the Travel Partner.</li>
                           <li>Turie does not guarantee prices, availability, or service quality.</li>
                           <li>Prices may change due to taxes, service charges, or currency conversion.</li>
                           <li>Always review your details carefully before confirming a booking.</li>
                        </ul>
                        <p>Once confirmed, changes or cancellations are subject to the Travel Partner’s policy.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">5. Use of Our Platform</h2>
                        <p class="mb-5">You agree to:</p>
                        <ul class="tp-policy-list ml-10 mb-5">
                           <li>Use Turie only for lawful and personal travel planning purposes.</li>
                           <li>Provide accurate and updated information.</li>
                           <li>Keep your login and account secure.</li>
                           <li>Not use automated tools (like bots or scrapers) to collect data from our site.</li>
                        </ul>
                        <p class="mb-5">You agree not to:</p>
                        <ul class="tp-policy-list ml-10 mb-5">
                           <li>Make fake or speculative bookings.</li>
                           <li>Post or share unlawful, misleading, or harmful content.</li>
                           <li>Copy, resell, or misuse any data, images, or services from Turie.</li>
                        </ul>
                        <p>Turie reserves the right to suspend or terminate access if misuse is detected.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">6. Intellectual Property</h2>
                        <p>All text, visuals, logos, and software on Turie belong to Turie or its partners. You may view and download material only for personal, non-commercial use. No part of Turie may be copied, distributed, or modified without written permission.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">7. Content Accuracy</h2>
                        <p>Turie displays information (including prices, availability, and images) provided by Travel Partners.  We strive to keep it accurate but cannot guarantee completeness or real-time updates. You should verify all information before booking</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">8. Limitation of Liability</h2>
                        <p class="mb-5">To the maximum extent permitted by law:</p>
                        <ul class="tp-policy-list ml-10 mb-5">
                           <li>Turie is not responsible for errors, cancellations, losses, or damages arising from use of our Platform.</li>
                           <li>We are not liable for service issues, refunds, or cancellations from Travel Partners.</li>
                           <li>Your use of Turie is entirely at your own risk.</li>
                        </ul>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">9. Indemnity</h2>
                        <p class="mb-5">You agree to defend and indemnify Turie, its team, and affiliates against any claims, damages, or expenses arising from:</p>
                        <ul class="tp-policy-list ml-10 mb-5">
                           <li>Your breach of these Terms, or</li>
                           <li>Your misuse of the Platform or Travel Services.</li>
                        </ul>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">10. Links to Other Sites</h2>
                        <p>Our Platform may include links to external websites. Turie does not control or endorse these sites and is not responsible for their content or privacy practices. Always review their Terms and Privacy Policies before use.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">11. Termination</h2>
                        <p>Turie may suspend or terminate your access at any time for any reason, including misuse or violation of these Terms. You can delete your account anytime through your user settings.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">12. Dispute Resolution</h2>
                        <p class="mb-5">These Terms are governed by the laws of the United States of America (or your local jurisdiction, if applicable). Any disputes will be handled in the competent courts of the user’s country of residence.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">13. Feedback</h2>
                        <p class="mb-5">We welcome suggestions, reviews, or feedback! By submitting feedback, you grant Turie the right to use it for
                           improvements, marketing, or other purposes without obligation or compensation.</p>
                     </div>
                     <div class="tp-policy-item mb-75">
                        <h2 class="tp-policy-title fw-600 mb-20">14. Contact Us</h2>
                        <p class="mb-5">For any questions about these Terms, please contact us:</p>
                        <div class="tp-policy-list mb-10">
                           <div>
                              <a href="mailto:contact@turie.com">contact@turie.com</a>
                           </div>
                           <a href="tel:+42077001007">+4 20 7700 1007</a>
                        </div>
                        <p>Would you like me to make a shorter “Terms Summary” version too — the kind that fits in a small popup or signup
                        footer (like “By continuing, you agree to Turie’s Terms & Privacy Policy”)? That’s useful for your website design.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-policy-area-end -->

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
