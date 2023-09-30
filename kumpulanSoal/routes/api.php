<?php

use App\Http\Controllers\JenisSoalController;
use App\Http\Controllers\KategoriSoalController;
use App\Http\Controllers\TingkatSoalConttroler;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(TingkatSoalConttroler::class)->group(function () {
    Route::get('/tingkatSoal', 'index')->name('tingkatSoal');
});
Route::controller(JenisSoalController::class)->group(function () {
    Route::get('/jenisSoal', 'index')->name('jensiSoal');
});
Route::controller(KategoriSoalController::class)->group(function () {
    Route::get('/kategoriSoal', 'index')->name('kategoriSoal');
});
