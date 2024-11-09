<?php

use App\Http\Controllers\DetailpenjualanController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PenjualanController::class, 'index']);
Route::get('/struk/{id}', [DetailpenjualanController::class, 'show']);
Route::get('/detail/{id}', [DetailpenjualanController::class, 'index']);
