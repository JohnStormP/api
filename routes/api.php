<?php

use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Support\Facades\Route;


Route::controller(TaskController::class)->group(function () {
    Route::get('/task', 'index');
    Route::get('/task/{id}', 'show');
    Route::post('/task', 'store');
});

Route::controller(TagController::class)->group(function () {
    Route::get('/tag', 'index');
    Route::get('/tag/{id}', 'show');
    Route::post('/tag', 'store');
});
