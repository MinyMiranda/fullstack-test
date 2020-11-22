<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    ContactController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', [PostController::class, 'index']);
        Route::get('/{id}', [PostController::class, 'show']);
    });
    Route::group(['prefix' => 'contacts'], function () {
        Route::post('/store', [ContactController::class, 'store']);
        Route::get('/index', [ContactController::class, 'index']);
    });
});
