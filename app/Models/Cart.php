<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'user_id',
        'product_id',
        'item_qty',
    ];

    /**
     * The user who owns the cart item (nullable for guests).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The product added to the cart.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
