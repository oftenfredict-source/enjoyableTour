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
