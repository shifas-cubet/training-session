<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishListItem extends Model
{
    use HasFactory;

    /**
     * Define a many-to-one relationship with the wishlist.
     */
    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

    /**
     * Define a many-to-one relationship with the product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
