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
            'turiehtml-10/turie/assets/img/tour/02.jpg',
            'images/categories/trekking.jpg',
            'turiehtml-10/turie/assets/img/tour/01.jpg',
            'turiehtml-10/turie/assets/img/tour/03.jpg',
            'turiehtml-10/turie/assets/img/tour/04.jpg',
            'turiehtml-10/turie/assets/img/tour/05.jpg',
            'turiehtml-10/turie/assets/img/tour/06.jpg',
        ];

        $sort = 10;
        $imageIndex = 0;
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
                $image = $images[$imageIndex % count($images)];
                $imageIndex++;

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
                        'overview' => "Climb Mount Kilimanjaro via the {$routeName} on a dedicated {$days}-day itinerary. This package is for the {$days}-day option only (not combined with other day options).",
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
                'image' => 'turiehtml-10/turie/assets/img/tour/02.jpg',
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
                'itinerary' => [
                    [
                        'day' => 'Day 01',
                        'title' => 'Arrival in Tanzania',
                        'description' => 'Upon arrival at Kilimanjaro International Airport (JRO), you will be warmly welcomed by an Enjoyable Tours representative and transferred to your hotel in Moshi. After check-in, you will have time to relax and prepare for your Kilimanjaro adventure. In the evening, you will meet your guide for a trekking briefing and equipment check.',
                        'altitude' => '890 m (2,920 ft) – Moshi',
                        'meals' => 'Dinner',
                        'accommodation' => 'Hotel in Moshi',
                    ],
                    [
                        'day' => 'Day 02',
                        'title' => 'Machame Gate – Machame Camp',
                        'description' => 'After breakfast, you will drive from Moshi to Machame Gate for registration and final preparations. The trek begins through the lush rainforest, where you may encounter beautiful vegetation and wildlife. The trail gradually climbs toward Machame Camp.',
                        'altitude' => '1,800 m (5,905 ft) – 3,000 m (9,843 ft)',
                        'hiking_time' => '5–7 hours',
                        'distance' => 'Approximately 11 km',
                        'meals' => 'Breakfast, Lunch & Dinner',
                        'accommodation' => 'Machame Camp',
                    ],
                    [
                        'day' => 'Day 03',
                        'title' => 'Machame Camp – Shira Camp',
                        'description' => 'After breakfast, you leave the rainforest behind and continue into the moorland zone. The trail becomes steeper as you climb toward the Shira Plateau. From the plateau, you can enjoy impressive views of Kibo and the surrounding landscape.',
                        'altitude' => '3,000 m (9,843 ft) – 3,845 m (12,615 ft)',
                        'hiking_time' => '4–6 hours',
                        'distance' => 'Approximately 5 km',
                        'meals' => 'Breakfast, Lunch & Dinner',
                        'accommodation' => 'Shira Camp',
                    ],
                    [
                        'day' => 'Day 04',
                        'title' => 'Shira Camp – Lava Tower – Barranco Camp',
                        'description' => 'This is an important acclimatization day as you climb to Lava Tower before descending toward Barranco Camp. The trail crosses the alpine desert and offers dramatic views of Kilimanjaro\'s volcanic landscape. The descent helps your body adjust to the altitude before the summit attempt.',
                        'altitude' => '3,845 m (12,615 ft) – 4,630 m (15,190 ft) – 3,960 m (12,992 ft)',
                        'hiking_time' => '6–8 hours',
                        'distance' => 'Approximately 10 km',
                        'meals' => 'Breakfast, Lunch & Dinner',
                        'accommodation' => 'Barranco Camp',
                    ],
                    [
                        'day' => 'Day 05',
                        'title' => 'Barranco Camp – Karanga Camp – Barafu Camp',
                        'description' => 'After breakfast, you begin with the challenging ascent of the Barranco Wall. Once at the top, you continue across the alpine desert toward Karanga Camp before proceeding to Barafu Camp. At Barafu, you will have an early dinner and rest in preparation for the midnight summit attempt.',
                        'altitude' => '3,960 m (12,992 ft) – 4,640 m (15,223 ft)',
                        'hiking_time' => '7–9 hours',
                        'distance' => 'Approximately 9 km',
                        'meals' => 'Breakfast, Lunch & Dinner',
                        'accommodation' => 'Barafu Camp',
                    ],
                    [
                        'day' => 'Day 06',
                        'title' => 'Barafu Camp – Uhuru Peak – Mweka Camp',
                        'description' => 'You will wake around midnight and begin the summit attempt. The climb to Stella Point is steep and demanding, followed by a shorter section along the crater rim to Uhuru Peak, the highest point in Africa. After celebrating at the summit, you descend to Barafu for a short rest before continuing down to Mweka Camp.',
                        'altitude' => '4,640 m (15,223 ft) – 5,895 m (19,341 ft) – 3,100 m (10,170 ft)',
                        'hiking_time' => '12–15 hours',
                        'distance' => 'Approximately 17 km',
                        'meals' => 'Breakfast, Lunch & Dinner',
                        'accommodation' => 'Mweka Camp',
                    ],
                ],
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

    private function buildItinerary(string $routeName, int $days): array
    {
        $plan = [
            ['day' => 'Day 01', 'title' => 'Arrival & briefing', 'description' => "Arrive in Moshi/Arusha, meet your team, and receive a full briefing for the {$routeName} {$days}-day climb."],
            ['day' => 'Day 02', 'title' => 'Trek begins', 'description' => "Transfer to the gate, registration, and start trekking on the {$routeName}."],
        ];

        for ($d = 3; $d < $days; $d++) {
            $plan[] = [
                'day' => 'Day '.str_pad((string) $d, 2, '0', STR_PAD_LEFT),
                'title' => 'Acclimatization trek',
                'description' => 'Continue ascending with a paced schedule to support acclimatization.',
            ];
        }

        $plan[] = [
            'day' => 'Day '.str_pad((string) $days, 2, '0', STR_PAD_LEFT),
            'title' => 'Summit & descend',
            'description' => 'Summit attempt to Uhuru Peak, then descend to lower camp / gate and return to Moshi.',
        ];

        return $plan;
    }
}
