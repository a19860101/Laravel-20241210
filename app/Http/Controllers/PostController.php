<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::orderBy('id','DESC')->get();
        return view('post.index')->with(['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 檔案上傳
        $cover = $request->file('cover')->store('images','public');

        //
        $post= new Post;
        $post->fill($request->all());
        $post->cover = $cover;
        $post->save();

        // Post::create($request->all());

        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        // if(Storage::disk('public')->exists($post->cover)){
        //     return '封面存在';
        // }

        // if($post->cover == null){
        //     return '不存在';
        // }else{

        // }
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('post.show',$post->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('post.index');
    }
}
