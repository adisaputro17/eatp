<?php

use App\Http\Controllers\HomeController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/create-atp', function () {
    return view('create-atp');
});

Route::get('/bal', function () {
    return view('bal');
});

Route::get('/atp', function () {
    return view('atp');
});

Route::get('cetak-bal', [HomeController::class, 'cetak_bal']);

Route::get('cetak-atp', [HomeController::class, 'cetak_atp']);