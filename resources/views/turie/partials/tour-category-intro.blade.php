@php
   $intros = [
      'safaris' => [
         'caption' => 'About Safaris',
         'title' => 'Witness the great wildlife of Tanzania',
         'image' => 'images/about/safari.jpg',
         'text' => 'Tanzania is home to some of the finest safari country on earth. Track the Big Five across the endless Serengeti plains, descend into the Ngorongoro Crater, and watch elephant herds gather under the baobabs of Tarangire. Our driver-guides know every season and every trail, so you get closer to the action.',
         'points' => [
            'Big Five game drives in Serengeti & Ngorongoro',
            'Great Migration river crossings (Jul – Oct)',
            'Lodges, tented camps & private 4x4 vehicles',
            'Experienced local driver-guides',
         ],
      ],
      'day-trips' => [
         'caption' => 'About Day Trips',
         'title' => 'Make the most of a single day',
         'image' => 'images/about/daytrip.jpg',
         'text' => 'Short on time or resting between a safari and a climb? Our day trips from Arusha and Moshi take you to rainforest waterfalls, the turquoise Chemka hot springs, coffee farms on the slopes of Kilimanjaro and walking safaris in Arusha National Park, all back at your hotel by evening.',
         'points' => [
            'Hotel pick-up and drop-off in Arusha or Moshi',
            'Waterfalls, hot springs & coffee farm tours',
            'Lunch, guide and park fees included',
            'Perfect before or after a safari or climb',
         ],
      ],
      'trekking' => [
         'caption' => 'About Trekking',
         'title' => "Climb Africa's highest peaks",
         'image' => 'images/about/trekking.jpg',
         'text' => 'Stand on the Roof of Africa at Uhuru Peak (5,895 m). We run Kilimanjaro climbs on the Machame, Lemosho, Marangu and Rongai routes, plus Mount Meru treks for acclimatisation. Certified mountain guides, well-paid porters and quality equipment keep you safe and help you reach the summit.',
         'points' => [
            'Kilimanjaro routes from 5 to 9 days',
            'Certified mountain guides & porter teams',
            'Quality tents, hot meals & safety equipment',
            'Mount Meru and acclimatisation treks',
         ],
      ],
      'zanzibar' => [
         'caption' => 'About Zanzibar',
         'title' => 'Relax on the Spice Island',
         'image' => 'images/categories/zanzibar.jpg',
         'text' => 'End your adventure on the white-sand beaches of Zanzibar. Wander the winding alleys of UNESCO-listed Stone Town, smell cloves and cinnamon on a spice farm, snorkel the coral reefs of Mnemba Atoll and watch the sun set from a traditional dhow.',
         'points' => [
            'Stone Town & spice farm tours',
            'Snorkelling at Mnemba Atoll',
            'Beach stays in Nungwi, Kendwa & Paje',
            'Easy add-on after your safari',
         ],
      ],
      'all' => [
         'caption' => 'Discover Tanzania',
         'title' => 'Safaris, treks, day trips & beaches',
         'image' => 'images/about/hero.jpg',
         'text' => 'From the wildlife of the Serengeti to the summit of Kilimanjaro and the beaches of Zanzibar, Enjoyable Tour plans every journey with local expertise. Choose a ready-made package below or let us tailor a trip to your dates, budget and travel style.',
         'points' => [
            'Wildlife safaris across northern Tanzania',
            'Kilimanjaro & Mount Meru climbs',
            'Day trips from Arusha and Moshi',
            'Zanzibar beach and culture holidays',
         ],
      ],
   ];
   $intro = $intros[$categorySlug ?? 'all'] ?? $intros['all'];
@endphp
      <!-- tp-category-intro-area-start -->
      <div class="et-intro-area pt-100 pb-70">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="et-intro-content mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <span class="tp-section-subtitle d-inline-block mb-10">{{ $intro['caption'] }}</span>
                     <h2 class="tp-section-title fw-600 mb-20">{{ $intro['title'] }}</h2>
                     <p class="mb-25">{{ $intro['text'] }}</p>
                     <ul class="et-intro-list mb-35">
                        @foreach ($intro['points'] as $point)
                           <li>
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="9" cy="9" r="9" fill="currentColor"/><path d="M5.5 9.2l2.3 2.3 4.7-4.8" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                              {{ $point }}
                           </li>
                        @endforeach
                     </ul>
                     <a href="{{ url('/contact') }}" class="tp-btn">Plan Your Trip</a>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="et-intro-thumb mb-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                     <img src="{{ asset($intro['image']) }}" alt="{{ $intro['title'] }}">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-category-intro-area-end -->
