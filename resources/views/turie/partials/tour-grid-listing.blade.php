@php
   $tours = $tours ?? null;
@endphp
            <div class="row justify-content-center">
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
