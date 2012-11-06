<?php
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
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" href="css/XXXX.css" media="all">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/XXXX.js"></script>
</head>
<body>
<p><?php echo $test->getA($value); ?></p>
</body>
</html>
