<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfessionalCompany extends Model
{
    use SoftDeletes;

    protected $table = 'professional_company';
    protected $dates = ['deleted_at'];
    protected $guarded = [];

}
