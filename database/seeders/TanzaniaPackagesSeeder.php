<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TanzaniaPackagesSeeder extends Seeder
{
    public function run(): void
    {
        $sort = 100;

        foreach (array_merge($this->safaris(), $this->dayTrips(), $this->zanzibar()) as $package) {
            $days = $package['duration_days'];
            $image = 'images/tours/'.$package['slug'].'.jpg';
            $package['itinerary'] = self::enrichItinerary($package);

            Tour::query()->updateOrCreate(
                ['slug' => $package['slug']],
                array_merge([
                    'location' => 'Tanzania',
                    'duration_label' => $days === 1 ? '1 Day' : $days.' Days / '.($days - 1).' Nights',
                    'guests_min' => 1,
                    'guests_max' => 8,
                    'currency' => 'USD',
                    'image' => $image,
                    'gallery' => [$image],
                    'rating' => 4.9,
                    'reviews_count' => 18,
                    'guide_type' => 'Guided',
                    'is_featured' => false,
                    'is_published' => true,
                    'sort_order' => $sort++,
                ], $package)
            );
        }
    }

    public static function enrichItinerary(array $package): array
    {
        $steps = $package['itinerary'] ?? [];
        $count = count($steps);
        $category = $package['category'] ?? '';
        $stay = $package['accommodation'] ?? null;
        $lunchIncluded = str_contains(strtolower(implode(' ', $package['included'] ?? [])), 'lunch');

        foreach ($steps as $i => $step) {
            $isFirst = $i === 0;
            $isLast = $i === $count - 1;

            if ($count === 1) {
                $step['duration'] ??= $package['duration_label'] ?? 'Full day';
                if ($lunchIncluded) {
                    $step['meals'] ??= 'Lunch';
                }
                $step['accommodation'] ??= 'Drop-off at your hotel';
            } elseif ($category === 'Safaris') {
                $step['meals'] ??= $isLast ? 'Breakfast & Lunch' : ($isFirst ? 'Lunch & Dinner' : 'Breakfast, Lunch & Dinner');
                $step['accommodation'] ??= $isLast ? 'Drop-off in Arusha / Departure' : ($stay ?: 'Safari lodge');
            } else {
                $step['meals'] ??= $isLast ? 'Breakfast' : ($isFirst ? 'Dinner' : 'Breakfast & Dinner');
                $step['accommodation'] ??= $isLast ? 'Airport transfer / Departure' : ($stay ?: 'Beach resort');
            }

            $steps[$i] = $step;
        }

        return $steps;
    }

    private function safaris(): array
    {
        $included = [
            'Park entrance & conservation fees',
            'Private 4x4 safari vehicle with pop-up roof',
            'Professional English-speaking driver-guide',
            'Accommodation as per itinerary',
            'All meals on safari & drinking water',
            'Airport transfers in Arusha / Kilimanjaro',
        ];
        $excluded = ['International flights', 'Tanzania visa', 'Travel insurance', 'Tips for guide', 'Alcoholic drinks'];

        return [
            [
                'title' => '3-Day Tarangire, Manyara & Ngorongoro Safari',
                'slug' => 'tarangire-manyara-ngorongoro-3-day-safari',
                'category' => 'Safaris',
                'location' => 'Tarangire, Tanzania',
                'duration_days' => 3,
                'guests_max' => 6,
                'price' => 980,
                'old_price' => 1150,
                'discount_badge' => '- 15% Off',
                'accommodation' => 'Safari lodge',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Jun – Oct, Jan – Feb',
                'stay_category' => 'Mid-range',
                'overview' => 'A short but rich safari through three of northern Tanzania\'s best parks: the baobab-studded elephant country of Tarangire, the tree-climbing lions and flamingos of Lake Manyara, and a full day on the floor of the Ngorongoro Crater.',
                'highlights' => ['Huge elephant herds in Tarangire', 'Tree-climbing lions of Lake Manyara', 'Big Five game drive in Ngorongoro Crater', 'Ideal before or after a Kilimanjaro climb'],
                'destinations' => [['days' => 1, 'city' => 'Tarangire'], ['days' => 1, 'city' => 'Lake Manyara'], ['days' => 1, 'city' => 'Ngorongoro']],
                'included' => $included,
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Day 01', 'title' => 'Arusha – Tarangire National Park', 'description' => 'Morning pick-up in Arusha and drive to Tarangire for a full afternoon game drive among elephants and baobabs. Overnight near Karatu.'],
                    ['day' => 'Day 02', 'title' => 'Lake Manyara National Park', 'description' => 'Game drive through the groundwater forest and along the lake shore looking for tree-climbing lions, hippos and flamingos.'],
                    ['day' => 'Day 03', 'title' => 'Ngorongoro Crater – Arusha', 'description' => 'Descend 600 m into the crater for a game drive in search of black rhino, lion and buffalo, then return to Arusha in the evening.'],
                ],
                'faqs' => [['question' => 'Is this safari private?', 'answer' => 'Yes, every safari runs in a private vehicle for your group only.']],
                'is_featured' => true,
            ],
            [
                'title' => '7-Day Great Migration Safari',
                'slug' => 'great-migration-safari-7-day',
                'category' => 'Safaris',
                'location' => 'Northern Serengeti, Tanzania',
                'duration_days' => 7,
                'guests_max' => 6,
                'price' => 2950,
                'old_price' => 3300,
                'discount_badge' => '- 11% Off',
                'accommodation' => 'Tented camps & lodges',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Jul – Oct (river crossings), Jan – Mar (calving)',
                'stay_category' => 'Deluxe',
                'overview' => 'Follow over a million wildebeest and zebra on their endless journey. This safari is timed to place you at the right part of the Serengeti for the season, from calving on the southern plains to dramatic Mara River crossings in the north.',
                'highlights' => ['Witness the Great Wildebeest Migration', 'Mara River crossings (Jul – Oct)', 'Predator action with lions, cheetahs & leopards', 'Ngorongoro Crater and Tarangire included'],
                'destinations' => [['days' => 1, 'city' => 'Tarangire'], ['days' => 4, 'city' => 'Serengeti'], ['days' => 1, 'city' => 'Ngorongoro']],
                'included' => $included,
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Day 01', 'title' => 'Arusha – Tarangire', 'description' => 'Game drive in Tarangire National Park, famous for its elephants.'],
                    ['day' => 'Day 02', 'title' => 'Tarangire – Central Serengeti', 'description' => 'Drive through the Ngorongoro highlands into the Serengeti with a game drive en route.'],
                    ['day' => 'Day 03', 'title' => 'Following the herds', 'description' => 'Drive towards the current position of the migration with full-day game viewing.'],
                    ['day' => 'Day 04', 'title' => 'Migration day', 'description' => 'A full day with the herds, watching for river crossings or calving depending on the season.'],
                    ['day' => 'Day 05', 'title' => 'Serengeti game drives', 'description' => 'Morning and afternoon drives looking for big cats on the kopjes.'],
                    ['day' => 'Day 06', 'title' => 'Serengeti – Ngorongoro', 'description' => 'Final Serengeti drive then on to the crater rim for the night.'],
                    ['day' => 'Day 07', 'title' => 'Ngorongoro Crater – Arusha', 'description' => 'Crater game drive and return to Arusha.'],
                ],
                'faqs' => [['question' => 'When can I see river crossings?', 'answer' => 'River crossings in the northern Serengeti usually happen between July and October.']],
                'is_featured' => true,
            ],
            [
                'title' => '2-Day Ngorongoro Crater Safari',
                'slug' => 'ngorongoro-crater-2-day-safari',
                'category' => 'Safaris',
                'location' => 'Ngorongoro, Tanzania',
                'duration_days' => 2,
                'guests_max' => 6,
                'price' => 620,
                'old_price' => 720,
                'discount_badge' => '- 14% Off',
                'accommodation' => 'Lodge in Karatu',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Year-round',
                'stay_category' => 'Mid-range',
                'overview' => 'Short on time? This two-day safari combines Lake Manyara with the world-famous Ngorongoro Crater, one of the best places in Africa to see the endangered black rhino.',
                'highlights' => ['Game drive on the Ngorongoro Crater floor', 'Chance to see the rare black rhino', 'Flamingos on Lake Magadi', 'Lake Manyara game drive'],
                'destinations' => [['days' => 1, 'city' => 'Lake Manyara'], ['days' => 1, 'city' => 'Ngorongoro']],
                'included' => $included,
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Day 01', 'title' => 'Arusha – Lake Manyara', 'description' => 'Drive to Lake Manyara for an afternoon game drive, overnight in Karatu.'],
                    ['day' => 'Day 02', 'title' => 'Ngorongoro Crater – Arusha', 'description' => 'Early descent into the crater for a half-day game drive and picnic lunch, then return to Arusha.'],
                ],
                'faqs' => [['question' => 'Can I see the Big Five?', 'answer' => 'The crater is one of the few places where all of the Big Five can be seen in a single day.']],
            ],
            [
                'title' => '5-Day Tanzania Lodge Safari',
                'slug' => 'tanzania-lodge-safari-5-day',
                'category' => 'Safaris',
                'location' => 'Serengeti, Tanzania',
                'duration_days' => 5,
                'guests_max' => 6,
                'price' => 2450,
                'old_price' => 2800,
                'discount_badge' => '- 12% Off',
                'accommodation' => 'Luxury lodges & tented camps',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Jun – Oct, Dec – Mar',
                'stay_category' => 'Luxury',
                'overview' => 'A comfortable safari staying in hand-picked lodges and luxury tented camps with sweeping savanna views. Ideal for honeymooners, families and anyone who wants wildlife by day and comfort by night.',
                'highlights' => ['Luxury lodges with savanna views', 'Two full days in the Serengeti', 'Ngorongoro Crater game drive', 'Sundowners in the bush'],
                'destinations' => [['days' => 1, 'city' => 'Lake Manyara'], ['days' => 3, 'city' => 'Serengeti'], ['days' => 1, 'city' => 'Ngorongoro']],
                'included' => $included,
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Day 01', 'title' => 'Arusha – Lake Manyara', 'description' => 'Afternoon game drive in Lake Manyara National Park.'],
                    ['day' => 'Day 02', 'title' => 'Into the Serengeti', 'description' => 'Drive across the Ngorongoro highlands into the Serengeti with game viewing on the way.'],
                    ['day' => 'Day 03', 'title' => 'Full day Serengeti', 'description' => 'Full-day game drive with picnic lunch and an evening sundowner.'],
                    ['day' => 'Day 04', 'title' => 'Serengeti – Ngorongoro', 'description' => 'Morning game drive then transfer to the crater rim.'],
                    ['day' => 'Day 05', 'title' => 'Ngorongoro Crater – Arusha', 'description' => 'Crater game drive and return to Arusha.'],
                ],
                'faqs' => [['question' => 'Is this suitable for honeymooners?', 'answer' => 'Yes. We can add honeymoon touches such as private dinners on request.']],
            ],
            [
                'title' => '4-Day Tarangire & Serengeti Camping Safari',
                'slug' => 'tarangire-serengeti-camping-safari-4-day',
                'category' => 'Safaris',
                'location' => 'Serengeti, Tanzania',
                'duration_days' => 4,
                'guests_max' => 7,
                'price' => 1150,
                'old_price' => 1300,
                'discount_badge' => '- 12% Off',
                'accommodation' => 'Public campsites',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Jun – Oct',
                'stay_category' => 'Budget camping',
                'overview' => 'A great-value camping safari for adventurous travellers. Fall asleep to the sounds of the bush in the heart of the Serengeti, with a private cook preparing fresh meals around the campfire.',
                'highlights' => ['Camp inside the Serengeti', 'Private safari cook', 'Elephants of Tarangire', 'Best value safari option'],
                'destinations' => [['days' => 1, 'city' => 'Tarangire'], ['days' => 2, 'city' => 'Serengeti'], ['days' => 1, 'city' => 'Ngorongoro']],
                'included' => array_merge($included, ['Camping equipment & tents', 'Private safari cook']),
                'excluded' => array_merge($excluded, ['Sleeping bag']),
                'itinerary' => [
                    ['day' => 'Day 01', 'title' => 'Arusha – Tarangire', 'description' => 'Game drive in Tarangire, overnight at a campsite near Mto wa Mbu.'],
                    ['day' => 'Day 02', 'title' => 'Into the Serengeti', 'description' => 'Drive to the Serengeti with game drive en route, overnight at a Serengeti campsite.'],
                    ['day' => 'Day 03', 'title' => 'Serengeti – Ngorongoro rim', 'description' => 'Morning game drive then drive to the crater rim campsite.'],
                    ['day' => 'Day 04', 'title' => 'Ngorongoro Crater – Arusha', 'description' => 'Crater game drive and return to Arusha.'],
                ],
                'faqs' => [['question' => 'Are the campsites safe?', 'answer' => 'Yes. We use official park campsites with rangers, toilets and shower facilities.']],
            ],
        ];
    }

    private function dayTrips(): array
    {
        $included = ['Hotel pick-up and drop-off', 'Professional local guide', 'Entrance fees', 'Lunch & drinking water'];
        $excluded = ['Tips', 'Personal expenses', 'Drinks other than water'];

        return [
            [
                'title' => 'Materuni Waterfalls & Coffee Tour',
                'slug' => 'materuni-waterfalls-coffee-tour',
                'category' => 'Day Trips',
                'location' => 'Moshi, Tanzania',
                'duration_days' => 1,
                'guests_max' => 10,
                'price' => 95,
                'old_price' => 120,
                'discount_badge' => '- 20% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Moshi',
                'arrival_city' => 'Moshi',
                'best_season' => 'Year-round',
                'stay_category' => 'Day tour',
                'overview' => 'Hike through banana and coffee farms on the slopes of Kilimanjaro to the 80-metre Materuni waterfall, then learn to roast, grind and brew coffee the traditional Chagga way.',
                'highlights' => ['80 m Materuni waterfall', 'Hands-on Chagga coffee experience', 'Village walk with local guide', 'Traditional lunch'],
                'destinations' => [['days' => 1, 'city' => 'Moshi'], ['days' => 1, 'city' => 'Materuni Village'], ['days' => 1, 'city' => 'Materuni Falls']],
                'included' => $included,
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Waterfall hike', 'description' => 'Drive to Materuni village and hike about 45 minutes to the waterfall for a swim.'],
                    ['day' => 'Afternoon', 'title' => 'Coffee tour', 'description' => 'Traditional lunch then a hands-on coffee experience before returning to Moshi.'],
                ],
                'faqs' => [['question' => 'How difficult is the hike?', 'answer' => 'The hike is easy to moderate and suitable for most fitness levels.']],
                'is_featured' => true,
            ],
            [
                'title' => 'Chemka Hot Springs Day Trip',
                'slug' => 'chemka-hot-springs-day-trip',
                'category' => 'Day Trips',
                'location' => 'Moshi, Tanzania',
                'duration_days' => 1,
                'guests_max' => 10,
                'price' => 85,
                'old_price' => 110,
                'discount_badge' => '- 23% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Moshi / Arusha',
                'arrival_city' => 'Moshi / Arusha',
                'best_season' => 'Year-round',
                'stay_category' => 'Day tour',
                'overview' => 'Relax in the crystal-clear, naturally warm turquoise pool of Chemka (Kikuletwa) hot springs, shaded by giant fig trees. A perfect way to rest your legs after a Kilimanjaro climb.',
                'highlights' => ['Swim in natural warm springs', 'Rope swing into turquoise water', 'Picnic lunch under fig trees', 'Great recovery day after a climb'],
                'destinations' => [['days' => 1, 'city' => 'Moshi'], ['days' => 1, 'city' => 'Chemka Hot Springs']],
                'included' => $included,
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Drive to the springs', 'description' => 'Pick-up from your hotel and drive through sugar cane plantations to Chemka.'],
                    ['day' => 'Afternoon', 'title' => 'Swim & relax', 'description' => 'Swim, relax and enjoy a picnic lunch before returning to your hotel.'],
                ],
                'faqs' => [['question' => 'What should I bring?', 'answer' => 'Swimwear, a towel, sunscreen and water shoes.']],
            ],
            [
                'title' => 'Tarangire National Park Day Safari',
                'slug' => 'tarangire-day-safari',
                'category' => 'Day Trips',
                'location' => 'Tarangire, Tanzania',
                'duration_days' => 1,
                'guests_max' => 6,
                'price' => 290,
                'old_price' => 340,
                'discount_badge' => '- 15% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Jun – Oct',
                'stay_category' => 'Day tour',
                'overview' => 'Spend a full day on safari in Tarangire National Park, home to the largest elephant herds in northern Tanzania, ancient baobab trees and excellent birdlife.',
                'highlights' => ['Large elephant herds', 'Ancient baobab trees', 'Lions, giraffes & zebras', 'Private safari vehicle'],
                'destinations' => [['days' => 1, 'city' => 'Arusha'], ['days' => 1, 'city' => 'Tarangire']],
                'included' => array_merge($included, ['Private 4x4 safari vehicle']),
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Arusha – Tarangire', 'description' => 'Early departure from Arusha and morning game drive.'],
                    ['day' => 'Afternoon', 'title' => 'Game drive & return', 'description' => 'Picnic lunch, afternoon game drive and return to Arusha by evening.'],
                ],
                'faqs' => [['question' => 'How long is the drive?', 'answer' => 'Tarangire is about a 2-hour drive from Arusha.']],
            ],
            [
                'title' => 'Ngorongoro Crater Day Trip',
                'slug' => 'ngorongoro-crater-day-trip',
                'category' => 'Day Trips',
                'location' => 'Ngorongoro, Tanzania',
                'duration_days' => 1,
                'guests_max' => 6,
                'price' => 380,
                'old_price' => 440,
                'discount_badge' => '- 14% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Arusha / Karatu',
                'arrival_city' => 'Arusha / Karatu',
                'best_season' => 'Year-round',
                'stay_category' => 'Day tour',
                'overview' => 'Drive down into the Ngorongoro Crater, a UNESCO World Heritage Site and the world\'s largest intact volcanic caldera, for a day with lions, buffalo, hippos and the rare black rhino.',
                'highlights' => ['UNESCO World Heritage Site', 'Black rhino and lion sightings', 'Picnic by the hippo pool', 'Stunning crater-rim views'],
                'destinations' => [['days' => 1, 'city' => 'Arusha'], ['days' => 1, 'city' => 'Ngorongoro Crater']],
                'included' => array_merge($included, ['Private 4x4 safari vehicle', 'Crater service fee']),
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Descend into the crater', 'description' => 'Early departure and descent to the crater floor for a game drive.'],
                    ['day' => 'Afternoon', 'title' => 'Game drive & return', 'description' => 'Picnic lunch at the hippo pool, more game viewing and return.'],
                ],
                'faqs' => [['question' => 'Is it a long day?', 'answer' => 'Yes, it is a full day of around 11–12 hours from Arusha.']],
            ],
            [
                'title' => 'Lake Duluti Canoeing & Nature Walk',
                'slug' => 'lake-duluti-canoeing',
                'category' => 'Day Trips',
                'location' => 'Arusha, Tanzania',
                'duration_days' => 1,
                'guests_max' => 10,
                'price' => 75,
                'old_price' => 95,
                'discount_badge' => '- 21% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Year-round',
                'stay_category' => 'Day tour',
                'overview' => 'Paddle across the calm waters of Lake Duluti, a forest-fringed crater lake with views of Mount Meru, then take a guided nature walk to spot monkeys, monitor lizards and over 100 bird species.',
                'highlights' => ['Canoeing on a crater lake', 'Mount Meru views', 'Guided forest nature walk', 'Great for families'],
                'destinations' => [['days' => 1, 'city' => 'Arusha'], ['days' => 1, 'city' => 'Lake Duluti']],
                'included' => array_merge($included, ['Canoe & life jackets']),
                'excluded' => $excluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Canoeing', 'description' => 'Short drive from Arusha and guided canoe trip around the lake.'],
                    ['day' => 'Midday', 'title' => 'Nature walk & lunch', 'description' => 'Forest walk around the crater rim followed by lunch and return.'],
                ],
                'faqs' => [['question' => 'Is canoeing experience needed?', 'answer' => 'No. Our guide gives a short safety briefing and paddles with beginners.']],
            ],
        ];
    }

    private function zanzibar(): array
    {
        $tourIncluded = ['Hotel pick-up and drop-off', 'Professional local guide', 'Entrance & activity fees', 'Lunch & drinking water'];
        $tourExcluded = ['Tips', 'Personal expenses', 'Alcoholic drinks'];

        return [
            [
                'title' => 'Stone Town & Spice Farm Tour',
                'slug' => 'stone-town-spice-farm-tour',
                'category' => 'Zanzibar',
                'location' => 'Stone Town, Zanzibar',
                'duration_days' => 1,
                'guests_max' => 12,
                'price' => 65,
                'old_price' => 85,
                'discount_badge' => '- 24% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Zanzibar hotels',
                'arrival_city' => 'Zanzibar hotels',
                'best_season' => 'Year-round',
                'stay_category' => 'Day tour',
                'overview' => 'Explore the winding alleys, carved doors, markets and palaces of UNESCO-listed Stone Town, then visit a spice farm to taste and smell cloves, cinnamon, vanilla and tropical fruits.',
                'highlights' => ['UNESCO-listed Stone Town', 'Famous carved Zanzibari doors', 'Darajani market & House of Wonders', 'Spice tasting at a local farm'],
                'destinations' => [['days' => 1, 'city' => 'Stone Town'], ['days' => 1, 'city' => 'Spice Farm']],
                'included' => $tourIncluded,
                'excluded' => $tourExcluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Stone Town walking tour', 'description' => 'Guided walk through the old town, markets, Old Fort and former slave market.'],
                    ['day' => 'Afternoon', 'title' => 'Spice farm', 'description' => 'Spice tour with tastings and a traditional Swahili lunch.'],
                ],
                'faqs' => [['question' => 'Is there a dress code?', 'answer' => 'Shoulders and knees should be covered in Stone Town out of respect for local culture.']],
                'is_featured' => true,
            ],
            [
                'title' => 'Mnemba Atoll Snorkelling & Dolphin Tour',
                'slug' => 'mnemba-snorkelling-dolphin-tour',
                'category' => 'Zanzibar',
                'location' => 'Mnemba Atoll, Zanzibar',
                'duration_days' => 1,
                'guests_max' => 12,
                'price' => 85,
                'old_price' => 110,
                'discount_badge' => '- 23% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Zanzibar hotels',
                'arrival_city' => 'Zanzibar hotels',
                'best_season' => 'Oct – Mar',
                'stay_category' => 'Day tour',
                'overview' => 'Sail out to the protected Mnemba Atoll to snorkel over vibrant coral gardens with turtles and tropical fish, with a good chance of spotting wild dolphins along the way.',
                'highlights' => ['Snorkelling on coral reefs', 'Sea turtles & tropical fish', 'Wild dolphin spotting', 'Beach lunch at Matemwe'],
                'destinations' => [['days' => 1, 'city' => 'Matemwe'], ['days' => 1, 'city' => 'Mnemba Atoll']],
                'included' => array_merge($tourIncluded, ['Boat trip', 'Snorkelling gear']),
                'excluded' => $tourExcluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Boat to Mnemba', 'description' => 'Depart from Matemwe beach by boat, look for dolphins and snorkel the reef.'],
                    ['day' => 'Afternoon', 'title' => 'Beach lunch', 'description' => 'Seafood lunch on the beach before returning to your hotel.'],
                ],
                'faqs' => [['question' => 'Do I need to swim well?', 'answer' => 'Basic swimming ability is recommended. Life jackets are available.']],
            ],
            [
                'title' => 'Prison Island & Nakupenda Sandbank',
                'slug' => 'prison-island-nakupenda-sandbank',
                'category' => 'Zanzibar',
                'location' => 'Stone Town, Zanzibar',
                'duration_days' => 1,
                'guests_max' => 12,
                'price' => 70,
                'old_price' => 90,
                'discount_badge' => '- 22% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Stone Town',
                'arrival_city' => 'Stone Town',
                'best_season' => 'Year-round',
                'stay_category' => 'Day tour',
                'overview' => 'Take a boat to historic Prison Island to meet giant Aldabra tortoises, some over 150 years old, then relax and swim on the pure white Nakupenda sandbank with a fresh seafood lunch.',
                'highlights' => ['Giant Aldabra tortoises', 'Historic Prison Island ruins', 'White Nakupenda sandbank', 'Seafood barbecue lunch'],
                'destinations' => [['days' => 1, 'city' => 'Stone Town'], ['days' => 1, 'city' => 'Prison Island'], ['days' => 1, 'city' => 'Nakupenda']],
                'included' => array_merge($tourIncluded, ['Boat trip', 'Snorkelling gear']),
                'excluded' => $tourExcluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Prison Island', 'description' => 'Boat from Stone Town to Prison Island to see the tortoises and ruins.'],
                    ['day' => 'Afternoon', 'title' => 'Nakupenda sandbank', 'description' => 'Swim, snorkel and enjoy a seafood lunch on the sandbank.'],
                ],
                'faqs' => [['question' => 'Is the island entrance fee included?', 'answer' => 'Yes, all entrance fees are included.']],
            ],
            [
                'title' => 'Safari Blue Dhow Excursion',
                'slug' => 'safari-blue-dhow-excursion',
                'category' => 'Zanzibar',
                'location' => 'Menai Bay, Zanzibar',
                'duration_days' => 1,
                'guests_max' => 15,
                'price' => 95,
                'old_price' => 120,
                'discount_badge' => '- 21% Off',
                'accommodation' => 'Not required',
                'departure_city' => 'Fumba',
                'arrival_city' => 'Fumba',
                'best_season' => 'Year-round',
                'stay_category' => 'Day tour',
                'overview' => 'Sail a traditional wooden dhow through the Menai Bay Conservation Area, snorkel on sandbanks, swim in a mangrove lagoon and feast on a grilled seafood lunch on Kwale Island.',
                'highlights' => ['Traditional dhow sailing', 'Sandbank snorkelling', 'Mangrove lagoon swim', 'Seafood feast on Kwale Island'],
                'destinations' => [['days' => 1, 'city' => 'Fumba'], ['days' => 1, 'city' => 'Kwale Island'], ['days' => 1, 'city' => 'Menai Bay']],
                'included' => array_merge($tourIncluded, ['Dhow cruise', 'Snorkelling gear', 'Fresh fruit & soft drinks']),
                'excluded' => $tourExcluded,
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Sail from Fumba', 'description' => 'Board the dhow and sail to a sandbank for snorkelling.'],
                    ['day' => 'Afternoon', 'title' => 'Kwale Island', 'description' => 'Seafood lunch, lagoon swim and sail back at sunset.'],
                ],
                'faqs' => [['question' => 'Is it suitable for children?', 'answer' => 'Yes, it is a family-friendly trip with life jackets for all ages.']],
            ],
            [
                'title' => '7-Day Zanzibar Beach Holiday',
                'slug' => 'zanzibar-beach-holiday-7-day',
                'category' => 'Zanzibar',
                'location' => 'Paje, Zanzibar',
                'duration_days' => 7,
                'guests_max' => 4,
                'price' => 1450,
                'old_price' => 1700,
                'discount_badge' => '- 15% Off',
                'accommodation' => 'Beach resort & villa',
                'departure_city' => 'Zanzibar Airport',
                'arrival_city' => 'Zanzibar Airport',
                'best_season' => 'Jun – Oct, Dec – Feb',
                'stay_category' => 'Beach Deluxe',
                'overview' => 'A relaxed week on the Spice Island: two nights of culture in Stone Town followed by beach days on the turquoise lagoons of Paje and the sunsets of Nungwi. The perfect way to end a safari or climb.',
                'highlights' => ['Stone Town heritage stay', 'Beach villa in Paje', 'Sunsets in Nungwi', 'Spice tour and snorkelling included'],
                'destinations' => [['days' => 2, 'city' => 'Stone Town'], ['days' => 3, 'city' => 'Paje'], ['days' => 2, 'city' => 'Nungwi']],
                'included' => ['Airport & hotel transfers', '6 nights accommodation with breakfast', 'Stone Town & spice tour', 'Mnemba snorkelling trip'],
                'excluded' => ['Flights', 'Lunch & dinner', 'Travel insurance', 'Tips'],
                'itinerary' => [
                    ['day' => 'Day 01', 'title' => 'Arrive Stone Town', 'description' => 'Airport pick-up and check-in at a heritage hotel.'],
                    ['day' => 'Day 02', 'title' => 'Stone Town & spice tour', 'description' => 'Guided walking tour and spice farm visit.'],
                    ['day' => 'Day 03', 'title' => 'Transfer to Paje', 'description' => 'Drive to the east coast and settle into your beach villa.'],
                    ['day' => 'Day 04', 'title' => 'Mnemba snorkelling', 'description' => 'Snorkelling trip to Mnemba Atoll.'],
                    ['day' => 'Day 05', 'title' => 'Beach day', 'description' => 'Relax or try kitesurfing on the Paje lagoon.'],
                    ['day' => 'Day 06', 'title' => 'Nungwi sunsets', 'description' => 'Transfer to Nungwi in the north for swimming and sunset dhow views.'],
                    ['day' => 'Day 07', 'title' => 'Departure', 'description' => 'Transfer to Zanzibar airport.'],
                ],
                'faqs' => [['question' => 'Can this be combined with a safari?', 'answer' => 'Yes. Most guests add this after a safari or Kilimanjaro climb with a short flight from Arusha.']],
            ],
        ];
    }
}
