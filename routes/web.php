<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;

// Auth routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');

        // Developer routes
        Route::get('/developers', [AdminController::class, 'developerIndex'])->name('developers.index');
        Route::get('/developers/create', [AdminController::class, 'developerCreate'])->name('developers.create');
        Route::post('/developers/store', [AdminController::class, 'developerStore'])->name('developers.store');
        Route::get('/developers/{developer}/edit', [AdminController::class, 'developerEdit'])->name('developers.edit');
        Route::put('/developers/{developer}/update', [AdminController::class, 'developerUpdate'])->name('developers.update');
        Route::delete('/developers/{developer}/delete', [AdminController::class, 'developerDelete'])->name('developers.delete');

        // Estate routes
        Route::get('/estates', [AdminController::class, 'estateIndex'])->name('estates.index');
        Route::get('/estates/create', [AdminController::class, 'estateCreate'])->name('estates.create');
        Route::post('/estates/store', [AdminController::class, 'estateStore'])->name('estates.store');
        Route::get('/estates/{estate}/edit', [AdminController::class, 'estateEdit'])->name('estates.edit');
        Route::put('/estates/{estate}/update', [AdminController::class, 'estateUpdate'])->name('estates.update');
        Route::delete('/estates/{estate}/delete', [AdminController::class, 'estateDelete'])->name('estates.delete');

        // Prototype routes
        Route::get('/prototypes', [AdminController::class, 'prototypeIndex'])->name('prototypes.index');
        Route::get('/prototypes/create', [AdminController::class, 'prototypeCreate'])->name('prototypes.create');
        Route::post('/prototypes/store', [AdminController::class, 'prototypeStore'])->name('prototypes.store');
        Route::get('/prototypes/{prototype}/images', [AdminController::class, 'prototypeImages'])->name('prototypes.images');
        Route::post('/prototypes/{prototype}/images/store', [AdminController::class, 'prototypeImagesStore'])->name('prototypes.images.store');
        Route::delete('/prototypes/images/{image}/delete', [AdminController::class, 'prototypeImageDelete'])->name('prototypes.images.delete');
        Route::put('/prototypes/{prototype}/update', [AdminController::class, 'prototypeUpdate'])->name('prototypes.update');
        Route::delete('/prototypes/{prototype}/delete', [AdminController::class, 'prototypeDelete'])->name('prototypes.delete');
        Route::get('/prototypes/{prototype}/edit', [AdminController::class, 'prototypeEdit'])->name('prototypes.edit');

        // Banner routes
        Route::get('/banners', [AdminController::class, 'bannerIndex'])->name('banners.index');
        Route::get('/banners/create', [AdminController::class, 'bannerCreate'])->name('banners.create');
        Route::post('/banners/store', [AdminController::class, 'bannerStore'])->name('banners.store');
        Route::delete('/banners/{banner}/delete', [AdminController::class, 'bannerDelete'])->name('banners.delete');
    });

// Public routes
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/properties', [PageController::class, 'properties'])->name('properties');
Route::get('/property/{slug}', [PageController::class, 'propertyDetail'])->name('property.detail');
