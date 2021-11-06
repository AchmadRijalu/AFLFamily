<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KartuController;
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
    return view('home' , ['title' => 'Home']);

});
// Route::get('/anggota', function(){
// return view('anggota');
// });

Route::resource('anggota', AnggotaController::class);
Route::resource('kartu', KartuController::class);
Route::get('/download/{foto}', [AnggotaController::class, 'download']);


