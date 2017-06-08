<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'order_items';
    protected $fillable = ['price', 'quantity', 'product_id', 'cart_id'];
}