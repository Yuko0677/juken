<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standardscore extends Model
{
    protected $table = 'standardscores';
    protected $guarded = array('id');

    //
    public static $rules = array(
        'exam_at' => 'required',
        'score' => 'required',
    );   //
}
