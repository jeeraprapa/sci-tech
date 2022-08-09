<?php

use SciTech\Admin\Http\Controllers\Blog\BlogController;
use SciTech\Admin\Http\Controllers\Blog\CategoryController;
use Illuminate\Support\Facades\Route;

/**
 * Reward routes.
 */
Route::group(['middleware' => ['web', 'auth:admin', 'permission'], 'prefix' => 'admin'], function () {
    Route::prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('/create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/create', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::delete('/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
        Route::get('/{blog}/media', [BlogController::class, 'media'])->name('admin.blog.media');
        Route::post('/{blog}/media/create', [BlogController::class, 'mediaStore'])->name('admin.blog.media.store');
        Route::get('/{blog}/media/{id}/thumbnail', [BlogController::class, 'mediaThumbnail'])->name('admin.blog.media.thumbnail');
        Route::get('/{blog}/media/{id}/delete', [BlogController::class, 'mediaDestroy'])->name('admin.blog.media.destroy');

        Route::prefix('categories')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.blog.category.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.blog.category.create');
            Route::post('/create', [CategoryController::class, 'store'])->name('admin.blog.category.store');
            Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.blog.category.edit');
            Route::put('/{id}', [CategoryController::class, 'update'])->name('admin.blog.category.update');
            Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('admin.blog.category.destroy');
        });
    });
});
