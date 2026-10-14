<?php

namespace App\Support;

use App\Models\Tour;
use Illuminate\Support\Collection;

class PlanningData
{
    public const FEE_YEAR = '2025/26';

    public static function tools(): array
    {
        return [
            'hub' => ['label' => 'All planners', 'url' => route('plan.index'), 'icon' => 'fa-compass', 'text' => 'Shape a Tanzania trip before you enquire.'],
            'best-time' => ['label' => 'Best time to visit', 'url' => route('plan.best-time'), 'icon' => 'fa-calendar-days', 'image' => 'images/home/hero-safari.jpg', 'text' => 'Months and seasons'],
            'budget' => ['label' => 'Safari budget', 'url' => route('plan.budget'), 'icon' => 'fa-calculator', 'image' => 'images/home/offer-safari.jpg', 'text' => 'Fees and lodges'],
            'build' => ['label' => 'Build a safari', 'url' => route('plan.build'), 'icon' => 'fa-route', 'image' => 'images/planning/serengeti.jpg', 'text' => 'Days, herds, and a range'],
            'kilimanjaro' => ['label' => 'Kilimanjaro routes', 'url' => route('plan.kilimanjaro'), 'icon' => 'fa-mountain', 'image' => 'images/categories/trekking.jpg', 'text' => '6 climbing routes'],
            'migration' => ['label' => 'Migration calendar', 'url' => route('plan.migration'), 'icon' => 'fa-paw', 'image' => 'images/tours/great-migration-safari-7-day.jpg', 'text' => 'Herds by month'],
            'packing' => ['label' => 'Packing list', 'url' => route('plan.packing'), 'icon' => 'fa-suitcase-rolling', 'image' => 'images/home/about-1.jpg', 'text' => 'What to bring'],
            'parks' => ['label' => 'Park explorer', 'url' => route('parks.index'), 'icon' => 'fa-map-location-dot', 'image' => 'images/categories/safaris.jpg', 'text' => '5 national parks'],
        ];
    }

    public static function whatsapp(string $text): string
    {
        $digits = preg_replace('/\D+/', '', (string) config('app.contact_phone')) ?: '255613963895';

        return 'https://wa.me/'.$digits.'?text='.rawurlencode($text);
    }

    public static function money(float $amount): string
    {
        return '$'.number_format($amount, 0);
    }

    public static function toursMatching(array $needles, ?string $category = null, int $limit = 3): Collection
    {
        $needles = array_values(array_filter($needles));

        return Tour::query()
            ->published()
            ->when($category, fn ($query) => $query->where('category', $category))
            ->when($needles, function ($query) use ($needles) {
                $query->where(function ($inner) use ($needles) {
                    foreach ($needles as $needle) {
                        $inner->orWhere('location', 'like', '%'.$needle.'%')
                            ->orWhere('title', 'like', '%'.$needle.'%');
                    }
                });
            })
            ->orderBy('sort_order')
            ->orderBy('title')
            ->limit($limit)
            ->get();
    }

    public static function tourBySlug(string $slug): ?Tour
    {
        return Tour::query()->published()->where('slug', $slug)->first();
    }

    public static function bestTimeParks(): array
    {
        return [
            'serengeti' => self::parkMonths('Serengeti', ['migration', 'big-five', 'birds'], 'Safaris', ['Serengeti'], [
                1 => [2, 'Calving on the southern short-grass plains around Ndutu.'],
                2 => [2, 'Calving continues, with very active predators.'],
                3 => [1, 'Herds are still south as the long rains begin.'],
                4 => [1, 'Green season. Fewer vehicles and dramatic skies.'],
                5 => [1, 'Western corridor starts to fill as the rains ease.'],
                6 => [2, 'Grumeti river crossings often begin.'],
                7 => [2, 'Herds move through the west toward the north.'],
                8 => [2, 'Peak Mara river crossings in the northern Serengeti.'],
                9 => [2, 'Northern herds and excellent general game viewing.'],
                10 => [2, 'Still strong in the north before the herds turn.'],
                11 => [1, 'Short rains. Herds drift back through the east and centre.'],
                12 => [2, 'Herds return to the southern plains.'],
            ], 'The Serengeti works in every month. Calving is January to March in the south. River crossings are most often June to October in the west and north.'),
            'ngorongoro' => self::parkMonths('Ngorongoro', ['big-five', 'birds'], 'Safaris', ['Ngorongoro'], [
                1 => [2, 'Clear views into the crater and easy wildlife watching.'],
                2 => [2, 'Dry and busy. The crater floor is at its most open.'],
                3 => [1, 'Rains begin. The crater is quieter and very green.'],
                4 => [1, 'Long rains. Tracks can be soft, game stays resident.'],
                5 => [1, 'Lush grazing. Fewer vehicles on the crater floor.'],
                6 => [2, 'Dry season begins. Strong Big Five days.'],
                7 => [2, 'Excellent visibility and reliable wildlife.'],
                8 => [2, 'Peak crater season.'],
                9 => [2, 'Dry, clear, and very good for photography.'],
                10 => [2, 'Still excellent before the short rains.'],
                11 => [1, 'Short rains. Green walls and fewer visitors.'],
                12 => [2, 'A fine month between the rains.'],
            ], 'Ngorongoro wildlife is resident, so the crater is worth visiting all year. June to October and January to February are the clearest.'),
            'tarangire' => self::parkMonths('Tarangire', ['big-five', 'birds'], 'Safaris', ['Tarangire'], [
                1 => [1, 'Animals spread out after the short rains.'],
                2 => [1, 'Good elephants, with wildlife a little more dispersed.'],
                3 => [1, 'Green and quiet as the long rains approach.'],
                4 => [0, 'Long rains. Some camps close and roads get heavy.'],
                5 => [1, 'Rains easing. Birds are excellent.'],
                6 => [2, 'Dry season herds gather on the Tarangire River.'],
                7 => [2, 'Peak elephant months begin.'],
                8 => [2, 'Large herds stay close to the river.'],
                9 => [2, 'One of the best months for elephants and baobabs.'],
                10 => [2, 'Dry, busy, and very reliable for game.'],
                11 => [1, 'Short rains arrive and herds start to scatter.'],
                12 => [1, 'Pleasant, with wildlife still reasonably concentrated.'],
            ], 'Visit Tarangire from June to October if elephants along the river are the goal. Birding is strong from November to May.'),
            'manyara' => self::parkMonths('Lake Manyara', ['birds', 'big-five'], 'Safaris', ['Manyara'], [
                1 => [2, 'Flamingos and other waterbirds are often on the lake.'],
                2 => [2, 'Excellent birding and forest walks.'],
                3 => [1, 'Rains begin. The groundwater forest is lush.'],
                4 => [1, 'Quiet and green. A good add-on day, not a peak safari month.'],
                5 => [1, 'Birds remain the highlight.'],
                6 => [2, 'Dry season. Easy game viewing under the rift wall.'],
                7 => [2, 'Clear days and reliable general wildlife.'],
                8 => [2, 'Strong month to pair with Ngorongoro.'],
                9 => [2, 'Dry and photographic.'],
                10 => [2, 'Still excellent before the short rains.'],
                11 => [1, 'Short rains. Fewer visitors.'],
                12 => [2, 'A rewarding day trip between the rain seasons.'],
            ], 'Lake Manyara suits a day or a night. June to October is best for general game. The lake can be outstanding for birds early in the year.'),
            'nyerere' => self::parkMonths('Nyerere', ['big-five', 'walking'], 'Safaris', ['Nyerere', 'Selous'], [
                1 => [1, 'Green season. Boat safaris on the Rufiji are the highlight.'],
                2 => [1, 'Lush and quiet, with good birding.'],
                3 => [1, 'Rains building. Walking is still possible between storms.'],
                4 => [0, 'Long rains. Many camps pause.'],
                5 => [0, 'The wettest stretch. Better to wait for June.'],
                6 => [2, 'Dry season opens. Walking and boating resume in earnest.'],
                7 => [2, 'Excellent all-round safari month.'],
                8 => [2, 'Wildlife concentrates along the river.'],
                9 => [2, 'Prime walking-safari conditions.'],
                10 => [2, 'Hot, dry, and very good for game.'],
                11 => [1, 'Short rains. Still workable early in the month.'],
                12 => [1, 'Mixed weather, with boat safaris still rewarding.'],
            ], 'Nyerere, in the former Selous, is at its best from June to October for walking, boating, and game drives.'),
            'kilimanjaro' => self::parkMonths('Kilimanjaro', ['trekking'], 'Trekking', ['Kilimanjaro', 'Machame', 'Lemosho'], [
                1 => [2, 'Clear summit windows and cold, dry nights.'],
                2 => [2, 'One of the best climbing months.'],
                3 => [1, 'Changing weather as the long rains approach.'],
                4 => [0, 'Long rains. Trails are wet and summit days are less reliable.'],
                5 => [0, 'Still wet. Only for climbers who accept the conditions.'],
                6 => [1, 'Rains ease. Trails are quieter than the high season.'],
                7 => [2, 'Dry season. Busy and generally clear.'],
                8 => [2, 'Peak climbing month.'],
                9 => [2, 'Clear and a little quieter than August.'],
                10 => [2, 'Excellent conditions before the short rains.'],
                11 => [1, 'Short rains. Some clear days between showers.'],
                12 => [2, 'Dry again, and a fine month to climb.'],
            ], 'The driest climbing months are January, February, and July to October. A longer route matters more than chasing a perfect week.'),
            'zanzibar' => self::parkMonths('Zanzibar', ['beach'], 'Zanzibar', ['Zanzibar'], [
                1 => [2, 'Hot, dry, and ideal for the beach.'],
                2 => [2, 'Excellent swimming and dhow weather.'],
                3 => [1, 'Warm, with a few more showers.'],
                4 => [1, 'Long rains. Lush, with lower room rates.'],
                5 => [1, 'Rains easing. The island is quiet.'],
                6 => [2, 'Dry season returns. A good month after a safari.'],
                7 => [2, 'Sunny and breezy.'],
                8 => [2, 'Peak beach month, paired with the northern safari season.'],
                9 => [2, 'Still excellent, with warm seas.'],
                10 => [2, 'One of the best months on the coast.'],
                11 => [1, 'Short rains. Brief storms and plenty of sun between them.'],
                12 => [2, 'Festive, dry, and busy.'],
            ], 'Zanzibar is a strong finish to a safari from June to October, and again from December to February.'),
        ];
    }

