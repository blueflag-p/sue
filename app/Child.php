<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Child extends Model
{
    use SoftDeletes;

    protected $table = 'Child';
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public static function getAge($dob)
    {
        return Carbon::parse($dob)->diff(Carbon::now())->y;
    }
   
}
