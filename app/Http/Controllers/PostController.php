<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts = Post::all();

        return view('posts.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories = Category::all();

        return view('posts.add-post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Post::create([
            "title" => $request->title,
            "featured_image_url" => $request->image,
            "post" => $request->post,
            "user_id" => 1,
            "category_id" => $request->category_id,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $id)->get();

        return view('posts.view-post', compact('post', 'comments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $post = Post::findOrFail($id);

        return view('posts.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->title,
            'post' => $request->post,
            'featured_image_url' => $request->image,
        ]);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

    public function showDetails($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $id)->get();

        return view('posts.detail-post', compact('post', 'comments'));

    }

    public function showPostList(Request $request)
    {
        // $request->whenHas( 'category', function(){

        // });

        $categories = Category::all();

        if($request->has('category')){

            $posts = Post::where('category_id', $request->category)->get();
        }
        else{
            $posts = Post::all();

        }

        return view('posts.posts-list', compact('posts', 'categories'));
    }
}
