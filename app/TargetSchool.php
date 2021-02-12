<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetSchool extends Model
{
    protected $table = 'targetschools';
    protected $guarded = array('id');

    //
    public static $rules = array(
        'ranking' => 'required',
        'name' => 'required',
    );    //
}
