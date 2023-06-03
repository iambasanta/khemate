<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'status',
        'method'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function getFormattedCreatedAtAttribute() {
        return Carbon::parse($this->created_at)->format('F j, Y');
    }
}
