<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Standardscore;
use App\Subjects;
use App\Exams;

use phpDocumentor\Reflection\DocBlock\StandardTagFactory;

class StandardscoreController extends Controller
{
    public function index($exam_id)
    {
        $exam = Exams::find($exam_id);
        $standardscores = Standardscore::where('exam_id', $exam_id)->get();
        $data = [
            'standardscores' => $standardscores,
            'exam' => $exam,
        ];
        return view('admin.standardscore.index', $data);
    }

    public function add($exam_id)
    {
        $exam = Exams::find($exam_id);
        $subjects = Subjects::get()->pluck('name', 'id');
        $data = [
            'subjects' => $subjects,
            'exam' => $exam,
        ];
        return view('admin.standardscore.create', $data);
    }
    public function create($exam_id, Request $request)
    {
        Standardscore::create($request->all());
        return redirect()->route('admin.standardscore.index', ['exam_id' => $exam_id]);
    }

    public function edit($exam_id, Request $request)
    {
        $exam = Exams::find($exam_id);
        $subjects = Subjects::get()->pluck('name', 'id');
        $exams = Exams::get()->pluck('name', 'id');
        $standardscores = Standardscore::find($request->id);
        $data = [
            'standardscore' => $standardscores,
            'exam_name' => $exams,
            'exam_date' => $exams,
            'subjects' => $subjects,
            'exam' => $exam,
            // 'dated_at' => $dated_at,
        ];
        return view('admin.standardscore.edit', $data);
    }
    public function update($exam_id, Request $request)
    {
        Standardscore::find($request->id)->update($request->all());
        return redirect()->route('admin.standardscore.index', ['exam_id' => $exam_id]);
    }
    public function delete($exam_id, Request $request)
    {
        $standardscore = Standardscore::find($request->id);
        $standardscore->delete();
        return redirect()->route('admin.standardscore.index', ['exam_id' => $exam_id]);
    }
}
