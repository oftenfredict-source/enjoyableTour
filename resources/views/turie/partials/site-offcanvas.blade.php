@php
   $offcanvasPhone = config('app.contact_phone');
   $offcanvasPhoneLink = preg_replace('/[^0-9+]/', '', (string) $offcanvasPhone);
   $offcanvasEmail = config('app.contact_email');
@endphp

<!-- tp-offcanvas start -->
<div class="tp-offcanvas et-offcanvas">
   <div class="et-offcanvas-header">
      <a href="{{ url('/') }}" class="et-header-logo">
         <img src="{{ asset('enjoyable-tour-logo.png') }}" alt="{{ config('app.name') }}" width="46" height="46">
         <span>Enjoyable<b>Tour</b></span>
      </a>
      <button class="tp-offcanvas-close-button et-offcanvas-close" aria-label="Close menu"><i class="fa-light fa-xmark"></i></button>
   </div>

   <div class="tp-offcanvas-menu et-offcanvas-menu">
      <nav></nav>
   </div>

   <div class="et-offcanvas-footer">
      <a href="mailto:{{ $offcanvasEmail }}" class="et-offcanvas-link">
         <i class="fa-light fa-envelope"></i> {{ $offcanvasEmail }}
      </a>
      @if ($offcanvasPhone)
         <a href="tel:{{ $offcanvasPhoneLink }}" class="et-header-call et-offcanvas-call">
            <span class="et-header-call-icon"><i class="fa-light fa-phone-volume"></i></span>
            <span class="et-header-call-text">
               <small>To More Inquiry</small>
               <strong>{{ $offcanvasPhone }}</strong>
            </span>
         </a>
      @endif
   </div>
</div>
<div class="tp-offcanvas-overlay"></div>
<!-- tp-offcanvas end -->
