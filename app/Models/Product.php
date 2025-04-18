<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'photo',
        'price',
        'stock',
        'trending',
    ];

    /**
     * The category this product belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Cart items containing this product.
     */
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * Order items containing this product.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
