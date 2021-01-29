<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front(Request $request)
    {
        return view('front');
    }    //
}
