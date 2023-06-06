<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvengerController;
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
Route::get('/show', function () {
    return view('show');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/edit', function () {
    return view('edit');
});
Route::get('/', [AvengerController::class, 'getData']);
Route::get('/show/{id}', [AvengerController::class, 'showData']);
Route::get('/delete/{id}', [AvengerController::class, 'deleteData']);
Route::post('/addProcess', [AvengerController::class, 'addData']);