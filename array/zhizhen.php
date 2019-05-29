<?php
	/*
	 * next()将数组指针往后移一位
	 * prev()往前移一位
	 * end()数组最后一位
	 * reset()重置数组回到第一位
	 * key()获取当前位置的键名
	 * */
	 
/*	$arr = array(10,20,30,'one' => '101');
	echo current($arr).'<br />';
	echo next($arr).'<br />';//读取当前位置的后一位
	echo prev($arr).'<br />';//读取当前位置的前一位
	echo end($arr).'<br />';//读取数组的最后一位,空就返回false
	echo reset($arr).'<br />';//重置,.读取第一位,空返回false
	*/
	
/*	while(true){
		echo key($arr).'=>'.current($arr).'<br />';
		if(!next($arr)){
			break;
		}
	}
	do{
		echo key($arr).'=>'.current($arr).'<br />';
	}while(next($arr));*/
	
	
/*	$arr = array(1,2,3,4,5);
	echo end($arr).'<br />';
	do{
		echo key($arr).'=>'.current($arr).'<br />';
	}while(prev($arr));	*/
	 
	$arr = array(1,2,3,4,5);
	end($arr).'<br />';
	do{
		echo key($arr).'=>'.current($arr).'<br />';
	}while(prev($arr));
	echo '<hr />';
	
	end($arr).'<br />';
	while(true){
		echo key($arr).'=>'.current($arr).'<br />';
		if(!prev($arr)){
			break;
		}
	}
	echo '<br />';
	
/*	$arr[][] =10; 
	if(count($arr,1) != count($arr,0)){
		echo '多维';
	}else{
		echo '一维';
	}*/
?>