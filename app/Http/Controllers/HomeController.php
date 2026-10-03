<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $packages = Tour::query()
            ->published()
            ->featured()
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->take(12)
            ->get();

        return view('turie.index', compact('packages'));
    }
}
