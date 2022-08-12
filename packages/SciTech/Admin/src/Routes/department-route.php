<?php

use SciTech\Admin\Http\Controllers\DepartmentController;

Route::group(['middleware' => ['web', 'auth:admin', 'permission'], 'prefix' => 'admin'], function () {
    Route::prefix('department')->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('admin.department.index');
    });
});
