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

Route::view('/', 'pages.home')->name('home');
Route::view('/about-salem', 'pages.about')->name('about-salem');
Route::view('/achievements', 'pages.achievement')->name('achievements');
Route::view('/media-center', 'pages.media-center')->name('media-center');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
