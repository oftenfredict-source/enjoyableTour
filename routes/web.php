<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin panel (Invenza dashboard template)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::resource('tours', TourController::class)->except(['show']);
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tour-grid', [TourPageController::class, 'grid'])->name('turie.tour-grid');
Route::get('/tours', [TourPageController::class, 'grid'])->name('tours.index');
Route::get('/tours/{category}', [TourPageController::class, 'grid'])
    ->whereIn('category', array_keys(\App\Models\Tour::CATEGORIES))
    ->name('tours.category');
Route::get('/tour/{slug}', [TourPageController::class, 'show'])->name('tour.show');

/*
|--------------------------------------------------------------------------
| Turie frontend pages
| Template source: public/turiehtml-10/turie
| Blade views: resources/views/turie
|--------------------------------------------------------------------------
*/

$turiePages = [
    '/index-2' => 'index-2',
    '/index-3' => 'index-3',
    '/index-4' => 'index-4',
    '/index-5' => 'index-5',
    '/index-6' => 'index-6',
    '/index-7' => 'index-7',
    '/about' => 'about',
    '/contact' => 'contact',
    '/faq' => 'faq',
    '/testimonial' => 'testimonial',
    '/privacy-policy' => 'privacy-policy',
    '/career' => 'career',
    '/career-details' => 'career-details',
    '/login' => 'login',
    '/register' => 'register',
    '/forgot' => 'forgot',
    '/blog' => 'blog',
    '/blog-list' => 'blog-list',
    '/blog-standard' => 'blog-standard',
    '/blog-details' => 'blog-details',
    '/blog-details-2' => 'blog-details-2',
    '/shop' => 'shop',
    '/shop-details' => 'shop-details',
    '/cart' => 'cart',
    '/checkout' => 'checkout',
    '/wishlist' => 'wishlist',
    '/city-details' => 'city-details',
    '/city-details-2' => 'city-details-2',
    '/city-details-3' => 'city-details-3',
    '/city-details-4' => 'city-details-4',
    '/tour-grid-map' => 'tour-grid-map',
    '/tour-grid-sidebar' => 'tour-grid-sidebar',
    '/tour-list-left-sidebar' => 'tour-list-left-sidebar',
    '/tour-list-right-sidebar' => 'tour-list-right-sidebar',
    '/tour-list-map' => 'tour-list-map',
    '/tour-details' => 'tour-details',
    '/tour-details-2' => 'tour-details-2',
    '/tour-details-3' => 'tour-details-3',
    '/tour-details-4' => 'tour-details-4',
    '/tour-details-5' => 'tour-details-5',
    '/tour-details-6' => 'tour-details-6',
    '/tour-details-7' => 'tour-details-7',
    '/tour-checkout' => 'tour-checkout',
    '/tour-guide' => 'tour-guide',
    '/tour-guide-details' => 'tour-guide-details',
];

foreach ($turiePages as $uri => $view) {
    Route::view($uri, 'turie.' . $view)->name('turie.' . $view);
}
