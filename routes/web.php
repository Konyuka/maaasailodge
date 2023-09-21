<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SubscriberController;



Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');


Route::get('/our-rooms', function () {
    return Inertia::render('Rooms');
})->name('rooms');
Route::get('/room-details-park-view', function () {
    return Inertia::render('Detailsp');
})->name('room.detail.park');
Route::get('/room-details-garden-view', function () {
    return Inertia::render('Detailsg');
})->name('room.detail.garden');
Route::get('/room-details-villa', function () {
    return Inertia::render('Detailsv');
})->name('room.detail.villa');
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
Route::get('/booking', function () {
    return Inertia::render('Booking');
})->name('booking');

Route::post('/submit-contact-form', [ContactFormController::class, 'submitContactForm'])->name('contact.form');
Route::post('/submit-booking-form', [BookingController::class, 'submitBookingForm'])->name('submit.booking');
Route::post('/register-subscriber', [SubscriberController::class, 'registerSubscriber'])->name('register.subscriber');

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