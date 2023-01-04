<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class BlogController extends Controller
{
    private $post, $image,$imageName,$imageDir,$imageUrl;

    public function createClog()
    {
        return view('usersPanel.blog.create');
    }

    public function manageBlog()
    {
        $posts = Post::where('author_id',Auth::user()->id )->get();
        return view('usersPanel.blog.manage',compact('posts'));
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

         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'feature_image' => 'required',
            'date' => 'required',
        ]);

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
            'date' => $request->date
        ]);
        return back()->with('msg','New Post Created');
    }

    //    Post details
    public function postDetails($id)
    {
        $image =  DB::table('posts')->where('id', $id)->first();
        $images = explode('|',$image->feature_image);
//        return $images;
        return view('usersPanel.blog.details',[
            'postDetails' => $image,
            'allImages' =>$images
        ]);
    }

    //    post Delete
    public  function postDelete($id)
    {
        $post =  Post::find($id);
//        return $post;
        if(file_exists($post->image))
        {
            unlink($post->image);
        }



        $post->delete();
        return back()->with('delete','Post Deleted successfully.');


    }
}
