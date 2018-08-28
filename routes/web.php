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



Route::get('/login',function(){
	return 'login page';
});

//为了方便管理创建路由组
Route::group(['middleware' =>'login'],function(){
	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/user/{id}', function($id){
		echo '用户ID为'.$id;
	})->where('id','\d+');

	Route::get('/addsfamin',function(){
		return '这里是有台页面';
	})->name('admin');

	Route::get('/home',function(){
		return '<a href="'.route('admin').'">后台</a>';
	});

	//更新
	Route::get('/update',function(){
		echo 'update';
	})->middleware('login');

	//删除
	Route::get('delete',function(){
		echo 'delete';
	})->middleware('login');
});


Route::get('/404',function(){
	if (empty($_GET['id'])){
		abort(404);
	}
});


//后台路由
Route::get('/user/add','ABCController@add');

Route::get('/user/insert','ABCController@insert');

//API接口路由
Route::get('/user/{id}','ABCController@show')->name('user.show');

Route::get('/users','ABCController@index')->middleware('login');
// Route::get('/test',function(){
// 	echo route('user.show',['id' =>100]);
// });

//资源控制器
Route::resource('tiezi','AController');


Route::get('/cookie','HomeController@set');

//闪存
Route::get('/flash','HomeController@flash');

Route::get('/get-flash','HomeController@getFlash');

Route::get('/page-1','HomeController@page1');

Route::get('/page-2','HomeController@page2');

Route::get('/control','HomeController@control');

//数据库操作
Route::get('/select','DBController@select');
Route::get('/trans','DBController@trans');

//构造器
Route::get('/charu','DBController@insert');
//多条插入
Route::get('/duo','DBController@duo');

//多表联查
Route::get('/join','DBController@join');