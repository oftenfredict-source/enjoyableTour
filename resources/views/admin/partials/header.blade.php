@php
  $user = auth()->user();
@endphp

<header id="app-header">
  <button id="sidebar-toggle-btn" class="p-2 rounded-lg hover:bg-[var(--background)] transition-colors" style="color:var(--muted);border:none;background:none;cursor:pointer;flex-shrink:0;" aria-label="Toggle Sidebar">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
  </button>

  <div class="flex-1 max-w-md relative search-box" id="global-search-box">
    <svg class="search-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
    <input id="global-search-input" type="text" placeholder="Search tours, bookings, messages..."
      class="form-input" style="height:40px;font-size:13px;background:var(--background);"
      autocomplete="off">
    <div id="global-search-dropdown" class="global-search-dropdown" style="display:none;"></div>
  </div>

  <div class="flex items-center gap-2 ml-auto">
    <button id="dark-mode-btn" class="p-2 rounded-lg hover:bg-[var(--background)] transition-colors" style="color:var(--muted);border:none;background:none;cursor:pointer;" aria-label="Toggle dark mode">
      <svg id="dark-mode-icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
      <svg id="dark-mode-icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
    </button>

    <div class="relative" id="user-dropdown-wrapper">
      <button id="user-menu-btn" class="flex items-center gap-2 px-2 py-1.5 rounded-xl hover:bg-[var(--background)] transition-colors" style="border:none;background:none;cursor:pointer;">
        <div class="w-8 h-8 rounded-full flex items-center justify-center text-white text-xs font-semibold flex-shrink-0" style="background:var(--primary);">
          {{ collect(explode(' ', $user->name))->map(fn ($p) => mb_strtoupper(mb_substr($p, 0, 1)))->take(2)->implode('') }}
        </div>
        <div class="text-left hidden sm:block">
          <div style="font-size:13px;font-weight:600;color:var(--text);line-height:1.2;">{{ $user->name }}</div>
          <div style="font-size:11px;color:var(--muted);">Admin</div>
        </div>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color:var(--muted);"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div id="user-dropdown" class="dropdown-menu" style="display:none;right:0;min-width:200px;">
        <div style="padding:12px 16px;border-bottom:1px solid var(--border);">
          <div style="font-size:13px;font-weight:600;color:var(--text);">{{ $user->name }}</div>
          <div style="font-size:12px;color:var(--muted);">{{ $user->email }}</div>
        </div>
        <a href="{{ url('/') }}" target="_blank" class="dropdown-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          View Website
        </a>
        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('admin.logout') }}">
          @csrf
          <button type="submit" class="dropdown-item danger" style="width:100%;border:none;background:none;cursor:pointer;text-align:left;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
            Sign Out
          </button>
        </form>
      </div>
    </div>
  </div>
</header>
