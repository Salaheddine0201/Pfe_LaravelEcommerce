<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * A category can have many products.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
