<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandardscoreController extends Controller
{
    public function index(Request $request)
    {

        return view('standardscore.index');
    }      //
}
