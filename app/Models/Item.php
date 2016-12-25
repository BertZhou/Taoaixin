<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
//    protected $fillable=['name','content','user_id','price','type','url','area'];
    protected $table = 'items';
    protected $guarded = [];
}
