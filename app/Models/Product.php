<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'stock_quantity',
        'image_url'
    ];

    public function wishlists()
    {
        return $this->belongsToMany(User::class, 'wishlist_items', 'product_id', 'user_id');
    }

    public function wishlistItems()
    {
        return $this->hasMany(WishlistItem::class);
    }

    /**
     * Define a many-to-one relationship with the category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Define a one-to-many relationship with order details.
     */
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

}
