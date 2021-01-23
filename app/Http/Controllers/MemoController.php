<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index(Request $request)
    {

        return view('memo.index');
    }      //
}
