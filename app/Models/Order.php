<?php

namespace App\Models;

use App\Scopes\PaymentStatusScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'order_date',
      'total_amount',
        'payment_status'
    ];

    /**
     * Define a many-to-one relationship with the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define a one-to-many relationship with order details.
     */
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope(new PaymentStatusScope());
//    }
}
