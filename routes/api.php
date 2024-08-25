<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;



Route::middleware('api')->group(function () {
    Route::post('/Positems', [ItemController::class, 'store']);

});

Route::get('/items', [ItemController::class, 'index']);
Route::post('/Positems', [ItemController::class, 'store']);
Route::put('/items/{id}', [ItemController::class, 'update']);
Route::delete('/items/{id}', [ItemController::class, 'destroy']);


Route::post('/login',[ItemController::class, 'login']);
Route::post('/logout',[ItemController::class, 'logout']);
