<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', []);

Route::group(function() {
})->middleware(['auth']);