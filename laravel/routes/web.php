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
    return "Hello world A Kolomiec";
});

Route::get('/shop', function (){
    return "Каталог";
});

Route::get('/shop/12', function (){
    return "Товар 12";
});

Route::get('/post/{id}', function ($id) {
    return 'Пост id = ' . $id;
});

Route::get('/post/{id}', function ($id) {
    return 'Пост id = ' . $id;
});


Route::get('/post/{post}/{tag}', function ($id, $tagid){
    return "Пост id= " . $id . " tagid= " . $tagid;
});

Route::get('/postv2/{post?}', function ($id=0){
    return "Пост id= " . $id;
});

Route::get('/users/{id?}/{name?}', function ($id = 0, $name = 'vasja'){
    return "User " . $id . ". Name " . $name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);


