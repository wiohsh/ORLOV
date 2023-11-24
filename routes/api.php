<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GendersController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\NomenclatureController;
use App\Http\Controllers\StoragesController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('employee')->group(function() {
    Route::get('/', [EmployeeController::class, 'index']);
});

Route::prefix('genders')->group(function() {
    Route::get('/', [GendersController::class, 'index']);
});

Route::prefix('logbook')->group(function() {
    Route::get('/', [LogbookController::class, 'index']);
});

Route::prefix('nomenclature')->group(function() {
    Route::get('/', [NomenclatureController::class, 'index']);
});

Route::prefix('storages')->group(function() {
    Route::get('/', [StoragesController::class, 'index']);
});
