<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    private $post, $image,$imageName,$imageDir,$imageUrl;

    public function createClog()
    {
        return view('usersPanel.blog.create');
    }

    public function manageBlog()
    {
        return view('usersPanel.blog.manage');
    }

    // Data Insertion in DB

    public function saveImage($request)
    {
        $this->image       = $request->file('image');
        $this->imageName    = 'image'.time().'.'.$this->image->getClientOriginalExtension();
        $this->imageDir     = 'post/image/';
        $this->image->move($this->imageDir,$this->imageName);
        $this->imageUrl     =($this->imageDir.$this->imageName);
        return $this->imageUrl;
    }


    public function storePost(Request $request)
    {
//        dd($request->all());
        $multiImg = array();
        if($files = $request->file('feature_image'))
        {
            foreach ($files as $imageFile)
            {
                $image        = $imageFile;
                $imageName    = 'image'.rand(1,100).'.'.$image->getClientOriginalExtension();
                $imageDir     = 'post/features_image/';
                $imageFile->move($imageDir,$imageName);
                $imageUrl     =($imageDir.$imageName);
                $multiImg[] = $imageUrl;
            }
        }

        Post::insert([
            'author_id'     => Auth::user()->id,
            'title'         => $request->title,
            'description'   => $request->description,
            'image'         => $this->saveImage($request),
            'feature_image' => implode('|',$multiImg),
        ]);
        return back()->with('msg','New Post Created');
    }
}
