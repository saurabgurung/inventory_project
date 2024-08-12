<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, softDeletes;
    protected $fillable=[

        'product_name',
        'description',
        'category_id',
        'supplier_id',
        'cost_price',
        'sell_price',
        'quantity_in_stock'

    ];
}
