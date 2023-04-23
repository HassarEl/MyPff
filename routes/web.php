<?php

use App\Models\User;
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
    $jardiniers = User::all();
    return view('dashboard', compact('jardiniers'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route Jardin 
    Route::get('/jardin', [JardinController::class, 'index'])->name('jardin');
    Route::get('/jardin/create', [JardinController::class, 'create'])->name('jardin.create');
    Route::post('/jardin/store', [JardinController::class, 'store'])->name('jardin.store');
    Route::get('/jardin/{id}', [JardinController::class, 'show'])->name('jardin.show');
});

require __DIR__.'/auth.php';



// Route Jardinier
Route::get('/jardinier',function(){
    $jardiniers = User::all();
    return view('jardinier.index', compact('jardiniers'));
})->name('jardinier');