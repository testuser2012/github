<?php
var_dump($_SERVER);

class test{
	function test(){
		$a = 1000;
		return $a;
	}

	function getA($a=FALSE) {
		$a = ($a === FALSE)? $this->test() : $a ;
		echo $a;
	}
}

$test = new test;
$value = 1500;
echo $test->getA($value);
