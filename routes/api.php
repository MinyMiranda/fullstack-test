<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Models\Post;

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


Route::get('/posts/index', [PostController::class,'index']);
Route::get('/posts/{id}',[PostController::class,'show']);
Route::post('/contacts/store',[ContactController::class,'store']);
Route::get('/contacts/index',[ContactController::class,'index']);


