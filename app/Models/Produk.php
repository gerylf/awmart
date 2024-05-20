<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'Produk';
    protected $fillable = ['product_id', 'product_name', 'product_price', 'product_desc', 'product_stock', 'product_image', 'product_category'];
}