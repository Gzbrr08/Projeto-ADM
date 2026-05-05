<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

    Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
    return view('home');
    })->name('home');

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('users/create', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
});