    public static function bestTimeInterests(): array
    {
        return [
            'migration' => 'Great migration',
            'big-five' => 'Big Five',
            'birds' => 'Birds',
            'walking' => 'Walking safari',
            'beach' => 'Beach',
            'trekking' => 'Kilimanjaro trek',
        ];
    }

    public static function bestTimeBudgets(): array
    {
        return [
            'value' => 'Value',
            'mid' => 'Mid-range',
            'luxury' => 'Luxury',
        ];
    }

    public static function bestTime(array $input): array
    {
        $parks = self::bestTimeParks();
        $interests = self::bestTimeInterests();
        $budgets = self::bestTimeBudgets();
        $parkKey = array_key_exists($input['park'] ?? '', $parks) ? $input['park'] : 'serengeti';
        $interest = array_key_exists($input['interest'] ?? '', $interests) ? $input['interest'] : 'big-five';
        $budget = array_key_exists($input['budget'] ?? '', $budgets) ? $input['budget'] : 'mid';
        $switched = false;

        if (! in_array($interest, $parks[$parkKey]['interests'], true)) {
            foreach ($parks as $key => $park) {
                if (in_array($interest, $park['interests'], true)) {
                    $parkKey = $key;
                    $switched = true;
                    break;
                }
            }
        }

        $park = $parks[$parkKey];
        $months = [];
        foreach (self::monthNames() as $number => $name) {
            [$score, $note] = $park['months'][$number];
            $months[] = [
                'number' => $number,
                'name' => $name,
                'short' => substr($name, 0, 3),
                'score' => $score,
                'note' => $note,
                'best' => $score === 2,
            ];
        }

        $best = array_values(array_map(fn ($month) => $month['name'], array_filter($months, fn ($month) => $month['best'])));
        $budgetNote = [
            'value' => 'For a value trip, ask for camping or a simple lodge, and look at March, April, or November when the parks are quieter.',
            'mid' => 'A mid-range lodge safari is the usual fit for the best months below, with a private vehicle and a professional guide.',
            'luxury' => 'Luxury camps are open in the best months. Book the busiest weeks, July to September, well ahead.',
        ][$budget];

        $advice = $park['summary'].' '.$budgetNote;
        if ($switched) {
            $advice = $interests[$interest].' fits '.$park['name'].' better than the park first selected. '.$advice;
        }

        return [
            'park_key' => $parkKey,
            'park' => $park,
            'interest' => $interest,
            'interest_label' => $interests[$interest],
            'budget' => $budget,
            'budget_label' => $budgets[$budget],
            'months' => $months,
            'best_months' => $best,
            'advice' => $advice,
            'tours' => self::toursMatching($park['needles'], $park['category']),
            'whatsapp' => self::whatsapp('Hello Enjoyable Tour. I am planning '.$park['name'].' for '.$interests[$interest].', '.$budgets[$budget].' budget. Best months I am considering: '.implode(', ', $best).'.'),
        ];
    }

    public static function budgetParks(): array
    {
        return [
            'serengeti' => ['name' => 'Serengeti', 'low' => 60, 'high' => 70],
            'ngorongoro' => ['name' => 'Ngorongoro', 'low' => 71, 'high' => 71, 'crater' => 295],
            'tarangire' => ['name' => 'Tarangire', 'low' => 45, 'high' => 50],
            'manyara' => ['name' => 'Lake Manyara', 'low' => 45, 'high' => 50],
            'nyerere' => ['name' => 'Nyerere', 'low' => 60, 'high' => 70],
        ];
    }

