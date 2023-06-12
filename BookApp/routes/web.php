<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// probelm-2
Route::get('/excerptDescription', [PostController::class, 'excerptDescription']);
// problem-3

Route::get('/distinctSelectMethod', [PostController::class, 'distinctSelectMethod']);

Route::get('/retriveFristData', [PostController::class, 'retriveFristData']);

Route::get('/description', [PostController::class, 'description']);

Route::get('/title', [PostController::class, 'titleColumn']);

Route::post('/insertData', [PostController::class, 'insertData']);

Route::patch('/update ', [PostController::class, 'update']);

Route::delete('/delete  ', [PostController::class, 'delete']);

Route::get('/minData  ', [PostController::class, 'minReadData']);

Route::get('/incrementByOne  ', [PostController::class, 'incrementByOne']);