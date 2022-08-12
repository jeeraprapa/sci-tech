<?php

use SciTech\Admin\Http\Controllers\TeacherController;

Route::group(['middleware' => ['web', 'auth:admin', 'permission'], 'prefix' => 'admin'], function () {
    Route::prefix('teacher')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('admin.teacher.index');
        Route::get('/create', [TeacherController::class, 'create'])->name('admin.teacher.create');
        Route::post('/create', [TeacherController::class, 'store'])->name('admin.teacher.store');
        Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('admin.teacher.edit');
        Route::put('/{id}', [TeacherController::class, 'update'])->name('admin.teacher.update');
        Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('admin.teacher.destroy');
    });
});
