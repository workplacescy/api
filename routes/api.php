<?php

declare(strict_types=1);

use App\Http\Controllers\IndexController;
use App\Http\Controllers\NearestController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(static function (): void {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/random', RandomController::class)->name('random');
    Route::get('/search', SearchController::class)->name('search');
    Route::get('/nearest', NearestController::class)->name('nearest');
    Route::get('/{place}', ShowController::class)->name('place');
});
