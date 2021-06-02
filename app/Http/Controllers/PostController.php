<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Notifications\NewPostNotification;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

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

        $request->validate([
            'title'=> 'required|unique:posts|max:255',
            'post' => 'required',
            'image' => 'mimes:jpeg, jpg, svg, png'
        ]);


        if($request->hasFile('image')){
            $allowedfileExtension=['jpg','jpeg','png','svg'];
            $file = $request->file('image');

            /**
             * Here we specify a file name for the uploaded file
             * and  check whether it has the right extension
             */

             $file_name = time().'.'.$file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $check = in_array($extension, $allowedfileExtension);
             if($check){
                 /**
                  * If the extension is corrct, then we save the file.
                  */
                 $saved_file = $file->storeAs('public/images', $file_name);
             }
             else{
                 $saved_file = "You can only enter an image.";
                 return redirect()->back()->with('error', $saved_file);
             }
            }
            else{
                $file_name = "No File saved.";
            }


        Post::create([
            "title" => $request->title,
            "featured_image_url" => $file_name,
            "post" => $request->post,
            "user_id" => 1,
            "category_id" => $request->category_id,
        ]);

            $user = User::where('id', 1)->first();
            if ($user){
                $user->notify(new NewPostNotification());
            }

        return redirect()->route('home')->with('message', 'Post added successfully.');
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
    public function destroy(Request $request)
    {
        //
        $post = Post::findOrFail($request->id);

        if($post->featured_image_url != null){

            Storage::delete('public/images/'.$post->featured_image_url);

        }

        $comments = Comment::where('post_id', $post->id)->delete();

        $post->delete();

        return response()->json();

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
