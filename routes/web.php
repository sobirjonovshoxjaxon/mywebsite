<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// PageController 
Route::get('/', [PageController::class, 'index'])->name('index.page');
Route::get('/single/page', [PageController::class, 'single'])->name('single.page');

//AdminController 
Route::get('logout',[AdminController::class, 'logout'])->name('logout.page');
Route::get('admin/index',[AdminController::class, 'index'])->name('admin.index');


//PostController 
Route::resource('/posts', PostController::class);





// Laravel Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
