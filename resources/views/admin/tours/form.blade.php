@extends('admin.layouts.app')

@section('title', $tour->exists ? 'Edit package' : 'Add package')

@section('content')
@php
  $includedText = old('included_text', implode("\n", $tour->included ?? []));
  $excludedText = old('excluded_text', implode("\n", $tour->excluded ?? []));
  $highlightsText = old('highlights_text', implode("\n", $tour->highlights ?? []));
  $destinationsJson = old('destinations_json', json_encode($tour->destinations ?: [['days' => 2, 'city' => 'Arusha']], JSON_PRETTY_PRINT));
  $itineraryJson = old('itinerary_json', json_encode($tour->itinerary ?: [['day' => 'Day 01', 'title' => 'Arrival', 'description' => 'Welcome and briefing.']], JSON_PRETTY_PRINT));
  $placesJson = old('places_json', json_encode($tour->places ?: [['name' => 'Serengeti', 'image' => '']], JSON_PRETTY_PRINT));
  $faqsJson = old('faqs_json', json_encode($tour->faqs ?: [['question' => 'What is included?', 'answer' => 'Park fees, guide, transport.']], JSON_PRETTY_PRINT));
  $galleryJson = old('gallery_json', json_encode($tour->gallery ?: [], JSON_PRETTY_PRINT));
@endphp

<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
  <div>
    <h1 class="text-xl font-bold text-[var(--text)]">{{ $tour->exists ? 'Edit package' : 'Add package' }}</h1>
    <p class="text-sm text-[var(--muted)] mt-1">Fields match the tour details page (gallery, pricing, itinerary, includes, FAQs).</p>
  </div>
  <a href="{{ route('admin.tours.index') }}" class="btn btn-secondary">Back to list</a>
</div>

