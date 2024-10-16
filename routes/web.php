<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [CobaController::class, 'index']);

Route::view('/', 'landing-page.home');
Route::view('/project', 'landing-page.project');
Route::view('/detail', 'landing-page.detailproject');
Route::view('/about', 'landing-page.about');
Route::view('/contact', 'landing-page.contact');
Route::view('/blog', 'landing-page.blog');
Route::view('/read', 'landing-page.detailpost');

Route::view('/dashboard', 'dashboard.dashboard');
Route::view('/member', 'dashboard.member');
Route::view('/data_project', 'dashboard.data_project');
Route::view('/data_blog', 'dashboard.data_blog');
Route::view('/data_user', 'dashboard.data_user');
Route::view('/status_member', 'dashboard.status_member');
Route::view('/status_project', 'dashboard.status_project');
Route::view('/kategori', 'dashboard.kategori');
