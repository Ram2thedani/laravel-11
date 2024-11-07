<?php

use App\Http\Controllers\DetailpenjualanController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PenjualanController::class, 'index']);
Route::get('/detail/{id}', [DetailpenjualanController::class, 'show']);