    private static function parkWeights(array $selected, int $days): array
    {
        $weights = [];
        if ($selected === []) {
            return $weights;
        }
        if ($days >= count($selected)) {
            $base = intdiv($days, count($selected));
            $extra = $days % count($selected);
            foreach ($selected as $index => $key) {
                $weights[$key] = $base + ($index < $extra ? 1 : 0);
            }
        } else {
            foreach (array_slice($selected, 0, $days) as $key) {
                $weights[$key] = 1;
            }
        }

        return $weights;
    }

    public static function budgetEstimate(array $input): array
    {
        $catalog = self::budgetParks();
        $days = min(21, max(1, (int) ($input['days'] ?? 5)));
        $guests = min(12, max(1, (int) ($input['guests'] ?? 2)));
        $nights = max(0, $days - 1);
        $requested = $input['parks'] ?? ['serengeti', 'ngorongoro'];
        $selected = array_values(array_intersect(array_keys($catalog), (array) $requested));
        if ($selected === []) {
            $selected = ['serengeti'];
        }
        $vehicle = in_array($input['vehicle'] ?? '', ['private', 'shared'], true) ? $input['vehicle'] : 'private';
        $stay = in_array($input['stay'] ?? '', ['camping', 'mid', 'luxury'], true) ? $input['stay'] : 'mid';
        $stayRates = [
            'camping' => [90, 160, 'Camping'],
            'mid' => [200, 350, 'Mid-range lodge'],
            'luxury' => [480, 950, 'Luxury camp'],
        ][$stay];

        $weights = self::parkWeights($selected, $days);

        $feeLow = 0;
        $feeHigh = 0;
        $feeNotes = [];
        foreach ($weights as $key => $parkDays) {
            $park = $catalog[$key];
            $feeLow += $parkDays * $park['low'] * $guests;
            $feeHigh += $parkDays * $park['high'] * $guests * 1.18;
            $feeNotes[] = $park['name'].' '.$parkDays.' '.($parkDays === 1 ? 'day' : 'days');
        }

        $lines = [[
            'label' => 'Park conservation fees',
            'low' => $feeLow,
            'high' => $feeHigh,
            'note' => implode(', ', $feeNotes).'. Non-resident adult, per 24 hours. The higher figure includes 18% VAT.',
        ]];

        if (isset($weights['ngorongoro'])) {
            $lines[] = [
                'label' => 'Ngorongoro crater descent',
                'low' => 295,
                'high' => 295 * 1.18,
                'note' => 'One descent for the vehicle, shared by the group. Not charged per person.',
            ];
        }

        if ($vehicle === 'private') {
            $lines[] = [
                'label' => 'Private 4x4 and guide',
                'low' => 180 * $days,
                'high' => 260 * $days,
                'note' => 'Typical daily rate for the vehicle, for '.$days.' '.($days === 1 ? 'day' : 'days').'.',
            ];
        } else {
            $lines[] = [
                'label' => 'Shared safari seat',
                'low' => 55 * $days * $guests,
                'high' => 80 * $days * $guests,
                'note' => 'Per person, per day, when joining other guests.',
            ];
        }

        if ($nights > 0) {
            $lines[] = [
                'label' => $stayRates[2],
                'low' => $stayRates[0] * $nights * $guests,
                'high' => $stayRates[1] * $nights * $guests,
                'note' => 'Typical per-person rate for '.$nights.' '.($nights === 1 ? 'night' : 'nights').'. Meals on safari are usually included.',
            ];
        }

        $totalLow = array_sum(array_column($lines, 'low'));
        $totalHigh = array_sum(array_column($lines, 'high'));
        $parkNames = array_map(fn ($key) => $catalog[$key]['name'], $selected);

        return [
            'days' => $days,
            'nights' => $nights,
            'guests' => $guests,
            'parks' => $selected,
            'vehicle' => $vehicle,
            'stay' => $stay,
            'lines' => $lines,
            'total_low' => $totalLow,
            'total_high' => $totalHigh,
            'per_low' => $totalLow / $guests,
            'per_high' => $totalHigh / $guests,
            'whatsapp' => self::whatsapp(
                'Hello Enjoyable Tour. Please quote a safari: '.implode(', ', $parkNames)
                .', '.$days.' days, '.$guests.' guests, '.$vehicle.' vehicle, '.$stayRates[2].'.'
                .' My planner range is '.self::money($totalLow).'–'.self::money($totalHigh).' for the group.'
            ),
        ];
    }

    public static function buildSafari(array $input): array
    {
        $names = self::monthNames();
        $month = array_key_exists((int) ($input['month'] ?? 0), $names) ? (int) $input['month'] : (int) date('n');
        $days = min(14, max(3, (int) ($input['days'] ?? 5)));
        $guests = min(12, max(1, (int) ($input['guests'] ?? 2)));
        $estimate = self::budgetEstimate([
            'days' => $days,
            'guests' => $guests,
            'parks' => $input['parks'] ?? ['serengeti', 'ngorongoro'],
            'vehicle' => 'private',
            'stay' => 'mid',
        ]);
        $guide = self::migration($month);
        $catalog = self::budgetParks();
        $weights = self::parkWeights($estimate['parks'], $days);
        $blurbs = [
            'serengeti' => 'Game drives where the herds usually are in '.$names[$month].': '.$guide['current']['place'].'.',
            'ngorongoro' => 'A descent to the crater floor for resident wildlife.',
            'tarangire' => 'Elephants and baobabs along the Tarangire River.',
            'manyara' => 'The groundwater forest and the lake under the rift wall.',
            'nyerere' => 'A boat safari or a walk along the Rufiji.',
        ];
        $sequence = [];
        foreach ($weights as $key => $count) {
            for ($i = 0; $i < $count; $i++) {
                $sequence[] = $key;
            }
        }

        $outline = [];
        $last = count($sequence);
        foreach ($sequence as $index => $key) {
            $number = $index + 1;
            $park = $catalog[$key]['name'];
            $blurb = $blurbs[$key];
            $continues = $index > 0 && $sequence[$index - 1] === $key;
            if ($number === 1 && $last === 1) {
                $title = 'Day trip to '.$park;
                $text = 'Out from Arusha and back the same day. '.$blurb;
            } elseif ($number === 1) {
                $title = 'Arusha to '.$park;
                $text = 'Morning pickup and the drive to '.$park.'. '.$blurb;
            } elseif ($number === $last) {
                $title = $park.', then back to Arusha';
                $text = $continues
                    ? 'A last morning in '.$park.', then the drive back toward Arusha.'
                    : 'A morning in '.$park.', then the drive back toward Arusha. '.$blurb;
            } elseif (! $continues) {
                $title = 'On to '.$park;
                $text = 'Drive to '.$park.'. '.$blurb;
            } else {
                $title = 'Full day in '.$park;
                $text = $blurb;
            }
            $outline[] = ['day' => $number, 'title' => $title, 'text' => $text];
        }

        $parkNames = array_map(fn ($key) => $catalog[$key]['name'], $estimate['parks']);
        $lines = [$names[$month].', '.$days.' days, '.$guests.' '.($guests === 1 ? 'guest' : 'guests').'.'];
        $lines[] = 'Parks: '.implode(', ', $parkNames).'.';
        foreach ($outline as $day) {
            $lines[] = 'Day '.$day['day'].': '.$day['title'].'. '.$day['text'];
        }
        $lines[] = 'Planning range '.self::money($estimate['total_low']).'–'.self::money($estimate['total_high']).' for the group, mid-range lodge and a private 4x4.';

        $withHerds = in_array('serengeti', $estimate['parks'], true);
        $migrationLine = $withHerds
            ? 'In '.$names[$month].' the herds are usually at '.$guide['current']['place'].'.'
            : 'In '.$names[$month].' the herds are usually at '.$guide['current']['place'].'. Add the Serengeti if this trip should follow them.';

        return [
            'month' => $month,
            'month_name' => $names[$month],
            'days' => $days,
            'guests' => $guests,
            'parks' => $estimate['parks'],
            'outline' => $outline,
            'estimate' => $estimate,
            'migration_line' => $migrationLine,
            'budget_url' => route('plan.budget', [
                'days' => $days,
                'guests' => $guests,
                'parks' => $estimate['parks'],
                'vehicle' => 'private',
                'stay' => 'mid',
            ]),
            'tours' => self::toursMatching($parkNames, 'Safaris'),
            'whatsapp' => self::whatsapp("Hello Enjoyable Tour. Please plan this safari.\n\n".implode("\n", $lines)),
        ];
    }

