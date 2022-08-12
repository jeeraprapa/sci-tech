<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BoothController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/main', function () {
    return view('second.index');
})->name('main');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');

Route::get('/booth/{slug}', [BoothController::class,'view'])->name('booth');

//Route::get('/booth/computer-science', function () {
//    return view('booth.com-sci');
//})->name('booth.com-sci');
//
//Route::get('/booth/digital-technology', function () {
//    return view('booth.tech-digital');
//})->name('booth.tech-digital');
//
//Route::get('/booth/industrial-technology', function () {
//    return view('booth.industrial-tech');
//})->name('booth.industrial-tech');
//
//Route::get('/booth/engineer-management-technology', function () {
//    return view('booth.engineer-management');
//})->name('booth.engineer-management');
