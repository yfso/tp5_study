<?php
namespace app\index\controller;
use \think\Controller;
class Test01 extends Controller{
	//前置方法
	protected $beforeActionList=[
		'one',
		'two'=>['except'=>'gett1'],
		'three'=>['only'=>'gett1']
	];
	public function one(){
		echo "one<hr>";
	}
	public function two(){
		echo "two<hr>";
	}
	public function three(){
		echo "three<hr>";
	}
	public function gett1(){
		echo "I am t1 function<hr>";
	}
	public function gett2(){
		echo "I am t2 function<hr>";
	}
}