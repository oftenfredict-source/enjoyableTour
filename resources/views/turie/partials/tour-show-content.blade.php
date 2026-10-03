@php
   $isPlaceholder = fn ($path) => blank($path) || str_starts_with($path, 'turiehtml-10/');
   $toUrl = fn ($path) => \Illuminate\Support\Str::startsWith($path, ['http://', 'https://', '/']) ? $path : asset(\Illuminate\Support\Str::startsWith($path, ['images/', 'turiehtml-10/']) ? $path : 'storage/'.$path);

   $categorySlug = \Illuminate\Support\Str::slug((string) $tour->category);
   $categoryImages = [
      'safaris' => 'images/about/safari.jpg',
      'day-trips' => 'images/about/daytrip.jpg',
      'trekking' => 'images/about/trekking.jpg',
      'zanzibar' => 'images/categories/zanzibar.jpg',
   ];

   $places = collect($tour->places ?? [])->filter(fn ($p) => filled($p['name'] ?? null) && ! $isPlaceholder($p['image'] ?? null))->values();

   $galleryExtras = collect($tour->gallery ?? [])
      ->reject($isPlaceholder)
      ->merge($places->pluck('image'))
      ->push('images/categories/'.str_replace('-', '', $categorySlug).'.jpg', $categoryImages[$categorySlug] ?? 'images/about/hero.jpg')
      ->merge(($others ?? collect())->pluck('image'))
      ->reject(fn ($p) => $p === $tour->image)
      ->unique()
      ->filter(fn ($p) => ! str_starts_with($p, 'images/') || file_exists(public_path($p)))
      ->unique(fn ($p) => str_starts_with($p, 'images/') ? md5_file(public_path($p)) : $p)
      ->values()
      ->map($toUrl);

   $mainImage = $tour->imageUrl();
   $thumbA = $galleryExtras[0] ?? $mainImage;
   $thumbB = $galleryExtras[1] ?? $mainImage;

   $tripInfo = array_filter([
      ['fa-light fa-hotel', 'Accommodation', $tour->accommodation],
      ['fa-light fa-plane-departure', 'Departure City', $tour->departure_city],
      ['fa-light fa-plane-arrival', 'Arrival City', $tour->arrival_city],
      ['fa-light fa-cloud-sun', 'Best Season', $tour->best_season],
      ['fa-light fa-user-tie', 'Guide', $tour->guide_type],
      ['fa-light fa-clock', 'Duration', $tour->durationBadge() ? \Illuminate\Support\Str::title(strtolower($tour->durationBadge())) : null],
      ['fa-light fa-users', 'Group Size', $tour->guests_max ? $tour->guests_min.' – '.$tour->guests_max.' guests' : null],
      ['fa-light fa-star', 'Stay Category', $tour->stay_category],
   ], fn ($row) => filled($row[2]));

   $overview = collect(preg_split('/\n\s*\n/', (string) $tour->overview))->map(fn ($p) => trim($p))->filter();
   $highlights = collect($tour->highlights ?? [])->filter();
   $included = collect($tour->included ?? [])->filter();
   $excluded = collect($tour->excluded ?? [])->filter();
   $itinerary = collect($tour->itinerary ?? []);
   $faqs = collect($tour->faqs ?? [])->filter(fn ($f) => filled($f['question'] ?? null));
   $mapQuery = urlencode($tour->location ?: 'Tanzania');
   $starSvg = '<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.4122 0L11.0116 5.26604L16.8244 6.11567L12.6183 10.2124L13.6109 16L8.4122 13.266L3.21346 16L4.2061 10.2124L0 6.11567L5.81283 5.26604L8.4122 0Z" fill="currentColor" /></svg>';
   $checkSvg = '<svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7643 0.235294C10.45 -0.0784314 9.97857 -0.0784314 9.66428 0.235294L3.77143 6.11765L1.33571 3.68628C1.02143 3.37255 0.55 3.37255 0.235714 3.68628C-0.0785714 4 -0.0785714 4.47059 0.235714 4.78431L3.22143 7.76471C3.37857 7.92157 3.53571 8 3.77143 8C4.00714 8 4.16429 7.92157 4.32143 7.76471L10.7643 1.33333C11.0786 1.01961 11.0786 0.54902 10.7643 0.235294Z" fill="currentColor" /></svg>';
   $crossSvg = '<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.71 3.99 7.86.85a.5.5 0 0 0-.71-.71L4 3.29.86.14a.5.5 0 0 0-.71.71L3.3 3.99.15 7.14a.5.5 0 1 0 .71.71L4 4.7l3.15 3.15a.5.5 0 0 0 .71-.71L4.71 3.99Z" fill="currentColor" /></svg>';
