<?php

declare(strict_types=1);

use App\Http\Controllers\IndexController;
use App\Http\Controllers\NearestController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShowController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

Route::get('/', IndexController::class)->name('index');
Route::get('/random', RandomController::class)->name('random');
Route::get('/search', SearchController::class)->name('search');
Route::get('/nearest', NearestController::class)->name('nearest');
Route::get('/{place}', ShowController::class)->name('place')->missing(static fn(): Response => Route::respondWithRoute('fallback'));

Route::fallback(static fn(): JsonResponse => response()->json(['error' => 'Not Found'], Response::HTTP_NOT_FOUND))->name('fallback');
