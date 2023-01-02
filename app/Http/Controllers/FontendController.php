<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function home()
    {
        return view('fontend.master');
    }
}
