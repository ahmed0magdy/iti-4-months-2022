<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $testName = 'ahmedasdasdasdd';
        $books = ['first book', 'second book'];
    
        return view('test', [
            'name' => $testName,
             'age' => 23,
             'books' => $books,
        ]);
    }

    public function test2()
    {
        return view('create');
    }

}
