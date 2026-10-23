@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
@php $user = auth()->user(); @endphp

<div class="welcome-banner animate-slideInUp">
  <div class="welcome-banner-content">
    <div class="welcome-banner-icon">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
    </div>
    <div>
      <h1 class="welcome-title">Welcome back, {{ explode(' ', $user->name)[0] }}!</h1>
      <p class="welcome-subtitle">Manage packages, inquiries, and your Tanzania tour website from one place.</p>
    </div>
  </div>
  <div class="welcome-actions">
    <a href="{{ route('admin.tours.create') }}" class="btn-welcome-outline" style="text-decoration:none;">
      Add package
    </a>
    <a href="{{ url('/') }}" target="_blank" class="btn-welcome-outline" style="text-decoration:none;">
      View Website
    </a>
  </div>
</div>

<div class="page-section grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3 sm:gap-4 md:gap-5">
  <a href="{{ route('admin.tours.index') }}" class="dash-stat-card animate-slideInUp stagger-1" style="text-decoration:none;">
    <div class="dash-stat-top">
      <div class="dash-stat-icon icon-bg-success">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
      </div>
    </div>
    <div class="dash-stat-value">{{ $stats['tours_published'] }}</div>
    <div class="dash-stat-label">Published packages</div>
    <div class="dash-stat-bar"><div class="dash-stat-bar-fill" style="width:100%;background:var(--primary)"></div></div>
  </a>

  <a href="{{ route('admin.tours.index') }}" class="dash-stat-card animate-slideInUp stagger-2" style="text-decoration:none;">
    <div class="dash-stat-top">
      <div class="dash-stat-icon icon-bg-info">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      </div>
    </div>
    <div class="dash-stat-value">{{ $stats['tours_total'] }}</div>
    <div class="dash-stat-label">Total packages</div>
    <div class="dash-stat-bar"><div class="dash-stat-bar-fill" style="width:{{ $stats['tours_total'] ? min(100, ($stats['tours_published'] / max(1, $stats['tours_total'])) * 100) : 10 }}%;background:var(--info)"></div></div>
  </a>

  <a href="{{ route('admin.inquiries.index', ['status' => 'new']) }}" class="dash-stat-card animate-slideInUp stagger-3" style="text-decoration:none;">
    <div class="dash-stat-top">
      <div class="dash-stat-icon icon-bg-warning">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      </div>
    </div>
    <div class="dash-stat-value">{{ $stats['inquiries_new'] }}</div>
    <div class="dash-stat-label">New inquiries</div>
    <div class="dash-stat-bar"><div class="dash-stat-bar-fill" style="width:{{ $stats['inquiries_new'] ? 100 : 10 }}%;background:var(--warning)"></div></div>
  </a>

  <a href="{{ route('admin.inquiries.index') }}" class="dash-stat-card animate-slideInUp stagger-4" style="text-decoration:none;">
    <div class="dash-stat-top">
      <div class="dash-stat-icon icon-bg-danger">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      </div>
    </div>
    <div class="dash-stat-value">{{ $stats['inquiries_total'] }}</div>
    <div class="dash-stat-label">All inquiries</div>
    <div class="dash-stat-bar"><div class="dash-stat-bar-fill" style="width:{{ $stats['inquiries_total'] ? 100 : 10 }}%;background:var(--danger)"></div></div>
  </a>
</div>

<div class="page-section grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-5">
  <div class="card animate-slideInUp">
    <div class="card-header flex items-center justify-between">
      <div>
        <h2 class="card-title">Recent inquiries</h2>
        <p class="card-subtitle">Latest contact form messages</p>
      </div>
      <a href="{{ route('admin.inquiries.index') }}" class="text-sm text-[var(--primary)] font-semibold">View all</a>
    </div>
    <div class="p-5 space-y-3">
      @forelse ($recentInquiries as $inquiry)
        <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="flex items-start justify-between gap-3 p-3 rounded-xl" style="background:var(--background);text-decoration:none;">
          <div class="min-w-0">
            <div class="text-sm font-semibold text-[var(--text)]">{{ $inquiry->name }}</div>
            <div class="text-xs text-[var(--muted)] mt-1 truncate">{{ $inquiry->interestLabel() }} · {{ \Illuminate\Support\Str::limit($inquiry->message, 60) }}</div>
          </div>
          @if ($inquiry->isNew())
            <span class="badge badge-warning">New</span>
          @endif
        </a>
      @empty
        <div class="text-sm text-[var(--muted)]">No inquiries yet. Messages from /contact will appear here.</div>
      @endforelse
    </div>
  </div>

  <div class="card animate-slideInUp">
    <div class="card-header flex items-center justify-between">
      <div>
        <h2 class="card-title">Packages by category</h2>
        <p class="card-subtitle">Published tours on the website</p>
      </div>
      <a href="{{ route('admin.tours.create') }}" class="text-sm text-[var(--primary)] font-semibold">Add package</a>
    </div>
    <div class="p-5 grid grid-cols-2 gap-3">
      @foreach ($categoryCounts as $key => $item)
        <a href="{{ url('/tours/'.$key) }}" target="_blank" class="rounded-xl p-4" style="background:var(--background);text-decoration:none;">
          <div class="text-sm font-semibold text-[var(--text)]">{{ $item['label'] }}</div>
          <div class="text-xs text-[var(--muted)] mt-1">{{ $item['count'] }} published</div>
        </a>
      @endforeach
    </div>
  </div>
</div>

<div class="page-section">
  <div class="card animate-slideInUp">
    <div class="card-header flex items-center justify-between">
      <div>
        <h2 class="card-title">Latest packages</h2>
        <p class="card-subtitle">Recently added or updated tours</p>
      </div>
      <a href="{{ route('admin.tours.index') }}" class="text-sm text-[var(--primary)] font-semibold">Manage tours</a>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-left">
        <thead>
          <tr class="border-b" style="border-color:var(--border);">
            <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Package</th>
            <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Category</th>
            <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Status</th>
            <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase text-right">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($recentTours as $tour)
            <tr class="border-b" style="border-color:var(--border);">
              <td class="px-4 py-3 text-sm font-semibold text-[var(--text)]">{{ $tour->title }}</td>
              <td class="px-4 py-3 text-sm text-[var(--muted)]">{{ $tour->category ?: '—' }}</td>
              <td class="px-4 py-3">
                @if ($tour->is_published)
                  <span class="badge badge-success">Published</span>
                @else
                  <span class="badge badge-warning">Draft</span>
                @endif
              </td>
              <td class="px-4 py-3 text-right">
                <a href="{{ route('admin.tours.edit', $tour) }}" class="btn btn-primary btn-sm">Edit</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="px-4 py-8 text-center text-sm text-[var(--muted)]">No packages yet.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
