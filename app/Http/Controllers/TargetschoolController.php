<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\TargetSchool;

class TargetSchoolController extends Controller
{
    public function index(Request $request)
    {
        $targetschools = TargetSchool::get()->sortByDesc('ranking');
        $data = ['targetschools' => $targetschools];
        return view('targetschool.index', $data);
    }      //
}
