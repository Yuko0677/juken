<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TargetschoolController extends Controller
{
    public function index(Request $request)
    {

        return view('targetschool.index');
    }      //
}
