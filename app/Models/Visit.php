<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'path',
        'method',
        'ip_address',
        'country',
        'country_code',
        'city',
        'region',
        'referrer',
        'user_agent',
        'session_id',
    ];

    public function locationLabel(): string
    {
        $parts = array_filter([$this->city, $this->country]);

        return $parts ? implode(', ', $parts) : ($this->country ?: 'Unknown');
    }
}
