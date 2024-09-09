<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        // dd("kj");
        return redirect()->route('media.plan');
    } else {
        return redirect()->route('login');
    }
});

Route::middleware('guest')->get('login', [AuthController::class,'loginPage'])->name('login');
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');
