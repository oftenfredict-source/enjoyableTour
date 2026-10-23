@extends('admin.layouts.app')

@section('title', 'Inquiry')

@section('content')
@php $currentPage = 'messages'; @endphp

<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
  <div>
    <a href="{{ route('admin.inquiries.index') }}" class="text-sm text-[var(--muted)] hover:text-[var(--primary)]">&larr; Back to inquiries</a>
    <h1 class="text-xl font-bold text-[var(--text)] mt-2">{{ $inquiry->name }}</h1>
    <p class="text-sm text-[var(--muted)] mt-1">Received {{ $inquiry->created_at?->format('d M Y \a\t H:i') }}</p>
  </div>
  <div class="flex flex-wrap gap-2">
    <a href="mailto:{{ $inquiry->email }}" class="btn btn-secondary btn-sm">Reply by email</a>
    @if ($inquiry->phone)
      <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" target="_blank" rel="noopener" class="btn btn-primary btn-sm">WhatsApp</a>
    @endif
  </div>
</div>

@if (session('success'))
  <div class="mb-4 rounded-xl px-4 py-3 text-sm" style="background:rgba(34,181,115,0.12);color:#15803d;border:1px solid rgba(34,181,115,0.25);">
    {{ session('success') }}
  </div>
@endif

<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-5">
  <div class="lg:col-span-2 card">
    <div class="card-header">
      <div>
        <h2 class="card-title">Message</h2>
        <p class="card-subtitle">{{ $inquiry->interestLabel() }}</p>
      </div>
    </div>
    <div class="p-5">
      <p class="text-sm text-[var(--text)] whitespace-pre-wrap leading-relaxed">{{ $inquiry->message }}</p>
    </div>
  </div>

  <div class="space-y-4">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title">Contact details</h2>
      </div>
      <div class="p-5 space-y-3 text-sm">
        <div>
          <div class="text-xs text-[var(--muted)] uppercase font-semibold">Name</div>
          <div class="text-[var(--text)] font-medium mt-1">{{ $inquiry->name }}</div>
        </div>
        <div>
          <div class="text-xs text-[var(--muted)] uppercase font-semibold">Email</div>
          <div class="text-[var(--text)] font-medium mt-1"><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></div>
        </div>
        <div>
          <div class="text-xs text-[var(--muted)] uppercase font-semibold">Phone</div>
          <div class="text-[var(--text)] font-medium mt-1">{{ $inquiry->phone ?: '—' }}</div>
        </div>
        <div>
          <div class="text-xs text-[var(--muted)] uppercase font-semibold">Travel date</div>
          <div class="text-[var(--text)] font-medium mt-1">{{ $inquiry->travel_date ?: '—' }}</div>
        </div>
        <div>
          <div class="text-xs text-[var(--muted)] uppercase font-semibold">Guests</div>
          <div class="text-[var(--text)] font-medium mt-1">{{ $inquiry->guests ?: '—' }}</div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h2 class="card-title">Status</h2>
      </div>
      <div class="p-5 space-y-3">
        <form action="{{ route('admin.inquiries.update', $inquiry) }}" method="POST" class="space-y-3">
          @csrf
          @method('PUT')
          <select name="status" class="w-full rounded-xl border px-3 py-2 text-sm" style="border-color:var(--border);background:var(--card);color:var(--text);">
            @foreach (\App\Models\Inquiry::STATUSES as $value => $label)
              <option value="{{ $value }}" @selected($inquiry->status === $value)>{{ $label }}</option>
            @endforeach
          </select>
          <button type="submit" class="btn btn-primary w-full">Update status</button>
        </form>
        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" onsubmit="return confirm('Delete this inquiry?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline w-full" style="color:#DC2626;">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
