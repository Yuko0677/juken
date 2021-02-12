<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subjects;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
        $subjects = Subjects::get();
        $data = ['subjects' => $subjects];
        return view('admin.subject.index', $data);
    }
    public function add()
    {
        return view('admin.subject.create');
    }
    public function create(Request $request)
    {
        Subjects::create($request->all());
        return redirect('admin/subject/create');
    }
    public function edit(Request $request)
    {
        $subject = Subjects::find($request->id);
        $data = ['subject' => $subject];
        return view('admin.subject.edit', $data);
    }
    public function update(Request $request)
    {
        Subjects::find($request->id)->update($request->all());
        return redirect('admin/subject');
    }
    public function delete(Request $request)
    {
        $subject = Subjects::find($request->id);
        $subject->delete();
        return redirect('admin/subject');
    }    //
}
