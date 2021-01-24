<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.homework.index');
    }
    public function add()
    {
        return view('admin.homework.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/homework');
    }
    public function edit(Request $request)
    {
        return view('admin.homework.edit');
    }
    public function update(Request $request)
    {
        return redirect('admin/homework');
    }   //
}
