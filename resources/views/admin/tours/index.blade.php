@extends('admin.layouts.app')

@section('title', 'Tours & Packages')

@section('content')
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
  <div>
    <h1 class="text-xl font-bold text-[var(--text)]">Tours &amp; Packages</h1>
    <p class="text-sm text-[var(--muted)] mt-1">Manage Latest travel packages shown on the homepage and detail pages.</p>
  </div>
  <a href="{{ route('admin.tours.create') }}" class="btn btn-primary">Add package</a>
</div>

@if (session('success'))
  <div class="mb-4 rounded-xl px-4 py-3 text-sm" style="background:rgba(34,181,115,0.12);color:#15803d;border:1px solid rgba(34,181,115,0.25);">
    {{ session('success') }}
  </div>
@endif

<div class="card">
  <div class="overflow-x-auto">
    <table class="w-full text-left">
      <thead>
        <tr class="border-b" style="border-color:var(--border);">
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Package</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Category</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Price</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Status</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase text-right">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($tours as $tour)
          <tr class="border-b" style="border-color:var(--border);">
            <td class="px-4 py-3">
              <div class="flex items-center gap-3">
                <img src="{{ $tour->imageUrl() }}" alt="" class="w-12 h-12 rounded-lg object-cover">
                <div>
                  <div class="text-sm font-semibold text-[var(--text)]">{{ $tour->title }}</div>
                  <div class="text-xs text-[var(--muted)]">{{ $tour->location }} · {{ $tour->duration_label }}</div>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-sm text-[var(--text)]">{{ $tour->category ?: '—' }}</td>
            <td class="px-4 py-3 text-sm font-semibold text-[var(--text)]">{{ $tour->formatPrice() }}</td>
            <td class="px-4 py-3">
              @if ($tour->is_published)
                <span class="badge badge-success">Published</span>
              @else
                <span class="badge badge-warning">Draft</span>
              @endif
              @if ($tour->is_featured)
                <span class="badge badge-info">Homepage</span>
              @endif
            </td>
            <td class="px-4 py-3 text-right">
              <a href="{{ $tour->detailUrl() }}" target="_blank" class="btn btn-secondary btn-sm">View</a>
              <a href="{{ route('admin.tours.edit', $tour) }}" class="btn btn-primary btn-sm">Edit</a>
              <form action="{{ route('admin.tours.destroy', $tour) }}" method="POST" class="inline" onsubmit="return confirm('Delete this package?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline btn-sm" style="color:#DC2626;">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="px-4 py-10 text-center text-sm text-[var(--muted)]">No tour packages yet. Create your first one.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  @if ($tours->hasPages())
    <div class="p-4 border-t" style="border-color:var(--border);">
      {{ $tours->links() }}
    </div>
  @endif
</div>
@endsection
