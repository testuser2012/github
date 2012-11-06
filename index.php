<?php
class test{
	function returnA(){
		$a = 100;
		return $a;
	}

	function getA() {
		$a = $this->returnA();
		echo $a;
	}
}

$test = new test;
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
<p><?php echo $test->getA(); ?></p>
</body>
</html>