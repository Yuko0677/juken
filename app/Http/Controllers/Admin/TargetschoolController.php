<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TargetschoolController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.targetschool.index');
    }
    public function add(Request $request)
    {
        return view('admin.targetschool.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/targetschool');
    }
    public function edit(Request $request)
    {
        return view('admin.targetschool.edit');
    }
    public function update(Request $request)
    {
        return redirect('admin/targetschool');
    }    //
}
