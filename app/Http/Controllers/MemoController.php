<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Memo;

class MemoController extends Controller
{
    public function index(Request $request)
    {
        $memos = Memo::get();
        $data = ['memos' => $memos];
        return view('memo.index', $data);
    }      //
}
