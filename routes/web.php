<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/dairy', function () {
    return view('pages.dairy');
});

Route::get('/livestock', function () {
    return view('pages.livestock');
});

Route::get('/crops', function () {
    return view('pages.crops');
});

Route::get('/investment', function () {
    return view('pages.investment');
});

Route::get('/retirement', function () {
    return view('pages.retirement');
});

Route::get('/sustainability', function () {
    return view('pages.sustainability');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/testimonials', function () {
    return view('pages.testimonials');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admin', function () {
    return redirect('/admin/dashboard');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
