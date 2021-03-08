<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected $table = 'exams';
    protected $guarded = array('id');

    //
    public static $rules = array(
        'name' => 'required',
    );
}
