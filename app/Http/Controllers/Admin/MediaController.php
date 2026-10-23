<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function index(Request $request): View
    {
        $type = $request->string('type')->toString();
        $q = trim($request->string('q')->toString());

        $media = Media::query()
            ->when(in_array($type, ['image', 'video', 'other'], true), fn ($query) => $query->where('type', $type))
            ->when($q !== '', function ($query) use ($q) {
                $query->where(function ($inner) use ($q) {
                    $inner->where('name', 'like', "%{$q}%")
                        ->orWhere('file_name', 'like', "%{$q}%")
                        ->orWhere('alt', 'like', "%{$q}%");
                });
            })
            ->latest()
            ->paginate(24)
            ->withQueryString();

        $counts = [
            'all' => Media::query()->count(),
            'image' => Media::query()->where('type', 'image')->count(),
            'video' => Media::query()->where('type', 'video')->count(),
        ];

        return view('admin.media.index', compact('media', 'counts', 'type', 'q'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'files' => ['required', 'array', 'min:1'],
            'files.*' => ['file', 'max:51200', 'mimetypes:image/jpeg,image/png,image/webp,image/gif,video/mp4,video/webm,video/quicktime'],
            'folder' => ['nullable', 'string', 'max:100'],
        ]);

        $folder = trim((string) $request->input('folder', 'library'));
        $folder = $folder !== '' ? Str::slug($folder) : 'library';
        $uploaded = 0;

        foreach ($request->file('files', []) as $file) {
            $mime = $file->getMimeType();
            $type = Media::detectType($mime);
            $path = $file->store('media/'.$folder, 'public');

            Media::query()->create([
                'name' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
                'file_name' => $file->getClientOriginalName(),
                'path' => $path,
                'disk' => 'public',
                'mime_type' => $mime,
                'type' => $type,
                'size' => $file->getSize() ?: 0,
                'alt' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
                'folder' => $folder,
            ]);

            $uploaded++;
        }

        return back()->with('success', $uploaded.' file(s) uploaded to the media library.');
    }

    public function update(Request $request, Media $medium): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:180'],
            'alt' => ['nullable', 'string', 'max:255'],
            'file' => ['nullable', 'file', 'max:51200', 'mimetypes:image/jpeg,image/png,image/webp,image/gif,video/mp4,video/webm,video/quicktime'],
        ]);

        $medium->name = $data['name'];
        $medium->alt = $data['alt'] ?? null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $folder = $medium->folder ?: 'library';

            if ($medium->path && Storage::disk($medium->disk)->exists($medium->path)) {
                Storage::disk($medium->disk)->delete($medium->path);
            }

            $mime = $file->getMimeType();
            $path = $file->store('media/'.$folder, 'public');

            $medium->path = $path;
            $medium->file_name = $file->getClientOriginalName();
            $medium->mime_type = $mime;
            $medium->type = Media::detectType($mime);
            $medium->size = $file->getSize() ?: 0;
        }

        $medium->save();

        return back()->with('success', 'Media file updated.');
    }

    public function destroy(Media $medium): RedirectResponse
    {
        if ($medium->path && Storage::disk($medium->disk)->exists($medium->path)) {
            Storage::disk($medium->disk)->delete($medium->path);
        }

        $medium->delete();

        return back()->with('success', 'Media file deleted.');
    }
}
