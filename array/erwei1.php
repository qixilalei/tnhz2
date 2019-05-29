<?php
/*	$arr['a'][][][] = 25;
	$arr['b'][][] = 55;
	echo '<pre>';
		print_r($arr);
	echo '</pre>';
	
	$arr2 = array(
		'a' => array(1,2,3),
		array(4,5,6),
		array(7,8,9)
	);
	echo '<pre>';
		print_r($arr2);
	echo '</pre>';*/
	
	$arr[][] = 1; $arr[0][] = 1;
	$arr[][] = 2; $arr[0][] = 2;
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	$arr = array(
	array(10,20,30),
	'a' =>array(10,20,30)
	);
	echo '<pre>';
	print_r($arr);
	echo '<br />';
	echo '</pre>';
	
	$arr = array();
	$arr[][] = [1,2];
	$arr[] = [3,4];
	echo '<pre>';
	print_r($arr);
	echo '<br />';
	echo '</pre>';
	
	
		function lx($han){
		for($i = 1; $i <= $han; $i++){
			for($j = 1; $j <= $han-$i; $j++){
				echo '&nbsp;&nbsp;';
			}
			for($b = 1; $b <= $i*2-1; $b++){
				echo '*';
			}
			echo '<br />';
		}
		for($i = $han-1; $i >= 1; $i--){
			for($j = 1; $j <= $han-$i; $j++){
				echo '&nbsp;&nbsp;';
			}
			for($b = 1; $b <= $i*2-1; $b++){
				echo '*';
			}
			echo '<br />';
		}
	}
	echo lx(5);
	
	
	
	
	
	
	
	
	
	
	
	
?>