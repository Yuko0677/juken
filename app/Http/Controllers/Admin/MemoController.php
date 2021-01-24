<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.memo.index');
    }
    public function add()
    {
        return view('admin.memo.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/memo');
    }
    public function edit(Request $request)
    {
        return view('admin.memo.edit');
    }
    public function update(Request $request)
    {
        return redirect('admin/memo');
    }    //
}
