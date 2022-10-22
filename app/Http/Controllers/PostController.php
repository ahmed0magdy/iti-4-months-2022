<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $testName = 'ahmedasdasdasdd';
        $books = ['first book', 'second book'];
    
        return view('posts.index', [
            'name' => $testName,
             'age' => 23,
             'books' => $books,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

}
