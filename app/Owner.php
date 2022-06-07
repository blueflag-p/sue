<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    use SoftDeletes;

    protected $table = 'owner';
    protected $dates = ['deleted_at'];
    protected $guarded = [];

}
