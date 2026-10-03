<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KilimanjaroTrekkingSeeder extends Seeder
{
    public function run(): void
    {
        // Remove old combined Machame package if present
        Tour::query()->where('slug', 'kilimanjaro-machame-route')->delete();

        $routes = [
            'Machame Route' => [6, 7],
            'Marangu Route' => [5, 6],
            'Lemosho Route' => [6, 7, 8, 9, 10],
            'Rongai Route' => [6, 7],
            'Northern Circuit Route' => [8, 9],
            'Umbwe Route' => [6, 7],
            'Shira Route' => [7, 8],
        ];

        $basePrice = [
            'Machame Route' => 2100,
            'Marangu Route' => 1900,
            'Lemosho Route' => 2300,
            'Rongai Route' => 2150,
            'Northern Circuit Route' => 2600,
            'Umbwe Route' => 2050,
            'Shira Route' => 2250,
        ];

        $images = [
            'Machame Route' => 'images/tours/trek-machame.jpg',
            'Marangu Route' => 'images/tours/trek-marangu.jpg',
            'Lemosho Route' => 'images/tours/trek-lemosho.jpg',
            'Rongai Route' => 'images/tours/trek-rongai.jpg',
            'Northern Circuit Route' => 'images/tours/trek-northern-circuit.jpg',
            'Umbwe Route' => 'images/tours/trek-umbwe.jpg',
            'Shira Route' => 'images/tours/trek-shira.jpg',
        ];

        $sort = 10;
        $featuredSlugs = [
            'machame-route-7-days',
            'lemosho-route-8-days',
            'northern-circuit-route-9-days',
            'marangu-route-5-days',
        ];

        foreach ($routes as $routeName => $daysList) {
            foreach ($daysList as $days) {
                $title = "{$routeName} {$days} Days";
                $slug = Str::slug($title);
                $nights = max(1, $days - 1);
                $price = ($basePrice[$routeName] ?? 2000) + (($days - min($daysList)) * 150);
                $oldPrice = (int) round($price * 1.12);
                $image = $images[$routeName];

                $itinerary = $this->buildItinerary($routeName, $days);

                Tour::query()->updateOrCreate(
                    ['slug' => $slug],
                    [
                        'title' => $title,
                        'category' => 'Trekking',
                        'location' => 'Mount Kilimanjaro, Tanzania',
                        'duration_label' => "{$days} Days / {$nights} Nights",
                        'duration_days' => $days,
                        'guests_min' => 1,
                        'guests_max' => 12,
                        'price' => $price,
                        'old_price' => $oldPrice,
                        'currency' => 'USD',
                        'discount_badge' => '- 10% Off',
                        'image' => $image,
                        'rating' => 4.9,
                        'reviews_count' => 12 + $days,
                        'accommodation' => $routeName === 'Marangu Route' ? 'Mountain huts' : 'Mountain tents',
                        'departure_city' => 'Moshi / Arusha',
                        'arrival_city' => 'Moshi / Arusha',
                        'best_season' => 'Jan – Mar, Jun – Oct',
                        'guide_type' => 'Guided mountain crew',
                        'stay_category' => $routeName === 'Marangu Route' ? 'Hut' : 'Camping',
                        'overview' => $this->routeInfo($routeName, $days)['overview'],
                        'highlights' => $this->routeInfo($routeName, $days)['highlights'],
                        'gallery' => [
                            'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-2.jpg',
                            'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-4.jpg',
                            'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-5.jpg',
                        ],
                        'destinations' => [
                            ['days' => 1, 'city' => 'Moshi'],
                            ['days' => $days - 1, 'city' => 'Kilimanjaro'],
                        ],
                        'included' => [
                            'Kilimanjaro National Park fees',
                            'Professional mountain guide, assistant guides & porters',
                            $routeName === 'Marangu Route' ? 'Hut accommodation on the mountain' : 'Camping equipment & tents',
                            'All meals on the mountain',
                            'Rescue fees',
                            'Airport transfers (Moshi / Kilimanjaro Airport)',
                        ],
                        'excluded' => [
                            'International flights',
                            'Travel insurance',
                            'Tips for guides and porters',
                            'Personal trekking gear rental',
                            'Soft drinks & alcoholic beverages',
                        ],
                        'places' => [
                            ['name' => $routeName, 'image' => $image],
                            ['name' => 'Uhuru Peak', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb.jpg'],
                        ],
                        'itinerary' => $itinerary,
                        'faqs' => [
                            [
                                'question' => "Is this the {$days}-day {$routeName} only?",
                                'answer' => "Yes. This package is specifically the {$routeName} for {$days} days. Other day options are listed as separate packages.",
                            ],
                            [
                                'question' => 'Do I need climbing experience?',
                                'answer' => 'No technical climbing is required, but good fitness and preparation help a lot.',
                            ],
                            [
                                'question' => 'When is the best time to climb?',
                                'answer' => 'Dry seasons January–March and June–October are the most popular.',
                            ],
                        ],
                        'duration_options' => [],
                        'is_featured' => in_array($slug, $featuredSlugs, true),
                        'is_published' => true,
                        'sort_order' => $sort++,
                    ]
                );
            }
        }

        $this->seedMachameRoute6Day();
    }

    private function seedMachameRoute6Day(): void
    {
        Tour::query()->updateOrCreate(
            ['slug' => 'machame-route-6-days'],
            [
                'title' => 'Machame Route – 6 Day Climb',
                'category' => 'Trekking',
                'location' => 'Mount Kilimanjaro, Tanzania',
                'duration_label' => '6 Days / 5 Nights',
                'duration_days' => 6,
                'guests_min' => 1,
                'guests_max' => 12,
                'price' => 2100,
                'old_price' => 2350,
                'currency' => 'USD',
                'discount_badge' => '- 10% Off',
                'image' => 'images/tours/trek-machame.jpg',
                'rating' => 4.9,
                'reviews_count' => 28,
                'accommodation' => 'Mountain tents',
                'departure_city' => 'Moshi',
                'arrival_city' => 'Moshi',
                'best_season' => 'Jun – Oct, Jan – Feb',
                'guide_type' => 'Guided mountain crew',
                'stay_category' => 'Camping',
                'overview' => "The Machame Route, also known as the “Whiskey Route,” is one of the most popular routes for climbing Mount Kilimanjaro. It offers spectacular scenery, diverse landscapes, and a gradual approach to the summit.\n\nThis 6-day itinerary is designed for adventurous trekkers who want to experience Kilimanjaro through forests, moorlands, alpine desert, and the high-altitude summit zone. The route includes the famous Lava Tower and Barranco Wall before continuing toward Uhuru Peak, the highest point in Africa.\n\nWith experienced mountain guides, proper preparation, and carefully planned daily stages, the Machame Route provides an unforgettable Kilimanjaro trekking experience.",
                'highlights' => [
                    'Summit Uhuru Peak – 5,895 m (19,341 ft)',
                    'Trek through the beautiful Montane Rainforest',
                    'Explore the Shira Plateau',
                    'Experience Lava Tower',
                    'Climb the famous Barranco Wall',
                    'Enjoy spectacular views of Mount Meru and the surrounding landscapes',
                    'Experience a night in the high-altitude alpine desert',
                    'Camp under the stars on Mount Kilimanjaro',
                    'Reach the highest point in Africa',
                ],
                'notes' => 'A 6-day Machame itinerary is a demanding schedule because the summit day is combined with the descent to Mweka Camp. Proper preparation and acclimatization are important.',
                'gallery' => [
                    'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-2.jpg',
                    'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-4.jpg',
                    'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-5.jpg',
                    'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-3.jpg',
                ],
                'destinations' => [
                    ['days' => 1, 'city' => 'Moshi'],
                    ['days' => 5, 'city' => 'Kilimanjaro'],
                ],
                'included' => [
                    'Airport transfers from Kilimanjaro International Airport',
                    'Accommodation in Moshi before and after the trek, according to the package',
                    'Professional, experienced mountain guides',
                    'Park entrance fees',
                    'Kilimanjaro National Park fees',
                    'Camping fees',
                    'Rescue/emergency fees',
                    'All meals during the mountain trek',
                    'Quality mountain tents',
                    'Sleeping mats',
                    'Porters',
                    'Porter wages and park fees',
                    'Drinking water during the trek',
                    'Government taxes and applicable service charges',
                    'Emergency first-aid equipment',
                    'Summit certificate',
                ],
                'excluded' => [
                    'International flights',
                    'Tanzania visa fees',
                    'Travel insurance',
                    'Personal hiking equipment',
                    'Sleeping bag',
                    'Tips for guides, porters and support staff',
                    'Alcoholic and other personal beverages',
                    'Laundry services',
                    'Personal expenses',
                    'Additional hotel nights not included in the itinerary',
                    'Meals and drinks not specified in the itinerary',
                    'Personal medical expenses',
                    'Any activities not mentioned under “Included”',
                ],
                'places' => [
                    ['name' => 'Machame Gate', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb.jpg'],
                    ['name' => 'Shira Plateau', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb-2.jpg'],
                    ['name' => 'Barranco Wall', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb-3.jpg'],
                    ['name' => 'Uhuru Peak', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb.jpg'],
                ],
                'itinerary' => $this->buildItinerary('Machame Route', 6),
                'faqs' => [
                    [
                        'question' => 'How difficult is the Machame Route?',
                        'answer' => 'The Machame Route is considered a challenging Kilimanjaro route, particularly because of its steep sections and the demanding summit day. Good physical preparation is recommended.',
                    ],
                    [
                        'question' => 'How many days does the Machame Route take?',
                        'answer' => 'The Machame Route can be climbed in different durations. A 6-day itinerary is possible, while longer itineraries allow more time for acclimatization.',
                    ],
                    [
                        'question' => 'What is the highest point reached on the trek?',
                        'answer' => 'The highest point is Uhuru Peak at 5,895 m (19,341 ft) above sea level.',
                    ],
                    [
                        'question' => 'Do I need previous mountain climbing experience?',
                        'answer' => 'No. Previous technical climbing experience is generally not required, but you should have good physical fitness and be prepared for long days of hiking at high altitude.',
                    ],
                    [
                        'question' => 'Where do we sleep during the trek?',
                        'answer' => 'You will sleep in mountain camps using camping tents provided as part of the trekking arrangement.',
                    ],
                    [
                        'question' => 'What is the best time to climb Mount Kilimanjaro?',
                        'answer' => 'Kilimanjaro can be climbed throughout much of the year. The commonly preferred periods are the drier months, particularly June to October and January to February.',
                    ],
                    [
                        'question' => 'What should I bring for the Machame Route?',
                        'answer' => 'Essential items include proper hiking boots, warm layers, waterproof clothing, a headlamp, gloves, hat, personal toiletries, water bottle, sunglasses, sunscreen, and suitable trekking clothing.',
                    ],
                    [
                        'question' => 'Is the Machame Route suitable for beginners?',
                        'answer' => 'Yes, beginners can climb the Machame Route if they are physically prepared and follow their guide\'s instructions. The main challenge is altitude rather than technical climbing.',
                    ],
                    [
                        'question' => 'Will I have a guide and porters?',
                        'answer' => 'Yes. A professional mountain guide leads the trek, while porters assist with camping equipment and other necessary supplies.',
                    ],
                    [
                        'question' => 'What happens if I cannot reach Uhuru Peak?',
                        'answer' => 'If a trekker develops symptoms of altitude sickness or cannot safely continue, the mountain team will assess the situation and may recommend descending. Safety takes priority over reaching the summit.',
                    ],
                ],
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 10,
            ]
        );
    }

    private function routeInfo(string $routeName, int $days): array
    {
        $info = [
            'Machame Route' => [
                'intro' => 'The Machame Route, known as the "Whiskey Route", is the most popular way up Kilimanjaro. It climbs through lush rainforest onto the Shira Plateau, passes beneath the Lava Tower and scales the famous Barranco Wall before the summit push from Barafu Camp.',
                'highlights' => ['Summit Uhuru Peak – 5,895 m (19,341 ft)', 'Trek through the montane rainforest', 'Cross the Shira Plateau', 'Climb high to Lava Tower, sleep low at Barranco', 'Scramble up the Barranco Wall', 'Sunrise views over the Mawenzi peak'],
            ],
            'Marangu Route' => [
                'intro' => 'The Marangu Route, the "Coca-Cola Route", is the oldest and only route with dormitory huts the whole way. A gentle, steady trail climbs from the rainforest through heath and moorland to the alpine desert of the Saddle and Kibo Hut.',
                'highlights' => ['Summit Uhuru Peak – 5,895 m (19,341 ft)', 'Sleep in mountain huts every night', 'Gentle, gradual gradient', 'Rainforest with colobus monkeys', 'Walk across the lunar Saddle', 'Great choice for a rainy-season climb'],
            ],
            'Lemosho Route' => [
                'intro' => 'The Lemosho Route starts on the remote western side of Kilimanjaro and is widely regarded as the most beautiful route. Quiet forest trails lead onto the entire width of the Shira Plateau before joining the southern circuit to Barafu Camp.',
                'highlights' => ['Summit Uhuru Peak – 5,895 m (19,341 ft)', 'Remote, quiet start in the western forest', 'Full crossing of the Shira Plateau', 'Excellent acclimatization profile', 'High summit success rate', 'Barranco Wall and Karanga Valley'],
            ],
            'Rongai Route' => [
                'intro' => 'The Rongai Route is the only route that approaches Kilimanjaro from the north, close to the Kenyan border. It is drier, quieter and offers a true wilderness feel, with a night at the beautiful Mawenzi Tarn before the summit and a descent via Marangu.',
                'highlights' => ['Summit Uhuru Peak – 5,895 m (19,341 ft)', 'Quiet northern wilderness approach', 'Drier side of the mountain', 'Camp beside Mawenzi Tarn', 'See both sides of Kilimanjaro', 'Descent via the Marangu Route'],
            ],
            'Northern Circuit Route' => [
                'intro' => 'The Northern Circuit is the longest and newest route on Kilimanjaro. After crossing the Shira Plateau it circles the remote northern slopes, giving the best acclimatization of any route, outstanding views and very few other climbers.',
                'highlights' => ['Summit Uhuru Peak – 5,895 m (19,341 ft)', 'Longest route with the best acclimatization', 'Highest summit success rate', 'Remote northern slopes with few climbers', 'Views north over Kenya and Amboseli', 'Summit from School Hut'],
            ],
            'Umbwe Route' => [
                'intro' => 'The Umbwe Route is the shortest, steepest and most direct way to the southern circuit. It is a demanding route for fit and experienced trekkers, climbing a narrow forest ridge before joining the Machame trail at Barranco Camp.',
                'highlights' => ['Summit Uhuru Peak – 5,895 m (19,341 ft)', 'Steep, direct and very quiet', 'Dramatic ridge walk through the forest', 'Barranco Wall and Karanga Valley', 'Ideal for experienced, fit trekkers', 'Descent via Mweka'],
            ],
            'Shira Route' => [
                'intro' => 'The Shira Route starts high on the western Shira Plateau, reached by a scenic drive. Trekkers begin above the forest at around 3,600 m and enjoy wide open moorland views before joining the southern circuit towards the summit.',
                'highlights' => ['Summit Uhuru Peak – 5,895 m (19,341 ft)', 'Drive high and start on the Shira Plateau', 'Open moorland with big views of Kibo', 'Lava Tower acclimatization day', 'Barranco Wall and Karanga Valley', 'Descent via Mweka'],
            ],
        ];

        $route = $info[$routeName] ?? ['intro' => '', 'highlights' => []];

        return [
            'overview' => $route['intro']."\n\nThis {$days}-day itinerary is led by our professional mountain crew of guides, cooks and porters. Every day is paced to help you acclimatize, with daily health checks, hot meals and a carefully planned summit night to give you the best chance of standing on the Roof of Africa.",
            'highlights' => $route['highlights'],
        ];
    }

    private function alt(int $meters): string
    {
        return number_format($meters).' m / '.number_format((int) round($meters * 3.28084)).' ft';
    }

    private function buildItinerary(string $routeName, int $days): array
    {
        $legs = [
            'machame_gate' => ['Machame Gate – Machame Camp', 'After breakfast, drive from Moshi to Machame Gate for registration. The trek begins through lush montane rainforest, home to colobus monkeys and giant ferns, climbing steadily to Machame Camp.', 1800, 3000, '5–7 hours', '11 km', 'Machame Camp'],
            'machame_shira2' => ['Machame Camp – Shira 2 Camp', 'Leave the rainforest behind and climb a steep, rocky ridge into the moorland zone. The trail eases onto the Shira Plateau with wide views of Kibo and the western Breach.', 3000, 3845, '4–6 hours', '5 km', 'Shira 2 Camp'],
            'lava_barranco' => ['Shira 2 Camp – Lava Tower – Barranco Camp', 'A key acclimatization day: climb through the alpine desert to the 4,630 m Lava Tower for lunch, then descend into the Barranco Valley among giant groundsels. Climb high, sleep low.', 3845, 3960, '6–8 hours', '10 km', 'Barranco Camp'],
            'barranco_karanga' => ['Barranco Camp – Karanga Camp', 'Scramble up the famous Barranco Wall, then follow a scenic up-and-down trail across ridges and valleys to Karanga Camp, the last water point before the summit.', 3960, 3995, '4–5 hours', '5 km', 'Karanga Camp'],
            'karanga_barafu' => ['Karanga Camp – Barafu Camp', 'A short climb through the alpine desert to Barafu Camp. Arrive early for lunch, rest, an early dinner and a full summit briefing before sleeping a few hours.', 3995, 4673, '4–5 hours', '4 km', 'Barafu Camp'],
            'barranco_barafu' => ['Barranco Camp – Karanga – Barafu Camp', 'Climb the Barranco Wall, continue across the Karanga Valley for lunch and push on to Barafu Camp. Early dinner and rest before the midnight summit attempt.', 3960, 4673, '7–9 hours', '9 km', 'Barafu Camp'],
            'summit_mweka' => ['Barafu Camp – Uhuru Peak – Mweka Camp', 'Wake near midnight for the summit push. Climb steadily to Stella Point on the crater rim for sunrise, then on to Uhuru Peak, the highest point in Africa. Descend to Barafu for a rest and continue down to Mweka Camp.', 4673, 3100, '12–15 hours', '17 km', 'Mweka Camp'],
            'mweka_gate' => ['Mweka Camp – Mweka Gate – Moshi', 'A final walk down through the rainforest to Mweka Gate, where you receive your summit certificate. Transfer back to Moshi for a hot shower and celebration.', 3100, 1640, '3–4 hours', '10 km', null],
            'marangu_gate' => ['Marangu Gate – Mandara Hut', 'Drive to Marangu Gate for registration, then walk through beautiful rainforest to the A-frame huts of Mandara. In the afternoon, visit the nearby Maundi Crater.', 1860, 2720, '4–5 hours', '8 km', 'Mandara Hut'],
            'mandara_horombo' => ['Mandara Hut – Horombo Hut', 'Leave the forest for open heath and moorland dotted with giant lobelias, with the first big views of Kibo and Mawenzi peaks.', 2720, 3720, '6–8 hours', '12 km', 'Horombo Hut'],
            'zebra_rocks' => ['Acclimatization Day – Zebra Rocks', 'A rest and acclimatization day at Horombo with a short hike up to the striped Zebra Rocks at around 4,020 m before returning to the hut.', 3720, 3720, '3–4 hours', '5 km', 'Horombo Hut'],
            'horombo_kibo' => ['Horombo Hut – Kibo Hut', 'Cross the lunar landscape of the Saddle between Mawenzi and Kibo to Kibo Hut. Early dinner and rest before the summit attempt.', 3720, 4705, '6–7 hours', '10 km', 'Kibo Hut'],
            'kibo_summit' => ['Kibo Hut – Uhuru Peak – Horombo Hut', 'Begin around midnight, climbing switchbacks to Gilman\'s Point on the crater rim and on to Uhuru Peak at sunrise. Descend to Kibo Hut for a rest and continue to Horombo Hut.', 4705, 3720, '12–14 hours', '21 km', 'Horombo Hut'],
            'horombo_gate' => ['Horombo Hut – Marangu Gate – Moshi', 'Descend through the moorland and rainforest to Marangu Gate, collect your summit certificate and transfer back to your hotel in Moshi.', 3720, 1860, '5–7 hours', '20 km', null],
            'lemosho_gate' => ['Londorossi Gate – Mti Mkubwa Camp', 'Drive to Londorossi Gate for registration, continue to the Lemosho trailhead and hike through pristine rainforest to Mti Mkubwa ("Big Tree") Camp.', 2100, 2820, '3–4 hours', '6 km', 'Mti Mkubwa Camp'],
            'mti_shira1' => ['Mti Mkubwa Camp – Shira 1 Camp', 'Climb out of the forest into giant heather and moorland, crossing the Shira Ridge before dropping onto the plateau to Shira 1 Camp.', 2820, 3610, '5–6 hours', '8 km', 'Shira 1 Camp'],
            'mti_shira2' => ['Mti Mkubwa Camp – Shira 2 Camp', 'A long day leaving the forest, crossing the Shira Ridge and walking the full width of the Shira Plateau to Shira 2 Camp.', 2820, 3845, '7–8 hours', '15 km', 'Shira 2 Camp'],
            'shira1_shira2' => ['Shira 1 Camp – Shira 2 Camp', 'An easy walk east across the Shira Plateau with constant views of Kibo, arriving at Shira 2 Camp in time for lunch and an afternoon acclimatization stroll.', 3610, 3845, '3–4 hours', '7 km', 'Shira 2 Camp'],
            'shira_acclim' => ['Acclimatization Day – Shira Plateau', 'A rest day on the plateau with an acclimatization hike to the Shira Cathedral viewpoint before returning to camp.', 3845, 3845, '3–4 hours', '6 km', 'Shira 2 Camp'],
            'karanga_acclim' => ['Acclimatization Day – Karanga Valley', 'An extra night at Karanga Camp with a short hike higher up the valley to help your body adjust before Barafu.', 3995, 3995, '2–3 hours', '3 km', 'Karanga Camp'],
            'rongai_gate' => ['Rongai Gate – Simba Camp', 'Drive to the Nale Moru trailhead on the northern side of the mountain and walk through farmland and pine forest to Simba Camp.', 1950, 2625, '3–4 hours', '7 km', 'Simba Camp'],
            'simba_second_cave' => ['Simba Camp – Second Cave Camp', 'A steady climb through heath and moorland with views over the Kenyan plains to Second Cave Camp.', 2625, 3450, '3–4 hours', '6 km', 'Second Cave Camp'],
            'second_cave_kikelewa' => ['Second Cave Camp – Kikelewa Camp', 'Leave the main trail and strike out towards the jagged peaks of Mawenzi to the sheltered Kikelewa Caves.', 3450, 3600, '3–4 hours', '6 km', 'Kikelewa Camp'],
            'simba_kikelewa' => ['Simba Camp – Kikelewa Camp', 'Climb past Second Cave towards Mawenzi\'s jagged peaks, reaching the sheltered Kikelewa Caves.', 2625, 3600, '6–7 hours', '12 km', 'Kikelewa Camp'],
            'kikelewa_mawenzi' => ['Kikelewa Camp – Mawenzi Tarn Hut', 'A short, steep climb up grassy slopes to the stunning Mawenzi Tarn, set beneath the towering spires of Mawenzi.', 3600, 4330, '3–4 hours', '4 km', 'Mawenzi Tarn Hut'],
            'mawenzi_kibo' => ['Mawenzi Tarn Hut – Kibo Hut', 'Cross the high desert of the Saddle to Kibo Hut at the foot of the summit cone. Early dinner and rest.', 4330, 4705, '4–5 hours', '9 km', 'Kibo Hut'],
            'shira2_moir' => ['Shira 2 Camp – Lava Tower – Moir Hut', 'Climb towards Lava Tower, then leave the crowds and turn north to the remote Moir Hut beneath the Northern Icefield.', 3845, 4200, '5–7 hours', '14 km', 'Moir Hut'],
            'moir_buffalo' => ['Moir Hut – Buffalo Camp', 'Begin the circuit of the quiet northern slopes, with views north over the Kenyan plains, to Buffalo Camp.', 4200, 4020, '5–7 hours', '12 km', 'Buffalo Camp'],
            'buffalo_third_cave' => ['Buffalo Camp – Third Cave Camp', 'Continue east around the mountain through the alpine desert to Third Cave Camp.', 4020, 3870, '5–6 hours', '8 km', 'Third Cave Camp'],
            'third_cave_school' => ['Third Cave Camp – School Hut', 'Climb steadily onto the Saddle to School Hut. Early dinner and rest before the summit night.', 3870, 4750, '4–5 hours', '5 km', 'School Hut'],
            'school_summit' => ['School Hut – Uhuru Peak – Mweka Camp', 'Leave around midnight, climb to Gilman\'s Point and follow the crater rim to Uhuru Peak for sunrise, then descend the southern slopes to Mweka Camp.', 4750, 3100, '12–14 hours', '17 km', 'Mweka Camp'],
            'umbwe_gate' => ['Umbwe Gate – Umbwe Cave Camp', 'Drive to Umbwe Gate and climb steeply along a narrow forest ridge, using tree roots as steps, to Umbwe Cave Camp.', 1600, 2940, '5–6 hours', '11 km', 'Umbwe Cave Camp'],
            'umbwe_barranco' => ['Umbwe Cave Camp – Barranco Camp', 'The ridge continues steeply through heather and moorland with dramatic views, before joining the southern circuit at Barranco Camp.', 2940, 3960, '4–5 hours', '6 km', 'Barranco Camp'],
            'barranco_acclim' => ['Acclimatization Day – Barranco Valley', 'A rest and acclimatization day with a short hike towards Lava Tower before returning to sleep at Barranco Camp.', 3960, 3960, '3–4 hours', '6 km', 'Barranco Camp'],
            'shira_gate' => ['Shira Gate – Shira 1 Camp', 'A scenic drive up to the Shira Plateau, registration at the gate, and a short walk across open moorland to Shira 1 Camp.', 3600, 3610, '1–2 hours', '4 km', 'Shira 1 Camp'],
        ];

        $variants = [
            'Machame Route' => [
                6 => ['machame_gate', 'machame_shira2', 'lava_barranco', 'barranco_barafu', 'summit_mweka', 'mweka_gate'],
                7 => ['machame_gate', 'machame_shira2', 'lava_barranco', 'barranco_karanga', 'karanga_barafu', 'summit_mweka', 'mweka_gate'],
            ],
            'Marangu Route' => [
                5 => ['marangu_gate', 'mandara_horombo', 'horombo_kibo', 'kibo_summit', 'horombo_gate'],
                6 => ['marangu_gate', 'mandara_horombo', 'zebra_rocks', 'horombo_kibo', 'kibo_summit', 'horombo_gate'],
            ],
            'Lemosho Route' => [
                6 => ['lemosho_gate', 'mti_shira2', 'lava_barranco', 'barranco_barafu', 'summit_mweka', 'mweka_gate'],
                7 => ['lemosho_gate', 'mti_shira1', 'shira1_shira2', 'lava_barranco', 'barranco_barafu', 'summit_mweka', 'mweka_gate'],
                8 => ['lemosho_gate', 'mti_shira1', 'shira1_shira2', 'lava_barranco', 'barranco_karanga', 'karanga_barafu', 'summit_mweka', 'mweka_gate'],
                9 => ['lemosho_gate', 'mti_shira1', 'shira1_shira2', 'shira_acclim', 'lava_barranco', 'barranco_karanga', 'karanga_barafu', 'summit_mweka', 'mweka_gate'],
                10 => ['lemosho_gate', 'mti_shira1', 'shira1_shira2', 'shira_acclim', 'lava_barranco', 'barranco_karanga', 'karanga_acclim', 'karanga_barafu', 'summit_mweka', 'mweka_gate'],
            ],
            'Rongai Route' => [
                6 => ['rongai_gate', 'simba_kikelewa', 'kikelewa_mawenzi', 'mawenzi_kibo', 'kibo_summit', 'horombo_gate'],
                7 => ['rongai_gate', 'simba_second_cave', 'second_cave_kikelewa', 'kikelewa_mawenzi', 'mawenzi_kibo', 'kibo_summit', 'horombo_gate'],
            ],
            'Northern Circuit Route' => [
                8 => ['lemosho_gate', 'mti_shira2', 'shira2_moir', 'moir_buffalo', 'buffalo_third_cave', 'third_cave_school', 'school_summit', 'mweka_gate'],
                9 => ['lemosho_gate', 'mti_shira1', 'shira1_shira2', 'shira2_moir', 'moir_buffalo', 'buffalo_third_cave', 'third_cave_school', 'school_summit', 'mweka_gate'],
            ],
            'Umbwe Route' => [
                6 => ['umbwe_gate', 'umbwe_barranco', 'barranco_karanga', 'karanga_barafu', 'summit_mweka', 'mweka_gate'],
                7 => ['umbwe_gate', 'umbwe_barranco', 'barranco_acclim', 'barranco_karanga', 'karanga_barafu', 'summit_mweka', 'mweka_gate'],
            ],
            'Shira Route' => [
                7 => ['shira_gate', 'shira1_shira2', 'lava_barranco', 'barranco_karanga', 'karanga_barafu', 'summit_mweka', 'mweka_gate'],
                8 => ['shira_gate', 'shira1_shira2', 'shira_acclim', 'lava_barranco', 'barranco_karanga', 'karanga_barafu', 'summit_mweka', 'mweka_gate'],
            ],
        ];

        $keys = $variants[$routeName][$days] ?? [];
        $plan = [];

        foreach ($keys as $i => $key) {
            [$title, $description, $from, $to, $hours, $distance, $camp] = $legs[$key];
            $isLast = $i === count($keys) - 1;

            $plan[] = [
                'day' => 'Day '.str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT),
                'title' => $title,
                'description' => $description,
                'hiking_time' => $hours,
                'distance' => $distance,
                'start_altitude' => $this->alt($from),
                'end_altitude' => $this->alt($to),
                'meals' => $isLast ? 'Breakfast & Lunch' : 'Breakfast, Lunch & Dinner',
                'accommodation' => $camp ?? 'Hotel in Moshi / Departure',
            ];
        }

        return $plan;
    }
}
