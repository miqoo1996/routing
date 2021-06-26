<?php

use miqoo1996\routing\Core\Route;
use miqoo1996\routing\Http\Controllers\ExampleController;


Route::get('/', [ExampleController::class, 'welcomePage']);