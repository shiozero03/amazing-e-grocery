<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primarykey = 'order_id';
    protected $fillable = [
        'account_id',
        'item_id',
        'price',
        'checkout_at',
        'created_at',
        'updated_at'
    ];
}
