<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');


Route::get('/our-rooms', function () {
    return Inertia::render('Rooms');
})->name('rooms');
Route::get('/room-details', function () {
    return Inertia::render('Details');
})->name('room.detail');
Route::get('/our-services', function () {
    return Inertia::render('Services');
})->name('services');
Route::get('/about-us', function () {
    return Inertia::render('About');
})->name('about');
Route::get('/contact-us', function () {
    return Inertia::render('Contact');
})->name('contact');
Route::get('/blogs-and-gallery', function () {
    return Inertia::render('Media');
})->name('media');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/clear_data', function (){
    Artisan::call('optimize:clear');
    return 'Cache Cleared';
});