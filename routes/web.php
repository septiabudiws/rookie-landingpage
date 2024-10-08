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