<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'price',
        'quantity',
        'description',
        'image',
        'featured',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function imageUrl() {
        return $this->image ? Storage::disk('products')->url($this->image) : '';
    }

}
