<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'is_visible',
        'description'
    ];

    public function getFormattedCreatedAtAttribute() {
        return Carbon::parse($this->created_at)->format('F j, Y');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
