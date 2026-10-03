{{-- Enjoyable Tour — About Us content --}}

      <!-- breadcrumb-area-start -->
      <div class="tp-breadcrumb-area tp-breadcrumb-ptb tp-breadcrumb-overly bg-position" data-background="{{ asset('images/about/breadcrumb.jpg') }}">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-breadcrumb-wrap text-center">
                     <h2 class="tp-breadcrumb-title fs-112 text-center mb-0 lh-1">About Us</h2>
                     <span class="tp-breadcrumb-subtitle text-white fw-600">Enjoyable Tour · Tanzania</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- tp-about-area-start -->
      <div class="tp-about-area p-relative tp-tour-ptb z-index-2 pt-140 pb-60">
         <img class="tp-about-3-shape tptranslateX2" src="{{ asset('turiehtml-10/turie/assets/img/about/three/shape.png') }}" alt="">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6">
                  <div class="tp-about-3-thumb p-relative mb-30 wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                     <img src="{{ asset('images/about/hero.jpg') }}" alt="Enjoyable Tour Tanzania" class="w-100" style="border-radius:12px;object-fit:cover;">
                     <div class="tp-about-3-review">
                        <p class="fw-500 mb-30">“From Kilimanjaro summit to Serengeti sunrise — every detail with Enjoyable Tour felt safe, local, and unforgettable.”</p>
                        <div class="tp-about-rating d-flex flex-wrap align-items-center">
                           <img class="mr-10" src="{{ asset('enjoyable-tour-logo.png') }}" alt="Enjoyable Tour" width="40" height="40" style="object-fit:contain;border-radius:50%;background:#fff;">
                           <h3 class="tp-about-rating-title mb-0 mr-10 text-white">4.9</h3>
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
                              <a href="{{ url('/testimonial') }}">Trusted by travelers worldwide
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
                        <span class="tp-section-subtitle d-inline-block mb-15">Who we are</span>
                        <h2 class="tp-section-title fw-600 mb-15">Your local partner for<br> Tanzania adventures</h2>
                        <p class="mb-15">
                           <strong>Enjoyable Tour</strong> is a Tanzania-based travel company dedicated to authentic experiences across the country. We specialize in three core adventures: <strong>Trekking</strong>, <strong>Safaris</strong>, and <strong>Day trips</strong> planned with local expertise, safety-first guiding, and warm hospitality.
                        </p>
                        <p class="mb-10">
                           Whether you climb Kilimanjaro, track the Big Five on the Serengeti plains, or explore cultural day tours around Arusha and Moshi, we craft journeys that feel personal, not packaged.
                        </p>
                     </div>
                     <div class="tp-about-3-awards-wrap mb-50">
                        <div class="tp-about-3-awards-item d-inline-flex align-items-center me-4 mb-15">
                           <span class="tp-about-3-awards-text fw-500">Local Tanzania<br> Experts</span>
                        </div>
                        <div class="tp-about-3-awards-item d-inline-flex align-items-center mb-15">
                           <span class="tp-about-3-awards-text fw-500">Licensed &amp;<br> Safety Focused</span>
                        </div>
                     </div>
                     <div>
                        <a href="{{ url('/tour-grid') }}" class="tp-btn tp-btn-50">
                           Explore Tours
                           <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.75 4.75H0.750029" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6.08307 8.75C6.08307 8.75 10.083 5.80401 10.083 4.74995C10.083 3.69589 6.083 0.75 6.083 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-about-area-end -->

      <!-- What we do — Trekking, Safaris, Day trips -->
      <div class="tp-chose-area pt-80 pb-90" data-bg-color="#f7f9f9">
         <div class="container">
            <div class="row justify-content-center mb-40">
               <div class="col-lg-8 text-center">
                  <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">What we offer</span>
                  <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Three ways to enjoy Tanzania</h2>
                  <p class="wow fadeInUp mb-0" data-wow-duration=".9s" data-wow-delay=".4s">From mountain peaks to wildlife plains and short getaways — we cover it all.</p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-tour-item mb-30 h-100">
                     <div class="tp-tour-thumb p-relative fix">
                        <a href="{{ url('/tour-grid') }}" class="image">
                           <img src="{{ asset('images/about/trekking.jpg') }}" alt="Trekking Tanzania">
                        </a>
                        <div class="tp-tour-badge">
                           <span class="discount tp-ff-inter fw-700">Trekking</span>
                        </div>
                     </div>
                     <div class="tp-tour-content">
                        <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-grid') }}">Mountain Trekking</a></h3>
                        <p class="mb-15">Kilimanjaro, Meru, and scenic highland trails with experienced mountain guides, porters, and carefully paced itineraries for every fitness level.</p>
                        <div class="tp-tour-btn">
                           <a href="{{ url('/tour-grid') }}" class="tp-btn-sm fw-500 tp-ff-inter">View Treks</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                  <div class="tp-tour-item mb-30 h-100">
                     <div class="tp-tour-thumb p-relative fix">
                        <a href="{{ url('/tour-grid') }}" class="image">
                           <img src="{{ asset('images/about/safari.jpg') }}" alt="Safari Tanzania">
                        </a>
                        <div class="tp-tour-badge">
                           <span class="discount tp-ff-inter fw-700">Safaris</span>
                        </div>
                     </div>
                     <div class="tp-tour-content">
                        <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-grid') }}">Wildlife Safaris</a></h3>
                        <p class="mb-15">Serengeti, Ngorongoro, Tarangire, and Lake Manyara — game drives, lodges &amp; camps, and the chance to witness the Great Migration in season.</p>
                        <div class="tp-tour-btn">
                           <a href="{{ url('/tour-grid') }}" class="tp-btn-sm fw-500 tp-ff-inter">View Safaris</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-tour-item mb-30 h-100">
                     <div class="tp-tour-thumb p-relative fix">
                        <a href="{{ url('/tour-grid') }}" class="image">
                           <img src="{{ asset('images/about/daytrip.jpg') }}" alt="Day trips Tanzania">
                        </a>
                        <div class="tp-tour-badge">
                           <span class="discount tp-ff-inter fw-700">Day trips</span>
                        </div>
                     </div>
                     <div class="tp-tour-content">
                        <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ url('/tour-grid') }}">Day Trips &amp; Excursions</a></h3>
                        <p class="mb-15">Materuni waterfalls, coffee tours, cultural villages, Chemka hot springs, and more — perfect half-day or full-day adventures from Arusha or Moshi.</p>
                        <div class="tp-tour-btn">
                           <a href="{{ url('/tour-grid') }}" class="tp-btn-sm fw-500 tp-ff-inter">View Day Trips</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- tp-counter-area-start -->
      <div class="tp-counter-area fix p-relative tp-counter-2-pt pt-120 pb-40">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-counter-2-wrap d-flex justify-content-between flex-wrap gap-5">
                     <div class="tp-counter-2-content column-1 text-center">
                        <h3 class="tp-counter-7-count fw-600 uppercase mb-0 lh-1"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="2"></span>+</h3>
                        <span class="tp-counter-7-dec fw-500 mb-15 d-block">Years of Experience</span>
                     </div>
                     <div class="tp-counter-2-content column-2 text-center">
                        <h3 class="tp-counter-7-count fw-600 uppercase mb-0 lh-1"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="2" data-purecounter-separator="true"></span>+</h3>
                        <span class="tp-counter-7-dec fw-500 mb-15 d-block">Happy Travelers</span>
                     </div>
                     <div class="tp-counter-2-content column-3 text-center">
                        <h3 class="tp-counter-7-count fw-600 uppercase mb-0 lh-1"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="2"></span>+</h3>
                        <span class="tp-counter-7-dec fw-500 mb-15 d-block">Safari &amp; Trek Routes</span>
                     </div>
                     <div class="tp-counter-2-content column-4 text-center">
                        <h3 class="tp-counter-7-count fw-600 uppercase mb-0 lh-1"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2"></span>%</h3>
                        <span class="tp-counter-7-dec fw-500 mb-15 d-block">Guest Satisfaction</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-counter-area-end -->

      <!-- Why choose us -->
      <div class="tp-chose-area pt-100 pb-80">
         <div class="container">
            <div class="row justify-content-center mb-40">
               <div class="col-lg-8 text-center">
                  <span class="tp-section-subtitle d-inline-block mb-15">Why Enjoyable Tour</span>
                  <h2 class="tp-section-title fw-600">Travel with confidence in Tanzania</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".2s">
                  <div class="tp-about-two-service icon-animetion-wrap text-center mb-30">
                     <h4 class="tp-about-two-service-title">Local Knowledge</h4>
                     <p class="tp-about-two-service-dec">Guides who know the parks,<br> trails, seasons, and culture.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-about-two-service icon-animetion-wrap text-center mb-30">
                     <h4 class="tp-about-two-service-title">Safety First</h4>
                     <p class="tp-about-two-service-dec">Licensed operators, vetted<br> vehicles, and mountain protocols.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                  <div class="tp-about-two-service icon-animetion-wrap text-center mb-30">
                     <h4 class="tp-about-two-service-title">Custom Itineraries</h4>
                     <p class="tp-about-two-service-dec">Private or group trips tailored<br> to your budget and pace.</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-about-two-service icon-animetion-wrap text-center mb-30">
                     <h4 class="tp-about-two-service-title">Fair &amp; Transparent</h4>
                     <p class="tp-about-two-service-dec">Clear pricing — no surprise<br> fees on the trail or safari.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- How we work -->
      <div class="tp-process-area pt-80 pb-40" data-bg-color="#f7f9f9">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-process-title-wrap mb-45 text-center">
                     <span class="tp-section-subtitle d-inline-block mb-15">How it works</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">Book your Tanzania trip in 4 steps</h2>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-process-item mb-30">
                     <h2 class="tp-process-title mb-0">01 · Enquire</h2>
                     <p class="tp-process-dec mb-0">Tell us your dates, group size, and interest — trek, safari, or day trip.</p>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-process-item mb-30">
                     <h2 class="tp-process-title mb-0">02 · Plan</h2>
                     <p class="tp-process-dec mb-0">We propose routes, lodges/camps, and a clear quote tailored for you.</p>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-process-item mb-30">
                     <h2 class="tp-process-title mb-0">03 · Confirm</h2>
                     <p class="tp-process-dec mb-0">Secure your booking and receive a full itinerary with packing tips.</p>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                  <div class="tp-process-item mb-30">
                     <h2 class="tp-process-title mb-0">04 · Enjoy</h2>
                     <p class="tp-process-dec mb-0">Arrive in Tanzania — we handle airport meet, guides, and the adventure.</p>
                  </div>
               </div>
            </div>
            <div class="row mt-20 mb-40">
               <div class="col-12 text-center">
                  <a href="{{ url('/contact') }}" class="tp-btn">Start Planning
                     <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 4.75H0.750029" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.08307 8.75C6.08307 8.75 10.083 5.80401 10.083 4.74995C10.083 3.69589 6.083 0.75 6.083 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </a>
               </div>
            </div>
         </div>
      </div>

      <!-- FAQ -->
      <div class="tp-faq-area tp-faq-city-ptb pt-110 pb-100">
         <div class="container">
            <div class="row align-items-end mb-20">
               <div class="col-lg-8">
                  <div class="tp-about-section-title p-relative pb-20">
                     <span class="tp-section-subtitle d-inline-block mb-15 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">FAQ</span>
                     <h2 class="tp-section-title fw-600 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">Common questions<br> before you travel</h2>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="text-lg-end mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <a href="{{ url('/contact') }}" class="tp-btn-solid">Ask Us Anything
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M9.1792 4.59106H0.500053" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M5.64265 8.68182C5.64265 8.68182 9.49999 5.66888 9.5 4.59086C9.50001 3.51284 5.64258 0.5 5.64258 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-10 mx-auto">
                  <div class="tp-faq-wrapper">
                     <div class="accordion" id="enjoyable_about_faq">
                        <div class="accordion-item tp-faq-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button tp-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#faq_one" aria-expanded="true">
                                 <span class="tp-faq-title">What tours does Enjoyable Tour offer?</span>
                              </button>
                           </h2>
                           <div id="faq_one" class="accordion-collapse collapse show" data-bs-parent="#enjoyable_about_faq">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>We focus on Tanzania adventures: mountain <strong>trekking</strong> (Kilimanjaro, Meru), wildlife <strong>safaris</strong> across northern parks, and flexible <strong>day trips</strong> from Arusha and Moshi.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item tp-faq-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button tp-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_two">
                                 <span class="tp-faq-title">When is the best time to visit Tanzania?</span>
                              </button>
                           </h2>
                           <div id="faq_two" class="accordion-collapse collapse" data-bs-parent="#enjoyable_about_faq">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>Dry seasons (June–October and January–February) are ideal for safaris and trekking. The Great Migration peaks vary by month — we advise based on your travel window.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item tp-faq-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button tp-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_three">
                                 <span class="tp-faq-title">Do you arrange private and group trips?</span>
                              </button>
                           </h2>
                           <div id="faq_three" class="accordion-collapse collapse" data-bs-parent="#enjoyable_about_faq">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>Yes. You can join scheduled group departures or book a private itinerary for couples, families, and friends — including custom combinations of trek + safari + day trips.</p>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item tp-faq-item">
                           <h2 class="accordion-header">
                              <button class="accordion-button tp-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_four">
                                 <span class="tp-faq-title">What is included in your packages?</span>
                              </button>
                           </h2>
                           <div id="faq_four" class="accordion-collapse collapse" data-bs-parent="#enjoyable_about_faq">
                              <div class="accordion-body tp-faq-details-para">
                                 <p>Most packages include park fees, professional guides, transport, and accommodation as listed on each tour. We send a clear inclusions/exclusions list before you confirm.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
