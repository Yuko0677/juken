<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standardscore;
use App\Exams;
use App\Subjects;

class ExamController extends Controller
{
  public function index(Request $request)
  {
    $srandard_scores = Standardscore::calculate();
    $subject_names = Subjects::get()->pluck('name');
    $exams = Exams::get();
    $exam_names = $exams->pluck('name');

    $data = [
      'exams' => $exams,
      'srandard_scores' => $srandard_scores,
      'subject_names' => $subject_names,
      'exam_names' => $exam_names,
    ];
    return view('exam.index', $data);
  }
}
