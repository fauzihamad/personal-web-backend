<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsCategoryController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillController;
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
Route::get('/detail/{id}', [PagesController::class, 'detail'])->name('detail');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::group(['prefix' => 'services', 'as' => 'services.', 'middleware' => 'auth:sanctum'], function () {
        Route::get('/', [ServicesController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'skills', 'as' => 'skills.', 'middleware' => 'auth:sanctum'], function () {
        Route::get('/', [SkillController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'projects', 'as' => 'projects.', 'middleware' => 'auth:sanctum'], function () {
        Route::get('/', [ProjectsController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'projects-category', 'as' => 'projects-category.', 'middleware' => 'auth:sanctum'], function () {
        Route::get('/', [ProjectsCategoryController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'experience', 'as' => 'experience.', 'middleware' => 'auth:sanctum'], function () {
        Route::get('/', [ExperienceController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'resume', 'as' => 'resume.', 'middleware' => 'auth:sanctum'], function () {
        Route::get('/', [ResumeController::class, 'index'])->name('index');
    });
    
});

