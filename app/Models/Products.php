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
        'brands_id',
        'rate',
        'quantity_in_stock',
        'status'

    ];


    public function categories() {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function brands() {
        return $this->belongsTo(Brands::class, 'brands_id');
    }
}
