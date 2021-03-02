<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HomeworkCreateRequest; //FormRequestを使用してValidate
use App\Homework;
use App\Subjects;

class HomeworkController extends Controller
{
    public function index(Request $request)
    {
        $homeworks = Homework::get();
        $data = ['homeworks' => $homeworks];
        return view('admin.homework.index', $data);
    }
    public function add()
    {
        $subjects = Subjects::get()->pluck('name', 'id');
        $data = ['subjects' => $subjects];
        return view('admin.homework.create', $data);
    }
    public function create(HomeworkCreateRequest $request) //Request -> HomeworkCreateRequest
    {
        Homework::create($request->all());
        return redirect('admin/homework/create');
    }
    public function edit(Request $request)
    {
        $homework = Homework::find($request->id);
        $data = ['homework' => $homework];
        return view('admin.homework.edit', $data);
    }
    public function update(Request $request)
    {
        Homework::find($request->id)->update($request->all());
        return redirect('admin/homework');
    }
    public function delete(Request $request)
    {
        $homework = Homework::find($request->id);
        $homework->delete();
        return redirect('admin/homework/');
    }   //
}
