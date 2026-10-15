<!doctype html>
<html class="no-js" lang="en">
<head>
   @include('turie.partials.theme-boot')
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>{{ $title }} | {{ config('app.name') }}</title>
   <meta name="description" content="{{ $description }}">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('enjoyable-tour-logo.png') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/swiper-bundle.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/font-awesome-pro.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/daterangepicker.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/range-slider.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ asset('turiehtml-10/turie/assets/css/main.css') }}">
   <link rel="stylesheet" href="{{ asset('css/enjoyable.live.css') }}">
   <style>
      .et-kili-map { position: relative; border-radius: 14px; overflow: hidden; }
      .et-kili-map > img { width: 100%; display: block; }
      .et-kili-map svg { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 2; }
      .et-kili-map .et-route-halo, .et-kili-map .et-route-line { fill: none; stroke-linecap: round; stroke-linejoin: round; }
      .et-kili-map .et-route-halo { stroke: rgba(255, 255, 255, .92); stroke-width: 8; }
      .et-kili-map .et-route-line { stroke: #b77e01; stroke-width: 4; }
      .et-kili-map .et-route-far { stroke-dasharray: 9 8; }
      .et-kili-map circle { fill: #00468a; stroke: #fff; stroke-width: 2; }
      .et-kili-map text { font-size: 16px; font-weight: 700; fill: #102033; stroke: #fff; stroke-width: 5px; paint-order: stroke; }
      .et-mig-herd { position: absolute; z-index: 1; width: 36%; opacity: 0; pointer-events: none; }
      .et-mig-herd.is-on { opacity: 1; }
      .et-mig-photo .et-mig-stop text { opacity: 0; }
      .et-mig-photo .et-mig-stop.is-on text { opacity: 1; }
      .et-mig-photo .et-mig-dot { fill: #fff; }
      .et-mig-photo .et-mig-stop.is-on .et-mig-dot { fill: #b77e01; }
      .et-mig-photo .et-mig-ring { fill: none; stroke: #b77e01; stroke-width: 2; opacity: 0; }
      .et-mig-photo .et-mig-stop.is-on .et-mig-ring { opacity: 1; }
   </style>
</head>
<body>
   <div id="loading">
      <div class="loader">
         <div class="plane">
            <img src="{{ asset('turiehtml-10/turie/assets/img/preloader/fly.png') }}" class="plane-img" alt="">
         </div>
         <div class="earth-wrapper">
            <div class="earth"></div>
         </div>
      </div>
   </div>
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   @include('turie.partials.site-offcanvas')
   @include('turie.partials.site-header')
   <main>
      <div class="tp-breadcrumb-area tp-breadcrumb-ptb tp-breadcrumb-overly et-tour-hero bg-position" data-background="{{ asset($banner) }}">
         <div class="container container-1350">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="tp-breadcrumb-wrap text-center">
                     <h1 class="tp-breadcrumb-title text-center mb-15">{{ $active === 'hub' ? 'Plan Your Trip' : $title }}</h1>
                     <nav class="et-tour-hero-crumbs">
                        <a href="{{ url('/') }}">Home</a>
                        <span><i class="fa-regular fa-angle-right"></i></span>
                        @if ($active === 'hub')
                           <span>Plan your trip</span>
                        @else
                           <a href="{{ route('plan.index') }}">Plan your trip</a>
                           <span><i class="fa-regular fa-angle-right"></i></span>
                           <span>{{ $title }}</span>
                        @endif
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="tp-destination-area pt-80 pb-60">
         <div class="container">
            <div class="tp-section-title-wrap text-center mb-40">
               <span class="tp-section-subtitle d-inline-block mb-10">Plan your trip</span>
               <h2 class="tp-section-title fw-600 mb-15">{{ $active === 'hub' ? 'Choose a planner' : $title }}</h2>
               @if ($active !== 'hub' && $description !== '')
                  <p class="mb-0">{{ $description }}</p>
               @endif
            </div>
            @if ($active !== 'hub')
               <div class="et-plan-links text-center mb-40">
                  @foreach ($tools as $key => $tool)
                     @if ($key !== 'hub')
                        <a href="{{ $tool['url'] }}" class="tp-btn-sm d-inline-block mb-10 mr-10 {{ $active === $key ? 'is-active' : '' }}">{{ $tool['label'] }}</a>
                     @endif
                  @endforeach
               </div>
            @endif
            @include($partial)
         </div>
      </div>
   </main>
   @include('turie.partials.footer')
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
   @stack('et-styles')
   @stack('et-scripts')
   <script src="{{ asset('js/planning.js') }}"></script>
</body>
</html>