    public static function kiliMatch(int $days, string $hiking, string $sleep): array
    {
        $days = in_array($days, [6, 7, 8, 9], true) ? $days : 8;
        $hiking = in_array($hiking, ['new', 'regular', 'strong'], true) ? $hiking : 'new';
        $sleep = in_array($sleep, ['camping', 'huts', 'either'], true) ? $sleep : 'either';

        if ($sleep === 'huts') {
            return [
                'slug' => 'marangu',
                'why' => 'Marangu is the only route that sleeps in huts. Book the six-day version, with the rest day at Horombo. A five-day Marangu is the one most often regretted.',
            ];
        }
        if ($days === 6 && $hiking === 'strong') {
            return [
                'slug' => 'umbwe',
                'why' => 'Umbwe is the steep six-day camping route. It suits climbers who have already been at altitude. For a first high mountain, add a day and take Machame.',
            ];
        }
        if ($days === 6) {
            return [
                'slug' => 'machame',
                'why' => 'Six days is short for a first or a regular climb. Add a day and take Machame, so you get the climb-high, sleep-low day at Lava Tower.',
            ];
        }
        if ($days === 9) {
            return [
                'slug' => 'northern-circuit',
                'why' => 'Nine days is the Northern Circuit. The extra time on the quiet north side is the calmest way to reach the summit.',
            ];
        }
        if ($days === 8) {
            return [
                'slug' => 'lemosho',
                'why' => 'Eight days fits Lemosho. The extra night on the Shira plateau is why it acclimatizes better than a seven-day route.',
            ];
        }
        if ($hiking === 'regular') {
            return [
                'slug' => 'rongai',
                'why' => 'Seven days on Rongai keeps you on the quieter northern side, with a night at Mawenzi Tarn before the summit.',
            ];
        }

        return [
            'slug' => 'machame',
            'why' => 'Seven days on Machame is the scenic route for a first high mountain. Day three climbs to Lava Tower and sleeps lower, which helps you adapt.',
        ];
    }

    public static function kiliMatches(): array
    {
        $matches = [];
        foreach ([6, 7, 8, 9] as $days) {
            foreach (['new', 'regular', 'strong'] as $hiking) {
                foreach (['camping', 'huts', 'either'] as $sleep) {
                    $matches[$days.'-'.$hiking.'-'.$sleep] = self::kiliMatch($days, $hiking, $sleep);
                }
            }
        }

        return $matches;
    }

    public static function kiliTrack(string $slug): array
    {
        $uhuru = [548, 188, 'Uhuru Peak'];
        $southern = [
            [455, 395, 'Barranco'],
            [520, 360, 'Karanga'],
            [610, 300, 'Barafu'],
            $uhuru,
            [500, 430, 'Mweka'],
            [470, 520, 'Mweka Gate'],
        ];
        $tracks = [
            'machame' => [
                'points' => [
                    [200, 490, 'Machame Gate'],
                    [280, 430, 'Machame Camp'],
                    [350, 360, 'Shira'],
                    [420, 275, 'Lava Tower'],
                    ...$southern,
                ],
            ],
            'lemosho' => [
                'points' => [
                    [70, 455, 'Londorossi'],
                    [165, 415, 'Mti Mkubwa'],
                    [270, 365, 'Shira 1'],
                    [350, 315, 'Shira 2'],
                    [420, 275, 'Lava Tower'],
                    ...$southern,
                ],
            ],
            'marangu' => [
                'points' => [
                    [770, 510, 'Marangu Gate'],
                    [735, 430, 'Mandara'],
                    [700, 340, 'Horombo'],
                    [625, 255, 'Kibo Hut'],
                    $uhuru,
                ],
            ],
            'rongai' => [
                'points' => [
                    [970, 360, 'Rongai Gate'],
                    [910, 330, 'Simba'],
                    [855, 300, 'Second Cave'],
                    [815, 270, 'Kikelewa'],
                    [785, 235, 'Mawenzi Tarn'],
                    [625, 255, 'Kibo Hut'],
                    $uhuru,
                    [700, 340, 'Horombo'],
                    [735, 430, 'Mandara'],
                    [770, 510, 'Marangu Gate'],
                ],
                'far' => [0, 4],
            ],
            'umbwe' => [
                'points' => [
                    [340, 545, 'Umbwe Gate'],
                    [385, 460, 'Umbwe Cave'],
                    ...$southern,
                ],
            ],
            'northern-circuit' => [
                'points' => [
                    [70, 455, 'Londorossi'],
                    [165, 415, 'Mti Mkubwa'],
                    [270, 365, 'Shira 1'],
                    [345, 310, 'Shira 2'],
                    [400, 230, 'Moir Hut'],
                    [490, 155, 'Buffalo'],
                    [650, 150, 'Third Cave'],
                    [710, 240, 'School Hut'],
                    $uhuru,
                    [500, 430, 'Mweka'],
                    [470, 520, 'Mweka Gate'],
                ],
                'far' => [4, 7],
            ],
        ];

        return $tracks[$slug] ?? ['points' => []];
    }

