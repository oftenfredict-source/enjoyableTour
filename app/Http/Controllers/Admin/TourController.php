<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TourController extends Controller
{
    public function index(): View
    {
        $tours = Tour::query()->orderBy('sort_order')->orderByDesc('id')->paginate(12);

        return view('admin.tours.index', [
            'tours' => $tours,
            'currentPage' => 'tours',
        ]);
    }

    public function create(): View
    {
        return view('admin.tours.form', [
            'tour' => new Tour([
                'currency' => 'USD',
                'guests_min' => 1,
                'guests_max' => 8,
                'rating' => 5,
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 0,
            ]),
            'currentPage' => 'tours',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $tour = Tour::create($this->validatedData($request));

        return redirect()
            ->route('admin.tours.edit', $tour)
            ->with('success', 'Tour package created successfully.');
    }

    public function edit(Tour $tour): View
    {
        return view('admin.tours.form', [
            'tour' => $tour,
            'currentPage' => 'tours',
        ]);
    }

    public function update(Request $request, Tour $tour): RedirectResponse
    {
        $tour->update($this->validatedData($request, $tour));

        return redirect()
            ->route('admin.tours.edit', $tour)
            ->with('success', 'Tour package updated successfully.');
    }

    public function destroy(Tour $tour): RedirectResponse
    {
        if ($tour->image && Storage::disk('public')->exists($tour->image)) {
            Storage::disk('public')->delete($tour->image);
        }

        $tour->delete();

        return redirect()
            ->route('admin.tours.index')
            ->with('success', 'Tour package deleted.');
    }

    private function validatedData(Request $request, ?Tour $tour = null): array
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:100'],
            'location' => ['nullable', 'string', 'max:150'],
            'duration_label' => ['nullable', 'string', 'max:50'],
            'duration_days' => ['nullable', 'integer', 'min:1'],
            'guests_min' => ['nullable', 'integer', 'min:1'],
            'guests_max' => ['nullable', 'integer', 'min:1'],
            'price' => ['required', 'numeric', 'min:0'],
            'old_price' => ['nullable', 'numeric', 'min:0'],
            'currency' => ['nullable', 'string', 'max:10'],
            'discount_badge' => ['nullable', 'string', 'max:50'],
            'image' => ['nullable', 'image', 'max:4096'],
            'video_url' => ['nullable', 'string', 'max:255'],
            'map_url' => ['nullable', 'string', 'max:255'],
            'rating' => ['nullable', 'numeric', 'min:0', 'max:5'],
            'reviews_count' => ['nullable', 'integer', 'min:0'],
            'accommodation' => ['nullable', 'string', 'max:150'],
            'departure_city' => ['nullable', 'string', 'max:150'],
            'arrival_city' => ['nullable', 'string', 'max:150'],
            'best_season' => ['nullable', 'string', 'max:100'],
            'guide_type' => ['nullable', 'string', 'max:100'],
            'stay_category' => ['nullable', 'string', 'max:100'],
            'overview' => ['nullable', 'string'],
            'highlights_text' => ['nullable', 'string'],
            'notes' => ['nullable', 'string'],
            'included_text' => ['nullable', 'string'],
            'excluded_text' => ['nullable', 'string'],
            'destinations_json' => ['nullable', 'string'],
            'itinerary_json' => ['nullable', 'string'],
            'places_json' => ['nullable', 'string'],
            'faqs_json' => ['nullable', 'string'],
            'gallery_json' => ['nullable', 'string'],
            'is_featured' => ['nullable', 'boolean'],
            'is_published' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $payload = [
            'title' => $data['title'],
            'slug' => filled($data['slug'] ?? null)
                ? Tour::uniqueSlug($data['slug'], $tour?->id)
                : Tour::uniqueSlug($data['title'], $tour?->id),
            'category' => $data['category'] ?? null,
            'location' => $data['location'] ?? null,
            'duration_label' => $data['duration_label'] ?? null,
            'duration_days' => $data['duration_days'] ?? null,
            'guests_min' => $data['guests_min'] ?? 1,
            'guests_max' => $data['guests_max'] ?? null,
            'price' => $data['price'],
            'old_price' => $data['old_price'] ?? null,
            'currency' => $data['currency'] ?? 'USD',
            'discount_badge' => $data['discount_badge'] ?? null,
            'video_url' => $data['video_url'] ?? null,
            'map_url' => $data['map_url'] ?? null,
            'rating' => $data['rating'] ?? 5,
            'reviews_count' => $data['reviews_count'] ?? 0,
            'accommodation' => $data['accommodation'] ?? null,
            'departure_city' => $data['departure_city'] ?? null,
            'arrival_city' => $data['arrival_city'] ?? null,
            'best_season' => $data['best_season'] ?? null,
            'guide_type' => $data['guide_type'] ?? null,
            'stay_category' => $data['stay_category'] ?? null,
            'overview' => $data['overview'] ?? null,
            'highlights' => $this->linesToArray($data['highlights_text'] ?? ''),
            'notes' => $data['notes'] ?? null,
            'included' => $this->linesToArray($data['included_text'] ?? ''),
            'excluded' => $this->linesToArray($data['excluded_text'] ?? ''),
            'destinations' => $this->decodeJsonList($data['destinations_json'] ?? ''),
            'itinerary' => $this->decodeJsonList($data['itinerary_json'] ?? ''),
            'places' => $this->decodeJsonList($data['places_json'] ?? ''),
            'faqs' => $this->decodeJsonList($data['faqs_json'] ?? ''),
            'gallery' => $this->decodeJsonList($data['gallery_json'] ?? ''),
            'is_featured' => $request->boolean('is_featured'),
            'is_published' => $request->boolean('is_published'),
            'sort_order' => $data['sort_order'] ?? 0,
        ];

        if ($request->hasFile('image')) {
            if ($tour?->image && Storage::disk('public')->exists($tour->image)) {
                Storage::disk('public')->delete($tour->image);
            }
            $payload['image'] = $request->file('image')->store('tours', 'public');
        }

        return $payload;
    }

    private function linesToArray(?string $text): array
    {
        if (blank($text)) {
            return [];
        }

        return collect(preg_split("/\r\n|\n|\r/", $text))
            ->map(fn ($line) => trim($line))
            ->filter()
            ->values()
            ->all();
    }

    private function decodeJsonList(?string $json): array
    {
        if (blank($json)) {
            return [];
        }

        $decoded = json_decode($json, true);

        return is_array($decoded) ? $decoded : [];
    }
}
