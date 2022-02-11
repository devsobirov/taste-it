<?php

use App\Http\Controllers\api\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/food', [FoodController::class, 'index'])->name('food.index');
Route::get('/food/{food}', [FoodController::class, 'show'])->name('food.show');
Route::post('/food', [FoodController::class, 'store']);
Route::patch('/food/{id}', [FoodController::class, 'update']);
Route::delete('/food/{id}', [FoodController::class, 'destroy']);


/**
 * GET        /categories           - index (hammasini olish)
*  GET        /categories/{id}      - show (1 ta item olish uchun)
 * POST       /categories           - create
 * PATCH,PUT  /categories/{id}     - update
 * DELETE     /categories/{id}     - delete
 */
