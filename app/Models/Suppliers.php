<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suppliers extends Model
{
    use HasFactory, softDeletes;
    protected $fillable=[

        'supplier_name',
        'contact_number',
        'email',
        'address'
    ];

}

