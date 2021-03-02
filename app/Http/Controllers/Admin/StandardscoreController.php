<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Standardscore;
use App\Subjects;
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
        return view('admin.standardscore.create', $data);
    }
    public function create(Request $request)
    {
        Standardscore::create($request->all());
        return redirect('admin/standardscore/create');
    }
    public function edit(Request $request)
    {
        $standardscores = Standardscore::find($request->id);
        $data = ['standardscore' => $standardscores];
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