    public static function kiliRoutes(): array
    {
        $routes = [
            [
                'slug' => 'machame',
                'tour' => 'trek-machame',
                'name' => 'Machame',
                'days' => 7,
                'style' => 'Camping',
                'fit' => 'First-time climbers who want a scenic route',
                'success' => 'Strong, because the Lava Tower day helps you acclimatize',
                'summary' => 'The most popular scenic route. You climb high and sleep lower on day three, which is the best acclimatization pattern on a seven-day trek.',
                'tips' => ['Take the seven-day version, not a rushed six-day.', 'Walk slowly from the first hour.', 'The Barranco Wall looks steep and is manageable if you are rested.'],
                'days_detail' => [
                    ['camp' => 'Machame Camp', 'altitude' => 2835, 'note' => 'From Machame Gate through the rainforest.'],
                    ['camp' => 'Shira Camp', 'altitude' => 3750, 'note' => 'Onto the moorland and the Shira plateau.'],
                    ['camp' => 'Barranco Camp', 'altitude' => 3960, 'note' => 'Up to Lava Tower at 4,630 m, then down to sleep.'],
                    ['camp' => 'Karanga Camp', 'altitude' => 3995, 'note' => 'Over the Barranco Wall. A shorter day.'],
                    ['camp' => 'Barafu Camp', 'altitude' => 4673, 'note' => 'Base camp. Rest, then an early summit start.'],
                    ['camp' => 'Uhuru Peak', 'altitude' => 5895, 'note' => 'Summit, then descend to Mweka Camp.'],
                    ['camp' => 'Mweka Gate', 'altitude' => 1640, 'note' => 'Walk out through the forest.'],
                ],
            ],
            [
                'slug' => 'lemosho',
                'tour' => 'trek-lemosho',
                'name' => 'Lemosho',
                'days' => 8,
                'style' => 'Camping',
                'fit' => 'Climbers who want the best scenery and a quieter start',
                'success' => 'Among the highest, thanks to the extra day',
                'summary' => 'A longer approach from the west. The extra day on the Shira plateau is why many climbers choose Lemosho over Machame.',
                'tips' => ['Choose eight days when you can.', 'The first two days are the time to set a slow pace.', 'Summit night is the same Barafu route as Machame.'],
                'days_detail' => [
                    ['camp' => 'Mti Mkubwa', 'altitude' => 2750, 'note' => 'Forest camp after Londorossi Gate.'],
                    ['camp' => 'Shira 1', 'altitude' => 3500, 'note' => 'First view across the plateau.'],
                    ['camp' => 'Shira 2', 'altitude' => 3900, 'note' => 'A useful acclimatization day.'],
                    ['camp' => 'Barranco Camp', 'altitude' => 3960, 'note' => 'Via Lava Tower at 4,630 m, then down.'],
                    ['camp' => 'Karanga Camp', 'altitude' => 3995, 'note' => 'Barranco Wall, then a short valley day.'],
                    ['camp' => 'Barafu Camp', 'altitude' => 4673, 'note' => 'Rest before summit night.'],
                    ['camp' => 'Uhuru Peak', 'altitude' => 5895, 'note' => 'Summit and descend to Mweka.'],
                    ['camp' => 'Mweka Gate', 'altitude' => 1640, 'note' => 'Final descent.'],
                ],
            ],
            [
                'slug' => 'marangu',
                'tour' => 'trek-marangu',
                'name' => 'Marangu',
                'days' => 6,
                'style' => 'Huts',
                'fit' => 'Climbers who prefer huts and a gentler trail gradient',
                'success' => 'Better on the six-day hut route than on a five-day rush',
                'summary' => 'The only route that sleeps in huts. You go up and down the same trail, so the six-day version with a rest day at Horombo matters.',
                'tips' => ['Book the six-day Marangu, with the Horombo rest day.', 'Five-day Marangu is the one most often regretted.', 'Huts are shared, so a sleeping bag is still required.'],
                'days_detail' => [
                    ['camp' => 'Mandara Hut', 'altitude' => 2700, 'note' => 'Rainforest from Marangu Gate.'],
                    ['camp' => 'Horombo Hut', 'altitude' => 3720, 'note' => 'Moorland and the first big height gain.'],
                    ['camp' => 'Horombo Hut', 'altitude' => 3720, 'note' => 'Acclimatization day. Walk toward Mawenzi and sleep at the same hut.'],
                    ['camp' => 'Kibo Hut', 'altitude' => 4703, 'note' => 'Alpine desert and base camp.'],
                    ['camp' => 'Uhuru Peak', 'altitude' => 5895, 'note' => 'Summit via Gilman\'s Point, then back to Horombo.'],
                    ['camp' => 'Marangu Gate', 'altitude' => 1860, 'note' => 'Descend the same trail.'],
                ],
            ],
            [
                'slug' => 'rongai',
                'tour' => 'trek-rongai',
                'name' => 'Rongai',
                'days' => 7,
                'style' => 'Camping',
                'fit' => 'Climbers who want a quieter northern approach',
                'success' => 'Good on the seven-day route, with a night at Mawenzi Tarn',
                'summary' => 'The northern side is drier and less crowded. You descend on the Marangu trail, so the scenery changes on the way down.',
                'tips' => ['The seven-day Rongai is the one to book.', 'Mawenzi Tarn is the acclimatization night. Do not skip it.', 'It can be a better wet-season choice than the southern routes.'],
                'days_detail' => [
                    ['camp' => 'Simba Camp', 'altitude' => 2650, 'note' => 'A steady first day from Rongai Gate.'],
                    ['camp' => 'Second Cave', 'altitude' => 3450, 'note' => 'Moorland and open views.'],
                    ['camp' => 'Kikelewa Cave', 'altitude' => 3600, 'note' => 'A shorter day before the tarn.'],
                    ['camp' => 'Mawenzi Tarn', 'altitude' => 4330, 'note' => 'Important sleep-high night.'],
                    ['camp' => 'Kibo Hut', 'altitude' => 4703, 'note' => 'Cross to the Marangu base camp.'],
                    ['camp' => 'Uhuru Peak', 'altitude' => 5895, 'note' => 'Summit, then down to Horombo.'],
                    ['camp' => 'Marangu Gate', 'altitude' => 1860, 'note' => 'Descend the south-east side.'],
                ],
            ],
            [
                'slug' => 'umbwe',
                'tour' => 'trek-umbwe',
                'name' => 'Umbwe',
                'days' => 6,
                'style' => 'Camping',
                'fit' => 'Strong hikers who have climbed at altitude before',
                'success' => 'Lower than Machame or Lemosho because the route gains height quickly',
                'summary' => 'The steepest and shortest usual route. It is a direct ridge with little time to adapt. Enjoyable Tour suggests it only for fit climbers.',
                'tips' => ['This is not the route for a first high mountain.', 'If you have the days, switch to Lemosho or the Northern Circuit.', 'Start even slower than you think you should.'],
                'days_detail' => [
                    ['camp' => 'Umbwe Cave', 'altitude' => 2850, 'note' => 'A steep forest ridge from Umbwe Gate.'],
                    ['camp' => 'Barranco Camp', 'altitude' => 3960, 'note' => 'A long, steep gain.'],
                    ['camp' => 'Karanga Camp', 'altitude' => 3995, 'note' => 'Short day after joining the southern circuit.'],
                    ['camp' => 'Barafu Camp', 'altitude' => 4673, 'note' => 'Base camp.'],
                    ['camp' => 'Uhuru Peak', 'altitude' => 5895, 'note' => 'Summit and descend to Mweka.'],
                    ['camp' => 'Mweka Gate', 'altitude' => 1640, 'note' => 'Final walk out.'],
                ],
            ],
            [
                'slug' => 'northern-circuit',
                'tour' => 'trek-northern-circuit',
                'name' => 'Northern Circuit',
                'days' => 9,
                'style' => 'Camping',
                'fit' => 'Climbers who can spare nine days and want the calmest summit odds',
                'success' => 'The most forgiving route, because you spend longer above 3,500 m',
                'summary' => 'The longest route on the mountain. After the Shira plateau you traverse the quiet north side before joining the summit path.',
                'tips' => ['The extra days are the point of this route.', 'It is the best choice if you have had altitude trouble before.', 'You see faces of the mountain that the shorter routes miss.'],
                'days_detail' => [
                    ['camp' => 'Mti Mkubwa', 'altitude' => 2750, 'note' => 'Same forest start as Lemosho.'],
                    ['camp' => 'Shira 1', 'altitude' => 3500, 'note' => 'Onto the plateau.'],
                    ['camp' => 'Shira 2', 'altitude' => 3900, 'note' => 'Acclimatization day.'],
                    ['camp' => 'Moir Hut', 'altitude' => 4200, 'note' => 'The northern traverse begins.'],
                    ['camp' => 'Buffalo Camp', 'altitude' => 4020, 'note' => 'A little lower, which helps.'],
                    ['camp' => 'Third Cave', 'altitude' => 3870, 'note' => 'Quiet northern slopes.'],
                    ['camp' => 'School Hut', 'altitude' => 4800, 'note' => 'Summit base on the east side.'],
                    ['camp' => 'Uhuru Peak', 'altitude' => 5895, 'note' => 'Summit via Gilman\'s Point, down to Mweka.'],
                    ['camp' => 'Mweka Gate', 'altitude' => 1640, 'note' => 'Final descent.'],
                ],
            ],
        ];

        foreach ($routes as &$route) {
            $route['svg'] = self::altitudeSvg($route['days_detail']);
            $route['tour_url'] = optional(self::tourBySlug($route['tour']))->detailUrl();
        }
        unset($route);

        return $routes;
    }

