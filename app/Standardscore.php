<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standardscore extends Model
{
    protected $table = 'standardscores';
    protected $guarded = array('id');

    public static function calculate()
    {
        $values = [];
        $srandardscores = Standardscore::get();
        foreach ($srandardscores as $srandardscore) {
            $values[$srandardscore->subject->name][] = $srandardscore->score;
        }
        return $values;
    }

    public static function calculateByExam($exam)
    {
        $values = Standardscore::where('exam_id', $exam->id)->get()->pluck('score');
        return $values;
    }

    //
    public static $rules = array(
        'score' => 'required',
    );
    //relation
    public function subject()
    {
        return $this->belongsTo('App\Subjects');
    }
    public function exam_at()
    {
        return $this->belongsTo('App\Exams');
    }
    public function exam_name()
    {
        return $this->belongsTo('App\Exams');
    }
}
