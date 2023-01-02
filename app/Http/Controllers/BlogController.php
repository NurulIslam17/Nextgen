<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createClog()
    {
        return view('usersPanel.blog.create');
    }

    public function manageBlog()
    {
        return view('usersPanel.blog.manage');
    }
}
