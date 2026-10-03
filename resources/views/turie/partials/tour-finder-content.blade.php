@php
   use App\Http\Controllers\TourPageController as Finder;
   use App\Models\Tour;

   $facets = [
      'category' => ['title' => 'Tour Type', 'options' => collect(Tour::CATEGORIES)->map(fn ($label) => ['label' => $label])->all()],
      'duration' => ['title' => 'Duration', 'options' => Finder::FINDER_DURATIONS],
      'price' => ['title' => 'Price per Person', 'options' => Finder::FINDER_PRICES],
   ];

   $removeUrl = function (string $facet, ?string $value = null) use ($filters, $sort) {
      $params = array_filter([
         'q' => $facet === 'q' ? null : ($filters['q'] ?: null),
         'category' => $facet === 'category' ? array_values(array_diff($filters['category'], [$value])) : $filters['category'],
         'duration' => $facet === 'duration' ? array_values(array_diff($filters['duration'], [$value])) : $filters['duration'],
         'price' => $facet === 'price' ? array_values(array_diff($filters['price'], [$value])) : $filters['price'],
         'sort' => $sort !== 'recommended' ? $sort : null,
      ]);

      return route('tours.finder', $params);
   };
@endphp

      <!-- tp-breadcrumb-area-start -->
      <div class="tp-breadcrumb-area tp-breadcrumb-ptb tp-breadcrumb-overly et-tour-hero bg-position" data-background="{{ asset('images/banners/tours-all.jpg') }}">
         <div class="container container-1350">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="tp-breadcrumb-wrap text-center">
                     <h1 class="tp-breadcrumb-title text-center mb-15">Find Your Tour</h1>
                     <nav class="et-tour-hero-crumbs">
                        <a href="{{ url('/') }}">Home</a>
                        <span><i class="fa-regular fa-angle-right"></i></span>
                        <span>Find Your Tour</span>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-breadcrumb-area-end -->

      <!-- tour finder -->
      <div class="tp-tour-area et-finder-area pt-80 pb-110">
         <div class="container container-1350">
            <div class="tp-section-title-wrap text-center mb-50">
               <span class="tp-section-subtitle d-inline-block mb-10">Tour Finder</span>
               <h2 class="tp-section-title fw-600">Find the Perfect Tanzania Package</h2>
            </div>

            <form id="et-finder-form" method="GET" action="{{ route('tours.finder') }}">
               <div class="row">
                  <div class="col-xl-3 col-lg-4">
                     <aside class="tp-filter-sidebar et-finder-sidebar mb-40">
                        <div class="tp-filter-item">
                           <h2 class="tp-filter-title mb-20">Search</h2>
                           <div class="tp-header-search p-relative tp-filter-search">
                              <input class="tp-input" type="text" name="q" value="{{ $filters['q'] }}" placeholder="Kilimanjaro, Serengeti, beach...">
                              <button class="tp-header-search-btn" type="submit" aria-label="Search">
                                 <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.64267 10.7857C8.48288 10.7857 10.7853 8.48318 10.7853 5.64286C10.7853 2.80254 8.48288 0.5 5.64267 0.5C2.80245 0.5 0.5 2.80254 0.5 5.64286C0.5 8.48318 2.80245 10.7857 5.64267 10.7857Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.5 12.5L9.92871 9.92857" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                              </button>
                           </div>
                        </div>

                        @foreach ($facets as $facet => $group)
                           <div class="tp-filter-item">
                              <h2 class="tp-filter-title mb-20">{{ $group['title'] }}</h2>
                              <div class="tp-filter-checkbox">
                                 <ul>
                                    @foreach ($group['options'] as $value => $option)
                                       @php $count = $counts[$facet][$value] ?? 0; @endphp
                                       <li class="checkbox-item et-finder-option {{ $count === 0 && ! in_array($value, $filters[$facet], true) ? 'is-empty' : '' }}">
                                          <input id="f-{{ $facet }}-{{ $value }}" type="checkbox" name="{{ $facet }}[]" value="{{ $value }}" @checked(in_array($value, $filters[$facet], true))>
                                          <label for="f-{{ $facet }}-{{ $value }}">
                                             {{ $option['label'] }}
                                             <span class="et-finder-count">{{ $count }}</span>
                                          </label>
                                       </li>
                                    @endforeach
                                 </ul>
                              </div>
                           </div>
                        @endforeach

                        <div class="et-finder-actions">
                           <button type="submit" class="tp-btn w-100">Show Tours</button>
                           @if ($activeCount)
                              <a href="{{ route('tours.finder') }}" class="et-finder-reset">Clear all filters</a>
                           @endif
                        </div>
                     </aside>

                     <div class="et-finder-custom mb-40">
                        <span class="et-finder-custom-icon"><i class="fa-light fa-compass"></i></span>
                        <h3>Can't find your perfect trip?</h3>
                        <p>Tell us your dates, budget and dream experiences, and our local experts will build a tailor-made Tanzania package just for you.</p>
                        <a href="{{ url('/contact') }}" class="tp-btn">Plan a Custom Trip</a>
                     </div>
                  </div>

                  <div class="col-xl-9 col-lg-8">
                     <div class="et-finder-toolbar mb-30">
                        <div class="et-finder-result">
                           <strong>{{ $tours->total() }}</strong> {{ \Illuminate\Support\Str::plural('tour', $tours->total()) }} found
                        </div>
                        <div class="et-finder-sort">
                           <label for="et-sort">Sort by</label>
                           <select id="et-sort" name="sort" class="et-finder-select">
                              @foreach (Finder::FINDER_SORTS as $value => $label)
                                 <option value="{{ $value }}" @selected($sort === $value)>{{ $label }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>

                     @if ($activeCount)
                        <div class="et-finder-chips mb-30">
                           @if ($filters['q'] !== '')
                              <a href="{{ $removeUrl('q') }}">“{{ $filters['q'] }}” <i class="fa-regular fa-xmark"></i></a>
                           @endif
                           @foreach (['category', 'duration', 'price'] as $facet)
                              @foreach ($filters[$facet] as $value)
                                 <a href="{{ $removeUrl($facet, $value) }}">{{ $facets[$facet]['options'][$value]['label'] }} <i class="fa-regular fa-xmark"></i></a>
                              @endforeach
                           @endforeach
                        </div>
                     @endif

                     <div class="row">
                        @forelse ($tours as $index => $tour)
                           @include('turie.partials.package-card', [
                              'tour' => $tour,
                              'delay' => '.'.(2 + ($index % 3)).'s',
                              'colClass' => 'col-xxl-4 col-md-6',
                              'animate' => false,
                           ])
                        @empty
                           <div class="col-12">
                              <div class="et-finder-empty">
                                 <i class="fa-light fa-map-location-dot"></i>
                                 <h3>No tours match your filters</h3>
                                 <p>Try removing a filter, or let us create a custom package for you.</p>
                                 <div class="d-flex flex-wrap justify-content-center gap-3">
                                    <a href="{{ route('tours.finder') }}" class="tp-btn">Clear Filters</a>
                                    <a href="{{ url('/contact') }}" class="tp-btn et-btn-navy">Plan a Custom Trip</a>
                                 </div>
                              </div>
                           </div>
                        @endforelse
                     </div>

                     @if ($tours->hasPages())
                        <div class="tp-pagination text-center mt-10">
                           <nav>
                              <ul>
                                 @unless ($tours->onFirstPage())
                                    <li><a href="{{ $tours->previousPageUrl() }}" class="prev page-numbers"><i class="fa-regular fa-angle-left"></i></a></li>
                                 @endunless
                                 @foreach ($tours->getUrlRange(1, $tours->lastPage()) as $page => $pageUrl)
                                    <li>
                                       @if ($page === $tours->currentPage())
                                          <span class="current">{{ $page }}</span>
                                       @else
                                          <a href="{{ $pageUrl }}">{{ $page }}</a>
                                       @endif
                                    </li>
                                 @endforeach
                                 @if ($tours->hasMorePages())
                                    <li><a href="{{ $tours->nextPageUrl() }}" class="next page-numbers"><i class="fa-regular fa-angle-right"></i></a></li>
                                 @endif
                              </ul>
                           </nav>
                        </div>
                     @endif
                  </div>
               </div>
            </form>
         </div>
      </div>

      <script>
         document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('et-finder-form');
            if (!form) return;
            form.querySelectorAll('input[type="checkbox"], #et-sort').forEach(function (el) {
               el.addEventListener('change', function () { form.submit(); });
            });
         });
      </script>
