@php
  $delay = $delay ?? '.2s';
  $stops = $tour->routeStops();
@endphp
<div class="col-xl-4 col-lg-6 col-md-6">
  <div class="et-package-card mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay="{{ $delay }}">
    <div class="et-package-thumb">
      <a href="{{ $tour->detailUrl() }}">
        <img src="{{ $tour->imageUrl() }}" alt="{{ $tour->title }}">
      </a>
      <div class="et-package-badges">
        <span class="et-package-duration">{{ $tour->durationBadge() }}</span>
        @if ($tour->location)
          <span class="et-package-location">
            <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0C2.69 0 0 2.62 0 5.85 0 10.24 6 15 6 15s6-4.76 6-9.15C12 2.62 9.31 0 6 0Zm0 8.1a2.25 2.25 0 1 1 0-4.5 2.25 2.25 0 0 1 0 4.5Z" fill="currentColor"/></svg>
            {{ $tour->location }}
          </span>
        @endif
      </div>
    </div>
    <div class="et-package-body">
      <h3 class="et-package-title"><a href="{{ $tour->detailUrl() }}">{{ $tour->title }}</a></h3>
      @if (count($stops))
        <div class="et-package-route">
          @foreach ($stops as $stop)
            @if (! $loop->first)
              <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5h12M9 1l4 4-4 4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
            @endif
            <span>{{ $stop }}</span>
          @endforeach
        </div>
      @endif
      <div class="et-package-footer">
        <div class="et-package-price">
          <span class="et-package-price-label">Starting From:</span>
          <div class="et-package-price-row">
            <span class="et-package-price-new">{{ $tour->formatPrice() }}</span>
            @if ($tour->old_price)
              <del class="et-package-price-old">{{ $tour->formatPrice((float) $tour->old_price) }}</del>
            @endif
          </div>
        </div>
        <a href="{{ $tour->detailUrl() }}" class="tp-btn et-package-btn">
          Book A Trip
          <i class="fa-solid fa-plane"></i>
        </a>
      </div>
    </div>
  </div>
</div>
