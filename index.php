<?php
var_dump($_SERVER);

class test{
	function test(){
		$a = 100;
		return $a;
	}

	function getA() {
		$a = $this->test();
		echo $a;
	}
}

$test = new test;
echo $test->getA();
