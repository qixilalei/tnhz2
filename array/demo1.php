<?php
	header("content-type:text/html;charset=utf-8");
	//第一种
	$arr1[] = 10;
	$arr1[] = 20;
	$arr1['a'] = 'test';
	echo '<pre>';
	print_r($arr1);
	echo '</pre>';
	
	//第二种
	$arr2 = [1,2,'a' =>'test'];
	echo '<pre>';
	print_r($arr2);
	echo '</pre>';
	
	//第三种
	$arr3 = array(1,2,'a' => 'test');
	print_r($arr3);
	
	//第四种
	$arr4 = array(1,2,3);
	echo '<pre>';
	print_r($arr4);
	echo '</pre>';
	
	//第五种 
	$arr5 = array('1' => '套你','2' => '猴子');
	echo '<pre>';
	print_r($arr5);
	echo '</pre>';
?>