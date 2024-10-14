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
Route::view('/dashboard', 'dashboard.dashboard');
Route::view('/member', 'dashboard.member');
Route::view('/data_project', 'dashboard.data_project');
Route::view('/data_blog', 'dashboard.data_blog');
Route::view('/data_user', 'dashboard.data_user');
Route::view('/status_member', 'dashboard.status_member');
Route::view('/status_project', 'dashboard.status_project');
Route::view('/kategori', 'dashboard.kategori');
