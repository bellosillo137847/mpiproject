<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TPMDataController;
use App\Http\Controllers\FurnaceDataController;
use App\Http\Controllers\LayerDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/tpmdata', [TPMDataController::class, 'index']);
Route::get('/tpmdata/{id}', [TPMDataController::class, 'show']);
Route::post('/tpmdata', [TPMDataController::class, 'store']);
Route::patch('/tpmdataupdate/{id}', [TPMDataController::class, 'updateTpmData']);
Route::patch('/tpmremarksupdate/{id}', [TPMDataController::class, 'updateRemarks']);
Route::patch('/tpmaggregateupdate/{id}', [TPMDataController::class, 'updateAggregateFunctions']);
Route::delete('/tpmdata/{id}', [TPMDataController::class, 'destroy']);

Route::get('/furnacedata', [FurnaceDataController::class, 'index']);
Route::get('/furnacedata/{id}', [FurnaceDataController::class, 'show']);
Route::post('/furnacedata', [FurnaceDataController::class, 'store']);
Route::patch('/furnacedata/{id}', [FurnaceDataController::class, 'update']);
Route::delete('/furnacedata/{id}', [FurnaceDataController::class, 'destroy']);

Route::get('/layerdata', [LayerDataController::class, 'index']);
Route::get('/layerdata/{id}', [LayerDataController::class, 'show']);
Route::post('/layerdata', [LayerDataController::class, 'store']);
Route::patch('/layerdata/{id}', [LayerDataController::class, 'update']);
Route::delete('/layerdata/{id}', [LayerDataController::class, 'destroy']);



Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

