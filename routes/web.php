<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PromotionController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', [AuthController::class, 'formLogin'])->name('admin.login.form');
Route::post('login', [AuthController::class, 'login'])->name('admin.login.action');
Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout.action');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/promotion', [PromotionController::class, 'index'])->name('admin.promotion.index');
    Route::get('/promotion/create', [PromotionController::class, 'create'])->name('admin.promotion.create');
    Route::post('/promotion/save', [PromotionController::class, 'save'])->name('admin.promotion.insert');
    Route::post('/promotion/delete', [PromotionController::class, 'delete'])->name('admin.promotion.delete');
});

