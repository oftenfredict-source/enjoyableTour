<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Tour;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'tours_total' => Tour::query()->count(),
            'tours_published' => Tour::query()->where('is_published', true)->count(),
            'tours_featured' => Tour::query()->where('is_featured', true)->count(),
            'inquiries_total' => Inquiry::query()->count(),
            'inquiries_new' => Inquiry::query()->where('status', 'new')->count(),
            'categories' => count(Tour::CATEGORIES),
        ];

        $recentInquiries = Inquiry::query()->latest()->limit(5)->get();
        $recentTours = Tour::query()->latest()->limit(5)->get();

        $categoryCounts = collect(Tour::CATEGORIES)->mapWithKeys(function ($label, $key) {
            return [$key => [
                'label' => $label,
                'count' => Tour::query()->where('category', $key)->where('is_published', true)->count(),
            ]];
        });

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'recentTours', 'categoryCounts'));
    }
}
