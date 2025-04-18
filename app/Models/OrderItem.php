<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'command_id',
        'product_id',
        'quantity',
        'unit_price',
    ];

    /**
     * The parent command for this item.
     */
    public function command()
    {
        return $this->belongsTo(Command::class, 'command_id');
    }

    /**
     * The product that was ordered.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
