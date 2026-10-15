<style>
   .et-site-footer {
      background-color: #122126;
      background-image:
         linear-gradient(180deg, rgba(8, 16, 20, 0.82) 0%, rgba(8, 16, 20, 0.88) 100%),
         url("{{ asset('images/kilimanjaro-footer.jpg') }}");
      background-size: cover;
      background-position: center 22%;
      background-repeat: no-repeat;
      color: #fff;
      margin-top: 0;
      text-shadow: 0 1px 2px rgba(0, 0, 0, 0.45);
   }
   .et-site-footer p,
   .et-site-footer li,
   .et-site-footer a,
   .et-site-footer .et-footer-bar {
      color: #fff;
   }
   .et-site-footer a {
      text-decoration: none;
   }
   .et-site-footer a:hover {
      color: #fff;
   }
   .et-footer-inner {
      max-width: 1120px;
      margin: 0 auto;
      padding: 64px 24px 28px;
   }
   .et-footer-grid {
      display: grid;
      grid-template-columns: 1.4fr 0.8fr 0.8fr 1.1fr;
      gap: 40px 32px;
   }
   .et-site-footer img {
      width: 64px;
      height: 64px;
      object-fit: contain;
      background: #fff;
      border-radius: 50%;
      padding: 4px;
   }
   .et-footer-brand p {
      margin: 16px 0 0;
      max-width: 320px;
      line-height: 1.7;
      font-size: 15px;
   }
   .et-site-footer h3 {
      color: #fff;
      font-size: 15px;
      font-weight: 600;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      margin: 0 0 16px;
   }
   .et-site-footer ul {
      list-style: none;
      margin: 0;
      padding: 0;
   }
   .et-site-footer li {
      margin-bottom: 10px;
   }
   .et-footer-contact p {
      margin: 0 0 10px;
      line-height: 1.6;
      font-size: 15px;
   }
   .et-footer-contact a {
      color: #fff;
      font-weight: 600;
   }
   .et-footer-whatsapp {
      display: inline-flex;
      margin-top: 8px;
      background: #128c4a;
      color: #fff !important;
      border-radius: 8px;
      padding: 10px 14px;
      font-weight: 600;
      font-size: 14px;
   }
   .et-footer-whatsapp:hover {
      background: #0f7640;
      color: #fff !important;
   }
   .et-footer-bar {
      border-top: 1px solid rgba(255, 255, 255, 0.12);
      margin-top: 36px;
      padding-top: 18px;
      display: flex;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
      font-size: 14px;
      color: #fff;
   }
   @media (max-width: 991px) {
      .et-footer-grid {
         grid-template-columns: 1fr 1fr;
      }
   }
   @media (max-width: 575px) {
      .et-footer-grid {
         grid-template-columns: 1fr;
         gap: 28px;
      }
      .et-footer-inner {
         padding-top: 48px;
      }
   }
</style>

<footer class="et-site-footer">
   <div class="et-footer-inner">
      <div class="et-footer-grid">
         <div class="et-footer-brand">
            <a href="{{ url('/') }}">
               <img src="{{ asset('enjoyable-tour-logo.png') }}" alt="Enjoyable Tour">
            </a>
            <p data-i18n="footer.about">Local guides for Kilimanjaro treks, northern safaris, day trips, and Zanzibar. Planned from our office in Moshi.</p>
         </div>
         <div>
            <h3 data-i18n="footer.company">Company</h3>
            <ul>
               <li><a href="{{ url('/') }}" data-i18n="footer.home">Home</a></li>
               <li><a href="{{ url('/about') }}" data-i18n="footer.aboutLink">About us</a></li>
               <li><a href="{{ url('/tours') }}" data-i18n="footer.tours">Tours</a></li>
               <li><a href="{{ route('plan.index') }}" data-i18n="footer.plan">Plan your trip</a></li>
               <li><a href="{{ url('/faq') }}" data-i18n="footer.faq">FAQ</a></li>
               <li><a href="{{ url('/contact') }}" data-i18n="footer.contact">Contact</a></li>
            </ul>
         </div>
         <div>
            <h3 data-i18n="footer.experiences">Experiences</h3>
            <ul>
               <li><a href="{{ url('/tours/trekking') }}" data-i18n="nav.trekking">Trekking</a></li>
               <li><a href="{{ url('/tours/safaris') }}" data-i18n="nav.safaris">Safaris</a></li>
               <li><a href="{{ url('/tours/day-trips') }}" data-i18n="footer.day">Day trips</a></li>
               <li><a href="{{ url('/tours/zanzibar') }}" data-i18n="nav.zanzibar">Zanzibar</a></li>
            </ul>
         </div>
         <div class="et-footer-contact">
            <h3 data-i18n="footer.visit">Visit us</h3>
            <p>Moshi, Kilimanjaro, Tanzania</p>
            <p><a href="tel:+255613963895">+255 613 963 895</a></p>
            <p><a href="mailto:{{ config('app.contact_email') }}">{{ config('app.contact_email') }}</a></p>
            <p data-i18n="footer.hours">Daily 08:00 – 20:00 EAT</p>
            <a class="et-footer-whatsapp" href="https://wa.me/255613963895" target="_blank" rel="noopener" data-i18n="footer.whatsapp">WhatsApp us</a>
         </div>
      </div>
      <div class="et-footer-bar">
         <span>© {{ date('Y') }} Enjoyable Tour. <span data-i18n="footer.rights">All rights reserved.</span></span>
         <a href="{{ url('/privacy-policy') }}">Privacy policy</a>
      </div>
   </div>
</footer>
