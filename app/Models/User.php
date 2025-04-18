<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Command;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Mass assignable attributes.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'city',
        'postal_code',
        'country',
        'phone',
    ];

    /**
     * Attributes hidden in arrays/json.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Attribute casting.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * A user can have many carts (active or past).
     */
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * A user can place many commands (orders).
     */
    public function commands()
    {
        return $this->hasMany(Command::class);
    }
}
