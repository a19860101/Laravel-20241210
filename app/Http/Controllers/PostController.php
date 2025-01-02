<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

use Illuminate\Http\Request;
use Storage;
use Auth;

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
        $categories = Category::get();
        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $auth_id = Auth::id()?? null;


        // return;

        // 檔案上傳
        if($request->file('cover')){
            $cover = $request->file('cover')->store('images','public');
        }else{
            $cover=null;
        }

        //
        $post= new Post;
        $post->fill($request->all());
        $post->cover = $cover;
        $post->user_id = $auth_id;
        $post->save();


        $tags = explode(',',$request->tag);
        foreach($tags as $tag){
            $t = Tag::firstOrCreate(['title' => $tag]);
            $post->tags()->attach($t);
        }

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
        $categories = Category::get();
        return view('post.edit',compact('post','categories'));
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
        if($request->file('cover')){
            if($post->cover != null){
                Storage::disk('public')->delete($post->cover);
            }
            $cover = $request->file('cover')->store('images','public');
            $post->fill($request->all());
            $post->cover = $cover;
            // $post->tags()->detach();
            $post->save();
        }else{
            $post->title = $request->title;
            $post->body = $request->body;
            $post->category_id = $request->category_id;
            // $post->tags()->detach();
            $post->save();
        }
        $post->tags()->detach();

        $tags = explode(',',$request->tag);
        foreach($tags as $tag){
            $t = Tag::firstOrCreate(['title' => $tag]);
            $post->tags()->attach($t);
        }

        // return redirect()->route('post.show',$post->id);
        return redirect()->route('admin.post.edit',$post->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        // if($post->cover != null){
        //     Storage::disk('public')->delete($post->cover);
        // }
        $post->delete();
        // return redirect()->route('post.index');
        return redirect()->route('admin.post.list');

    }

    public function trash(Post $post){
        $trashes = $post->onlyTrashed()->get();
        return view('post.trash', compact('trashes'));
    }
    public function restore($id){
        // return $id;
        $post = Post::onlyTrashed()->find($id);
        $post->restore();
        return redirect()->route('admin.post.list');
    }
    public function forceDelete($id){
        // return $id;
        $post = Post::onlyTrashed()->find($id);
        $post->forceDelete();
        return redirect()->route('admin.post.list');
    }

    public function list(){
        $posts = Post::orderBy('id','DESC')->get();
        return view('admin.post.index',compact('posts'));
    }
    public function admin_edit(Post $post){
        $categories = Category::get();
        return view('admin.post.edit',compact('post','categories'));
    }
}
