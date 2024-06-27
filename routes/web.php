<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::post('/contact', 'ContactController@store')->name('contact.store');


Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

require_once app_path('Http/Controllers/HomeController.php');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
Route::get('/projects/create', [AdminController::class, 'createProject'])->name('admin.projects.create');
Route::post('/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
Route::get('/projects/{project}/edit', [AdminController::class, 'editProject'])->name('admin.projects.edit');
Route::put('/projects/{project}', [AdminController::class, 'updateProject'])->name('admin.projects.update');
Route::delete('/projects/{project}', [AdminController::class, 'destroyProject'])->name('admin.projects.destroy');
});