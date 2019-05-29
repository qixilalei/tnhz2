<?php
	//第一题数据类型转换
	var_dump((bool)3.14);
	var_dump((bool)array());
	var_dump((bool)array(10));
	var_dump((bool)'false');
	var_dump((bool)'');
	var_dump((bool)null);
	
	var_dump((int)-5);
	var_dump((int)3.14);
	var_dump((int)array());
	var_dump((int)array(10));
	var_dump((int)false);
	var_dump((int)true);
	var_dump((int)'false');
	var_dump((int)'');
	var_dump((int)null);
	var_dump((int)'123test');
	
	var_dump((string)-5);
	var_dump((string)3.14);
	var_dump(@(string)array());
	var_dump(@(string)array(10));
	var_dump(@(string)false);
	var_dump((string)true);
	var_dump((string)'false');
	var_dump((string)'');
	var_dump((string)null);
	var_dump((string)'123test');
	
		
	//第二题遍历数组
	$arr = array(1,2,3,4);
	for($i = 0; $i < 4; $i++){
		echo $arr[$i].'<br />';
	}
	foreach($arr as $key => $value){
		echo $key.'=>'.$value.'<br />';
	}
		
	$arr = array('a' => 'aa','b' => 'bb','c' => 'cc');
	do{
		echo key($arr).'=>'.current($arr).'<br />';
	}while(next($arr));
	
	reset($arr);
	while(true){
		echo key($arr).'=>'.current($arr).'<br />';
		if(!next($arr)){
			break;
		}
	}
	echo '<br />';
	

?>