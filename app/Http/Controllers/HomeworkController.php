<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Homework;

class HomeworkController extends Controller
{
    public function index(Request $request)
    {
        $homeworks = Homework::get();
        $data = ['homeworks' => $homeworks];
        return view('homework.index', $data);
    }
    //
}
