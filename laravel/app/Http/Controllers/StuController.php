<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StuController extends Controller
{
    //1 查看
    public function index()
    {
    	$list = \DB::table("stu")->get();
    	 var_dump($list);
    	 // dd($list);
    	 // exit();

    }

    //2 单条查看
    public function show($id)
    {

    }

    //3 添加表单
    public function create()
    {

    }

    //4 执行添加
    public function store()
    {

    }

    //5 修改表单
    public function edit($id)
    {

    }

    //6 执行修改
    public function update($id)
    {

    }

    //7 销毁
    public function destroy($id)
    {

    }
}
