<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVerification extends Model
{
    protected $table = 'user_verifications';
    protected $primaryKey = 'user_id';
    protected $guarded = [];
    public $timestamps = false;
}
