<?php

use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanningController;
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
        Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
        Route::get('/inquiries/{inquiry}', [InquiryController::class, 'show'])->name('inquiries.show');
        Route::put('/inquiries/{inquiry}', [InquiryController::class, 'update'])->name('inquiries.update');
        Route::delete('/inquiries/{inquiry}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');
        Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
    });
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tour-grid', [TourPageController::class, 'grid'])->name('turie.tour-grid');
Route::get('/tours', [TourPageController::class, 'grid'])->name('tours.index');
Route::get('/tours/{category}', [TourPageController::class, 'grid'])
    ->whereIn('category', array_keys(\App\Models\Tour::CATEGORIES))
    ->name('tours.category');
Route::get('/tour/{slug}', [TourPageController::class, 'show'])->name('tour.show');
Route::get('/find-your-tour', [TourPageController::class, 'finder'])->name('tours.finder');
Route::get('/css/enjoyable.live.css', [PlanningController::class, 'stylesheet']);
Route::get('/images/{folder}/{file}', [PlanningController::class, 'publicImage'])
    ->where('folder', 'planning|about')
    ->where('file', '[A-Za-z0-9._-]+');
Route::get('/plan', [PlanningController::class, 'index'])->name('plan.index');
Route::get('/plan/best-time', [PlanningController::class, 'bestTime'])->name('plan.best-time');
Route::get('/plan/safari-budget', [PlanningController::class, 'budget'])->name('plan.budget');
Route::get('/plan/build', [PlanningController::class, 'build'])->name('plan.build');
Route::get('/plan/kilimanjaro', [PlanningController::class, 'kilimanjaro'])->name('plan.kilimanjaro');
Route::get('/plan/migration', [PlanningController::class, 'migration'])->name('plan.migration');
Route::get('/plan/packing', [PlanningController::class, 'packing'])->name('plan.packing');
Route::get('/parks', [PlanningController::class, 'parks'])->name('parks.index');
Route::get('/parks/{slug}', [PlanningController::class, 'park'])
    ->whereIn('slug', array_keys(\App\Support\PlanningData::parks()))
    ->name('parks.show');
Route::permanentRedirect('/tour-grid-sidebar', '/find-your-tour');
Route::permanentRedirect('/tour-details', '/tours');

/*
|--------------------------------------------------------------------------
| Turie frontend pages
| Template source: public/turiehtml-10/turie
| Blade views: resources/views/turie
|--------------------------------------------------------------------------
*/

$turiePages = [
    '/about' => 'about',
    '/contact' => 'contact',
    '/faq' => 'faq',
    '/testimonial' => 'testimonial',
    '/privacy-policy' => 'privacy-policy',
    '/blog' => 'blog',
    '/blog-list' => 'blog-list',
    '/blog-standard' => 'blog-standard',
    '/blog-details' => 'blog-details',
    '/blog-details-2' => 'blog-details-2',
];

foreach ($turiePages as $uri => $view) {
    Route::view($uri, 'turie.' . $view)->name('turie.' . $view);
}

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
