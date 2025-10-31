<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Static Pages
Route::view('/404', 'pages.404');
Route::view('/about', 'pages.about');
Route::view('/academics', 'pages.academics');
Route::view('/admissions', 'pages.admissions');
Route::view('/alumni', 'pages.alumni');
Route::view('/campus-facilities', 'pages.campus-facilities');
Route::view('/event-details', 'pages.event-details');
Route::view('/events', 'pages.events');
Route::view('/faculty-staff', 'pages.faculty-staff');
Route::view('/', 'pages.index');
Route::view('/news-details', 'pages.news-details');
Route::view('/news', 'pages.news');
Route::view('/privacy', 'pages.privacy');
Route::view('/starter-page', 'pages.starter-page');
Route::view('/students-life', 'pages.students-life');
Route::view('/terms-of-service', 'pages.terms-of-service');

// Contact Page (GET)
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Contact Form (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
