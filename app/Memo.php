<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $table = 'memos';
    protected $guarded = array('id');

    //
    public static $rules = array(
        'date' => 'required',
        'body' => 'required',
    );    //
}
