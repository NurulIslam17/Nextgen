<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageImgDiffController extends Controller
{

    private $image,$imageName,$imageDir,$imageUrl;
    public function index()
    {
        return view('usersPanel.seperate_img_table.manage');
    }
    public function create()
    {
        return view('usersPanel.seperate_img_table.create');
    }


    // saveImage($request)

    public function saveImage($request)
    {
        $this->image       = $request->file('image');
        $this->imageName    = 'product'.time().'.'.$this->image->getClientOriginalExtension();
        $this->imageDir     = 'products/main/';
        $this->image->move($this->imageDir,$this->imageName);
        $this->imageUrl     =($this->imageDir.$this->imageName);
        return $this->imageUrl;

    }
    public function store(Request $request)
    {
        // return $request;

        if($request->hasFile('product_images'))
        {
            $files = $request->file('product_images');

            foreach($files as $file)
            {
                $filename = 'product_featuer'.rand(1,1000).'.'.$file->getClientOriginalExtension();
                $file->move('products/feature/',$filename);
                DB::table('product_images')->insert([
                    'product_key' => $request->product_key,
                    'product_images' => $filename,
                ]);
            }
        }

        DB::table('products')->insert([
            'name' => $request->name,
            'product_key' => $request->product_key,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => $this->saveImage($request),
        ]);

        return back()->with('msg','Product Inserted');
    }
}
