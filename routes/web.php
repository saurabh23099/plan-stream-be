<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::get('/videos', [VideoController::class, 'index']);

Route::get('/videos/search', [VideoController::class, 'search']);


