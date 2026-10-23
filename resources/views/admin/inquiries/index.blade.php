@extends('admin.layouts.app')

@section('title', 'Inquiries')

@section('content')
@php $currentPage = 'messages'; @endphp

<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
  <div>
    <h1 class="text-xl font-bold text-[var(--text)]">Inquiries</h1>
    <p class="text-sm text-[var(--muted)] mt-1">Messages submitted from the contact page.</p>
  </div>
</div>

@if (session('success'))
  <div class="mb-4 rounded-xl px-4 py-3 text-sm" style="background:rgba(34,181,115,0.12);color:#15803d;border:1px solid rgba(34,181,115,0.25);">
    {{ session('success') }}
  </div>
@endif

<div class="flex flex-wrap gap-2 mb-5">
  <a href="{{ route('admin.inquiries.index') }}" class="btn {{ $status === '' ? 'btn-primary' : 'btn-secondary' }} btn-sm">All ({{ $counts['all'] }})</a>
  <a href="{{ route('admin.inquiries.index', ['status' => 'new']) }}" class="btn {{ $status === 'new' ? 'btn-primary' : 'btn-secondary' }} btn-sm">New ({{ $counts['new'] }})</a>
  <a href="{{ route('admin.inquiries.index', ['status' => 'read']) }}" class="btn {{ $status === 'read' ? 'btn-primary' : 'btn-secondary' }} btn-sm">Read ({{ $counts['read'] }})</a>
  <a href="{{ route('admin.inquiries.index', ['status' => 'archived']) }}" class="btn {{ $status === 'archived' ? 'btn-primary' : 'btn-secondary' }} btn-sm">Archived ({{ $counts['archived'] }})</a>
</div>

<div class="card">
  <div class="overflow-x-auto">
    <table class="w-full text-left">
      <thead>
        <tr class="border-b" style="border-color:var(--border);">
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">From</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Interest</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Message</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Status</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase">Received</th>
          <th class="px-4 py-3 text-xs font-semibold text-[var(--muted)] uppercase text-right">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($inquiries as $inquiry)
          <tr class="border-b" style="border-color:var(--border);{{ $inquiry->isNew() ? 'background:rgba(34,181,115,0.04);' : '' }}">
            <td class="px-4 py-3">
              <div class="text-sm font-semibold text-[var(--text)]">{{ $inquiry->name }}</div>
              <div class="text-xs text-[var(--muted)]">{{ $inquiry->email }}</div>
              @if ($inquiry->phone)
                <div class="text-xs text-[var(--muted)]">{{ $inquiry->phone }}</div>
              @endif
            </td>
            <td class="px-4 py-3 text-sm text-[var(--text)]">{{ $inquiry->interestLabel() }}</td>
            <td class="px-4 py-3 text-sm text-[var(--muted)] max-w-xs truncate">{{ \Illuminate\Support\Str::limit($inquiry->message, 80) }}</td>
            <td class="px-4 py-3">
              @if ($inquiry->status === 'new')
                <span class="badge badge-warning">New</span>
              @elseif ($inquiry->status === 'archived')
                <span class="badge badge-info">Archived</span>
              @else
                <span class="badge badge-success">Read</span>
              @endif
            </td>
            <td class="px-4 py-3 text-sm text-[var(--muted)]">{{ $inquiry->created_at?->format('d M Y H:i') }}</td>
            <td class="px-4 py-3 text-right">
              <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="btn btn-primary btn-sm">Open</a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6" class="px-4 py-10 text-center text-sm text-[var(--muted)]">No inquiries yet.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  @if ($inquiries->hasPages())
    <div class="p-4 border-t" style="border-color:var(--border);">
      {{ $inquiries->links() }}
    </div>
  @endif
</div>
@endsection