    public static function altitudeSvg(array $days): string
    {
        $width = 640;
        $height = 220;
        $padX = 28;
        $padY = 26;
        $count = max(count($days), 2);
        $coords = [];

        foreach (array_values($days) as $index => $day) {
            $x = $padX + ($index * (($width - (2 * $padX)) / ($count - 1)));
            $y = $height - $padY - (($day['altitude'] / 6000) * ($height - (2 * $padY)));
            $coords[] = [round($x, 1), round($y, 1), $day['altitude']];
        }

        $poly = implode(' ', array_map(fn ($point) => $point[0].','.$point[1], $coords));
        $dots = '';
        foreach ($coords as $index => $point) {
            $summit = $point[2] >= 5800;
            $dots .= '<circle cx="'.$point[0].'" cy="'.$point[1].'" r="'.($summit ? 6 : 4.5).'" class="'.($summit ? 'is-summit' : '').'"></circle>';
            $dots .= '<text x="'.$point[0].'" y="'.($height - 6).'" text-anchor="middle">'.($index + 1).'</text>';
        }

        return '<svg viewBox="0 0 '.$width.' '.$height.'" role="img" aria-label="Altitude profile"><line x1="'.$padX.'" y1="'.($height - $padY).'" x2="'.($width - $padX).'" y2="'.($height - $padY).'" class="et-alt-base"></line><polyline points="'.$poly.'"></polyline>'.$dots.'</svg>';
    }

    public static function migrationMonths(): array
    {
        return [
            1 => ['zone' => 'south', 'x' => 480, 'y' => 700, 'pin' => 'Ndutu', 'animals' => ['Wildebeest', 'Zebra', 'Calves', 'Cheetah'], 'title' => 'Calving on the southern plains', 'place' => 'Southern Serengeti and Ndutu', 'text' => 'The herds are spread across the short-grass plains. Calving usually peaks in late January and February, and predators stay close.'],
            2 => ['zone' => 'south', 'x' => 340, 'y' => 660, 'pin' => 'Ndutu', 'animals' => ['Wildebeest', 'Zebra', 'Calves', 'Lion'], 'title' => 'Calving continues', 'place' => 'Ndutu and the southern Serengeti', 'text' => 'This is still the newborn season. Days are often dry and clear, and the plains can hold huge concentrations of wildebeest and zebra.'],
            3 => ['zone' => 'south', 'x' => 220, 'y' => 600, 'pin' => 'South', 'animals' => ['Wildebeest', 'Zebra', 'Migratory birds'], 'title' => 'The plains start to empty', 'place' => 'South and south-east Serengeti', 'text' => 'Herds are still mostly south. Late March brings the first long rains, and the movement north is gradual rather than a single event.'],
            4 => ['zone' => 'central', 'x' => 430, 'y' => 400, 'pin' => 'Seronera', 'animals' => ['Wildebeest', 'Zebra', 'Migratory birds'], 'title' => 'Long rains, central Serengeti', 'place' => 'Central Serengeti and the start of the western corridor', 'text' => 'April is green, quiet, and changeable. Some camps close. The herds are moving, but river crossings are not the reason to come this month.'],
            5 => ['zone' => 'west', 'x' => 260, 'y' => 360, 'pin' => 'Western corridor', 'animals' => ['Wildebeest', 'Zebra', 'Topi'], 'title' => 'Building in the western corridor', 'place' => 'Western corridor', 'text' => 'The long rains ease through May. Herds collect toward the Grumeti River. Crossings can start late in the month and are never guaranteed.'],
            6 => ['zone' => 'west', 'x' => 155, 'y' => 290, 'pin' => 'Grumeti', 'animals' => ['Wildebeest', 'Zebra', 'Crocodile'], 'title' => 'Grumeti crossings', 'place' => 'Western corridor and the Grumeti River', 'text' => 'June is the usual start of the Grumeti crossings. The north is not full yet. A western or central camp is the better base.'],
            7 => ['zone' => 'north', 'x' => 340, 'y' => 195, 'pin' => 'North-west', 'animals' => ['Wildebeest', 'Zebra', 'Crocodile'], 'title' => 'Moving to the Mara', 'place' => 'North-west Serengeti', 'text' => 'Herds push from the Grumeti area toward Kogatende and the Mara River. The first Mara crossings often fall in July.'],
            8 => ['zone' => 'north', 'x' => 530, 'y' => 168, 'pin' => 'Kogatende', 'animals' => ['Wildebeest', 'Zebra', 'Crocodile', 'Lion'], 'title' => 'Peak Mara crossings', 'place' => 'Northern Serengeti, Kogatende', 'text' => 'August is the month most people picture. Crossings can happen daily, and they can also pause for days. A northern camp is worth it if the budget allows.'],
            9 => ['zone' => 'north', 'x' => 750, 'y' => 175, 'pin' => 'Mara River', 'animals' => ['Wildebeest', 'Zebra', 'Lion'], 'title' => 'Herds remain in the north', 'place' => 'Northern Serengeti and the Mara River', 'text' => 'September stays strong. River crossings continue, and general game viewing in the north is excellent.'],
            10 => ['zone' => 'north', 'x' => 870, 'y' => 230, 'pin' => 'Turning south', 'animals' => ['Wildebeest', 'Zebra', 'Lion'], 'title' => 'Still north, starting to turn', 'place' => 'Northern and central Serengeti', 'text' => 'Many herds are still in the north early in October. By the end of the month they begin the move back. The short rains are close.'],
            11 => ['zone' => 'east', 'x' => 920, 'y' => 400, 'pin' => 'Eastern plains', 'animals' => ['Wildebeest', 'Zebra', 'Migratory birds'], 'title' => 'The return south', 'place' => 'Eastern and central Serengeti', 'text' => 'Short rains arrive. Herds stream south through the east and the centre. It is a good month if you want the migration without the August crowds.'],
            12 => ['zone' => 'south', 'x' => 680, 'y' => 690, 'pin' => 'Southern plains', 'animals' => ['Wildebeest', 'Zebra', 'Gazelle'], 'title' => 'Back to the southern plains', 'place' => 'Southern Serengeti', 'text' => 'The herds settle again on the short grass. December sets up the next calving season. Skies are often clear between showers.'],
        ];
    }

