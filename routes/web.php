<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $testName = 'ahmedasdasdasdd';
    $books = ['first book', 'second book'];

    return view('test', [
        'name' => $testName,
         'age' => 23,
         'books' => $books,
    ]);
});
