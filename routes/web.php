<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('web-design', function () {
    return view('web-design');
})->name('web-design');

Route::get('graphic-design', function () {
    return view('graphic-design');
})->name('graphic-design');



Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('portfolio-details', function () {
    return view('portfolio-details');
})->name('portfolio-details');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('index-light', function () {
    return view('index-light');
})->name('index-light');

Route::get('service-details', function () {
    return view('service-details');
})->name('service-details');

Route::get('index-original', function () {
    return view('index-original');
})->name('index-original');

Route::get('maintanance-mode', function () {
    return view('maintanance-mode');
})->name('maintanance-mode');


use App\Http\Controllers\FAQController;

Route::get('/faq', [FAQController::class, 'index']);
