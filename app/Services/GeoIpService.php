<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeoIpService
{
    /**
     * @return array{country:?string,country_code:?string,city:?string,region:?string}
     */
    public function lookup(?string $ip): array
    {
        $empty = [
            'country' => null,
            'country_code' => null,
            'city' => null,
            'region' => null,
        ];

        if (! $ip || $this->isPrivateIp($ip)) {
            return [
                'country' => 'Local / Unknown',
                'country_code' => 'XX',
                'city' => null,
                'region' => null,
            ];
        }

        return Cache::remember("geoip:{$ip}", now()->addDays(7), function () use ($ip, $empty) {
            try {
                $response = Http::timeout(2)
                    ->acceptJson()
                    ->get("http://ip-api.com/json/{$ip}", [
                        'fields' => 'status,country,countryCode,regionName,city',
                    ]);

                if (! $response->ok()) {
                    return $empty;
                }

                $data = $response->json();
                if (($data['status'] ?? '') !== 'success') {
                    return $empty;
                }

                return [
                    'country' => $data['country'] ?? null,
                    'country_code' => $data['countryCode'] ?? null,
                    'city' => $data['city'] ?? null,
                    'region' => $data['regionName'] ?? null,
                ];
            } catch (\Throwable $e) {
                Log::debug('GeoIP lookup failed: '.$e->getMessage());

                return $empty;
            }
        });
    }

    private function isPrivateIp(string $ip): bool
    {
        if (! filter_var($ip, FILTER_VALIDATE_IP)) {
            return true;
        }

        return ! filter_var(
            $ip,
            FILTER_VALIDATE_IP,
            FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
        );
    }
}
