<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BaptismalController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\ReceiptController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/register/baptismal', function () {
//     return view('pages.register');
// })->middleware(['auth', 'verified'])->name('register.baptismal');
Route::get('register/baptismal', [BaptismalController::class, 'create'])->middleware(['auth', 'verified'])->name('register.baptismal');

Route::get('/retrieve/baptismals', [BaptismalController::class, 'index'])->middleware(['auth', 'verified'])->name('baptismals.list');
Route::get('/retrieve/baptismal/{baptismal}', [BaptismalController::class, 'show'])->middleware(['auth', 'verified']);

Route::get('/retrieve/confirmations', [ConfirmationController::class, 'index'])->middleware(['auth', 'verified'])->name('confirmations.list');
Route::get('/retrieve/confirmation/{confirmation}', [ConfirmationController::class, 'show'])->middleware(['auth', 'verified']);

Route::get('/retrieve/marriages', [MarriageController::class, 'index'])->middleware(['auth', 'verified'])->name('marriages.list');
Route::get('/retrieve/marriage/{marriage}', [MarriageController::class, 'show'])->middleware(['auth', 'verified']);

Route::get('/retrieve/deaths', [DeathController::class, 'index'])->middleware(['auth', 'verified'])->name('deaths.list');
Route::get('/retrieve/death/{death}', [DeathController::class, 'show'])->middleware(['auth', 'verified']);

Route::get('/donations', function () {
    return view('pages.donations');
})->middleware(['auth', 'verified'])->name('donations');

Route::get('/pss', function () {
    return view('pages.pss');
})->middleware(['auth', 'verified'])->name('pss');

// Route::get('/receipts', function () {
//     return view('pages.receipts');
// })->middleware(['auth', 'verified'])->name('receipts');

Route::get('/receipts', [ReceiptController::class, 'index'])->name('receipts');
Route::get('/receipts/create', [ReceiptController::class, 'create'])->name('receipts.create');
Route::post('/receipts/create', [ReceiptController::class, 'store'])->name('receipts.store');
Route::get('/receipts/create/detail', [ReceiptController::class, 'create'])->name('receipts.create');

Route::get('/schedule', function () {
    return view('pages.schedule');
})->middleware(['auth', 'verified'])->name('schedule');

Route::get('/earning', function () {
    return view('pages.earning');
})->middleware(['auth', 'verified'])->name('earning');

Route::get('/pamisa', function () {
    return view('pages.pamisa');
})->middleware(['auth', 'verified'])->name('pamisa');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
