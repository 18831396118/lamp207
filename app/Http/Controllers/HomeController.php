<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //cookie 设置
    public function set()
    {
        //设置
        // \Cookie::queue('name-1','2000',10);
        // return response('<p>我是一个晓晓的石头</p>')->withCookie('class','207',10);

        //读取
        // $name = \Cookie::get('name');
        // dd($name);
    }

    //写入闪存
    public function flash()
    {
        \Session::flash('week','Monday');
    }

    public function getFlash()
    {
        echo \Session::get('week');
    }


    //模板继承
    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');
    }

    //控制
    public function control()
    {
        return view('control',[
            'isVip' => true,
            'class' => [
                '小明',
                '小红',
                '小梅'
            ]
    ]);
    }

    public function try()
    {
        return view('try');
    }
}
