<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['author_id','title','description','image','feature_image'];

}
