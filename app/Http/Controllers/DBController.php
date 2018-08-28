<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    //
    //查询
    public function select()
    {
    	$qaq = DB::select('select * from yougou limit 10');
    }

    public function trans()
    {
    	DB::transaction(function(){
	    	$res1 = DB::update('update users set moeny = moeny - 100 where id = 1');
	    	$res2 = DB::update('update users set moeny = moeny + 100 where id = 3');
	    	if ($res1 && $res2) {
	    		DB::commit();
	    	}else{
	    		DB::rollback();
	    	}
    	});
    }


    public function insert()
    {
    	$ab = DB::table('users')->insert(['moeny' => '200']);
    	dd($ab);
    }

    public function duo()
    {
    	DB::table('users')->insert([
	    ['username' => 'honghong','password' => '12334']]);
	    // ['username' => 'mingming']]);
    }

    public function join()
    {
        $res = DB::table('goods_1')
        ->join('zebin','goods_1.cate_id','=','zebin.id')
        ->skip(0)
        ->take(10)
        ->get();

        dd($res);
    }
}
