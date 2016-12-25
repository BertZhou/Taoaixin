<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $guarded = [];
    protected $fillable = [
        'name', 'item_id','buy_user_id','sum','number','seller_user_id'
    ];
}
