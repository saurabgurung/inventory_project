<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'id',
        'product_id',
        'transaction_type',
        'quantity',
        'transaction_date'
    ];
}
