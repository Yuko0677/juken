<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $table = 'homeworks';
    protected $guarded = array('id');

    //
    public static $rules = array(
        'date' => 'required',
        'body' => 'required',
    );

    //relation
    public function subject()
    {
        return $this->belongsTo('App\Subjects');
    }
}
