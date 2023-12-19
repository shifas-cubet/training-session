<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'subtotal'
    ];

    /**
     * Define a many-to-one relationship with the order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Define a many-to-one relationship with the product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
