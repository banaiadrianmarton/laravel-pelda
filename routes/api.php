<?php

use App\Http\Controllers\DataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-all-universities', [DataController::class, 'getAllUniversities']);
Route::get('/get-stat', [DataController::class, 'getStat']);
Route::delete('/delete-lector/{id}', [DataController::class, 'deleteLector']);