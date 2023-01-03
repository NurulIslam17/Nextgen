<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FontendController extends Controller
{
    public function home()
    {
        return view('fontend.home');
    }

    public function blogs()
    {
        $allData= DB::table('posts')
            ->join('users','users.id','posts.author_id')
            ->select('posts.*','users.name')
            ->orderBy('posts.id', 'desc')
            ->get();
//        return  $allData;

        return view('fontend.blogs',compact('allData'));
    }

    // Details
    public  function postDetails($id)
    {
        $allData= DB::table('posts')
            ->join('users','users.id','posts.author_id')
            ->where('posts.id',$id)
            ->select('posts.*','users.name')
            ->first();
//        return $allData;
        return view('fontend.details',[
            'details' => $allData,
        ]);
    }

}
