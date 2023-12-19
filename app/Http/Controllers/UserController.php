<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function totalSpending(Request $request)
    {
        $categoryId = 1; // Assume 'Electronics' category has ID 1

//        $usersWithOrders = User::query()
//            ->select(['users.id','users.name', 'orders.payment_status'])
//            ->join('orders', 'orders.user_id', '=', 'users.id')
//            ->where('users.id', '=', 2)
//            ->orderByDesc('orders.id')
//            ->get();

//        $categoryName = 9;
//
//        $usersWithOrdersAndProducts = User::with(['orders.orderDetails.product' => function ($query) use ($categoryName) {
//            $query->whereHas('category', function ($query) use ($categoryName) {
//                $query->where('id', $categoryName);
//            });
//        }])
//            ->get();

        // Example query
        $validOrders = Order::query()->get();

        return $validOrders;
    }
}
