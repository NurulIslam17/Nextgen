<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageImgDiffController extends Controller
{
    public function index()
    {
        return view('usersPanel.seperate_img_table.manage');
    }
    public function create()
    {
        return view('usersPanel.seperate_img_table.create');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
