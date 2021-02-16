<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FrontController extends Controller
{
    public function front(Request $request)
    {
        $now = Carbon::now();
        $today = $now->format('Y/m/d');
        $data = ['today' => $today];

        $year = 2022;
        $month = 2;
        $day = 1;
        $exam_at = Carbon::createFromDate($year, $month, $day);

        $diff_days = $exam_at->diffInDays($now);
        $data = ['diff_days' => $diff_days];
        return view('front', $data);
    }    //
}
