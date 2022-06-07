<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professional extends Model
{
    use SoftDeletes;

    protected $table = 'professional';
    protected $dates = ['deleted_at'];
    protected $guarded = [];
}
