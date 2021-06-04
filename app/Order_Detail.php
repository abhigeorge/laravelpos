<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order__details';
    protected $fillable = ['order_id','product_id','quantity','unitprice','amount','discount'];
}