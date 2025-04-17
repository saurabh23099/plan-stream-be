<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return response()->json(['message' => 'It works!']);
});

Route::get('/videos', [VideoController::class, 'index']);

Route::get('/videos/search', [VideoController::class, 'search']);


