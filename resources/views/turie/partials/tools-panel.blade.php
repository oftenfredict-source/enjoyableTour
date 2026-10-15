@php
   $toolCards = \App\Support\PlanningData::tools();
   unset($toolCards['hub']);
   $toolParks = \App\Support\PlanningData::parks();
   $toolPhone = config('app.contact_phone');
   $toolPhoneLink = preg_replace('/[^0-9+]/', '', (string) $toolPhone);
   $toolEmail = config('app.contact_email');
@endphp
<div class="et-tools-overlay" id="et-tools-overlay"></div>
<aside class="et-tools-panel" id="et-tools-panel" aria-hidden="true">
   <div class="et-tools-head">
      <a href="{{ url('/') }}" class="et-header-logo">
         <img src="{{ asset('enjoyable-tour-logo.png') }}" alt="{{ config('app.name') }}" width="42" height="42">
         <span>Enjoyable<b>Tour</b></span>
      </a>
      <button type="button" class="et-tools-close" aria-label="Close trip tools"><i class="fa-light fa-xmark"></i></button>
   </div>
   <div class="et-tools-body">
      <h2>Tour Type</h2>
      <div class="et-tools-grid">
         @foreach ($toolCards as $tool)
            <a href="{{ $tool['url'] }}">
               <i class="fa-light {{ $tool['icon'] }}"></i>
               <span>{{ $tool['label'] }}</span>
            </a>
         @endforeach
      </div>
      <h2>Our Destinations</h2>
      <div class="et-tools-dests" id="et-tools-dests">
         @foreach ($toolParks as $slug => $park)
            <a class="et-tools-dest" href="{{ route('parks.show', $slug) }}">
               <img src="{{ asset($park['image']) }}" alt="{{ $park['name'] }}">
               <span class="et-tools-days">{{ $park['days'] }}</span>
               <strong>{{ \Illuminate\Support\Str::of($park['name'])->before(' National') }}</strong>
            </a>
         @endforeach
      </div>
      <div class="et-tools-nav">
         <button type="button" class="et-tools-prev" aria-label="Previous destinations"><i class="fa-light fa-arrow-left"></i></button>
         <a class="et-tools-all" href="{{ route('parks.index') }}">View All</a>
         <button type="button" class="et-tools-next" aria-label="Next destinations"><i class="fa-light fa-arrow-right"></i></button>
      </div>
      <div class="et-tools-contact">
         @if ($toolPhone)
            <a href="tel:{{ $toolPhoneLink }}">
               <i class="fa-light fa-phone-volume"></i>
               <span><small>To More Inquiry</small><strong>{{ $toolPhone }}</strong></span>
            </a>
         @endif
         <a href="mailto:{{ $toolEmail }}">
            <i class="fa-light fa-paper-plane"></i>
            <span><small>Email:</small><strong>{{ $toolEmail }}</strong></span>
         </a>
      </div>
   </div>
</aside>
<script>
(function () {
   var panel = document.getElementById('et-tools-panel');
   var overlay = document.getElementById('et-tools-overlay');
   var row = document.getElementById('et-tools-dests');
   if (!panel || !overlay) {
      return;
   }

   function setOpen(open) {
      panel.classList.toggle('is-open', open);
      overlay.classList.toggle('is-open', open);
      panel.setAttribute('aria-hidden', open ? 'false' : 'true');
      document.body.style.overflow = open ? 'hidden' : '';
      if (open) {
         document.querySelectorAll('.tp-offcanvas').forEach(function (menu) {
            menu.classList.remove('tp-offcanvas-open');
         });
         document.querySelectorAll('.tp-offcanvas-overlay').forEach(function (shade) {
            shade.classList.remove('tp-offcanvas-overlay-open');
         });
      }
   }

   document.addEventListener('click', function (event) {
      if (event.target.closest('.et-tools-open')) {
         event.preventDefault();
         setOpen(true);
         return;
      }
      if (event.target.closest('.et-tools-close') || event.target === overlay) {
         setOpen(false);
         return;
      }
      if (event.target.closest('.tp-header-toogle')) {
         setOpen(false);
      }
   });

   function scrollDestinations(direction) {
      if (!row) {
         return;
      }
      var card = row.querySelector('.et-tools-dest');
      var amount = card ? card.getBoundingClientRect().width + 12 : 180;
      row.scrollBy({ left: direction * amount, behavior: 'smooth' });
   }

   var previous = panel.querySelector('.et-tools-prev');
   var next = panel.querySelector('.et-tools-next');
   if (previous) {
      previous.addEventListener('click', function () { scrollDestinations(-1); });
   }
   if (next) {
      next.addEventListener('click', function () { scrollDestinations(1); });
   }
})();
</script>
