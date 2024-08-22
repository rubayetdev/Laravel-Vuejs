<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/items', [ItemController::class, 'index']);
Route::post('/Positems', [ItemController::class, 'store']);
Route::put('/items/{id}', [ItemController::class, 'update']);
// Route::delete('/items/{id}', [ItemController::class, 'destroy']);
Route::get('/items/{id}', [ItemController::class, 'show']);



Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch',".*");
