<?php

use Illuminate\Support\Facades\Route;

Route::get('/404', fn() => view('pages.404'));
Route::get('/about', fn() => view('pages.about'));
Route::get('/academics', fn() => view('pages.academics'));
Route::get('/admissions', fn() => view('pages.admissions'));
Route::get('/alumni', fn() => view('pages.alumni'));
Route::get('/campus-facilities', fn() => view('pages.campus-facilities'));
Route::get('/contact', fn() => view('pages.contact'));
Route::get('/event-details', fn() => view('pages.event-details'));
Route::get('/events', fn() => view('pages.events'));
Route::get('/faculty-staff', fn() => view('pages.faculty-staff'));
Route::get('/', fn() => view('pages.index'));
Route::get('/news-details', fn() => view('pages.news-details'));
Route::get('/news', fn() => view('pages.news'));
Route::get('/privacy', fn() => view('pages.privacy'));
Route::get('/starter-page', fn() => view('pages.starter-page'));
Route::get('/students-life', fn() => view('pages.students-life'));
Route::get('/terms-of-service', fn() => view('pages.terms-of-service'));
