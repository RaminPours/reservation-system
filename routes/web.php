<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::redirect('/', '/reservations');

Route::resource('reservations', ReservationController::class)->only(['index', 'store', 'destroy']);