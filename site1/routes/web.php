<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SectionController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout',[SectionController::class,'logout'])->name('logout');
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/sections', [SectionController::class, 'index'])->name('admin.sections.index');
    Route::get('/sections/{section}/edit', [SectionController::class, 'edit'])->name('admin.sections.edit');
    Route::put('/sections/{section}', [SectionController::class, 'update'])->name('admin.sections.update');
    Route::post('/sections/store', [SectionController::class, 'store'])->name('admin.sections.store');
    Route::get('/sections/create', [SectionController::class, 'create'])->name('admin.sections.create');
});
Route::resource('user', 'UserController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
