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
      'client_name',
        'client_contact',
      'product_id',
        'total_amount',
        'quantity',
        'payment_type',
        'payment_status'
    ];
}
