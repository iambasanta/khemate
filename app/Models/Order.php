<?php

namespace App\Models;

use Carbon\Carbon;
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
        'user_id',
        'number',
        'total_price',
        'status',
    ];

    public function getFormattedCreatedAtAttribute() {
        return Carbon::parse($this->created_at)->format('F j, Y');
    }

    public function getFormattedUpdatedAtAttribute() {
        return Carbon::parse($this->updated_at)->format('F j, Y');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'order_items')
                    ->withPivot('quantity', 'unit_price');
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}
