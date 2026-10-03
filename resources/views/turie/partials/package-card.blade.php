@php
  $delay = $delay ?? '.2s';
  $image = $tour->imageUrl();
  $video = $tour->video_url ?: 'https://www.youtube.com/watch?v=tffjAlDbBGU';
  $map = $tour->map_url ?: 'https://www.google.com/maps';
@endphp
<div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
  <div class="tp-tour-item mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay="{{ $delay }}">
    <div class="tp-tour-thumb p-relative fix">
      <a href="{{ $tour->detailUrl() }}" class="image">
        <img src="{{ $image }}" alt="{{ $tour->title }}">
      </a>
      <span class="tp-tour-wishlist">
        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.22804 14.0605C4.97119 12.3232 0.5 8.35152 0.5 4.77741C0.5 2.41506 2.18408 0.5 4.49969 0.5C5.6996 0.5 6.8995 0.91173 8.49938 2.55865C10.0993 0.91173 11.2992 0.5 12.4991 0.5C14.8146 0.5 16.4988 2.41506 16.4988 4.77741C16.4988 8.35152 12.0276 12.3232 9.77072 14.0605C9.01126 14.6451 7.9875 14.6451 7.22804 14.0605Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </span>
      @if ($tour->discount_badge)
        <div class="tp-tour-badge">
          <span class="discount tp-ff-inter fw-700">{{ $tour->discount_badge }}</span>
        </div>
      @endif
      <div class="tp-tour-media-meta">
        <a class="popup-image" href="{{ $image }}">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.18192 5.2892C4.79234 5.2892 5.28719 4.79436 5.28719 4.18394C5.28719 3.57352 4.79234 3.07867 4.18192 3.07867C3.5715 3.07867 3.07666 3.57352 3.07666 4.18394C3.07666 4.79436 3.5715 5.2892 4.18192 5.2892Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" /><path d="M0.5 7.49946C0.5 4.19988 0.5 2.5501 1.52504 1.52504C2.5501 0.5 4.19988 0.5 7.49946 0.5C10.799 0.5 12.4488 0.5 13.4739 1.52504C14.4989 2.5501 14.4989 4.19988 14.4989 7.49946C14.4989 10.799 14.4989 12.4488 13.4739 13.4739C12.4488 14.4989 10.799 14.4989 7.49946 14.4989C4.19988 14.4989 2.5501 14.4989 1.52504 13.4739C0.5 12.4488 0.5 10.799 0.5 7.49946Z" stroke="currentColor" /><path d="M2.34082 14.1311C5.56263 10.2811 9.17437 5.20352 14.4969 8.63598" stroke="currentColor" /></svg>
        </a>
        <a class="popup-video" href="{{ $video }}">
          <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 5.75C0.5 3.27513 0.5 2.03769 1.26885 1.26885C2.03769 0.5 3.27513 0.5 5.75 0.5H6.5C8.97485 0.5 10.2123 0.5 10.9812 1.26885C11.75 2.03769 11.75 3.27513 11.75 5.75V7.25C11.75 9.72485 11.75 10.9623 10.9812 11.7312C10.2123 12.5 8.97485 12.5 6.5 12.5H5.75C3.27513 12.5 2.03769 12.5 1.26885 11.7312C0.5 10.9623 0.5 9.72485 0.5 7.25V5.75Z" stroke="currentColor" /><path d="M11.749 4.17921L11.8434 4.10129C13.4303 2.79199 14.2237 2.13734 14.8614 2.45343C15.499 2.76953 15.499 3.81748 15.499 5.91339V7.08624C15.499 9.1822 15.499 10.2301 14.8614 10.5462C14.2237 10.8623 13.4303 10.2077 11.8434 8.89832L11.749 8.8204" stroke="currentColor" stroke-linecap="round" /></svg>
        </a>
        <a href="{{ $map }}" target="_blank" rel="noopener">
          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.77724 1.33709L1.9178 1.83565C1.22612 2.23689 0.880273 2.43751 0.690133 2.77127C0.5 3.10502 0.5 3.51146 0.5 4.32434V10.0391C0.5 11.1072 0.5 11.6412 0.739563 11.9384C0.898976 12.1362 1.12236 12.2692 1.36933 12.3133C1.74049 12.3795 2.1949 12.1159 3.10371 11.5887C3.72084 11.2306 4.31478 10.8588 5.05306 10.9597C5.38888 11.0055 5.70921 11.1649 6.34987 11.4834L9.01939 12.8107C9.59677 13.0978 9.60209 13.0991 10.2442 13.0991H11.6991C13.0189 13.0991 13.6789 13.0991 14.0889 12.68C14.4989 12.261 14.4989 11.5864 14.4989 10.2375V5.51972C14.4989 4.17074 14.4989 3.49625 14.0889 3.07718C13.6789 2.65811 13.0189 2.65811 11.6991 2.65811H10.2442C9.60209 2.65811 9.59677 2.65687 9.01939 2.36976L6.68745 1.21025C5.71378 0.726124 5.22696 0.484062 4.70834 0.500881C4.18971 0.517708 3.71889 0.790834 2.77724 1.33709Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" /></svg>
        </a>
      </div>
    </div>
    <div class="tp-tour-content">
      <div class="tp-tour-meta d-flex align-items-center">
        <div class="tp-tour-review mr-5">
          @for ($i = 0; $i < 5; $i++)
            <span>
              <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.09386 0.345492C6.24353 -0.115163 6.89524 -0.115165 7.04492 0.345491L8.25296 4.06348C8.3199 4.26949 8.51188 4.40897 8.72849 4.40897H12.6378C13.1222 4.40897 13.3236 5.02878 12.9317 5.31348L9.769 7.61132C9.59376 7.73865 9.52043 7.96433 9.58736 8.17034L10.7954 11.8883C10.9451 12.349 10.4178 12.732 10.026 12.4473L6.86328 10.1495C6.68804 10.0222 6.45074 10.0222 6.27549 10.1495L3.11279 12.4473C2.72093 12.732 2.19369 12.349 2.34336 11.8883L3.55141 8.17034C3.61835 7.96433 3.54502 7.73865 3.36978 7.61132L0.207066 5.31348C-0.184791 5.02878 0.016596 4.40897 0.500958 4.40897H4.41028C4.6269 4.40897 4.81887 4.26949 4.88581 4.06348L6.09386 0.345492Z" fill="currentColor" /></svg>
            </span>
          @endfor
        </div>
        <span class="tp-tour-review-score tp-ff-inter">( {{ str_pad((string) $tour->reviews_count, 2, '0', STR_PAD_LEFT) }} Reviews )</span>
      </div>
      <h3 class="tp-tour-title fw-500 mb-10"><a href="{{ $tour->detailUrl() }}">{{ $tour->title }}</a></h3>
      <div class="tp-tour-info">
        <span>
          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.49961 7.04985C9.49961 8.40295 8.40271 9.49985 7.04961 9.49985C5.69651 9.49985 4.59961 8.40295 4.59961 7.04985C4.59961 5.69675 5.69651 4.59985 7.04961 4.59985C8.40271 4.59985 9.49961 5.69675 9.49961 7.04985Z" stroke="currentColor" stroke-width="1.5" /><path d="M7.04951 0.75C10.4587 0.75 13.349 3.57287 13.349 6.99757C13.349 10.4768 10.4116 12.9183 7.69836 14.5786C7.50063 14.6903 7.27699 14.7489 7.04951 14.7489C6.82203 14.7489 6.5984 14.6903 6.40066 14.5786C3.6925 12.9022 0.75 10.4888 0.75 6.99757C0.75 3.57287 3.64038 0.75 7.04951 0.75Z" stroke="currentColor" stroke-width="1.5" /></svg>
          {{ $tour->location }}
        </span>
        <span>
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.74946 14.7489C11.6151 14.7489 14.7489 11.6151 14.7489 7.74946C14.7489 3.88376 11.6151 0.75 7.74946 0.75C3.88376 0.75 0.75 3.88376 0.75 7.74946C0.75 11.6151 3.88376 14.7489 7.74946 14.7489Z" stroke="currentColor" stroke-width="1.5" /></svg>
          {{ $tour->duration_label }}
        </span>
        <span>
          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.63454 3.86111C9.63454 5.57933 8.18801 6.97223 6.40369 6.97223C4.61935 6.97223 3.17285 5.57933 3.17285 3.86111C3.17285 2.14289 4.61935 0.75 6.40369 0.75C8.18801 0.75 9.63454 2.14289 9.63454 3.86111Z" stroke="currentColor" stroke-width="1.5" /></svg>
          <span>{{ $tour->guests_min }}</span>@if($tour->guests_max)-<span>{{ $tour->guests_max }}</span>@endif user
        </span>
      </div>
      <div class="tp-tour-footer d-flex justify-content-between gap-2 align-items-center">
        <div class="tp-tour-price">
          <div class="tp-tour-top-price">
            <span class="tp-tour-prefix">From:</span>
            @if ($tour->old_price)
              <span class="tp-tour-old-price">{{ $tour->formatPrice((float) $tour->old_price) }}</span>
            @endif
          </div>
          <div class="tp-tour-bottom-price">
            <span class="tp-tour-new-price fw-700">{{ $tour->formatPrice() }}</span>
            <span class="tp-tour-suffix">/person</span>
          </div>
        </div>
        <div class="tp-tour-btn">
          <a href="{{ $tour->detailUrl() }}" class="tp-btn-sm fw-500 tp-ff-inter">Book A tour</a>
        </div>
      </div>
    </div>
  </div>
</div>
