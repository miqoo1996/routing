<?php

use miqoo1996\routing\Core\Route;

use miqoo1996\routing\Http\Controllers\BooksController;

Route::initializeRESTApi();

Route::post('/book', [BooksController::class, 'store']);
Route::get('/book', [BooksController::class, 'retrieve']);
Route::delete('/book', [BooksController::class, 'delete']);
Route::put('/book', [BooksController::class, 'update']);
