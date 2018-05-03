<?php
namespace app\index\controller;
use \think\Url;
class Test{
	function index(){
		echo "I'm test";
	}
	public function test(){
		return 5;
	}
	function test1(){
		echo input('id');
	}
	function test2(){
		var_dump(input());
	}
	function test3(){
		var_dump(input());
		return view();
	}
	function gettest1(){
		echo "asdasdsads";
	}
	function test4(){
		dump(Url::build('index/index/index'));
		dump(url('index/index/index'));
		dump(url('index/index/test'));
	}
}