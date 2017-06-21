<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index()
    {
        return view('file');
    }

    public function upload(Request $request)
    {
        // 1.获取文件上传信息
        // file()方法
        $upload = $request->file('img');
        // name值为request实例的属性 获取文件上传信息
        //$upload = $request->img;
        // store() 返回文件的上传路径
        //$info = $upload->store('uploads');
        //$info = $upload->storeAs('uploads/2017','1.jpg');
        // move() 函数可以自定义文件保存的路径
        //$info = $upload->move(base_path('images/2017'),'1.jpg');
        //$info = $request->file('img')->isValid();
        dd($upload);
    }

    public function setSess(Request $request)
    {
        $request->session()->put('name','rika');

        return redirect('/getSess');
    }

    public function getSess(Request $request)
    {
        //echo session('name');
        session(['age' => 18]);
//        $request->session()->flush();
        $request->session()->forget('age');
        dd($request->session()->all());
    }
}
