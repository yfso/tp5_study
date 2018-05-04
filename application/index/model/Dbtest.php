<?php
namespace app\index\model;
use think\Model;

class Dbtest extends Model{
	protected $connection=[
		'type'=>'mysql',
		'hostname'=>'127.0.0.1',
		'database'=>'test',
		'username'=>'root',
		'password'=>'',
		'hostport'=>'3306'
	];
}