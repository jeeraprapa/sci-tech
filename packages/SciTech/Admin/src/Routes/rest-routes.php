<?php

use Illuminate\Support\Facades\Route;
use SciTech\Admin\Http\Controllers\DashboardController;
use SciTech\Admin\Http\Controllers\SessionController;

/**
 * Extra routes.
 */
Route::group(['middleware' => ['web', 'auth:admin', 'permission'], 'prefix' => 'admin'], function () {
    /**
     * Dashboard routes.
     */
    Route::get('dashboard', [DashboardController::class, 'index'])->defaults('_config', [
        'view' => 'admin::dashboard.index',
    ])->name('admin.dashboard.index');

    /**
     * Admin profile routes.
     */
    Route::get('/logout', [SessionController::class, 'destroy'])->defaults('_config', [
        'redirect' => 'admin.session.create',
    ])->name('admin.session.destroy');
});
