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

Route::get('/', \App\Http\Livewire\Homepage::class)->name('homepage');
Route::get('/about', \App\Http\Livewire\About::class)->name('about');
Route::get('/contact', \App\Http\Livewire\Contact::class)->name('contact');

Route::get('/open-ai', \App\Http\Livewire\Openai::class)->name('openai');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