    public static function migration(int $month): array
    {
        $months = self::migrationMonths();
        $month = array_key_exists($month, $months) ? $month : (int) date('n');
        $current = $months[$month];
        $names = self::monthNames();

        return [
            'month' => $month,
            'name' => $names[$month],
            'current' => $current,
            'months' => $months,
            'names' => $names,
            'updated' => 'Season guide, updated '.date('F Y'),
            'tours' => self::toursMatching(['Serengeti', 'Migration'], 'Safaris'),
            'whatsapp' => self::whatsapp('Hello Enjoyable Tour. I am interested in the wildebeest migration in '.$names[$month].' ('.$current['place'].'). Please suggest a safari.'),
        ];
    }

    public static function packingItems(): array
    {
        return [
            ['group' => 'Documents', 'label' => 'Passport with at least six months of validity', 'trips' => ['safari', 'trekking', 'day-trip', 'zanzibar']],
            ['group' => 'Documents', 'label' => 'Tanzania visa or e-visa approval', 'trips' => ['safari', 'trekking', 'day-trip', 'zanzibar']],
            ['group' => 'Documents', 'label' => 'Travel insurance that covers trekking above 4,000 m', 'trips' => ['trekking'], 'altitude' => true],
            ['group' => 'Documents', 'label' => 'Yellow fever certificate if your route requires it', 'trips' => ['safari', 'trekking', 'zanzibar']],
            ['group' => 'Clothing', 'label' => 'Neutral shirts and trousers in khaki, olive, or stone', 'trips' => ['safari', 'day-trip']],
            ['group' => 'Clothing', 'label' => 'Light fleece for early game drives', 'trips' => ['safari'], 'seasons' => ['dry']],
            ['group' => 'Clothing', 'label' => 'Waterproof jacket', 'trips' => ['safari', 'trekking', 'day-trip'], 'seasons' => ['wet']],
            ['group' => 'Clothing', 'label' => 'Swimwear and a light cover-up', 'trips' => ['zanzibar']],
            ['group' => 'Clothing', 'label' => 'Reef-safe sunscreen and a hat', 'trips' => ['safari', 'zanzibar', 'day-trip', 'trekking']],
            ['group' => 'Clothing', 'label' => 'Warm layers, including a down jacket for summit night', 'trips' => ['trekking'], 'altitude' => true],
            ['group' => 'Clothing', 'label' => 'Broken-in waterproof hiking boots', 'trips' => ['trekking']],
            ['group' => 'Clothing', 'label' => 'Gaiters for wet or dusty trails', 'trips' => ['trekking']],
            ['group' => 'Health', 'label' => 'Malaria tablets, started as your doctor advises', 'trips' => ['safari', 'day-trip', 'zanzibar']],
            ['group' => 'Health', 'label' => 'Personal prescriptions in original packs', 'trips' => ['safari', 'trekking', 'day-trip', 'zanzibar']],
            ['group' => 'Health', 'label' => 'Oral rehydration and a basic blister kit', 'trips' => ['safari', 'trekking']],
            ['group' => 'Health', 'label' => 'Altitude medicine only if your doctor recommends it', 'trips' => ['trekking'], 'altitude' => true],
            ['group' => 'Gear', 'label' => 'Binoculars, 8x32 or 8x42', 'trips' => ['safari']],
            ['group' => 'Gear', 'label' => 'Dust cover or rain cover for a camera', 'trips' => ['safari', 'trekking']],
            ['group' => 'Gear', 'label' => 'Headlamp with spare batteries', 'trips' => ['trekking', 'safari']],
            ['group' => 'Gear', 'label' => 'Sleeping bag rated to about -10°C', 'trips' => ['trekking'], 'altitude' => true],
            ['group' => 'Gear', 'label' => 'Trekking poles', 'trips' => ['trekking']],
            ['group' => 'Gear', 'label' => 'Soft duffel. Hard suitcases are awkward in safari vehicles', 'trips' => ['safari', 'trekking']],
            ['group' => 'Gear', 'label' => 'Dry bag for boat days', 'trips' => ['zanzibar']],
            ['group' => 'Gear', 'label' => 'Refillable water bottle', 'trips' => ['safari', 'trekking', 'day-trip', 'zanzibar']],
            ['group' => 'Cash and power', 'label' => 'US dollars in clean notes for tips and visas, plus a card', 'trips' => ['safari', 'trekking', 'day-trip', 'zanzibar']],
            ['group' => 'Cash and power', 'label' => 'Universal adapter. Sockets vary between camps', 'trips' => ['safari', 'trekking', 'zanzibar']],
            ['group' => 'Cash and power', 'label' => 'Power bank. Charging can be limited on trek days', 'trips' => ['trekking']],
        ];
    }

