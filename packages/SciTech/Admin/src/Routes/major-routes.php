<?php
use Illuminate\Support\Facades\Route;
use SciTech\Admin\Http\Controllers\MajorController;

Route::group(['middleware' => ['web', 'auth:admin', 'permission'], 'prefix' => 'admin'], function () {
    Route::prefix('major')->group(function () {
        Route::get('/', [MajorController::class, 'index'])->name('admin.major.index');
        Route::get('/create', [MajorController::class, 'create'])->name('admin.major.create');
        Route::post('/create', [MajorController::class, 'store'])->name('admin.major.store');
        Route::get('/{id}/edit', [MajorController::class, 'edit'])->name('admin.major.edit');
        Route::put('/{id}', [MajorController::class, 'update'])->name('admin.major.update');
        Route::delete('/{id}', [MajorController::class, 'destroy'])->name('admin.major.destroy');
    });
});
