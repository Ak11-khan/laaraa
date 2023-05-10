<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =
    ['product_title',
    'product_description',
    'product_keywords',
    'categories_id',
    'brand_id',
    'product_image1',
    'product_image2',
    'product_image3',
    'product_price',

];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}



