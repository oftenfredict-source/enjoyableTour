<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TourPageController extends Controller
{
    public function grid(Request $request, ?string $category = null): View|RedirectResponse
    {
        $legacySlug = (string) $request->query('category', '');
        if ($category === null && isset(Tour::CATEGORIES[$legacySlug])) {
            return redirect()->route('tours.category', $legacySlug, 301);
        }

        $categorySlug = (string) $category;
        $category = Tour::CATEGORIES[$categorySlug] ?? null;

        $tours = Tour::query()
            ->published()
            ->when($category, fn ($q) => $q->where('category', $category))
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->paginate(12)
            ->withQueryString();

        return view('turie.tour-grid', [
            'tours' => $tours,
            'category' => $category,
            'categorySlug' => $category ? $categorySlug : null,
        ]);
    }

    public const FINDER_DURATIONS = [
        '1' => ['label' => '1 Day', 'min' => 1, 'max' => 1],
        '2-4' => ['label' => '2 – 4 Days', 'min' => 2, 'max' => 4],
        '5-7' => ['label' => '5 – 7 Days', 'min' => 5, 'max' => 7],
        '8-plus' => ['label' => '8+ Days', 'min' => 8, 'max' => null],
    ];

    public const FINDER_PRICES = [
        'under-500' => ['label' => 'Under $500', 'min' => null, 'max' => 499.99],
        '500-1500' => ['label' => '$500 – $1,500', 'min' => 500, 'max' => 1500],
        '1500-2500' => ['label' => '$1,500 – $2,500', 'min' => 1500.01, 'max' => 2500],
        '2500-plus' => ['label' => '$2,500 and above', 'min' => 2500.01, 'max' => null],
    ];

    public const FINDER_SORTS = [
        'recommended' => 'Recommended',
        'price-asc' => 'Price: Low to High',
        'price-desc' => 'Price: High to Low',
        'duration-asc' => 'Duration: Shortest',
        'duration-desc' => 'Duration: Longest',
        'name' => 'Name: A to Z',
    ];

    public function finder(Request $request): View
    {
        $filters = [
            'q' => trim((string) $request->query('q', '')),
            'category' => array_values(array_intersect(array_keys(Tour::CATEGORIES), (array) $request->query('category', []))),
            'duration' => array_values(array_intersect(array_keys(self::FINDER_DURATIONS), (array) $request->query('duration', []))),
            'price' => array_values(array_intersect(array_keys(self::FINDER_PRICES), (array) $request->query('price', []))),
        ];
        $sort = array_key_exists($request->query('sort'), self::FINDER_SORTS) ? $request->query('sort') : 'recommended';

        $query = $this->finderQuery($filters);

        match ($sort) {
            'price-asc' => $query->orderBy('price'),
            'price-desc' => $query->orderByDesc('price'),
            'duration-asc' => $query->orderBy('duration_days')->orderBy('price'),
            'duration-desc' => $query->orderByDesc('duration_days')->orderBy('price'),
            'name' => $query->orderBy('title'),
            default => $query->orderByDesc('is_featured')->orderBy('sort_order')->orderByDesc('id'),
        };

        $counts = [];
        foreach (['category' => Tour::CATEGORIES, 'duration' => self::FINDER_DURATIONS, 'price' => self::FINDER_PRICES] as $facet => $options) {
            foreach (array_keys($options) as $key) {
                $counts[$facet][$key] = $this->finderQuery(array_merge($filters, [$facet => [$key]]))->count();
            }
        }

        return view('turie.tour-finder', [
            'tours' => $query->paginate(12)->withQueryString(),
            'filters' => $filters,
            'sort' => $sort,
            'counts' => $counts,
            'activeCount' => count($filters['category']) + count($filters['duration']) + count($filters['price']) + ($filters['q'] !== '' ? 1 : 0),
        ]);
    }

    private function finderQuery(array $filters)
    {
        return Tour::query()
            ->published()
            ->when($filters['q'] !== '', function ($q) use ($filters) {
                $term = '%'.$filters['q'].'%';
                $q->where(fn ($w) => $w->where('title', 'like', $term)
                    ->orWhere('location', 'like', $term)
                    ->orWhere('category', 'like', $term)
                    ->orWhere('overview', 'like', $term));
            })
            ->when($filters['category'], fn ($q) => $q->whereIn('category', array_map(fn ($slug) => Tour::CATEGORIES[$slug], $filters['category'])))
            ->when($filters['duration'], fn ($q) => $q->where(function ($w) use ($filters) {
                foreach ($filters['duration'] as $key) {
                    $range = self::FINDER_DURATIONS[$key];
                    $w->orWhere(fn ($r) => $r->where('duration_days', '>=', $range['min'])
                        ->when($range['max'], fn ($m) => $m->where('duration_days', '<=', $range['max'])));
                }
            }))
            ->when($filters['price'], fn ($q) => $q->where(function ($w) use ($filters) {
                foreach ($filters['price'] as $key) {
                    $range = self::FINDER_PRICES[$key];
                    $w->orWhere(fn ($r) => $r->when($range['min'], fn ($m) => $m->where('price', '>=', $range['min']))
                        ->when($range['max'], fn ($m) => $m->where('price', '<=', $range['max'])));
                }
            }));
    }

    public function show(string $slug): View
    {
        $tour = Tour::query()->published()->where('slug', $slug)->firstOrFail();

        $sameCategory = Tour::query()
            ->published()
            ->where('id', '!=', $tour->id)
            ->where('category', $tour->category)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->take(6)
            ->get();

        return view('turie.tour-show', ['tour' => $tour, 'others' => $sameCategory]);
    }
}