@endphp

      <!-- tp-breadcrumb-area-start -->
      <div class="tp-breadcrumb-area tp-breadcrumb-ptb tp-breadcrumb-overly et-tour-hero bg-position" data-background="{{ asset(file_exists(public_path('images/banners/tours-'.$categorySlug.'.jpg')) ? 'images/banners/tours-'.$categorySlug.'.jpg' : 'images/banners/tours-all.jpg') }}">
         <div class="container container-1350">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="tp-breadcrumb-wrap text-center">
                     <h1 class="tp-breadcrumb-title text-center mb-15">{{ $tour->title }}</h1>
                     <nav class="et-tour-hero-crumbs">
                        <a href="{{ url('/') }}">Home</a>
                        <span><i class="fa-regular fa-angle-right"></i></span>
                        <span>{{ $tour->title }}</span>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-breadcrumb-area-end -->

      <!-- tp-tour-details-area-start -->
      <div class="tp-tour-details-area pt-50">
         <div class="container container-1350">
            <div class="row">
               <div class="col-12">
                  <div class="tp-tour-details">
                     <div class="tp-tour-details-gallery-wrap">
                        <div class="row gx-20">
                           <div class="col-lg-7 mb-25">
                              <div class="tp-tour-gallery-thumb gallery-col-1 p-relative fix">
                                 <a class="popup-image d-block" href="{{ $mainImage }}">
                                    <img class="w-100" src="{{ $mainImage }}" alt="{{ $tour->title }}">
                                 </a>
                              </div>
                           </div>
                           <div class="col-lg-5">
                              <div class="tp-tour-gallery-inner">
                                 <div class="row gx-20">
                                    <div class="col-12 mb-25">
                                       <div class="tp-tour-gallery-gg-rating-wrap gallery-col-2 et-gallery-summary">
                                          <div>
                                             <span class="et-gallery-summary-label">Why you'll love it</span>
                                             <p class="mb-0">{{ $highlights->isNotEmpty() ? $highlights->take(2)->implode(' · ') : \Illuminate\Support\Str::limit((string) $tour->overview, 120) }}</p>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <span class="mr-15">
                                                <img src="{{ asset('enjoyable-tour-logo.png') }}" alt="Enjoyable Tour" width="38" height="38" style="border-radius:50%;object-fit:cover;">
                                             </span>
                                             <div class="tp-tour-gallery-gg-rating">
                                                <div class="d-flex align-items-start">
                                                   <span class="rating-count tp-ff-inter fw-600 mr-5">{{ number_format((float) $tour->rating, 1) }}/5</span>
                                                   @for ($i = 0; $i < 5; $i++)
                                                      <span>{!! $starSvg !!}</span>
                                                   @endfor
                                                </div>
                                                <p class="mb-0">Based on {{ $tour->reviews_count }} traveller reviews</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 mb-25">
                                       <div class="tp-tour-gallery-thumb gallery-col-3 fix">
                                          <a class="popup-image" href="{{ $thumbA }}">
                                             <img class="w-100" src="{{ $thumbA }}" alt="{{ $tour->title }}">
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 mb-25">
                                       <div class="tp-tour-gallery-thumb gallery-col-4 gallery fix p-relative">
                                          <a class="popup-image" href="{{ $thumbB }}">
                                             <img class="w-100" src="{{ $thumbB }}" alt="{{ $tour->title }}">
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="tp-tour-details-content-wrap">
                        <div class="row">
                           <div class="col-lg-7">
                              <div class="tp-tour-details-content">
                                 @if (count($tripInfo))
                                    <h3 class="tp-tour-details-title fw-600 mb-25">Trip Info</h3>
                                    <div class="tp-tour-details-info mb-50">
                                       <ul>
                                          @foreach ($tripInfo as [$icon, $label, $value])
                                             <li>
                                                <span class="tp-tour-details-info-icon et-trip-icon"><i class="{{ $icon }}"></i></span>
                                                <div class="tp-tour-details-info-content">
                                                   <span>{{ $label }}</span>
                                                   <h3 class="fw-600 tp-ff-inter mb-0">{{ $value }}</h3>
                                                </div>
                                             </li>
                                          @endforeach
                                       </ul>
                                    </div>
                                 @endif

                                 @if ($overview->isNotEmpty() || $highlights->isNotEmpty())
                                    <div class="et-overview mb-40">
                                       <span class="et-overview-label">About this tour</span>
                                       <h3 class="tp-tour-details-title fw-600 mb-20">Overview</h3>
                                       @foreach ($overview as $paragraph)
                                          <p class="{{ $loop->first ? 'et-overview-lead' : 'et-overview-text' }}">{{ $paragraph }}</p>
                                       @endforeach
                                       @if ($highlights->isNotEmpty())
                                          <div class="et-overview-highlights">
                                             <h4 class="et-overview-subtitle"><i class="fa-solid fa-star"></i> Tour Highlights</h4>
                                             <ul class="et-check-list et-check-list-2col">
                                                @foreach ($highlights as $highlight)
                                                   <li><i class="fa-solid fa-check"></i><span>{{ $highlight }}</span></li>
                                                @endforeach
                                             </ul>
                                          </div>
                                       @endif
                                    </div>
                                 @endif

                                 @if ($tour->notes)
                                    <div class="et-tour-note mb-25">
                                       <i class="fa-light fa-circle-info"></i>
                                       <p class="mb-0">{{ $tour->notes }}</p>
                                    </div>
                                 @endif

                                 @if ($places->isNotEmpty())
                                    <div class="tp-tour-details-place-wrap mt-65 mb-20">
                                       <h3 class="tp-tour-details-title fw-600 mb-25">Places You’ll See</h3>
                                       <div class="row">
                                          @foreach ($places as $place)
                                             <div class="col-md-4 col-sm-6">
                                                <div class="tp-tour-details-place-thumb mb-30">
                                                   <a class="popup-image" href="{{ $toUrl($place['image']) }}">
                                                      <img class="w-100" src="{{ $toUrl($place['image']) }}" alt="{{ $place['name'] }}">
                                                   </a>
                                                   <span class="fw-600">{{ $place['name'] }}</span>
                                                </div>
                                             </div>
                                          @endforeach
                                       </div>
                                    </div>
                                 @endif


                                 @if ($included->isNotEmpty() || $excluded->isNotEmpty())
                                    <div class="et-included tp-tour-details-border pb-55 mb-55">
                                       <h3 class="tp-tour-details-title fw-600 mb-25">What's Included &amp; Excluded</h3>
                                       <div class="row g-4">
                                          @if ($included->isNotEmpty())
                                             <div class="col-md-6">
                                                <div class="et-included-card is-included">
                                                   <h4 class="et-included-heading">Included</h4>
                                                   <ul>
                                                      @foreach ($included as $item)
                                                         <li><span class="et-included-icon"><i class="fa-solid fa-check"></i></span><span>{{ $item }}</span></li>
                                                      @endforeach
                                                   </ul>
                                                </div>
                                             </div>
                                          @endif
                                          @if ($excluded->isNotEmpty())
                                             <div class="col-md-6">
                                                <div class="et-included-card is-excluded">
                                                   <h4 class="et-included-heading">Not Included</h4>
                                                   <ul>
                                                      @foreach ($excluded as $item)
                                                         <li><span class="et-excluded-icon"><i class="fa-solid fa-xmark"></i></span><span>{{ $item }}</span></li>
                                                      @endforeach
                                                   </ul>
                                                </div>
                                             </div>
                                          @endif
                                       </div>
                                    </div>
                                 @endif

                                 @if ($itinerary->isNotEmpty())
                                    <div class="tp-tour-details-plan tp-tour-details-border pb-45 mb-55">
                                       <h3 class="tp-tour-details-title fw-600 mb-60">Itinerary</h3>
                                       <div class="tp-tour-details-plan-list">
                                          <ul>
                                             @foreach ($itinerary as $step)
                                                <li>
                                                   @if ($loop->first)
                                                      <span class="tp-tour-details-plan-icon">
                                                         <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.252 9.74951C13.252 11.6825 11.685 13.2495 9.75195 13.2495C7.81895 13.2495 6.25195 11.6825 6.25195 9.74951C6.25195 7.81651 7.81895 6.24951 9.75195 6.24951C11.685 6.24951 13.252 7.81651 13.252 9.74951Z" stroke="currentColor" stroke-width="1.5" />
                                                            <path d="M9.75 0.75C14.6206 0.75 18.75 4.78298 18.75 9.6758C18.75 14.6465 14.5533 18.1347 10.677 20.5067C10.3945 20.6662 10.075 20.75 9.75 20.75C9.425 20.75 9.1055 20.6662 8.823 20.5067C4.9539 18.1116 0.75 14.6637 0.75 9.6758C0.75 4.78298 4.87944 0.75 9.75 0.75Z" stroke="currentColor" stroke-width="1.5" />
                                                         </svg>
                                                      </span>
                                                   @elseif ($loop->last)
                                                      <span class="tp-tour-details-plan-icon">
                                                         <svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.780237 22.7498C0.803248 20.6283 0.803017 18.5381 0.794444 16.542M0.794444 16.542C0.765799 9.86924 0.644066 4.24758 0.986484 2.02418C1.43134 -0.864327 6.08439 1.76411 11.6425 3.9256L14.147 5.012C15.9903 5.81159 18.6228 7.23183 17.4661 8.89078C16.9897 9.5742 16.0015 10.3559 14.177 11.2205L0.794444 16.542Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                         </svg>
                                                      </span>
                                                   @endif
                                                   <h4>{{ trim(($step['day'] ?? '').': '.($step['title'] ?? ''), ': ') }}</h4>
                                                   @if (! empty($step['description']))
                                                      <p>{{ $step['description'] }}</p>
                                                   @endif
                                                   @php
                                                      $legacyAltitude = array_map('trim', explode('–', (string) ($step['altitude'] ?? '')));
                                                      $startAltitude = $step['start_altitude'] ?? (count($legacyAltitude) > 1 ? $legacyAltitude[0] : null);
                                                      $endAltitude = $step['end_altitude'] ?? (count($legacyAltitude) > 1 ? end($legacyAltitude) : null);
                                                      $stepDetails = array_filter([
                                                         'Duration' => $step['duration'] ?? null,
                                                         'Hiking Time' => $step['hiking_time'] ?? null,
                                                         'Distance' => $step['distance'] ?? null,
                                                         'Starting Altitude' => $startAltitude,
                                                         'Ending Altitude' => $endAltitude,
                                                         'Altitude' => ! $startAltitude && filled($step['altitude'] ?? null) ? $step['altitude'] : null,
                                                         'Meals' => $step['meals'] ?? null,
                                                         'Accommodation' => $step['accommodation'] ?? null,
                                                      ]);
                                                   @endphp
                                                   @if (count($stepDetails))
                                                      <ul class="et-check-list et-day-details">
                                                         @foreach ($stepDetails as $detailLabel => $detailValue)
                                                            <li><i class="fa-solid fa-check"></i><span><strong>{{ $detailLabel }}:</strong> {{ $detailValue }}</span></li>
                                                         @endforeach
                                                      </ul>
                                                   @endif
                                                </li>
                                             @endforeach
                                          </ul>
                                       </div>
                                    </div>
                                 @endif

                                 @if ($faqs->isNotEmpty())
                                    <div class="tp-faq-wrap mt-30 mb-50">
                                       <h3 class="tp-tour-details-title fw-600 mb-25">Frequently Asked Questions</h3>
                                       <div class="accordion" id="tour_faq_accordion">
                                          @foreach ($faqs as $faq)
                                             <div class="accordion-item">
                                                <h2 class="accordion-header" id="tour_faq_heading_{{ $loop->index }}">
                                                   <button class="accordion-button tp-faq-btn {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#tour_faq_{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="tour_faq_{{ $loop->index }}">
                                                      <span class="accordion-btn"></span>
                                                      <span class="tp-faq-title">{{ $faq['question'] }}</span>
                                                   </button>
                                                </h2>
                                                <div id="tour_faq_{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" role="region" aria-labelledby="tour_faq_heading_{{ $loop->index }}" data-bs-parent="#tour_faq_accordion">
                                                   <div class="accordion-body tp-faq-details-para">
                                                      <p>{{ $faq['answer'] ?? '' }}</p>
                                                   </div>
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
                                 @if (($others ?? collect())->isNotEmpty())
                                    <div class="tp-booking-sidebar-item">
                                       <h2 class="tp-booking-sidebar-title mb-20">Other Travel Packages</h2>
                                       <div class="tp-booking-package-list">
                                          <ul>
                                             @foreach ($others as $other)
                                                <li>
                                                   <a href="{{ $other->detailUrl() }}">
                                                      {{ $other->title }}
                                                      <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                                   </a>
                                                </li>
                                             @endforeach
                                          </ul>
                                       </div>
                                    </div>
                                 @endif
                                 @php
                                    $supportPhone = config('app.contact_phone');
                                    $supportWhatsapp = 'https://wa.me/'.preg_replace('/\D+/', '', $supportPhone).'?text='.rawurlencode('Hello Enjoyable Tour, I would like more information about: '.$tour->title);
                                 @endphp
                                 <div class="et-support-card mt-40">
                                    <img src="{{ asset('images/support/tour-support.jpg') }}" alt="Enjoyable Tour travel consultant">
                                    <div class="et-support-panel">
                                       <a class="et-support-whatsapp" href="{{ $supportWhatsapp }}" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
                                          <i class="fa-brands fa-whatsapp"></i>
                                       </a>
                                       <div>
                                          <span class="et-support-caption">For More Inquiry</span>
                                          <a class="et-support-phone" href="tel:{{ preg_replace('/[^\d+]/', '', $supportPhone) }}">{{ $supportPhone }}</a>
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
      <!-- tp-tour-details-area-end -->

      <!-- tour map -->
      <div class="et-tour-map-area p-relative">
         <iframe src="https://maps.google.com/maps?q={{ $mapQuery }}&t=&z=8&ie=UTF8&iwloc=&output=embed" title="{{ $tour->title }} map" allowfullscreen="" loading="lazy"></iframe>
         <a class="et-tour-map-btn" href="{{ $tour->map_url ?: 'https://www.google.com/maps/search/?api=1&query='.$mapQuery }}" target="_blank" rel="noopener">
            <i class="fa-light fa-map"></i> View on Google Maps
         </a>
      </div>
