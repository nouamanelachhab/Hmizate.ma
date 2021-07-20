<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Page
Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');
	
// Deals Page
Route::get('/deals', function () {
    return view('frontend.pages.deals');
})->name('deals');
	
// Locations Page
Route::get('/locations', function () {
    return view('frontend.pages.locations');
})->name('locations');
	
// Location Page
Route::get('/locations/{location}', function () {
    return view('frontend.pages.location');
})->name('location');
	
// Cart Page
Route::get('/cart', function () {
    return view('frontend.pages.cart');
})->name('cart');
	
// Checkout Page
Route::get('/checkout', function () {
    return view('frontend.pages.checkout');
})->name('checkout');
	
// Contact Page
Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');
	
// FAQs Page
Route::get('/faqs', function () {
    return view('frontend.pages.faqs');
})->name('faqs');

// Login Page
Route::get('/login', function () {
    return view('frontend.pages.login');
});

// Login Page
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});
	
	
