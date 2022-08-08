<?php

use SciTech\Admin\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/**
 * Reward routes.
 */
Route::group(['middleware' => ['web', 'auth:admin', ], 'prefix' => 'admin'], function () {
    Route::prefix('staff')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.staff.index');
        Route::get('/create', [AdminController::class, 'create'])->name('admin.staff.create');
        Route::post('/create', [AdminController::class, 'store'])->name('admin.staff.store');
        Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admin.staff.edit');
        Route::put('/{id}', [AdminController::class, 'update'])->name('admin.staff.update');
        Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admin.staff.destroy');
    });
});
