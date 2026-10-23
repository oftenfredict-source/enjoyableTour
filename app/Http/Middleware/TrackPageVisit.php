<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use App\Services\GeoIpService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TrackPageVisit
{
    public function __construct(private GeoIpService $geoIp)
    {
    }

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $this->shouldTrack($request, $response)) {
            return $response;
        }

        try {
            $ip = $request->ip();
            $path = '/'.ltrim($request->path(), '/');
            if ($path === '//') {
                $path = '/';
            }

            // Avoid logging every refresh of the same page within 30 minutes.
            $recent = Visit::query()
                ->where('ip_address', $ip)
                ->where('path', $path)
                ->where('created_at', '>=', now()->subMinutes(30))
                ->exists();

            if ($recent) {
                return $response;
            }

            $geo = $this->geoIp->lookup($ip);

            Visit::query()->create([
                'path' => mb_substr($path, 0, 500),
                'method' => $request->method(),
                'ip_address' => $ip,
                'country' => $geo['country'],
                'country_code' => $geo['country_code'],
                'city' => $geo['city'],
                'region' => $geo['region'],
                'referrer' => mb_substr((string) $request->headers->get('referer'), 0, 1000) ?: null,
                'user_agent' => mb_substr((string) $request->userAgent(), 0, 500) ?: null,
                'session_id' => $request->hasSession() ? $request->session()->getId() : null,
            ]);
        } catch (\Throwable) {
            // Never break the public site if analytics fails.
        }

        return $response;
    }

    private function shouldTrack(Request $request, Response $response): bool
    {
        if (! $request->isMethod('GET')) {
            return false;
        }

        if ($request->ajax() || $request->expectsJson()) {
            return false;
        }

        if ($request->is('admin', 'admin/*', 'up', 'css/*', 'js/*', 'images/*', 'storage/*', 'livewire/*')) {
            return false;
        }

        if (Auth::check()) {
            return false;
        }

        $status = $response->getStatusCode();
        if ($status < 200 || $status >= 400) {
            return false;
        }

        $ua = strtolower((string) $request->userAgent());
        if ($ua === '' || preg_match('/bot|crawl|spider|slurp|facebookexternalhit|preview|wget|curl|python|scrapy/i', $ua)) {
            return false;
        }

        $path = $request->path();
        if (preg_match('/\.(css|js|map|jpg|jpeg|png|gif|webp|svg|ico|woff2?|ttf|eot|pdf)$/i', $path)) {
            return false;
        }

        return true;
    }
}
