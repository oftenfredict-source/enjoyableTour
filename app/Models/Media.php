<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = [
        'name',
        'file_name',
        'path',
        'disk',
        'mime_type',
        'type',
        'size',
        'alt',
        'folder',
    ];

    protected function casts(): array
    {
        return [
            'size' => 'integer',
        ];
    }

    public function url(): string
    {
        // Relative public path so URLs work with artisan serve and XAMPP alike.
        return '/storage/'.ltrim($this->path, '/');
    }

    public function isImage(): bool
    {
        return $this->type === 'image';
    }

    public function isVideo(): bool
    {
        return $this->type === 'video';
    }

    public function humanSize(): string
    {
        $bytes = max(0, (int) $this->size);
        $units = ['B', 'KB', 'MB', 'GB'];
        $power = $bytes > 0 ? min((int) floor(log($bytes, 1024)), count($units) - 1) : 0;
        $value = $bytes / (1024 ** $power);

        return round($value, $power > 0 ? 1 : 0).' '.$units[$power];
    }

    public static function detectType(?string $mime): string
    {
        $mime = strtolower((string) $mime);

        if (str_starts_with($mime, 'image/')) {
            return 'image';
        }

        if (str_starts_with($mime, 'video/')) {
            return 'video';
        }

        return 'other';
    }
}
