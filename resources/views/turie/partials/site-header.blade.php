@php
   $headerPhone = config('app.contact_phone');
   $headerPhoneLink = preg_replace('/[^0-9+]/', '', (string) $headerPhone);
   $headerEmail = config('app.contact_email');
   $headerSocials = array_filter([
      'facebook-f' => config('app.social.facebook'),
      'twitter' => config('app.social.x'),
      'instagram' => config('app.social.instagram'),
      'whatsapp' => $headerPhoneLink ? 'https://wa.me/'.ltrim($headerPhoneLink, '+') : null,
   ]);
@endphp

<header class="et-header tp-header-height">
   <div class="et-topbar d-none d-md-block">
      <div class="container">
         <div class="et-topbar-inner">
            <a href="mailto:{{ $headerEmail }}" class="et-topbar-email">
               <i class="fa-solid fa-paper-plane"></i>
               <span>
                  <small>Email:</small>
                  <strong>{{ $headerEmail }}</strong>
               </span>
            </a>
            <p class="et-topbar-promo d-none d-lg-block mb-0">
               Tanzania safaris, Kilimanjaro treks &amp; Zanzibar escapes. <a href="{{ route('tours.finder') }}">Book Your Tour</a>
            </p>
            <ul class="et-topbar-social">
               @foreach ($headerSocials as $icon => $link)
                  <li><a href="{{ $link }}" target="_blank" rel="noopener" aria-label="{{ $icon }}"><i class="fa-brands fa-{{ $icon }}"></i></a></li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>

   <div id="header-sticky" class="et-header-main">
      <div class="container">
         <div class="et-header-inner">
            <a href="{{ url('/') }}" class="et-header-logo">
               <img src="{{ asset('enjoyable-tour-logo.png') }}" alt="{{ config('app.name') }}" width="58" height="58">
               <span>Enjoyable<b>Tour</b></span>
            </a>

            <div class="tp-main-menu tp-menu-dropdown et-header-menu d-none d-xl-block">
               @include('turie.partials.main-menu')
            </div>

            <div class="et-header-right">
               @if ($headerPhone)
                  <a href="tel:{{ $headerPhoneLink }}" class="et-header-call d-none d-sm-flex">
                     <span class="et-header-call-icon"><i class="fa-light fa-phone-volume"></i></span>
                     <span class="et-header-call-text">
                        <small>To More Inquiry</small>
                        <strong>{{ $headerPhone }}</strong>
                     </span>
                  </a>
               @endif
               <div class="tp-header-toogle-wrapper d-xl-none ml-15">
                  <button class="tp-header-toogle" aria-label="Open menu">
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
