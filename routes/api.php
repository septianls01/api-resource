<?php

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegencieController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\DistrictController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Provinces
Route::prefix('/provinces')->group(function () {
    Route::get('/', [ProvinceController::class, 'getAllProvinces']);
});

//Regencies
Route::prefix('/regencies')->group(function () {
    Route::get('/', [RegencieController::class, 'getAllRegencies']);
});

//Villages
Route::prefix('/villages')->group(function () {
    Route::get('/', [VillageController::class, 'getAllVillages']);
});

//Districts
Route::prefix('/districts')->group(function () {
    Route::get('/', [DistrictController::class, 'getAllDistricts']);
});
