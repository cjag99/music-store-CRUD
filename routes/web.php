<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InstrumentController;
use App\Models\Instrument;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['instrumentCount' => Instrument::count(), 'categoryCount' => Category::count(), 'userCount' => User::count(), 'latestInstruments' => Instrument::latest()->take(5)->with('category')->get(), 'categories' => Category::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('categories', [CategoryController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('categories');
Route::get('categories/create', [CategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('categories.store');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('categories.destroy');
Route::get('categories/{category}', [CategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('categories.show');
// Instruments CRUD
Route::get('instruments', [InstrumentController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('instruments');
Route::get('instruments/create', [InstrumentController::class, 'create'])->middleware(['auth', 'verified'])->name('instruments.create');
Route::post('instruments', [InstrumentController::class, 'store'])->middleware(['auth', 'verified'])->name('instruments.store');
Route::get('instruments/{instrument}', [InstrumentController::class, 'show'])->middleware(['auth', 'verified'])->name('instruments.show');
Route::get('instruments/{instrument}/edit', [InstrumentController::class, 'edit'])->middleware(['auth', 'verified'])->name('instruments.edit');
Route::put('instruments/{instrument}', [InstrumentController::class, 'update'])->middleware(['auth', 'verified'])->name('instruments.update');
Route::delete('instruments/{instrument}', [InstrumentController::class, 'destroy'])->middleware(['auth', 'verified'])->name('instruments.destroy');
require __DIR__ . '/auth.php';
