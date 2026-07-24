<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\ClientLogo;
use App\Models\CompanyStatistic;
use App\Models\CompanyJourney;

Route::get('/', function () {
    return view('welcome', [
        'services' => Service::take(5)->get(),
        'portfolios' => Portfolio::take(3)->get(),
        'testimonials' => Testimonial::orderBy('sort_order')->take(3)->get(),
        'clientLogos' => ClientLogo::where('is_active', true)->orderBy('sort_order')->get(),
        'statistics' => CompanyStatistic::orderBy('sort_order')->get(),
    ]);
});

Route::get('/services', function () {
    return view('services', [
        'services' => Service::all()
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        'portfolios' => Portfolio::all()
    ]);
});

Route::get('/portfolio/{slug}', function ($slug) {
    $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
    return view('portfolio-detail', ['portfolio' => $portfolio]);
});

Route::get('/about', function () {
    return view('about', [
        'journeys' => CompanyJourney::orderBy('sort_order')->get(),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
