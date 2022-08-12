<?php
use Illuminate\Support\Facades\Route;
use SciTech\Admin\Http\Controllers\DepartmentController;

Route::group(['middleware' => ['web', 'auth:admin', 'permission'], 'prefix' => 'admin'], function () {
    Route::prefix('department')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('admin.department.index');
        Route::get('/create', [DepartmentController::class, 'create'])->name('admin.department.create');
        Route::post('/create', [DepartmentController::class, 'store'])->name('admin.department.store');
        Route::get('/{id}/edit', [DepartmentController::class, 'edit'])->name('admin.department.edit');
        Route::put('/{id}', [DepartmentController::class, 'update'])->name('admin.department.update');
        Route::delete('/{id}', [DepartmentController::class, 'destroy'])->name('admin.department.destroy');
    });
});
