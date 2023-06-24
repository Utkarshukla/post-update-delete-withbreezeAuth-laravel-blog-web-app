<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //$post= User::find($id)->post;
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,$id)
    
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        $post = new Post();
        $post->title = $request->title;
        $post->story = $request->story;
        $user->post()->save($post);
        return redirect(route('dashboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $post = Post::paginate(3);
        return view('/dashboard', ['post' => $post]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $id = auth()->user()->id;
        $post = Post::all()->where('uid', $id);
        return view('totalpost', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
       // dd($post);
        return view('editpost',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatepost(Request $request,$id)
    {
        $post = Post::find($id);
        $post->title= $request->title;
        $post->story= $request->story;
        $post->save();
        return redirect(route('dashboard'))->with('status','Post updated');
        
    }
    public function update(Request $request, Post $post)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Post::destroy($id);
        return redirect(route('total-post'))->with('status', 'Post deleted Successfully');
    }
}
