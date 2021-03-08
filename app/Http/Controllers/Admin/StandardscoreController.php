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
        $exams = Exams::get()->pluck('name', 'dated_at', 'id')
        $data = [
            'subjects' => $subjects,
            'exams' => $exams,
        ];
        // $items = \App\Item::select('id', 'name', 'created_at')->get();
        // $exams = Exams::get()->pluck('name', 'id');
        // $data = ['exams' => $exams];
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
        $standardscores = Standardscore::find($request->id);
        $data = [
            'standardscore' => $standardscores,
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
