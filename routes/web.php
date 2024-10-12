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
Route::view('/', 'landing-page.home');
Route::view('/project', 'landing-page.project');
Route::view('/about', 'landing-page.about');
Route::view('/contact', 'landing-page.contact');
Route::view('/blog', 'landing-page.blog');
Route::view('/blog-tutorials', 'landing-page.blog-tutorials');
Route::view('/blog-news', 'landing-page.blog-news');
Route::view('/blog-events', 'landing-page.blog-events');
Route::view('/blog-community', 'landing-page.blog-community');
Route::view('/blog-announcements', 'landing-page.blog-announcements');