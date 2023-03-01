<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('front.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blog'])->name('blogs');
Route::get('/service/{id}', [App\Http\Controllers\HomeController::class, 'single_service'])->name('service');
Route::post('/contact/form', [App\Http\Controllers\HomeController::class, 'contact_form'])->name('contact.form');
Route::post('/job/form', [App\Http\Controllers\HomeController::class, 'job_form'])->name('job.form');
Route::post('/newsletter/form', [App\Http\Controllers\HomeController::class, 'newsletter_form'])->name('newsletter.form');

Auth::routes();




