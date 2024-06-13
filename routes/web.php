<?php

use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

Route::get('/blog', [PostController::class, 'blog'])->name('blog');

Route::get('/blog/{slug}', [PostController::class, 'showDetail'])->name('blogDetail');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('dashboard/post')->name('dashboard.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::get('/edit/{slug}', [PostController::class, 'edit'])->name('edit');
    Route::patch('/update/{slug}', [PostController::class, 'update'])->name('update');
    Route::delete('/destroy/{slug}', [PostController::class, 'destroy'])->name('destroy');
});

// Route::get('/blog/{slug}', function ($slug) {
//     $post = Post::where('slug', $slug)->first();
//     return view('blogDetail', compact('post'));
// })->name('blogDetail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
