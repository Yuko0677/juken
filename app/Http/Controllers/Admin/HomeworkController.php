<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Homework;

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

        //以下を追記
        //Validationを行う


        return redirect('admin/homework/create');
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
