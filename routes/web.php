<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyPlaceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts',[ PostController::class, 'index']);
Route::get('/posts/create',[ PostController::class, 'create']);
Route::get('/posts/update',[ PostController::class, 'update']);
Route::get('/posts/delete',[ PostController::class, 'delete']);