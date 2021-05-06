<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Project;
use App\Models\Category;

class StaticController extends Controller
{
    //

    public function home(){

        $user = User::findorfail(2);
        $posts = Post::all()->take(3);
        $projects = Project::all()->take(3);

        return view('welcome', compact('posts', 'projects'))->with('name', $user->name);
    }

    public function about(){

        return view('about');
    }

    public function contact(){

        $user = User::findorfail(1);

        return view('contact')->with('user', $user);

    }

    public function offers(){

    }

    public function showPostDetails($id){

        $categories = Category::all()->take(4);
        $post = Post::findOrFail($id);

        return view('posts.detail-post', compact('categories', 'post'));
    }




}
