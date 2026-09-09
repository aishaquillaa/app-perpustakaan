<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class)->except(['show']);
Route::resource('loans', LoanController::class);
Route::resource('members', MemberController::class);
Route::put('loans/{loan}/return', [LoanController::class, 'returnBook'])->name('loans.return');
Route::prefix('admin')->group(function () {
    Route::get('/info', function () {
        return 'Admin Info Page';
    });
});