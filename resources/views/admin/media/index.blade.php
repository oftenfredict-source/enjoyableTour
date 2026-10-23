@extends('admin.layouts.app')

@section('title', 'Media Library')

@section('content')
<div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4 mb-6">
  <div>
    <h1 class="text-xl font-bold text-[var(--text)]">Media Library</h1>
    <p class="text-sm text-[var(--muted)] mt-1">Store, replace, and manage website images and videos.</p>
  </div>
  <form method="GET" action="{{ route('admin.media.index') }}" class="flex flex-wrap gap-2">
    <input type="hidden" name="type" value="{{ $type }}">
    <input type="search" name="q" value="{{ $q }}" placeholder="Search media..." class="form-input" style="height:38px;min-width:220px;">
    <button type="submit" class="btn btn-secondary btn-sm">Search</button>
  </form>
</div>

@if (session('success'))
  <div class="mb-4 rounded-xl px-4 py-3 text-sm" style="background:rgba(34,181,115,0.12);color:#15803d;border:1px solid rgba(34,181,115,0.25);">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="mb-4 rounded-xl px-4 py-3 text-sm" style="background:rgba(239,68,68,0.1);color:#DC2626;border:1px solid rgba(239,68,68,0.2);">
    {{ $errors->first() }}
  </div>
@endif

<div class="card mb-5">
  <div class="card-header">
    <div>
      <h2 class="card-title">Upload files</h2>
      <p class="card-subtitle">Images (JPG, PNG, WEBP, GIF) and videos (MP4, WEBM). Max 50MB each.</p>
    </div>
  </div>
  <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data" class="p-5 grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
    @csrf
    <div class="md:col-span-2">
      <label class="form-label" for="media-files">Choose files</label>
      <input id="media-files" type="file" name="files[]" multiple required accept="image/jpeg,image/png,image/webp,image/gif,video/mp4,video/webm,video/quicktime" class="form-input">
    </div>
    <div>
      <label class="form-label" for="media-folder">Folder (optional)</label>
      <input id="media-folder" type="text" name="folder" value="library" class="form-input" placeholder="library">
    </div>
    <div class="md:col-span-3">
      <button type="submit" class="btn btn-primary">Upload to library</button>
    </div>
  </form>
</div>

<div class="flex flex-wrap gap-2 mb-5">
  <a href="{{ route('admin.media.index', array_filter(['q' => $q ?: null])) }}" class="btn {{ $type === '' ? 'btn-primary' : 'btn-secondary' }} btn-sm">All ({{ $counts['all'] }})</a>
  <a href="{{ route('admin.media.index', array_filter(['type' => 'image', 'q' => $q ?: null])) }}" class="btn {{ $type === 'image' ? 'btn-primary' : 'btn-secondary' }} btn-sm">Images ({{ $counts['image'] }})</a>
  <a href="{{ route('admin.media.index', array_filter(['type' => 'video', 'q' => $q ?: null])) }}" class="btn {{ $type === 'video' ? 'btn-primary' : 'btn-secondary' }} btn-sm">Videos ({{ $counts['video'] }})</a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
  @forelse ($media as $item)
    <div class="card overflow-hidden">
      <div style="aspect-ratio:16/10;background:var(--background);display:flex;align-items:center;justify-content:center;overflow:hidden;">
        @if ($item->isImage())
          <img src="{{ $item->url() }}" alt="{{ $item->alt ?: $item->name }}" style="width:100%;height:100%;object-fit:cover;">
        @elseif ($item->isVideo())
          <video src="{{ $item->url() }}" controls style="width:100%;height:100%;object-fit:cover;background:#000;"></video>
        @else
          <div class="text-sm text-[var(--muted)]">{{ strtoupper($item->type) }}</div>
        @endif
      </div>
      <div class="p-4 space-y-3">
        <div>
          <div class="text-sm font-semibold text-[var(--text)] truncate" title="{{ $item->name }}">{{ $item->name }}</div>
          <div class="text-xs text-[var(--muted)] mt-1">{{ strtoupper($item->type) }} · {{ $item->humanSize() }} · {{ $item->created_at?->format('d M Y') }}</div>
        </div>

        <div class="flex gap-2">
          <input type="text" readonly value="{{ $item->url() }}" class="form-input text-xs" style="height:34px;" onclick="this.select();document.execCommand('copy');">
          <button type="button" class="btn btn-secondary btn-sm" onclick="navigator.clipboard.writeText(@js($item->url()))">Copy</button>
        </div>

        <form action="{{ route('admin.media.update', $item) }}" method="POST" enctype="multipart/form-data" class="space-y-2 border-t pt-3" style="border-color:var(--border);">
          @csrf
          @method('PUT')
          <input type="text" name="name" value="{{ $item->name }}" class="form-input" style="height:36px;" placeholder="Name" required>
          <input type="text" name="alt" value="{{ $item->alt }}" class="form-input" style="height:36px;" placeholder="Alt text">
          <label class="text-xs text-[var(--muted)]">Replace file</label>
          <input type="file" name="file" accept="image/jpeg,image/png,image/webp,image/gif,video/mp4,video/webm,video/quicktime" class="form-input" style="height:36px;padding-top:6px;">
          <div class="flex gap-2">
            <button type="submit" class="btn btn-primary btn-sm flex-1">Save / Replace</button>
          </div>
        </form>

        <form action="{{ route('admin.media.destroy', $item) }}" method="POST" onsubmit="return confirm('Delete this media file?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline btn-sm w-full" style="color:#DC2626;">Delete</button>
        </form>
      </div>
    </div>
  @empty
    <div class="card p-8 text-center text-sm text-[var(--muted)] sm:col-span-2 xl:col-span-3">
      No media files yet. Upload images or videos above.
    </div>
  @endforelse
</div>

@if ($media->hasPages())
  <div class="mt-5">
    {{ $media->links() }}
  </div>
@endif
@endsection
