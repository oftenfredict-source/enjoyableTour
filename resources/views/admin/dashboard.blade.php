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
      <p class="welcome-subtitle">Manage Trekking, Safaris, Day trips, and Zanzibar content from this admin panel.</p>
    </div>
  </div>
  <div class="welcome-actions">
    <a href="{{ url('/') }}" target="_blank" class="btn-welcome-outline" style="text-decoration:none;">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
      View Website
    </a>
  </div>
</div>

<div class="page-section grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3 sm:gap-4 md:gap-5">
  <div class="dash-stat-card animate-slideInUp stagger-1">
    <div class="dash-stat-top">
      <div class="dash-stat-icon icon-bg-success">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
      </div>
    </div>
    <div class="dash-stat-value">4</div>
    <div class="dash-stat-label">Tour Categories</div>
    <div class="dash-stat-bar"><div class="dash-stat-bar-fill" style="width:100%;background:var(--primary)"></div></div>
  </div>

  <div class="dash-stat-card animate-slideInUp stagger-2">
    <div class="dash-stat-top">
      <div class="dash-stat-icon icon-bg-info">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      </div>
    </div>
    <div class="dash-stat-value">0</div>
    <div class="dash-stat-label">Bookings</div>
    <div class="dash-stat-bar"><div class="dash-stat-bar-fill" style="width:10%;background:var(--info)"></div></div>
  </div>

  <div class="dash-stat-card animate-slideInUp stagger-3">
    <div class="dash-stat-top">
      <div class="dash-stat-icon icon-bg-warning">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      </div>
    </div>
    <div class="dash-stat-value">0</div>
    <div class="dash-stat-label">Messages</div>
    <div class="dash-stat-bar"><div class="dash-stat-bar-fill" style="width:10%;background:var(--warning)"></div></div>
  </div>

  <div class="dash-stat-card animate-slideInUp stagger-4">
    <div class="dash-stat-top">
      <div class="dash-stat-icon icon-bg-danger">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      </div>
    </div>
    <div class="dash-stat-value">Ready</div>
    <div class="dash-stat-label">Admin Access</div>
    <div class="dash-stat-bar"><div class="dash-stat-bar-fill" style="width:100%;background:var(--danger)"></div></div>
  </div>
</div>

<div class="page-section grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-5">
  <div class="card animate-slideInUp">
    <div class="card-header">
      <div>
        <h2 class="card-title">Quick updates</h2>
        <p class="card-subtitle">What you can manage from here</p>
      </div>
    </div>
    <div class="p-5 space-y-3">
      <div class="flex items-start gap-3 p-3 rounded-xl" style="background:var(--background);">
        <span class="badge badge-success">Live</span>
        <div>
          <div class="text-sm font-semibold text-[var(--text)]">Website frontend</div>
          <div class="text-xs text-[var(--muted)] mt-1">Home, About, Contact, Destinations pages are live.</div>
        </div>
      </div>
      <div class="flex items-start gap-3 p-3 rounded-xl" style="background:var(--background);">
        <span class="badge badge-warning">Next</span>
        <div>
          <div class="text-sm font-semibold text-[var(--text)]">Tours &amp; packages CRUD</div>
          <div class="text-xs text-[var(--muted)] mt-1">Add, edit, and publish Trekking, Safari, Day trip, and Zanzibar packages.</div>
        </div>
      </div>
      <div class="flex items-start gap-3 p-3 rounded-xl" style="background:var(--background);">
        <span class="badge badge-info">Next</span>
        <div>
          <div class="text-sm font-semibold text-[var(--text)]">Bookings &amp; contact messages</div>
          <div class="text-xs text-[var(--muted)] mt-1">Review enquiries and booking requests from the website.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="card animate-slideInUp">
    <div class="card-header">
      <div>
        <h2 class="card-title">Your categories</h2>
        <p class="card-subtitle">Enjoyable Tour focus areas</p>
      </div>
    </div>
    <div class="p-5 grid grid-cols-2 gap-3">
      <div class="rounded-xl p-4" style="background:var(--background);">
        <div class="text-sm font-semibold text-[var(--text)]">Safaris</div>
        <div class="text-xs text-[var(--muted)] mt-1">Northern Circuit wildlife</div>
      </div>
      <div class="rounded-xl p-4" style="background:var(--background);">
        <div class="text-sm font-semibold text-[var(--text)]">Day Trips</div>
        <div class="text-xs text-[var(--muted)] mt-1">Arusha day adventures</div>
      </div>
      <div class="rounded-xl p-4" style="background:var(--background);">
        <div class="text-sm font-semibold text-[var(--text)]">Trekking</div>
        <div class="text-xs text-[var(--muted)] mt-1">Kilimanjaro &amp; mountains</div>
      </div>
      <div class="rounded-xl p-4" style="background:var(--background);">
        <div class="text-sm font-semibold text-[var(--text)]">Zanzibar</div>
        <div class="text-xs text-[var(--muted)] mt-1">Beach &amp; island escapes</div>
      </div>
    </div>
  </div>
</div>
@endsection
