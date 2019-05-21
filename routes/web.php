<?php

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


Route::get('/search', function(){
    
    $friends = \App\Friend::where('name','like','%a%')->get();
    
    foreach( $friends as $friend ){
        echo $friend->name.'<br/>';
    }
});

Route::get('/set', function(){
    $array = [
        'name' => 'Ashraf',
        'lastname' => 'Ayad',
    ];
    $friend = \App\Friend::create($array);

    return $friend;
});

Route::get('/get', function(){
   
    $friends = \App\Friend::all();


    foreach( $friends as $friend ){
        echo $friend->name.'<br/>';
    }

});