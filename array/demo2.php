<?php
	header("cotent-type:text/html;charset=utf-8");
$arr1 = array(101 => '澳门',TRUE => '赌场',null => '开业了');	
echo $arr1[1];
echo $arr1[''];	
echo '<br />';

$arr2 = array(12,15,16);
echo $arr2[0];
echo '<br />';
        
	$arr = array('101' => 'test');
	echo $arr['101'];
	echo '<br />';
	
	$arr = array('101.1' => 'test'); 
	echo $arr['101.1'];
	echo '<br />';
	
	$arr = array(101.1 => 'test'); 
	echo $arr[101.1];
	echo '<br />';
	
	$arr = array(true => 'test');
	echo $arr[1];
	echo '<br />';
	
	$arr = array(null => 'test');
	echo $arr[''];
	
	
	$arr2 = array(1,2,'test');	//索引数组
	
	$arr3 = array('猴子' => '蒋佳琪','women' => '蒋佳琪',
	'淫妖' => '猪喂');		// 关联数组
	
	$arr4[] = 10;
	$arr4[] = 20;
	$arr4[] = 30;
	$arr4[] = 40;
	print_r($arr4);
	echo '<br />';
	
	
	for($i = 1; $i <= 10; $i++){
		$arr4[] ='猴子'.$i;
	}
	echo '<pre>';
	print_r($arr4);
	echo '</pre>';          
	
	$arr6 = range(1, 100);
	echo '<pre>';
	print_r($arr6);
	echo '</pre>';
?>