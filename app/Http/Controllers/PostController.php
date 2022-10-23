<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1 , 'title' => 'laravel is cool', 'posted_by' => 'Ahmed', 'creation_date' => '2022-10-22'],
            ['id' => 2 , 'title' => 'PHP deep dive', 'posted_by' => 'Mohamed', 'creation_date' => '2022-10-15'],
        ];

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

        return 'we are in show now';
    }

    public function store()
    {
        //here we will put the logic to store in db

        //- create the db
        //- create the needed tables
        //- make connection to the db
        //- write query to store the data in db
        //- modify input names in the create.blade.php
        //- close the connection of db
        //- redirection to the index page
        dd('we are storing the data');
    }
}
