@php
  $gallery = $tour->gallery ?: [];
  if (empty($gallery)) {
      $gallery = [$tour->imageUrl()];
  } else {
      $gallery = collect($gallery)->map(function ($img) use ($tour) {
          if (\Illuminate\Support\Str::startsWith($img, ['http://', 'https://', '/'])) {
              return $img;
          }
          if (\Illuminate\Support\Str::startsWith($img, ['turiehtml-10/', 'images/', 'storage/'])) {
              return asset($img);
          }
          return asset('storage/'.$img);
      })->all();
  }
  $destinations = $tour->destinations ?: [];
  $included = $tour->included ?: [];
  $excluded = $tour->excluded ?: [];
  $places = $tour->places ?: [];
  $itinerary = $tour->itinerary ?: [];
  $faqs = $tour->faqs ?: [];
@endphp

<!-- tp-tour-details-area-start -->
<div class="tp-tour-details-2-area tp-tour-details-2-spacing pt-80">
   <div class="tp-tour-details-2-gallery">
      <div class="swiper tp-instagram-slide">
         <div class="swiper-wrapper slide-transtion">
            @foreach ($gallery as $gimg)
               <div class="swiper-slide">
                  <div class="tp-instagram-thumb p-relative">
                     <a href="{{ $gimg }}" class="popup-image">
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
                     <p class="mb-30">{{ $tour->overview }}</p>
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
                        @if ($tour->accommodation)
                           <li>
                              <div class="tp-tour-details-info-content">
                                 <span>Accommodation</span>
                                 <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->accommodation }}</h3>
                              </div>
                           </li>
                        @endif
                        @if ($tour->departure_city)
                           <li>
                              <div class="tp-tour-details-info-content">
                                 <span>Departure City</span>
                                 <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->departure_city }}</h3>
                              </div>
                           </li>
                        @endif
                        @if ($tour->arrival_city)
                           <li>
                              <div class="tp-tour-details-info-content">
                                 <span>Arrival City</span>
                                 <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->arrival_city }}</h3>
                              </div>
                           </li>
                        @endif
                        @if ($tour->best_season)
                           <li>
                              <div class="tp-tour-details-info-content">
                                 <span>Best Season</span>
                                 <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->best_season }}</h3>
                              </div>
                           </li>
                        @endif
                        @if ($tour->guide_type)
                           <li>
                              <div class="tp-tour-details-info-content">
                                 <span>Guide</span>
                                 <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->guide_type }}</h3>
                              </div>
                           </li>
                        @endif
                        @if ($tour->location)
                           <li>
                              <div class="tp-tour-details-info-content">
                                 <span>Location</span>
                                 <h3 class="fw-600 tp-ff-inter mb-0">{{ $tour->location }}</h3>
                              </div>
                           </li>
                        @endif
                     </ul>
                  </div>

                  @if ($tour->stay_category)
                     <div class="tp-tour-destination-filters tp-tour-destination-filters-2 tp-tour-details-border pb-40 mb-45">
                        <h3 class="tp-tour-details-title fw-600 mb-20">Stay Category</h3>
                        <ul>
                           <li><a href="#">{{ $tour->stay_category }}</a></li>
                        </ul>
                     </div>
                  @endif

                  @if (count($included) || count($excluded))
                     <div class="tp-tour-details-highlight tp-tour-details-included tp-tour-details-border pb-40 mb-40">
                        <h3 class="tp-tour-details-title fw-600 mb-20">What's included</h3>
                        <div class="tp-tour-details-included-list">
                           @if (count($included))
                              <ul>
                                 @foreach ($included as $item)
                                    <li>
                                       <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7643 0.235294C10.45 -0.0784314 9.97857 -0.0784314 9.66428 0.235294L3.77143 6.11765L1.33571 3.68628C1.02143 3.37255 0.55 3.37255 0.235714 3.68628C-0.0785714 4 -0.0785714 4.47059 0.235714 4.78431L3.22143 7.76471C3.37857 7.92157 3.53571 8 3.77143 8C4.00714 8 4.16429 7.92157 4.32143 7.76471L10.7643 1.33333C11.0786 1.01961 11.0786 0.54902 10.7643 0.235294Z" fill="#73B458" /></svg>
                                       {{ $item }}
                                    </li>
                                 @endforeach
                              </ul>
                           @endif
                           @if (count($excluded))
                              <div class="mt-20">
                                 <h4 class="fw-600 mb-15">Not included</h4>
                                 <ul>
                                    @foreach ($excluded as $item)
                                       <li>
                                          <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.71314 3.99386L7.85964 0.847356C7.95072 0.753055 8.00112 0.626754 7.99998 0.495655C7.99884 0.364557 7.94626 0.239151 7.85355 0.146447C7.76085 0.0537425 7.63544 0.00115811 7.50434 1.89013e-05C7.37325 -0.00112031 7.24694 0.0492769 7.15264 0.140356L4.00614 3.28686L0.859644 0.140356C0.765343 0.0492769 0.639042 -0.00112031 0.507944 1.89013e-05C0.376845 0.00115811 0.251439 0.0537425 0.158735 0.146447C0.0660308 0.239151 0.0134464 0.364557 0.0123072 0.495655C0.011168 0.626754 0.0615652 0.753055 0.152644 0.847356L3.29914 3.99386L0.152644 7.14036C0.104889 7.18648 0.0667977 7.24165 0.0405932 7.30265C0.0143887 7.36366 0.000595786 7.42927 1.88782e-05 7.49566C-0.00055803 7.56205 0.012093 7.62788 0.0372334 7.68933C0.0623738 7.75078 0.0995004 7.80661 0.146447 7.85355C0.193393 7.9005 0.249219 7.93763 0.310667 7.96277C0.372115 7.98791 0.437955 8.00056 0.504345 7.99998C0.570734 7.9994 0.636344 7.98561 0.697346 7.95941C0.758348 7.9332 0.813521 7.89511 0.859644 7.84736L4.00614 4.70086L7.15264 7.84736C7.24694 7.93844 7.37325 7.98883 7.50434 7.98769C7.63544 7.98655 7.76085 7.93397 7.85355 7.84127C7.94626 7.74856 7.99884 7.62315 7.99998 7.49206C8.00112 7.36096 7.95072 7.23466 7.85964 7.14036L4.71314 3.99386Z" fill="#FD4621" /></svg>
                                          {{ $item }}
                                       </li>
                                    @endforeach
                                 </ul>
                              </div>
                           @endif
                        </div>
                     </div>
                  @endif

                  @if (count($places))
                     <div class="tp-tour-details-place-wrap mb-15">
                        <h3 class="tp-tour-details-title fw-600 mb-25">Places You’ll See</h3>
                        <div class="row">
                           @foreach ($places as $place)
                              @php
                                 $pimg = $place['image'] ?? '';
                                 if ($pimg && !\Illuminate\Support\Str::startsWith($pimg, ['http://','https://','/'])) {
                                    $pimg = \Illuminate\Support\Str::startsWith($pimg, ['turiehtml-10/','images/','storage/']) ? asset($pimg) : asset('storage/'.$pimg);
                                 }
                                 if (!$pimg) { $pimg = $tour->imageUrl(); }
                              @endphp
                              <div class="col-md-4 col-sm-6">
                                 <div class="tp-tour-details-place-thumb mb-30">
                                    <a class="popup-image" href="{{ $pimg }}">
                                       <img class="w-100" src="{{ $pimg }}" alt="{{ $place['name'] ?? '' }}">
                                    </a>
                                    <span class="fw-600">{{ $place['name'] ?? '' }}</span>
                                 </div>
                              </div>
                           @endforeach
                        </div>
                     </div>
                  @endif

                  @if (count($itinerary))
                     <div class="tp-tour-itinerary-wrap mb-100">
                        <h3 class="tp-tour-details-title fw-600 mb-20">Tour Plan</h3>
                        <div class="tp-tour-details-plan-list">
                           <ul>
                              @foreach ($itinerary as $day)
                                 <li>
                                    <h4>{{ ($day['day'] ?? '') }}{{ !empty($day['title']) ? ': '.$day['title'] : '' }}</h4>
                                    <p>{{ $day['description'] ?? '' }}</p>
                                 </li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                  @endif

                  @if (count($faqs))
                     <div class="tp-faq-wrap mb-100">
                        <h3 class="tp-tour-details-title fw-600 mb-25">Frequently Asked Questions</h3>
                        <div class="accordion" id="tourFaq">
                           @foreach ($faqs as $i => $faq)
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="faqHeading{{ $i }}">
                                    <button class="accordion-button {{ $i ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $i }}">
                                       {{ $faq['question'] ?? '' }}
                                    </button>
                                 </h2>
                                 <div id="faqCollapse{{ $i }}" class="accordion-collapse collapse {{ $i ? '' : 'show' }}" data-bs-parent="#tourFaq">
                                    <div class="accordion-body">{{ $faq['answer'] ?? '' }}</div>
                                 </div>
                              </div>
                           @endforeach
                        </div>
                     </div>
                  @endif
               </div>
            </div>

            <div class="col-lg-5">
               <div class="tp-booking-sidebar-wrap ml-30 mb-15">
                  <div class="tp-booking-sidebar-item mb-40 tp-republic-day-sale p-relative">
                     <div class="tp-republic-current-rating p-absolute">
                        <span class="tp-republic-current-rating-score">{{ $tour->rating }}</span>
                        <span class="tp-republic-current-rating-count">({{ $tour->reviews_count }})</span>
                     </div>
                     <div class="tp-republic-day-price-wrap tp-tour-details-border mb-35 pb-20">
                        <div class="tp-republic-day-price-top mb-10">
                           <span class="tp-republic-day-price new-price">{{ $tour->formatPrice() }}</span>
                           <span class="tp-republic-day-per">Per Adults</span>
                        </div>
                        @if ($tour->old_price)
                           <span class="tp-republic-day-price old-price">{{ $tour->formatPrice((float) $tour->old_price) }}</span>
                        @endif
                     </div>
                     <a href="{{ url('/contact') }}" class="tp-btn tp-btn-xl w-100">Send Enquiry</a>
                  </div>
                  <div class="tp-booking-sidebar-item tp-booking-sidebar-form tp-enquiry-form p-relative">
                     @if ($tour->discount_badge)
                        <div class="tp-tour-badge p-absolute">
                           <span class="discount tp-ff-inter fw-700">{{ $tour->discount_badge }}</span>
                        </div>
                     @endif
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
                        <a href="{{ url('/contact') }}" class="tp-btn tp-btn-xl w-100 mb-20">Check Availability</a>
                        <p class="tp-booking-help text-center mb-0">Need help with booking? <a href="{{ url('/contact') }}">Send us a message.</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tp-tour-details-area-end -->

@if (($related ?? collect())->count())
   <div class="tp-tour-area pt-80 pb-100">
      <div class="container">
         <h3 class="tp-tour-details-title fw-600 mb-25">Latest Travel Packages</h3>
         <div class="row">
            @foreach ($related as $index => $rel)
               @include('turie.partials.package-card', ['tour' => $rel, 'delay' => '.'.(2 + $index).'s'])
            @endforeach
         </div>
      </div>
   </div>
@endif
