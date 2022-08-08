<?php

use SciTech\Admin\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

/**
 * Reward routes.
 */
Route::group(['middleware' => ['web', 'auth:admin', 'permission'], 'prefix' => 'admin'], function () {
    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('admin.role.index');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
        Route::post('/create', [RoleController::class, 'store'])->name('admin.role.store');
        Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('admin.role.edit');
        Route::put('/{id}', [RoleController::class, 'update'])->name('admin.role.update');
        Route::delete('/{id}', [RoleController::class, 'destroy'])->name('admin.role.destroy');
    });
});
