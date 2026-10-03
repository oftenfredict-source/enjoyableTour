<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\View\View;

class TourPageController extends Controller
{
    public function show(string $slug): View
    {
        $tour = Tour::query()->published()->where('slug', $slug)->firstOrFail();

        $related = Tour::query()
            ->published()
            ->where('id', '!=', $tour->id)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        return view('turie.tour-show', compact('tour', 'related'));
    }
}
