<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/wa',[HomeController::class, 'wa'])->name('wa');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/projects', [ProjectController::class, 'index'])->name('project');
Route::get('/services', [ServiceController::class, 'index'])->name('service');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');