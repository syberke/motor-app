<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;

Route::get('/', [MotorController::class, 'index']);