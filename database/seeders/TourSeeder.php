<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    public function run(): void
    {
        $tours = [
            [
                'title' => 'Serengeti Classic Safari Adventure',
                'slug' => 'serengeti-classic-safari',
                'category' => 'Safaris',
                'location' => 'Serengeti, Tanzania',
                'duration_label' => '6D/5N',
                'duration_days' => 6,
                'guests_min' => 1,
                'guests_max' => 6,
                'price' => 1850,
                'old_price' => 2200,
                'discount_badge' => '- 16% Off',
                'image' => 'turiehtml-10/turie/assets/img/tour/01.jpg',
                'rating' => 5.0,
                'reviews_count' => 24,
                'accommodation' => 'Safari Lodge & Tented Camp',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Jun – Oct',
                'guide_type' => 'Guided',
                'stay_category' => 'Deluxe',
                'overview' => 'Explore the Serengeti plains with game drives focused on the Big Five, endless savannah views, and authentic Tanzania wildlife experiences.',
                'gallery' => [
                    'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb.jpg',
                    'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-2.jpg',
                    'turiehtml-10/turie/assets/img/tour/details-2/slider/thumb-3.jpg',
                ],
                'destinations' => [
                    ['days' => 2, 'city' => 'Arusha'],
                    ['days' => 3, 'city' => 'Serengeti'],
                    ['days' => 1, 'city' => 'Ngorongoro'],
                ],
                'included' => ['Park fees', 'Safari vehicle & driver-guide', 'Lodge / camp stay', 'Breakfast, lunch & dinner on safari'],
                'excluded' => ['International flights', 'Travel insurance', 'Alcoholic drinks'],
                'places' => [
                    ['name' => 'Serengeti', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb.jpg'],
                    ['name' => 'Ngorongoro', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb-2.jpg'],
                ],
                'itinerary' => [
                    ['day' => 'Day 01', 'title' => 'Arrive Arusha', 'description' => 'Meet and greet in Arusha, briefing, overnight at hotel.'],
                    ['day' => 'Day 02', 'title' => 'Serengeti game drive', 'description' => 'Transfer to Serengeti with afternoon game drive.'],
                    ['day' => 'Day 03', 'title' => 'Full day Serengeti', 'description' => 'Full day wildlife viewing across the plains.'],
                    ['day' => 'Day 04', 'title' => 'Ngorongoro crater', 'description' => 'Descend into the crater for wildlife and scenery.'],
                ],
                'faqs' => [
                    ['question' => 'Is this a private safari?', 'answer' => 'Private and small-group options are available on request.'],
                    ['question' => 'What is the best time to go?', 'answer' => 'Dry season June to October is ideal for wildlife viewing.'],
                ],
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Arusha National Park Day Trip',
                'slug' => 'arusha-national-park-day-trip',
                'category' => 'Day Trips',
                'location' => 'Arusha, Tanzania',
                'duration_label' => '1 day',
                'duration_days' => 1,
                'guests_min' => 1,
                'guests_max' => 8,
                'price' => 180,
                'old_price' => 220,
                'discount_badge' => '- 18% Off',
                'image' => 'turiehtml-10/turie/assets/img/tour/03.jpg',
                'rating' => 4.8,
                'reviews_count' => 31,
                'accommodation' => 'Not required',
                'departure_city' => 'Arusha',
                'arrival_city' => 'Arusha',
                'best_season' => 'Year-round',
                'guide_type' => 'Guided',
                'stay_category' => 'Day tour',
                'overview' => 'A full-day escape to Arusha National Park with canoeing options, walking safari, and views of Mount Meru.',
                'destinations' => [
                    ['days' => 1, 'city' => 'Arusha National Park'],
                ],
                'included' => ['Park fees', 'Transport', 'Guide', 'Picnic lunch'],
                'excluded' => ['Personal expenses', 'Tips'],
                'itinerary' => [
                    ['day' => 'Morning', 'title' => 'Park entry', 'description' => 'Game drive and scenic viewpoints.'],
                    ['day' => 'Afternoon', 'title' => 'Activities', 'description' => 'Optional canoe or walking safari before return to Arusha.'],
                ],
                'faqs' => [
                    ['question' => 'Is lunch included?', 'answer' => 'Yes, a picnic lunch is included.'],
                ],
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Zanzibar Beach & Stone Town Escape',
                'slug' => 'zanzibar-beach-stone-town',
                'category' => 'Zanzibar',
                'location' => 'Zanzibar, Tanzania',
                'duration_label' => '4D/3N',
                'duration_days' => 4,
                'guests_min' => 1,
                'guests_max' => 4,
                'price' => 790,
                'old_price' => 950,
                'discount_badge' => '- 17% Off',
                'image' => 'turiehtml-10/turie/assets/img/tour/04.jpg',
                'rating' => 4.9,
                'reviews_count' => 27,
                'accommodation' => 'Beach resort',
                'departure_city' => 'Zanzibar Airport',
                'arrival_city' => 'Zanzibar Airport',
                'best_season' => 'Jun – Oct, Dec – Feb',
                'guide_type' => 'Guided city tour',
                'stay_category' => 'Beach Deluxe',
                'overview' => 'Combine Stone Town culture with white-sand beaches, spice tour, and relaxed island evenings in Zanzibar.',
                'destinations' => [
                    ['days' => 1, 'city' => 'Stone Town'],
                    ['days' => 3, 'city' => 'Nungwi / Kendwa'],
                ],
                'included' => ['Airport transfers', 'Resort stay', 'Stone Town tour', 'Breakfast daily'],
                'excluded' => ['Flights', 'Lunch & dinner', 'Water sports'],
                'places' => [
                    ['name' => 'Stone Town', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb-2.jpg'],
                    ['name' => 'Nungwi Beach', 'image' => 'turiehtml-10/turie/assets/img/tour/details/plase/thumb-3.jpg'],
                ],
                'itinerary' => [
                    ['day' => 'Day 01', 'title' => 'Stone Town', 'description' => 'Arrival and guided historical walking tour.'],
                    ['day' => 'Day 02', 'title' => 'Beach transfer', 'description' => 'Transfer to the north coast for beach time.'],
                    ['day' => 'Day 04', 'title' => 'Departure', 'description' => 'Transfer to the airport.'],
                ],
                'faqs' => [
                    ['question' => 'Are flights included?', 'answer' => 'Flights are not included; we can arrange them on request.'],
                ],
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($tours as $tour) {
            Tour::query()->updateOrCreate(
                ['slug' => $tour['slug']],
                $tour
            );
        }
    }
}
