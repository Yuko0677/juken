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
    public function index(Request $request)
    {
        $standardscores = Standardscore::get();
        $data = ['standardscores' => $standardscores];
        return view('admin.standardscore.index', $data);
    }
    public function add()
    {
        $subjects = Subjects::get()->pluck('name', 'id');
        $data = ['subjects' => $subjects];

        $exams = Exams::get()->pluck('name', 'id');
        $data = ['exam_name' => $exams];


        $exams = Exams::get()->pluck('dated_at', 'id');
        $data = ['exam_at' => $exams];

        return view('admin.standardscore.create', $data);
    }
    public function create(Request $request)
    {
        Standardscore::create($request->all());
        return redirect('admin/standardscore/create');
    }
    public function edit(Request $request)
    {
        $subjects = Subjects::get()->pluck('name', 'id');
        $exams = Exams::get()->pluck('name', 'id');
        $standardscores = Standardscore::find($request->id);
        $data = [
            'standardscore' => $standardscores,
            'exam_name' => $exams,
            'exam_date' => $exams,
            'subjects' => $subjects,
            // 'dated_at' => $dated_at,
        ];
        return view('admin.standardscore.edit', $data);
    }
    public function update(Request $request)
    {
        Standardscore::find($request->id)->update($request->all());
        return redirect('admin/standardscore');
    }
    public function delete(Request $request)
    {
        $standardscore = Standardscore::find($request->id);
        $standardscore->delete();
        return redirect('admin/standardscore/');
    } //
}
