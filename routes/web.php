<?php

use App\Http\Controllers\MainController;
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
    return view('welcome');
});

Route::get('/', [MainController::class, 'home']);

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/sample/{id}/{name}', function ($id, $name) {
    return 'ID:' . $id . 'NAME: ' . $name;
});

Route::get('/review', [MainController::class, 'review']);
Route::post('/review/check', [MainController::class, 'review_check'])->middleware(['CheckEmail']);
