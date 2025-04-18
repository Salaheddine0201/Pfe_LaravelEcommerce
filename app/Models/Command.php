<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Command extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'session_id',
        'subtotal',
        'tax',
        'total',
        'status',
    ];

    /**
     * The user who placed the command (nullable for guests).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Items included in this command.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'command_id');
    }
}
