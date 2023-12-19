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
        // User spent most on category Electornics

        $electronicsCatId = 1;

        // inner join -> returns data if match is found from the joined table

        return User::query()
            ->select('users.*', DB::raw('SUM(order_details.quantity * order_details.unit_price) as total_spending'))
            ->join('orders', 'orders.user_id', '=', 'users.id')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->where('products.category_id', '=', $electronicsCatId)
            ->groupBy('users.id')
            ->orderByDesc('total_spending')
            ->first();
    }

    public function usersPurchasedProductsFromMoreThanOneCategory()
    {
        return User::query()->select('users.*')
            ->addSelect(DB::raw('(SELECT COUNT(DISTINCT p.category_id)
                        FROM orders
                        JOIN order_details od on orders.id = od.order_id
                        JOIN products p on od.product_id = p.id
                        WHERE orders.user_id = users.id) as distinct_categories_count'))
            ->having('distinct_categories_count', '>', 1)
            ->get();

    }

    public function leftJoinExample()
    {
        return User::query()
            ->select('users.*', 'orders.id as order_id')
            ->leftJoin('orders', 'orders.user_id', '=', 'users.id')
            ->orderByDesc('users.id')
            ->limit(50)
            ->get();
    }

    public function rightJoinExample()
    {
        return User::query()
            ->select('users.*', 'orders.id as order_id')
            ->rightJoin('orders', 'orders.user_id', '=', 'users.id')
            ->orderByDesc('users.id')
            ->limit(50)
            ->get();
    }

    public function lazyLoading()
    {
        $user = User::query()
            ->where('id', '=', 1)
            ->first();

        $orders = $user->orders;


        foreach ($orders as $order) {
            echo "Order ID: " . $order->id;
        }
    }

    public function eagerLoadingExample()
    {
        return User::query()
            ->with(['orders' => function($query) {
                $query->where('total_amount', '>', 400);
            }])->find(3);
    }






}
