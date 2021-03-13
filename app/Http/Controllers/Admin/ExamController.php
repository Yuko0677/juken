<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exams;


class ExamController extends Controller
{
    public function index(Request $request)
    {
        $exams = Exams::orderBy('dated_at', 'asc')->get();
        $data = ['exams' => $exams];
        return view('admin.exam.index', $data);
    }
    public function add()
    {
        return view('admin.exam.create');
    }
    public function create(Request $request)
    {
        Exams::create($request->all());
        return redirect('admin/exam/create');
    }
    public function edit(Request $request)
    {
        $exam = Exams::find($request->id);
        $data = ['exam' => $exam];
        return view('admin.exam.edit', $data);
    }
    public function update(Request $request)
    {
        Exams::find($request->id)->update($request->all());
        return redirect('admin/exam');
    }
    public function delete(Request $request)
    {
        $exam = Exams::find($request->id);
        $exam->delete();
        return redirect('admin/exam');
    }   //
}
