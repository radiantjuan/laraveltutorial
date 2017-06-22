<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $posts = Post::all();
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->get()->toArray();

        return view('posts.index',compact('posts','archives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $post = new Post;
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();

        // Post::create([
        //     'title' => $request->title,
        //     'body' => $request->body,

        // ]);

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
        ]);

        auth()->user()->publish(
            new Post(['title','body'])
        );

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.single',compact('post'));
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
    }

    public function addComment(Post $post){

        $this->validate(request(),['body' => 'required|min:2']);

        $post->addComment(request('body'));

        return back();

    }
}
