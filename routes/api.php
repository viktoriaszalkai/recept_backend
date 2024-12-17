<?php

use App\Http\Controllers\ReceptController;
use App\Http\Controllers\SzotarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/recepts', [ReceptController::class, 'index']);
Route::post('/recept', [ReceptController::class, 'store']);
Route::get('/recept/{id}', [ReceptController::class, 'show']);
Route::put('/recept/{id}', [ReceptController::class, 'update']);
Route::delete('/recept/{id}', [ReceptController::class, 'destroy']);

Route::get('/receptkateg', [SzotarController::class, 'receptkateg']);

