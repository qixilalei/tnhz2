<?php
	header("content-type:text/html;charset=utf-8");
	$arr2[0][0] = 10;
	$arr2[][] = 20;
	$arr2[][] = 30;
	echo '<pre>';
	print_r($arr2);
	echo 'arr的长度'.count($arr2).'<br />';
	echo 'arr2二维数组的长度中一维'.count($arr2,0).'<br />';
	echo '</pre>';
?>