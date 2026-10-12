<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('home');
});

Route::get('/games', [GameController::class, 'index']);

Route::get('/game/{slug}', [GameController::class, 'detail']);