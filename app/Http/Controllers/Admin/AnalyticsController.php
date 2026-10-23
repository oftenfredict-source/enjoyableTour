<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AnalyticsController extends Controller
{
    public function index(Request $request): View
    {
        $range = $request->string('range')->toString();
        $days = match ($range) {
            '7' => 7,
            '90' => 90,
            default => 30,
        };
        $range = (string) $days;

        $since = now()->subDays($days)->startOfDay();

        $base = Visit::query()->where('created_at', '>=', $since);

        $stats = [
            'total_visits' => (clone $base)->count(),
            'unique_visitors' => (clone $base)->distinct('ip_address')->count('ip_address'),
            'countries' => (clone $base)->whereNotNull('country_code')->distinct('country_code')->count('country_code'),
            'today' => Visit::query()->whereDate('created_at', today())->count(),
        ];

        $byCountry = Visit::query()
            ->select('country', 'country_code', DB::raw('COUNT(*) as visits'), DB::raw('COUNT(DISTINCT ip_address) as visitors'))
            ->where('created_at', '>=', $since)
            ->whereNotNull('country')
            ->groupBy('country', 'country_code')
            ->orderByDesc('visits')
            ->limit(15)
            ->get();

        $maxCountryVisits = max(1, (int) ($byCountry->first()->visits ?? 1));

        $byPage = Visit::query()
            ->select('path', DB::raw('COUNT(*) as visits'))
            ->where('created_at', '>=', $since)
            ->groupBy('path')
            ->orderByDesc('visits')
            ->limit(12)
            ->get();

        $daily = Visit::query()
            ->select(DB::raw('DATE(created_at) as day'), DB::raw('COUNT(*) as visits'))
            ->where('created_at', '>=', $since)
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy('day')
            ->get()
            ->keyBy('day');

        $dailySeries = collect();
        for ($date = $since->copy(); $date->lte(now()); $date->addDay()) {
            $key = $date->toDateString();
            $dailySeries->push([
                'day' => $key,
                'label' => $date->format('d M'),
                'visits' => (int) ($daily[$key]->visits ?? 0),
            ]);
        }
        $maxDaily = max(1, (int) $dailySeries->max('visits'));

        $recent = Visit::query()
            ->latest()
            ->limit(25)
            ->get();

        return view('admin.analytics.index', compact(
            'stats',
            'byCountry',
            'maxCountryVisits',
            'byPage',
            'dailySeries',
            'maxDaily',
            'recent',
            'range',
            'days'
        ));
    }
}
