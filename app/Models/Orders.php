<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use HasFactory, softDeletes;
    protected $fillable=[
      'id',
      'order_date',
      'supplier_id',
      'total_amount',
        'status',

    ];
}
