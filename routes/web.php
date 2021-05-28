<?php

use App\Http\Controllers\MiskitoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/miskito', function () {
    return view('app/miskitos/index');
});

Route::post('/miskito', function (Request $request) {
    return response()->json($request->all());
})->name('miskito');






   
