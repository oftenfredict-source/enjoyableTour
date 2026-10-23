@php
   $fabDigits = preg_replace('/\D+/', '', (string) config('app.contact_phone')) ?: '255613963895';
   $fabEmail = config('app.contact_email');
@endphp
<div class="et-fab" id="et-fab">
   <div class="et-fab-menu" id="et-fab-menu">
      <button type="button" class="et-fab-item" data-fab="theme" aria-label="Switch colour mode">
         <i class="fa-light fa-moon" aria-hidden="true"></i>
      </button>
      <a class="et-fab-item et-fab-wa" href="https://wa.me/{{ $fabDigits }}" target="_blank" rel="noopener" aria-label="WhatsApp">
         <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
      </a>
      <a class="et-fab-item" href="mailto:{{ $fabEmail }}" aria-label="Email">
         <i class="fa-light fa-envelope" aria-hidden="true"></i>
      </a>
   </div>
   <button type="button" class="et-fab-toggle" id="et-fab-toggle" aria-expanded="false" aria-controls="et-fab-menu" aria-label="Open quick options">
      <i class="fa-light fa-plus" aria-hidden="true"></i>
   </button>
</div>
<script>
(function () {
   var root = document.getElementById('et-fab');
   var toggle = document.getElementById('et-fab-toggle');
   if (!root || !toggle) {
      return;
   }

   function theme() {
      return document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
   }

   function paintTheme() {
      var icon = root.querySelector('[data-fab="theme"] i');
      var button = root.querySelector('[data-fab="theme"]');
      var dark = theme() === 'dark';
      if (icon) {
         icon.className = dark ? 'fa-light fa-sun' : 'fa-light fa-moon';
      }
      if (button) {
         button.setAttribute('aria-label', dark ? 'Switch to light mode' : 'Switch to dark mode');
      }
   }

   function setTheme(next) {
      document.documentElement.setAttribute('data-theme', next);
      try { localStorage.setItem('et-theme', next); } catch (e) {}
      paintTheme();
   }

   function setOpen(open) {
      root.classList.toggle('is-open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      toggle.setAttribute('aria-label', open ? 'Close quick options' : 'Open quick options');
      var icon = toggle.querySelector('i');
      if (icon) {
         icon.className = open ? 'fa-light fa-xmark' : 'fa-light fa-plus';
      }
   }

   document.addEventListener('click', function (event) {
      var themeButton = event.target.closest('[data-fab="theme"]');
      if (themeButton && root.contains(themeButton)) {
         setTheme(theme() === 'dark' ? 'light' : 'dark');
         return;
      }
      if (event.target.closest('#et-fab-toggle')) {
         setOpen(!root.classList.contains('is-open'));
         return;
      }
      if (!event.target.closest('#et-fab')) {
         setOpen(false);
      }
   });

   paintTheme();
})();
</script>
