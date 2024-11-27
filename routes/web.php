<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Item\GetVitrinDataController;
use App\Http\Controllers\Item\GetItemAllDataController;
use App\Http\Controllers\Item\AddItemToCartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Item/Vitrin' , GetVitrinDataController::class);
Route::get('/Item/{item}' , GetItemAllDataController::class);
Route::post('/Item/{item}' , AddItemToCartController::class);