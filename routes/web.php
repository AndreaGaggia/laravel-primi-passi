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
    $noposts = [
        [
            'title' => 'NoPost #1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum asperiores possimus recusandae adipisci dicta, facere voluptas! Unde esse ea possimus aperiam dolore consequatur, quae dolorum, facere laboriosam inventore explicabo error!',
        ],
        [
            'title' => 'NoPost #2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum asperiores possimus recusandae adipisci dicta, facere voluptas! Unde esse ea possimus aperiam dolore consequatur, quae dolorum, facere laboriosam inventore explicabo error!',
        ],
        [
            'title' => 'NoPost #3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum asperiores possimus recusandae adipisci dicta, facere voluptas! Unde esse ea possimus aperiam dolore consequatur, quae dolorum, facere laboriosam inventore explicabo error!',
        ],
    ];
    return view('index', compact('noposts'));
});

Route::get('about-noblog', function () {
    return view('about');
});