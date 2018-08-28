<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ABCController extends Controller
{
    //

    public function add()
    {
    	echo 'add';
    }

    //插入
    public function insert()
    {
    	echo 'insert';
    }

    public function show($id)
    {
    	echo $id;
    }

    public function index()
    {
    	echo '用户列表';
    }
}
