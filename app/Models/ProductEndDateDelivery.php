<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEndDateDelivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'end_date_delivery',
    ];

}
