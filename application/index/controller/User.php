<?php
namespace app\index\controller;
use \think\Controller;
class User extends Controller{
	public function _initialize(){
		echo 'I am inti function<br>';
	}
	public function index(){
		return "I am User controller";
	}
	public function getu1(){
		return view();
	}
	public function getu2(){
		$view = new \think\View;
		return $view->fetch('getu1');
	}
	public function getu3(){
		return $this->fetch();
	}

}