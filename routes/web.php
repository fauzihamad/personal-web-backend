<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PagesController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        dd("asd");
        return redirect()->route('admin.index');
    } else {
        dd("asd");
        return redirect()->route('/');
    }
});

Route::middleware('guest')->get('admin/login', [AuthController::class,'loginPage'])->name('login');
Route::middleware('auth')->post('admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});

