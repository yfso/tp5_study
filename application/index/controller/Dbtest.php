<?php
namespace app\index\controller;
class Dbtest{
	public function test1(){
		echo "dbtest1";
		$Dbtest = new \app\index\model\Dbtest();
		$data = $Dbtest::query('select * from test1 where id>=? and id<=?',[1,8]);
//		$data = $Dbtest::table('test1')->select();
		dump($data);
	}
}