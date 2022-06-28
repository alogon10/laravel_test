<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/building', [TestController::class, 'index1']);
Route::get('/building/{room?}', [TestController::class, 'index2']);