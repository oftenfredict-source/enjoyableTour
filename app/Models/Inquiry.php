<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    public const INTERESTS = [
        'trekking' => 'Kilimanjaro / Trekking',
        'safari' => 'Safari',
        'daytrip' => 'Day trip',
        'combo' => 'Combo trip',
        'other' => 'Other',
    ];

    public const STATUSES = [
        'new' => 'New',
        'read' => 'Read',
        'archived' => 'Archived',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'interest',
        'travel_date',
        'guests',
        'message',
        'status',
        'read_at',
        'ip_address',
        'user_agent',
    ];

    protected function casts(): array
    {
        return [
            'read_at' => 'datetime',
            'guests' => 'integer',
        ];
    }

    public function interestLabel(): string
    {
        return self::INTERESTS[$this->interest] ?? ($this->interest ?: 'General');
    }

    public function markRead(): void
    {
        if ($this->status === 'new') {
            $this->forceFill([
                'status' => 'read',
                'read_at' => now(),
            ])->save();
        }
    }

    public function isNew(): bool
    {
        return $this->status === 'new';
    }
}
