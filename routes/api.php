<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/total-spending', [\App\Http\Controllers\UserController::class, 'totalSpending']);
Route::get('/user/purchased-details', [\App\Http\Controllers\UserController::class, 'usersPurchasedProductsFromMoreThanOneCategory']);
Route::get('/left-join-example', [\App\Http\Controllers\UserController::class, 'leftJoinExample']);
Route::get('/right-join-example', [\App\Http\Controllers\UserController::class, 'rightJoinExample']);
Route::get('/lazy-loading', [\App\Http\Controllers\UserController::class, 'lazyLoading']);
Route::get('/eager-loading', [\App\Http\Controllers\UserController::class, 'eagerLoadingExample']);
