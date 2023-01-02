<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function dashboard()
    {
        return view('usersPanel.includes.home');
    }
}