    public static function packing(array $input): array
    {
        $trips = ['safari' => 'Safari', 'trekking' => 'Kilimanjaro trek', 'day-trip' => 'Day trip', 'zanzibar' => 'Zanzibar'];
        $seasons = ['dry' => 'Dry season', 'wet' => 'Green season'];
        $trip = array_key_exists($input['trip'] ?? '', $trips) ? $input['trip'] : 'safari';
        $season = array_key_exists($input['season'] ?? '', $seasons) ? $input['season'] : 'dry';
        $altitude = $trip === 'trekking' || ! empty($input['altitude']);
        $groups = [];

        foreach (self::packingItems() as $item) {
            if (! in_array($trip, $item['trips'], true)) {
                continue;
            }
            if (! empty($item['seasons']) && ! in_array($season, $item['seasons'], true)) {
                continue;
            }
            if (! empty($item['altitude']) && ! $altitude) {
                continue;
            }
            $groups[$item['group']][] = $item['label'];
        }

        $lines = [];
        foreach ($groups as $group => $labels) {
            $lines[] = $group;
            foreach ($labels as $label) {
                $lines[] = '- '.$label;
            }
        }

        return [
            'trip' => $trip,
            'trip_label' => $trips[$trip],
            'season' => $season,
            'season_label' => $seasons[$season],
            'altitude' => $altitude,
            'trips' => $trips,
            'seasons' => $seasons,
            'groups' => $groups,
            'whatsapp' => self::whatsapp("Hello Enjoyable Tour. Please review my packing list for a {$trips[$trip]} ({$seasons[$season]}).\n\n".implode("\n", $lines)),
        ];
    }

    public static function parks(): array
    {
        return [
            'serengeti' => [
                'name' => 'Serengeti National Park',
                'region' => 'Northern Tanzania',
                'image' => 'images/tours/serengeti-classic-safari.jpg',
                'days' => '3–7 days',
                'summary' => 'Endless plains, the wildebeest migration, and the full spread of big cats. Most northern safaris spend their longest stretch here.',
                'highlights' => ['Migration calving in the south and river crossings in the north', 'Lion, cheetah, and leopard country', 'Balloon flights over the central plains'],
                'wildlife' => ['Wildebeest', 'Zebra', 'Lion', 'Cheetah', 'Elephant', 'Giraffe'],
                'itinerary' => ['Day 1: Arusha to the Serengeti, with an afternoon drive.', 'Day 2: Full day on the plains, following the season.', 'Day 3: A second area, often the centre or the north, then onward or back.'],
                'needles' => ['Serengeti'],
                'map' => ['x' => 250, 'y' => 118],
            ],
            'ngorongoro' => [
                'name' => 'Ngorongoro Crater',
                'region' => 'Ngorongoro Conservation Area',
                'image' => 'images/tours/ngorongoro-crater-2-day-safari.jpg',
                'days' => '1–2 days',
                'summary' => 'A vast volcanic caldera with resident wildlife on the floor. Most guests descend for one full morning, which is enough for a remarkable day.',
                'highlights' => ['Big Five country on the crater floor', 'Black rhino sightings are more reliable here than on the plains', 'Highland forest on the rim'],
                'wildlife' => ['Black rhino', 'Lion', 'Flamingo', 'Buffalo', 'Elephant', 'Hyena'],
                'itinerary' => ['Dawn descent onto the crater floor.', 'Picnic and a full circuit of the lakes and herds.', 'Afternoon climb back to the rim, then toward Arusha or the Serengeti.'],
                'needles' => ['Ngorongoro'],
                'map' => ['x' => 318, 'y' => 188],
            ],
            'tarangire' => [
                'name' => 'Tarangire National Park',
                'region' => 'Northern Tanzania',
                'image' => 'images/tours/tarangire-day-safari.jpg',
                'days' => '1–2 days',
                'summary' => 'Baobabs, the Tarangire River, and some of the largest elephant herds in the north. It is an easy first or last park from Arusha.',
                'highlights' => ['Elephant herds in the dry season', 'Baobab woodland', 'Excellent birding from November to May'],
                'wildlife' => ['Elephant', 'Baobab country', 'Lion', 'Oryx', 'Python', 'Birds'],
                'itinerary' => ['Morning drive from Arusha.', 'River and baobab circuits.', 'Sundowner, then a lodge inside the park or a return to Arusha.'],
                'needles' => ['Tarangire'],
                'map' => ['x' => 360, 'y' => 250],
            ],
            'manyara' => [
                'name' => 'Lake Manyara',
                'region' => 'Rift Valley',
                'image' => 'images/tours/tarangire-manyara-ngorongoro-3-day-safari.jpg',
                'days' => '1 day',
                'summary' => 'A compact park under the rift escarpment. Groundwater forest, a soda lake, and a full game drive that fits into one day.',
                'highlights' => ['Forest elephants and baboons at the gate', 'Flamingos when the lake level is right', 'A picnic with the escarpment behind you'],
                'wildlife' => ['Elephant', 'Baboon', 'Flamingo', 'Giraffe', 'Hippo', 'Birds'],
                'itinerary' => ['Enter through the groundwater forest.', 'Drive the lake shore and the open grassland.', 'Continue to Ngorongoro or back to Arusha the same day.'],
                'needles' => ['Manyara'],
                'map' => ['x' => 400, 'y' => 210],
            ],
            'nyerere' => [
                'name' => 'Nyerere National Park',
                'region' => 'Southern Tanzania',
                'image' => 'images/banners/tours-safaris.jpg',
                'days' => '3–4 days',
                'summary' => 'The former Selous. A wilder southern park of the Rufiji River, walking safaris, and boat game viewing, with far fewer vehicles than the north.',
                'highlights' => ['Walking with an armed ranger', 'Boat safari on the Rufiji', 'Wild dogs are seen more often here than in the north'],
                'wildlife' => ['Wild dog', 'Lion', 'Elephant', 'Hippo', 'Crocodile', 'Buffalo'],
                'itinerary' => ['Fly or drive in from Dar es Salaam or the coast.', 'A walking morning and a boat afternoon.', 'Game drives along the river before the flight out.'],
                'needles' => ['Nyerere', 'Selous'],
                'map' => ['x' => 430, 'y' => 360],
            ],
        ];
    }

    public static function park(string $slug): ?array
    {
        $parks = self::parks();
        if (! isset($parks[$slug])) {
            return null;
        }

        $park = $parks[$slug];
        $park['slug'] = $slug;
        $park['tours'] = self::toursMatching($park['needles'], 'Safaris', 4);
        $park['whatsapp'] = self::whatsapp('Hello Enjoyable Tour. I would like an itinerary for '.$park['name'].'.');

        return $park;
    }

    public static function monthNames(): array
    {
        return [1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'];
    }

    private static function parkMonths(string $name, array $interests, string $category, array $needles, array $months, string $summary): array
    {
        return compact('name', 'interests', 'category', 'needles', 'months', 'summary');
    }
}
