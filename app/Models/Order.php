<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected static function boot() {
        parent::boot();

        static::creating(function ($order) {
            $order->number = 'OR' . rand(100000, 999999);
        });
    }

    protected $fillable = [
        'number',
        'total_price',
        'status',
    ];

}
