<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

Route::get('/', [TodosController::class, 'index']);
Route::post('/store',[TodosController::class, 'store']);
Route::post('/delete',[TodosController::class, 'delete']);
Route::post('/convert_status',[TodosController::class, 'convert_status']);

