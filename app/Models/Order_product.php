<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_product extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];
}


