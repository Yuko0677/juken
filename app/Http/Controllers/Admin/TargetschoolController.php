<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TargetSchool;

class TargetSchoolController extends Controller
{
    public function index(Request $request)
    {
        $targetschools = TargetSchool::get();
        $data = ['targetschools' => $targetschools];
        return view('admin.targetschool.index', $data);
    }
    public function add()
    {
        return view('admin.targetschool.create');
    }
    public function create(Request $request)
    {
        TargetSchool::create($request->all());
        return redirect('admin/targetschool/create');
    }
    public function edit(Request $request)
    {
        $targetschool = TargetSchool::find($request->id);
        $data = ['targetschool' => $targetschool];
        return view('admin.targetschool.edit', $data);
    }
    public function update(Request $request)
    {
        TargetSchool::find($request->id)->update($request->all());
        return redirect('admin/targetschool');
    }
    public function delete(Request $request)
    {
        $targetschool = TargetSchool::find($request->id);
        $targetschool->delete();
        return redirect('admin/targetschool/');
    }  //
}
