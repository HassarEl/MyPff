<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JardinController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route Jardin 
Route::get('/jardin', [JardinController::class, 'index'])->name('jardin');
Route::get('/jardin/create', [JardinController::class, 'create'])->name('jardin.create');
Route::post('/jardin/store', [JardinController::class, 'store'])->name('jardin.store');

// Route Jardinier
Route::get('/jardinier',function(){
    return view('jardinier.index');
})->name('jardinier');