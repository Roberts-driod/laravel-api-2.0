<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// my TEst

// $data = [
//     "name" => "John",
//     "age" => 25
// ];

//$json = json_encode($data); laravel do it by default

// Route::get('/test', function () use ($data) {

//     return response()->json($data);
// });

// Route::get('/test', function () use ($data) {
//     return response()->json($data);
// });


// -------------------------------------------------------

// Book api

Route::get('/books_all',[BookController::class, 'index']);
Route::get('/books_show/{book}',[BookController::class, 'show']);
Route::post('/books_store', [BookController::class, 'store']);
Route::delete('/books/{book}', [BookController::class, 'destroy']);
Route::put('/books_update/{book}', [BookController::class, 'update']);