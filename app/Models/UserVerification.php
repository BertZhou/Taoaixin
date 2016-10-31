<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    protected $table = 'user_verification';
    protected $primaryKey = 'user_id';
    protected $guarded = [];
    public $timestamps = false;
}
