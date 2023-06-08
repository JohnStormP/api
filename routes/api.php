<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TagController;


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
