<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\PotentialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');

    Route::post('/login-process', [AuthController::class, 'login_process'])->name('login.process');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', [ProfileController::class, 'index'])->name('profil-desa');

Route::get('/peta-demografi', function () {
    return view('general.peta-demografi');
})->name('peta-demografi');

Route::get('/kalender-desa', [EventController::class, 'index'])->name('kalender-desa');

Route::get('/dokumentasi-kegiatan', [EventController::class, 'documentation'])->name('dokumentasi-kegiatan');

Route::get('/potensi-desa', [PotentialController::class, 'index'])->name('potensi-desa');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::redirect('/', 'profile');

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'admin'])->name('admin.profile');

        Route::get('/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');

        Route::put('/edit-process/{id}', [ProfileController::class, 'update'])->name('admin.profile.edit_process');

        Route::get('/government/add', [GovernmentController::class, 'add'])->name('admin.government.add');

        Route::post('/government/add-process', [GovernmentController::class, 'store'])->name('admin.government.add_process');

        Route::get('/government/edit/{id}', [GovernmentController::class, 'edit'])->name('admin.government.edit');

        Route::put('/government/edit-process/{id}', [GovernmentController::class, 'update'])->name('admin.government.edit_process');

        Route::delete('/government/delete/{id}', [GovernmentController::class, 'destroy'])->name('admin.government.delete');
    });

    Route::prefix('event')->group(function () {
        Route::get('/', [EventController::class, 'event'])->name('admin.event');

        Route::get('/add', [EventController::class, 'create'])->name('admin.event.add');

        Route::post('/add-process', [EventController::class, 'store'])->name('admin.event.add_process');

        Route::get('/edit/{id}', [EventController::class, 'edit'])->name('admin.event.edit');

        Route::put('/edit-process/{id}', [EventController::class, 'update'])->name('admin.event.edit_process');

        Route::delete('/delete/{id}', [EventController::class, 'destroy'])->name('admin.event.delete');
    });

    Route::prefix('potential')->group(function () {
        Route::get('/', [PotentialController::class, 'potential'])->name('admin.potential');

        Route::get('/add', [PotentialController::class, 'create'])->name('admin.potential.add');

        Route::post('/add-process', [PotentialController::class, 'store'])->name('admin.potential.add_process');

        Route::get('/edit/{id}', [PotentialController::class, 'edit'])->name('admin.potential.edit');

        Route::put('/edit-process/{id}', [PotentialController::class, 'update'])->name('admin.potential.edit_process');

        Route::delete('/delete/{id}', [PotentialController::class, 'destroy'])->name('admin.potential.delete');

        Route::get('/category/add', [CategoryController::class, 'create'])->name('admin.potential.add-category');

        Route::post('/category/add-process', [CategoryController::class, 'store'])->name('admin.potential.add-category_process');

        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.potential.edit-category');

        Route::put('/category/edit-process/{id}', [CategoryController::class, 'update'])->name('admin.potential.edit-category_process');

        Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.potential.delete-category');
    });
});