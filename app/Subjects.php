<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $table = 'subjects';
    protected $guarded = array('id');

    //
    public static $rules = array(
        'name' => 'required',
        'name' => 'required',
    );
}
