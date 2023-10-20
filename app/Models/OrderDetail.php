<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table ="reviews";
    protected $fillable=[
        "quantity",
        'price',
        'discount_code',
        'total_money',
        'order_id',
        'book_id'
    ];
}
