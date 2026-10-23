@extends('admin.layouts.app')

@section('title', 'Analytics')

@section('content')
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
  <div>
    <h1 class="text-xl font-bold text-[var(--text)]">Visitor analytics</h1>
    <p class="text-sm text-[var(--muted)] mt-1">See who browses your site and which countries they come from.</p>
  </div>
  <div class="flex flex-wrap gap-2">
    <a href="{{ route('admin.analytics.index', ['range' => 7]) }}" class="btn {{ $range === '7' ? 'btn-primary' : 'btn-secondary' }} btn-sm">7 days</a>
    <a href="{{ route('admin.analytics.index', ['range' => 30]) }}" class="btn {{ $range === '30' ? 'btn-primary' : 'btn-secondary' }} btn-sm">30 days</a>
    <a href="{{ route('admin.analytics.index', ['range' => 90]) }}" class="btn {{ $range === '90' ? 'btn-primary' : 'btn-secondary' }} btn-sm">90 days</a>
  </div>
</div>

<div class="page-section grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3 sm:gap-4 md:gap-5">
  <div class="dash-stat-card">
    <div class="dash-stat-value">{{ number_format($stats['total_visits']) }}</div>
    <div class="dash-stat-label">Page views ({{ $days }}d)</div>
  </div>
  <div class="dash-stat-card">
    <div class="dash-stat-value">{{ number_format($stats['unique_visitors']) }}</div>
    <div class="dash-stat-label">Unique visitors</div>
  </div>
  <div class="dash-stat-card">
    <div class="dash-stat-value">{{ number_format($stats['countries']) }}</div>
    <div class="dash-stat-label">Countries</div>
  </div>
  <div class="dash-stat-card">
    <div class="dash-stat-value">{{ number_format($stats['today']) }}</div>
    <div class="dash-stat-label">Views today</div>
  </div>
</div>

<div class="page-section grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-5">
  <div class="card">
    <div class="card-header">
      <div>
        <h2 class="card-title">Visitors by country</h2>
        <p class="card-subtitle">Where your traffic comes from</p>
      </div>
    </div>
    <div class="p-5 space-y-4">
      @forelse ($byCountry as $row)
        <div>
          <div class="flex items-center justify-between gap-3 mb-1.5">
            <div class="text-sm font-semibold text-[var(--text)]">
              @if ($row->country_code && $row->country_code !== 'XX')
                <span class="mr-1">{{ $row->country_code }}</span>
              @endif
              {{ $row->country }}
            </div>
            <div class="text-xs text-[var(--muted)] whitespace-nowrap">{{ number_format($row->visits) }} views · {{ number_format($row->visitors) }} visitors</div>
          </div>
          <div style="height:8px;border-radius:999px;background:var(--background);overflow:hidden;">
            <div style="height:100%;width:{{ max(4, ($row->visits / $maxCountryVisits) * 100) }}%;background:var(--primary);border-radius:999px;"></div>
          </div>
        </div>
      @empty
        <div class="text-sm text-[var(--muted)]">No visitor data yet. Browse the public website from another browser or phone, then refresh this page.</div>
      @endforelse
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <div>
        <h2 class="card-title">Top pages</h2>
        <p class="card-subtitle">Most viewed pages in this period</p>
      </div>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-left">
        <thead>
          <tr class="border-b" style="border-color:var(--border);">
            <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Page</th>
            <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase text-right">Views</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($byPage as $page)
            <tr class="border-b" style="border-color:var(--border);">
              <td class="px-4 py-3 text-sm text-[var(--text)]">{{ $page->path }}</td>
              <td class="px-4 py-3 text-sm font-semibold text-[var(--text)] text-right">{{ number_format($page->visits) }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="2" class="px-4 py-8 text-center text-sm text-[var(--muted)]">No page views yet.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="page-section card">
  <div class="card-header">
    <div>
      <h2 class="card-title">Daily page views</h2>
      <p class="card-subtitle">Last {{ $days }} days</p>
    </div>
  </div>
  <div class="p-5">
    <div class="flex items-end gap-1 sm:gap-1.5" style="height:160px;">
      @foreach ($dailySeries as $day)
        <div class="flex-1 flex flex-col justify-end items-center h-full min-w-0" title="{{ $day['label'] }}: {{ $day['visits'] }}">
          <div class="w-full rounded-t-md" style="height:{{ max($day['visits'] ? 8 : 2, ($day['visits'] / $maxDaily) * 100) }}%;background:{{ $day['visits'] ? 'var(--primary)' : 'var(--border)' }};opacity:{{ $day['visits'] ? 1 : 0.45 }};"></div>
        </div>
      @endforeach
    </div>
    <div class="flex justify-between mt-2 text-[10px] sm:text-xs text-[var(--muted)]">
      <span>{{ $dailySeries->first()['label'] ?? '' }}</span>
      <span>{{ $dailySeries->last()['label'] ?? '' }}</span>
    </div>
  </div>
</div>

<div class="page-section card">
  <div class="card-header">
    <div>
      <h2 class="card-title">Recent visitors</h2>
      <p class="card-subtitle">Latest browsed pages with country</p>
    </div>
  </div>
  <div class="overflow-x-auto">
    <table class="w-full text-left">
      <thead>
        <tr class="border-b" style="border-color:var(--border);">
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">When</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Country</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Page</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">IP</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($recent as $visit)
          <tr class="border-b" style="border-color:var(--border);">
            <td class="px-4 py-3 text-sm text-[var(--muted)]">{{ $visit->created_at?->format('d M Y H:i') }}</td>
            <td class="px-4 py-3 text-sm text-[var(--text)]">{{ $visit->locationLabel() }}</td>
            <td class="px-4 py-3 text-sm text-[var(--text)]">{{ $visit->path }}</td>
            <td class="px-4 py-3 text-xs text-[var(--muted)]">{{ $visit->ip_address }}</td>
          </tr>
        @empty
          <tr>
            <td colspan="4" class="px-4 py-8 text-center text-sm text-[var(--muted)]">No recent visits yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
