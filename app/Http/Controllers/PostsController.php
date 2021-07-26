<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() 
    {

        $posts = Post::all();
        $video = Video::find(1);
        // $posts = Post::orderBy('title')->get();
       
        // $posts = Post::orderBy('title')->take(3)->get( );
        
        // return view('articles', compact('posts'));

        return view('articles', [
            'posts' => $posts,
            'video' => $video
        ]);
    }

    public function show($id) 
    {

        $post = Post::findOrFail($id);

        // $posts = [
        //     1 => 'Mon titre No 1',
        //     2 => 'Mon titre No 2'
        // ];

        // $post = $posts[$id] ?? 'Pas de titre';

        return view('article', [
            'post' => $post
        ]);
    }

    public function create() 
    {
        return view('form');
    }

    public function store(Request $request) 
    {
        // 1e facon
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }
    

    public function contact() 
    {
        
        return view('contact');
    }



    public function register()
    {
        $post = Post::find(11);
        $video = Video::find(1);

        $comment1 = new Comment(['content' => 'Mon premier commentaire']);
        $comment2 = new Comment(['content' => 'Mon deuxieme commentaire']);
        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);

        $comment3 = new Comment(['content' => 'Mon troisieme commentaire']);
        $video->comments()->save($comment3);
    }



}
