<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //write query to get the data from posts table
        
        $allPosts = Post::all();//SELECT * from posts
        // dd($allPosts); //collection object that contains small objects of Post model class
        // $allPosts = [
        //     ['id' => 1 , 'title' => 'laravel is cool', 'posted_by' => 'Ahmed', 'creation_date' => '2022-10-22'],
        //     ['id' => 2 , 'title' => 'PHP deep dive', 'posted_by' => 'Mohamed', 'creation_date' => '2022-10-15'],
        // ];

        return view('posts.index', [
          'posts' => $allPosts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($postId)
    {
        $arr = [
            ['id' => 1 , 'category' => 'test']
        ];
        // dd($arr);
        //select * from posts where id  = $postId
        $post = Post::find($postId);
        // $post = Post::where('id', $postId)->first();

        //select * from posts where title = 'laravel' limit 1;
        //Post::where('title', 'Laravel For Beginners')->first()
        // $posts = Post::where('title', 'Laravel For Beginners')->get();

        return 'we are in show now';
    }

    public function store()
    {
        //here we will put the logic to store in db

        //- create the db (Done)
        //- create the needed tables (Done)
        //- make connection to the db
        //- write query to store the data in db
        //- modify input names in the create.blade.php
        //- close the connection of db
        //- redirection to the index page
        dd('we are storing the data');
    }
}
