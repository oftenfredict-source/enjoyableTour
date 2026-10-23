<?php

namespace App\Http\Controllers;

use App\Support\PlanningData;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PlanningController extends Controller
{
    public function index(): View
    {
        return $this->page('Plan your trip', 'Planners for a Tanzania safari, a Kilimanjaro trek, or a Zanzibar stay.', 'turie.planning.hub', 'hub');
    }

    public function bestTime(Request $request): View
    {
        return $this->page(
            'Best time to visit',
            '',
            'turie.planning.best-time',
            'best-time',
            [
                'parks' => PlanningData::bestTimeParks(),
                'interests' => PlanningData::bestTimeInterests(),
                'budgets' => PlanningData::bestTimeBudgets(),
                'result' => PlanningData::bestTime($request->query()),
            ]
        );
    }

    public function budget(Request $request): View
    {
        $estimate = PlanningData::budgetEstimate($request->query());

        return $this->page(
            'Safari budget calculator',
            '',
            'turie.planning.budget',
            'budget',
            [
                'parks' => PlanningData::budgetParks(),
                'estimate' => $estimate,
                'rates' => [
                    'parks' => PlanningData::budgetParks(),
                    'vat' => 0.18,
                    'crater' => 295,
                    'vehicle' => ['private' => [180, 260], 'shared' => [55, 80]],
                    'stay' => ['camping' => [90, 160, 'Camping'], 'mid' => [200, 350, 'Mid-range lodge'], 'luxury' => [480, 950, 'Luxury camp']],
                ],
            ]
        );
    }

    public function build(Request $request): View
    {
        return $this->page(
            'Build a safari',
            '',
            'turie.planning.build',
            'build',
            [
                'parks' => PlanningData::budgetParks(),
                'months' => PlanningData::monthNames(),
                'plan' => PlanningData::buildSafari($request->query()),
            ]
        );
    }

    public function kilimanjaro(Request $request): View
    {
        $routes = PlanningData::kiliRoutes();
        $selected = $request->query('route', 'lemosho');
        $active = collect($routes)->firstWhere('slug', $selected) ?? $routes[1];

        return $this->page(
            'Kilimanjaro route planner',
            '',
            'turie.planning.kilimanjaro',
            'kilimanjaro',
            ['routes' => $routes, 'selectedRoute' => $active]
        );
    }

    public function migration(Request $request): View
    {
        return $this->page(
            'Wildebeest migration calendar',
            '',
            'turie.planning.migration',
            'migration',
            ['guide' => PlanningData::migration((int) $request->query('month', date('n')))]
        );
    }

    public function packing(Request $request): View
    {
        return $this->page(
            'Safari packing list',
            '',
            'turie.planning.packing',
            'packing',
            ['list' => PlanningData::packing($request->query())]
        );
    }

    public function parks(): View
    {
        return $this->page(
            'National park explorer',
            '',
            'turie.planning.parks',
            'parks',
            ['parks' => PlanningData::parks()]
        );
    }

    public function park(string $slug): View
    {
        $park = PlanningData::park($slug);
        abort_if($park === null, 404);

        return $this->page(
            $park['name'],
            '',
            'turie.planning.park',
            'parks',
            ['park' => $park, 'parks' => PlanningData::parks()]
        );
    }

    public function stylesheet(): BinaryFileResponse
    {
        $path = public_path('css/enjoyable.css');
        abort_unless(is_file($path), 404);

        return response()->file($path, [
            'Content-Type' => 'text/css; charset=UTF-8',
            'Cache-Control' => 'no-cache',
        ]);
    }

    public function publicImage(string $folder, string $file): BinaryFileResponse
    {
        abort_unless(in_array($folder, ['planning', 'about'], true), 404);
        abort_unless(preg_match('/^[A-Za-z0-9._-]+$/', $file) === 1, 404);

        $path = public_path('images/'.$folder.'/'.$file);
        abort_unless(is_file($path), 404);

        return response()->file($path, [
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }

    private function page(string $title, string $description, string $partial, string $active, array $data = []): View
    {
        return view('turie.planning.page', array_merge($data, [
            'title' => $title,
            'description' => $description,
            'partial' => $partial,
            'active' => $active,
            'tools' => PlanningData::tools(),
            'banner' => $data['banner'] ?? $this->banner($active),
        ]));
    }

    private function banner(string $active): string
    {
        return match ($active) {
            'kilimanjaro' => 'images/banners/tours-trekking.jpg',
            'packing' => 'images/banners/tours-day-trips.jpg',
            'hub' => 'images/banners/tours-all.jpg',
            default => 'images/banners/tours-safaris.jpg',
        };
    }
}
