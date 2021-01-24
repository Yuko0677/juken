<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StandardscoreController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.standardscore.index');
    }
    public function add()
    {
        return view('admin.standardscore.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/standardscore');
    }
    public function edit(Request $request)
    {
        return view('admin.standardscore.edit');
    }
    public function update(Request $request)
    {
        return redirect('admin/standardscore');
    }    //
}
