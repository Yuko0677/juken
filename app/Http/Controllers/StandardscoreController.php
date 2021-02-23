<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standardscore;

class StandardscoreController extends Controller
{
    public function index(Request $request)
    {
        $standardscores = Standardscore::get();
        $data = ['standardscores' => $standardscores];
        return view('standardscore.index', $data);
    }      //
}
