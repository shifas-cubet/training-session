<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {


    $userId = 1; // Replace with the desired user ID
    $minTotalAmount = 100; // Set the minimum total amount threshold

    $userWithFilteredOrders = \App\Models\User::with(['orders' => function ($query) use ($minTotalAmount) {
        $query->where('total_amount', '>', $minTotalAmount);
    }])
        ->find($userId);

    return view('welcome');
});