@if (session('success'))
  <div class="mb-4 rounded-xl px-4 py-3 text-sm" style="background:rgba(34,181,115,0.12);color:#15803d;border:1px solid rgba(34,181,115,0.25);">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="mb-4 rounded-xl px-4 py-3 text-sm" style="background:rgba(239,68,68,0.1);color:#DC2626;border:1px solid rgba(239,68,68,0.2);">
    <ul class="list-disc pl-4">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ $tour->exists ? route('admin.tours.update', $tour) : route('admin.tours.store') }}" enctype="multipart/form-data" class="space-y-5">
  @csrf
  @if ($tour->exists)
    @method('PUT')
  @endif

  <div class="card p-5">
    <h2 class="card-title mb-4">Basic info (homepage card)</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="md:col-span-2">
        <label class="form-label">Title *</label>
        <input type="text" name="title" class="form-input" value="{{ old('title', $tour->title) }}" required>
      </div>
      <div>
        <label class="form-label">Slug (optional)</label>
        <input type="text" name="slug" class="form-input" value="{{ old('slug', $tour->slug) }}" placeholder="auto-from-title">
      </div>
      <div>
        <label class="form-label">Category</label>
        <select name="category" class="form-input">
          @foreach (['Safaris','Day Trips','Trekking','Zanzibar'] as $cat)
            <option value="{{ $cat }}" @selected(old('category', $tour->category) === $cat)>{{ $cat }}</option>
          @endforeach
        </select>
      </div>
      <div>
        <label class="form-label">Location</label>
        <input type="text" name="location" class="form-input" value="{{ old('location', $tour->location) }}" placeholder="Serengeti, Tanzania">
      </div>
      <div>
        <label class="form-label">Duration label</label>
        <input type="text" name="duration_label" class="form-input" value="{{ old('duration_label', $tour->duration_label) }}" placeholder="6D/5N or 2 days">
      </div>
      <div>
        <label class="form-label">Duration days (number)</label>
        <input type="number" name="duration_days" class="form-input" value="{{ old('duration_days', $tour->duration_days) }}" min="1">
      </div>
      <div>
        <label class="form-label">Guests min</label>
        <input type="number" name="guests_min" class="form-input" value="{{ old('guests_min', $tour->guests_min) }}" min="1">
      </div>
      <div>
        <label class="form-label">Guests max</label>
        <input type="number" name="guests_max" class="form-input" value="{{ old('guests_max', $tour->guests_max) }}" min="1">
      </div>
      <div>
        <label class="form-label">Price *</label>
        <input type="number" step="0.01" name="price" class="form-input" value="{{ old('price', $tour->price) }}" required>
      </div>
      <div>
        <label class="form-label">Old price</label>
        <input type="number" step="0.01" name="old_price" class="form-input" value="{{ old('old_price', $tour->old_price) }}">
      </div>
      <div>
        <label class="form-label">Currency</label>
        <input type="text" name="currency" class="form-input" value="{{ old('currency', $tour->currency ?: 'USD') }}">
      </div>
      <div>
        <label class="form-label">Discount badge</label>
        <input type="text" name="discount_badge" class="form-input" value="{{ old('discount_badge', $tour->discount_badge) }}" placeholder="- 25% Off">
      </div>
      <div>
        <label class="form-label">Rating</label>
        <input type="number" step="0.1" min="0" max="5" name="rating" class="form-input" value="{{ old('rating', $tour->rating) }}">
      </div>
      <div>
        <label class="form-label">Reviews count</label>
        <input type="number" name="reviews_count" class="form-input" value="{{ old('reviews_count', $tour->reviews_count) }}" min="0">
      </div>
      <div>
        <label class="form-label">Card / main image</label>
        <input type="file" name="image" class="form-input" accept="image/*">
        @if ($tour->image)
          <img src="{{ $tour->imageUrl() }}" alt="" class="mt-2 w-28 h-20 object-cover rounded-lg">
        @endif
      </div>
      <div>
        <label class="form-label">Video URL</label>
        <input type="text" name="video_url" class="form-input" value="{{ old('video_url', $tour->video_url) }}">
      </div>
      <div class="md:col-span-2">
        <label class="form-label">Map URL</label>
        <input type="text" name="map_url" class="form-input" value="{{ old('map_url', $tour->map_url) }}">
      </div>
      <div class="md:col-span-2">
        <label class="form-label">Overview / Description</label>
        <textarea name="overview" class="form-input" rows="6">{{ old('overview', $tour->overview) }}</textarea>
      </div>
      <div class="md:col-span-2">
        <label class="form-label">Highlights (one per line)</label>
        <textarea name="highlights_text" class="form-input" rows="8">{{ $highlightsText }}</textarea>
      </div>
      <div class="md:col-span-2">
        <label class="form-label">Notes (shown under itinerary)</label>
        <textarea name="notes" class="form-input" rows="3">{{ old('notes', $tour->notes) }}</textarea>
      </div>
    </div>
  </div>

  <div class="card p-5">
    <h2 class="card-title mb-4">Trip info (details page)</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div>
        <label class="form-label">Accommodation</label>
        <input type="text" name="accommodation" class="form-input" value="{{ old('accommodation', $tour->accommodation) }}" placeholder="Lodge / Camp / Hotel">
      </div>
      <div>
        <label class="form-label">Stay category</label>
        <input type="text" name="stay_category" class="form-input" value="{{ old('stay_category', $tour->stay_category) }}" placeholder="Deluxe">
      </div>
      <div>
        <label class="form-label">Departure city</label>
        <input type="text" name="departure_city" class="form-input" value="{{ old('departure_city', $tour->departure_city) }}">
      </div>
      <div>
        <label class="form-label">Arrival city</label>
        <input type="text" name="arrival_city" class="form-input" value="{{ old('arrival_city', $tour->arrival_city) }}">
      </div>
      <div>
        <label class="form-label">Best season</label>
        <input type="text" name="best_season" class="form-input" value="{{ old('best_season', $tour->best_season) }}">
      </div>
      <div>
        <label class="form-label">Guide</label>
        <input type="text" name="guide_type" class="form-input" value="{{ old('guide_type', $tour->guide_type) }}" placeholder="Guided">
      </div>
      <div>
        <label class="form-label">Sort order</label>
        <input type="number" name="sort_order" class="form-input" value="{{ old('sort_order', $tour->sort_order) }}" min="0">
      </div>
      <div class="flex items-center gap-6 pt-6">
        <label class="flex items-center gap-2 text-sm">
          <input type="checkbox" name="is_published" value="1" @checked(old('is_published', $tour->is_published))>
          Published
        </label>
        <label class="flex items-center gap-2 text-sm">
          <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $tour->is_featured))>
          Show on homepage
        </label>
      </div>
    </div>
  </div>

  <div class="card p-5">
    <h2 class="card-title mb-2">What's included / excluded</h2>
    <p class="text-xs text-[var(--muted)] mb-4">One item per line.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div>
        <label class="form-label">Included</label>
        <textarea name="included_text" class="form-input" rows="8">{{ $includedText }}</textarea>
      </div>
      <div>
        <label class="form-label">Excluded</label>
        <textarea name="excluded_text" class="form-input" rows="8">{{ $excludedText }}</textarea>
      </div>
    </div>
  </div>

  <div class="card p-5">
    <h2 class="card-title mb-2">Advanced JSON sections</h2>
    <p class="text-xs text-[var(--muted)] mb-4">Keep valid JSON. Destinations: days + city. Itinerary: day, title, description. Places: name, image. FAQs: question, answer. Gallery: list of image paths/URLs.</p>
    <div class="grid grid-cols-1 gap-4">
      <div>
        <label class="form-label">Destinations (Days in cities)</label>
        <textarea name="destinations_json" class="form-input font-mono text-xs" rows="5">{{ $destinationsJson }}</textarea>
      </div>
      <div>
        <label class="form-label">Tour plan / itinerary</label>
        <textarea name="itinerary_json" class="form-input font-mono text-xs" rows="8">{{ $itineraryJson }}</textarea>
      </div>
      <div>
        <label class="form-label">Places you'll see</label>
        <textarea name="places_json" class="form-input font-mono text-xs" rows="5">{{ $placesJson }}</textarea>
      </div>
      <div>
        <label class="form-label">FAQs</label>
        <textarea name="faqs_json" class="form-input font-mono text-xs" rows="5">{{ $faqsJson }}</textarea>
      </div>
      <div>
        <label class="form-label">Gallery images</label>
        <textarea name="gallery_json" class="form-input font-mono text-xs" rows="4">{{ $galleryJson }}</textarea>
      </div>
    </div>
  </div>

  <div class="flex gap-3">
    <button type="submit" class="btn btn-primary">{{ $tour->exists ? 'Save changes' : 'Create package' }}</button>
    @if ($tour->exists)
      <a href="{{ $tour->detailUrl() }}" target="_blank" class="btn btn-secondary">Preview page</a>
    @endif
  </div>
</form>
@endsection
