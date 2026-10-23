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

    <a href="{{ route('admin.analytics.index') }}" class="nav-item" data-page="analytics">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
      <span class="sidebar-label flex-1">Analytics</span>
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

    <a href="{{ route('admin.inquiries.index') }}" class="nav-item" data-page="messages">
      <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      <span class="sidebar-label flex-1">Inquiries</span>
      @php $newInquiryCount = \App\Models\Inquiry::query()->where('status', 'new')->count(); @endphp
      @if ($newInquiryCount > 0)
        <span class="badge badge-warning sidebar-label">{{ $newInquiryCount }}</span>
      @endif
    </a>
  </nav>

  <div id="sidebar-user" class="p-3 border-t" style="border-color:var(--border);flex-shrink:0;">
    <div class="flex items-center gap-3 p-2 rounded-xl">
      <div class="flex-shrink-0 w-9 h-9 rounded-full flex items-center justify-center text-white font-semibold text-sm" style="background:var(--primary);">{{ $initials }}</div>
      <div class="sidebar-label min-w-0 flex-1">
        <div style="font-size:13px;font-weight:600;color:var(--text);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $user->name }}</div>
        <div style="font-size:11px;color:var(--muted);">Administrator</div>
      </div>
    </div>
    <form method="POST" action="{{ route('admin.logout') }}" class="mt-2">
      @csrf
      <button type="submit" class="nav-item w-full" style="color:#DC2626;border:none;background:transparent;cursor:pointer;text-align:left;">
        <svg class="flex-shrink-0" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
        <span class="sidebar-label flex-1">Sign Out</span>
      </button>
    </form>
  </div>
</aside>
