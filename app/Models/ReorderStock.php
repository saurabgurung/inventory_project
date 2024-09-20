<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReorderStock extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'quantity'
    ];

    public function Product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
}
