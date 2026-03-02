<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// my TEst

$notToday = "Nah its not my work";

Route::get('/test', function () {
    return $notToday;
});