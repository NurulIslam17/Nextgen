<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class SendInTwoTableController extends Controller
{
    private $image,$imageName,$imageDir,$imageUrl;

    public function insertIntoTwo()
    {
        return view('usersPanel.twoTable.create');
    }

    public function saveImage($request)
    {
        $this->image       = $request->file('image');
        $this->imageName    = 'project_'.time().'.'.$this->image->getClientOriginalExtension();
        $this->imageDir     = 'post/project/';
        $this->image->move($this->imageDir,$this->imageName);
        $this->imageUrl     =($this->imageDir.$this->imageName);
        return $this->imageUrl;
    }


    public function storeInTwo(Request $request)
    {

//        return $request;
        if($request->type == 'NORMAL')
        {
            DB::table('project_wise_details')->insert([
                'project_id' => $request->project_id,
                'description' => $request->description,
                'type' => $request->type,
                'image' => $this->saveImage($request),
            ]);
        }
        else{
            DB::table('project_wise_aminities')->insert([
                'project_id' => $request->project_id,
                'description' => $request->description,
                'type' => $request->type,
                'image' => $this->saveImage($request),
            ]);
        }
       return back()->with('msg','Data Inserted');
    }
}