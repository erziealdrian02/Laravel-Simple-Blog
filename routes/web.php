<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'home'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {  
    // Vehicle Controller
    Route::get('/posts', [PostController::class, 'index'])  
        ->name('posts.index'); 
    Route::get('/posts/create', [PostController::class, 'create'])  
        ->name('posts.create'); 
    Route::post('/posts/store', [PostController::class, 'store'])  
        ->name('posts.store');
    Route::get('/posts/show/{id}', [PostController::class, 'show'])
        ->name('posts.show');
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])  
        ->name('posts.edit');
    Route::put('/posts/update/{id}', [PostController::class, 'update'])  
        ->name('posts.update');
    Route::delete('/posts/delete/{id}', [PostController::class, 'delete'])  
        ->name('posts.delete'); 
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
