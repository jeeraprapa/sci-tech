<?php

use Illuminate\Support\Facades\Route;
use SciTech\Admin\Http\Controllers\Controller;
use SciTech\Admin\Http\Controllers\SessionController;

/**
 * Auth routes.
 */
Route::group(['middleware' => ['web'], 'prefix' => 'admin'], function () {
    /**
     * Redirect route.
     */
    Route::get('/', [Controller::class, 'redirectToLogin']);

    /**
     * Login routes.
     */
    Route::get('/login', [SessionController::class, 'create'])->defaults('_config', [
        'view' => 'admin::users.sessions.create',
    ])->name('admin.session.create');

    /**
     * Login post route to admin auth controller.
     */
    Route::post('/login', [SessionController::class, 'store'])->defaults('_config', [
        'redirect' => 'admin.dashboard.index',
    ])->name('admin.session.store');
});
