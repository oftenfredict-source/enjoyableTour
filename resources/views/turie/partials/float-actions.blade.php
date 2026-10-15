@php
   $fabDigits = preg_replace('/\D+/', '', (string) config('app.contact_phone')) ?: '255613963895';
   $fabEmail = config('app.contact_email');
@endphp
<div class="et-fab" id="et-fab">
   <div class="et-fab-menu" id="et-fab-menu">
      <button type="button" class="et-fab-item" data-fab="theme">
         <span data-i18n="fab.mode">Dark mode</span>
         <i class="fa-light fa-moon" aria-hidden="true"></i>
      </button>
      <div class="et-fab-lang" id="et-fab-lang">
         <button type="button" data-set-lang="en" data-i18n="lang.en">English</button>
         <button type="button" data-set-lang="sw" data-i18n="lang.sw">Kiswahili</button>
      </div>
      <button type="button" class="et-fab-item" data-fab="language" aria-expanded="false" aria-controls="et-fab-lang">
         <span data-i18n="fab.language">Language</span>
         <i class="fa-light fa-language" aria-hidden="true"></i>
      </button>
      <a class="et-fab-item et-fab-wa" href="https://wa.me/{{ $fabDigits }}" target="_blank" rel="noopener">
         <span data-i18n="fab.whatsapp">WhatsApp</span>
         <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
      </a>
      <a class="et-fab-item" href="mailto:{{ $fabEmail }}">
         <span data-i18n="fab.email">Email</span>
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
   var langBox = document.getElementById('et-fab-lang');
   if (!root || !toggle) {
      return;
   }

   var copy = {
      en: {
         'nav.home': 'Home',
         'nav.about': 'About Us',
         'nav.tours': 'Tours',
         'nav.all': 'All Tours',
         'nav.safaris': 'Safaris',
         'nav.day-trips': 'Day Trips',
         'nav.trekking': 'Trekking',
         'nav.zanzibar': 'Zanzibar',
         'nav.find': 'Find Your Tour',
         'nav.plan': 'Plan',
         'nav.contact': 'Contact',
         'tool.best-time': 'Best time to visit',
         'tool.budget': 'Safari budget',
         'tool.build': 'Build a safari',
         'tool.kilimanjaro': 'Kilimanjaro routes',
         'tool.migration': 'Migration calendar',
         'tool.packing': 'Packing list',
         'tool.parks': 'Park explorer',
         'tools.title': 'Tour Tools',
         'tools.destinations': 'Our Destinations',
         'tools.viewAll': 'View All',
         'tools.inquiry': 'To More Inquiry',
         'tools.email': 'Email:',
         'footer.about': 'Local guides for Kilimanjaro treks, northern safaris, day trips, and Zanzibar. Planned from our office in Moshi.',
         'footer.company': 'Company',
         'footer.home': 'Home',
         'footer.aboutLink': 'About us',
         'footer.tours': 'Tours',
         'footer.plan': 'Plan your trip',
         'footer.faq': 'FAQ',
         'footer.contact': 'Contact',
         'footer.experiences': 'Experiences',
         'footer.day': 'Day trips',
         'footer.visit': 'Visit us',
         'footer.hours': 'Daily 08:00 – 20:00 EAT',
         'footer.whatsapp': 'WhatsApp us',
         'footer.rights': 'All rights reserved.',
         'fab.modeDark': 'Dark mode',
         'fab.modeLight': 'Light mode',
         'fab.language': 'Language',
         'fab.whatsapp': 'WhatsApp',
         'fab.email': 'Email',
         'lang.en': 'English',
         'lang.sw': 'Kiswahili',
         'fab.open': 'Open quick options',
         'fab.close': 'Close quick options'
      },
      sw: {
         'nav.home': 'Nyumbani',
         'nav.about': 'Kuhusu sisi',
         'nav.tours': 'Ziara',
         'nav.all': 'Ziara zote',
         'nav.safaris': 'Safari',
         'nav.day-trips': 'Ziara za siku',
         'nav.trekking': 'Kupanda milima',
         'nav.zanzibar': 'Zanzibar',
         'nav.find': 'Tafuta ziara yako',
         'nav.plan': 'Panga safari',
         'nav.contact': 'Wasiliana',
         'tool.best-time': 'Wakati bora wa kutembelea',
         'tool.budget': 'Bajeti ya safari',
         'tool.build': 'Tengeneza safari',
         'tool.kilimanjaro': 'Njia za Kilimanjaro',
         'tool.migration': 'Kalenda ya uhamaji',
         'tool.packing': 'Orodha ya mizigo',
         'tool.parks': 'Chunguza mbuga',
         'tools.title': 'Zana za ziara',
         'tools.destinations': 'Vituo vyetu',
         'tools.viewAll': 'Tazama zote',
         'tools.inquiry': 'Kwa maelezo zaidi',
         'tools.email': 'Barua pepe:',
         'footer.about': 'Viongozi wa ndani kwa kupanda Kilimanjaro, safari za kaskazini, ziara za siku, na Zanzibar. Tunapanga kutoka ofisi yetu ya Moshi.',
         'footer.company': 'Kampuni',
         'footer.home': 'Nyumbani',
         'footer.aboutLink': 'Kuhusu sisi',
         'footer.tours': 'Ziara',
         'footer.plan': 'Panga safari yako',
         'footer.faq': 'Maswali',
         'footer.contact': 'Wasiliana',
         'footer.experiences': 'Uzoefu',
         'footer.day': 'Ziara za siku',
         'footer.visit': 'Tembelea',
         'footer.hours': 'Kila siku 08:00 – 20:00 EAT',
         'footer.whatsapp': 'Tuandikie WhatsApp',
         'footer.rights': 'Haki zote zimehifadhiwa.',
         'fab.modeDark': 'Hali ya giza',
         'fab.modeLight': 'Hali nyeupe',
         'fab.language': 'Lugha',
         'fab.whatsapp': 'WhatsApp',
         'fab.email': 'Barua pepe',
         'lang.en': 'English',
         'lang.sw': 'Kiswahili',
         'fab.open': 'Fungua chaguo',
         'fab.close': 'Funga chaguo'
      }
   };

   function theme() {
      return document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
   }

   function lang() {
      return document.documentElement.getAttribute('data-lang') === 'sw' ? 'sw' : 'en';
   }

   function applyCopy() {
      var pack = copy[lang()];
      document.querySelectorAll('[data-i18n]').forEach(function (el) {
         var key = el.getAttribute('data-i18n');
         if (key === 'fab.mode') {
            el.textContent = theme() === 'dark' ? pack['fab.modeLight'] : pack['fab.modeDark'];
            return;
         }
         if (pack[key]) {
            el.textContent = pack[key];
         }
      });
      document.querySelectorAll('[data-set-lang]').forEach(function (button) {
         button.classList.toggle('is-active', button.getAttribute('data-set-lang') === lang());
      });
      var themeButton = root.querySelector('[data-fab="theme"] i');
      if (themeButton) {
         themeButton.className = theme() === 'dark' ? 'fa-light fa-sun' : 'fa-light fa-moon';
      }
      var languageButton = root.querySelector('[data-fab="language"]');
      if (languageButton) {
         languageButton.setAttribute('aria-label', pack['fab.language']);
      }
   }

   function setTheme(next) {
      document.documentElement.setAttribute('data-theme', next);
      try { localStorage.setItem('et-theme', next); } catch (e) {}
      applyCopy();
   }

   function setLang(next) {
      document.documentElement.lang = next;
      document.documentElement.setAttribute('data-lang', next);
      try { localStorage.setItem('et-lang', next); } catch (e) {}
      applyCopy();
   }

   function setLangOpen(open) {
      if (!langBox) {
         return;
      }
      langBox.classList.toggle('is-open', open);
      var button = root.querySelector('[data-fab="language"]');
      if (button) {
         button.setAttribute('aria-expanded', open ? 'true' : 'false');
      }
   }

   function setOpen(open) {
      root.classList.toggle('is-open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      var pack = copy[lang()];
      toggle.setAttribute('aria-label', open ? pack['fab.close'] : pack['fab.open']);
      var icon = toggle.querySelector('i');
      if (icon) {
         icon.className = open ? 'fa-light fa-xmark' : 'fa-light fa-plus';
      }
      if (!open) {
         setLangOpen(false);
      }
   }

   document.addEventListener('click', function (event) {
      var themeButton = event.target.closest('[data-fab="theme"]');
      if (themeButton && root.contains(themeButton)) {
         setTheme(theme() === 'dark' ? 'light' : 'dark');
         return;
      }
      var languageButton = event.target.closest('[data-fab="language"]');
      if (languageButton && root.contains(languageButton)) {
         setLangOpen(!langBox.classList.contains('is-open'));
         return;
      }
      var choice = event.target.closest('[data-set-lang]');
      if (choice && root.contains(choice)) {
         setLang(choice.getAttribute('data-set-lang'));
         setLangOpen(false);
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

   document.addEventListener('DOMContentLoaded', applyCopy);
   applyCopy();
})();
</script>
