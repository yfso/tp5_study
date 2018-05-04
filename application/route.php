<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
//引入系统类
use \think\Route;
// //定义路由规则
// Route::rule('/','index/index/index');
// Route::rule('test$','index/test/test');
// //带参数的路由
// Route::rule('test1/:id$','index/test/test1');
// //带额外的参数
// Route::rule('test2$','index/test/test2?id=10&namezhangsan');
// //请求类型设置
// Route::rule('test3$','index/test/test3','get|post');
Route::rule('test4','index/test/test4');
//批量注册
// Route::rule([
// 	"test"=>"index/test/test",
// 	"test1/[:id]"=>"index/test/test1"
// ]);
//配置文件注册
// return [
// 	"test"=>"index/test/test",
// 	"test1/:id"=>"index/test/test1"
// ];
//路由规则
// Route::rule("test1/:id$","index/test/test1","get",[],['id'=>'\d{1,3}']);
//资源路由
// Route::resource("test","index/test");
//快捷路由
// Route::controller('test','index/test');
Route::controller('user','index/User');
Route::controller('test01','index/Test01');
Route::rule('Dbtest1','index/Dbtest/test1');
Route::resource('msql','index/msql');