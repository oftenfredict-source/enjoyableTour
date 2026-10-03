@php
  $user = auth()->user();
  $initials = collect(explode(' ', $user->name ?? 'A'))
      ->map(fn ($part) => mb_strtoupper(mb_substr($part, 0, 1)))
      ->take(2)
      ->implode('');
@endphp

<aside id="sidebar">
  <a href="{{ route('admin.dashboard') }}" id="sidebar-logo" class="flex items-center h-16 px-4 border-b" style="border-color:var(--border);flex-shrink:0;text-decoration:none;transition:background 0.15s;" onmouseover="this.style.background='var(--background)'" onmouseout="this.style.background='transparent'">
    <div class="flex items-center gap-3 min-w-0">
      <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center overflow-hidden" style="background:#fff;border-radius:12px;box-shadow:0 2px 8px rgba(34,181,115,0.25);">
        <img src="{{ asset('enjoyable-tour-logo.png') }}" alt="{{ config('app.name') }}" class="w-9 h-9 object-contain">
      </div>
      <div class="sidebar-label" style="border-left:1px solid var(--border);padding-left:12px;">
        <div style="font-size:15px;font-weight:700;color:var(--text);line-height:1.1;letter-spacing:-0.3px;">Enjoyable Tour</div>
        <div style="font-size:9.5px;color:var(--primary);font-weight:600;letter-spacing:0.8px;text-transform:uppercase;margin-top:2px;">Admin Panel</div>
      </div>
    </div>
  </a>

  <nav id="sidebar-nav" class="flex-1 overflow-y-auto py-3 px-3" style="gap:2px;">
    <div class="sidebar-section-label">MAIN</div>

    <a href="{{ route('admin.dashboard') }}" class="nav-item" data-page="dashboard">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
      <span class="sidebar-label flex-1">Dashboard</span>
    </a>

    <div class="sidebar-section-label">WEBSITE</div>

    <a href="{{ url('/') }}" target="_blank" class="nav-item" data-page="website">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
      <span class="sidebar-label flex-1">View Website</span>
    </a>

    <div class="sidebar-section-label">CONTENT</div>

    <a href="{{ route('admin.tours.index') }}" class="nav-item" data-page="tours">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
      <span class="sidebar-label flex-1">Tours &amp; Packages</span>
    </a>

    <a href="#" class="nav-item" data-page="destinations">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"/><line x1="9" y1="3" x2="9" y2="18"/><line x1="15" y1="6" x2="15" y2="21"/></svg>
      <span class="sidebar-label flex-1">Destinations</span>
    </a>

    <a href="#" class="nav-item" data-page="bookings">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      <span class="sidebar-label flex-1">Bookings</span>
    </a>

    <a href="#" class="nav-item" data-page="messages">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      <span class="sidebar-label flex-1">Messages</span>
    </a>

    <div class="sidebar-section-label">SYSTEM</div>

    <a href="#" class="nav-item" data-page="settings">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93l-1.41 1.41M5.34 18.66l-1.41 1.41M2 12h2M20 12h2M6.34 5.34L4.93 4.93M19.07 19.07l-1.41-1.41M12 2v2M12 20v2"/></svg>
      <span class="sidebar-label flex-1">Settings</span>
    </a>
  </nav>

  <div id="sidebar-user" class="p-3 border-t" style="border-color:var(--border);flex-shrink:0;">
    <div class="flex items-center gap-3 p-2 rounded-xl">
      <div class="flex-shrink-0 w-9 h-9 rounded-full flex items-center justify-center text-white font-semibold text-sm" style="background:var(--primary);">{{ $initials }}</div>
      <div class="sidebar-label min-w-0">
        <div style="font-size:13px;font-weight:600;color:var(--text);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $user->name }}</div>
        <div style="font-size:11px;color:var(--muted);">Administrator</div>
      </div>
    </div>
  </div>
</aside>
