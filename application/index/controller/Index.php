<?php
namespace app\index\controller;

use app\index\controller\Test;
class Index
{
    public function index()
    {
    	$test = new Test();
       return $test->test();
    }
}
