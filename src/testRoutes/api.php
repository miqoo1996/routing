<?php

use miqoo1996\routing\Core\Route;
use miqoo1996\routing\Http\Controllers\BooksController;

Route::initializeRESTApi();

Route::get('/book', [BooksController::class, 'retrieve']);
Route::post('/book', [BooksController::class, 'store']);
Route::put('/book', [BooksController::class, 'update']);
Route::delete('/book', [BooksController::class, 'delete']);
