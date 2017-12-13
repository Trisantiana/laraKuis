<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function show()
    {
        $results = Result::select('score')->where('user_id', auth()->id())->first();


        return view('result', compact('results'));
    }




}