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
    );
    //relation
    public function subject()
    {
        return $this->belongsTo('App\Subjects');
        return $this->belongsTo('App\Exams');
    }
}
