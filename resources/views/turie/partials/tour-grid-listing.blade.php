@php
   $tours = $tours ?? null;
   $categorySlug = $categorySlug ?? null;
   $activeStyle = 'color: var(--tp-common-white); background: var(--tp-common-red);';
@endphp
            <div class="tp-tour-filter-wrap">
               <div class="row align-items-center">
                  <div class="col-md-8">
                     <div class="tp-tour-filter mb-25 d-flex flex-wrap align-items-center gap-2">
                        <a href="{{ route('tours.index') }}" class="tp-btn-sm fw-500 tp-ff-inter" @style([$activeStyle => ! $categorySlug])>All</a>
                        @foreach (\App\Models\Tour::CATEGORIES as $slug => $label)
                           <a href="{{ \App\Models\Tour::categoryUrl($label) }}" class="tp-btn-sm fw-500 tp-ff-inter" @style([$activeStyle => $categorySlug === $slug])>{{ $label }}</a>
                        @endforeach
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="tp-tour-filter mb-25 d-flex justify-content-md-end">
                        @if ($tours && $tours->total())
                           <span class="tp-tour-filter-result fw-500">Showing {{ $tours->firstItem() }}-{{ $tours->lastItem() }} of {{ $tours->total() }} tours</span>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               @forelse (($tours ?? collect()) as $index => $tour)
                  @include('turie.partials.package-card', [
                     'tour' => $tour,
                     'delay' => '.'.(2 + ($index % 4)).'s',
                  ])
               @empty
                  <div class="col-12">
                     <p class="text-center mb-0">No tours available in this category yet.</p>
                  </div>
               @endforelse

               @if ($tours && $tours->hasPages())
                  <div class="col-lg-12">
                     <div class="tp-pagination text-center mt-10">
                        <nav>
                           <ul>
                              @unless ($tours->onFirstPage())
                                 <li>
                                    <a href="{{ $tours->previousPageUrl() }}" class="tp-pagination-prev prev page-numbers">
                                       <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M5.75 10.75L0.75 5.75L5.75 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </a>
                                 </li>
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
                                 <li>
                                    <a href="{{ $tours->nextPageUrl() }}" class="next page-numbers">
                                       <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.75 10.75L5.75 5.75L0.75 0.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </a>
                                 </li>
                              @endif
                           </ul>
                        </nav>
                     </div>
                  </div>
               @endif
            </div>
