<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Memo;

class MemoController extends Controller
{
    public function index(Request $request)
    {
        $memos = Memo::get();
        $data = ['memos' => $memos];
        return view('admin.memo.index', $data);
    }
    public function add()
    {
        return view('admin.memo.create');
    }
    public function create(Request $request)
    {
        Memo::create($request->all());
        return redirect('admin/memo/create');
    }
    public function edit(Request $request)
    {
        $memo = Memo::find($request->id);
        $data = ['memo' => $memo];
        return view('admin.memo.edit', $data);
    }
    public function update(Request $request)
    {
        Memo::find($request->id)->update($request->all());
        return redirect('admin/memo');
    }
    public function delete(Request $request)
    {
        $memo = Memo::find($request->id);
        $memo->delete();
        return redirect('admin/memo/');
    }    //
}
