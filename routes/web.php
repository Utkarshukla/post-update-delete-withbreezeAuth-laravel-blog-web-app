<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/post', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('post_index');
Route::post('/post', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('post_create');

Route::get('/total-post', [PostController::class, 'show'])->middleware(['auth', 'verified'])->name('total-post');

Route::get('/post-edit/{id}', [PostController::class, 'edit'])->middleware(['auth', 'verified'])->name('post-edit');
Route::post('/post-edit/{id}', [PostController::class, 'updatepost'])->middleware(['auth', 'verified'])->name('updatepost');
Route::get('/post-delete/{id}', [PostController::class, 'destroy'])->middleware(['auth', 'verified'])->name('post-delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
