<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // $smarty->display("index.html");
});


//以下是路由的请求方式 
// Route::get('/hello', function () {
//     return "hello get";
    
// });

// Route::post('/hello', function () {
//     return "hello post";
    
// });

// Route::delete('/hello', function () {
//     return "hello delete";
    
// });

Route::any('/haha', function()
{
    return 'haha123';
});


//通过控制器访问方法 
// 通过user控制器访问里面index方法
Route::get('/user','UserController@index');


Route::get('/stu','StuController@index');

