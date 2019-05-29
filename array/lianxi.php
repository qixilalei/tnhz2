<?php
	//第一题
	var_dump((bool)'');
	var_dump((bool)1);
	var_dump((bool)-5);
	var_dump((bool)2.3e5);
	var_dump((bool)array());
	var_dump((bool)array(10));
	var_dump((bool)'false');	
	var_dump((bool)null);
	echo '<br />';
	
	var_dump((int)-2);
	var_dump((int)2.3e5);
	var_dump((int)array());
	var_dump((int)array(10));
	var_dump((int)'');
	var_dump((int)null);
	var_dump((int)true);
	var_dump((int)false);
	var_dump((int)'test');
	var_dump((int)'120test');
	echo '<br />';
	
	var_dump((string)-2);
	var_dump((string)2.3e5);
	var_dump(@(string)array());
	var_dump(@(string)array(10));
	var_dump((string)'');
	var_dump((string)null);
	var_dump((string)true);
	var_dump((string)false);
	var_dump((string)'test');
	var_dump((string)'120test');
	
	//第二题计算从1到100以内所有能被3或者17整除的数的和并输出
	$sum = 0;
	for($i = 1; $i <= 100; $i++){
		if($i % 3 == 0 || $i % 17 == 0){
			$sum += $i;
		}
	}
	echo $sum.'<br />';
	
	//第三题3000米长的绳子每天减一半,问多少天这个绳子会小于5米？不考虑小数
/*	$sum = 3000;
	$cishu=0;	
	do{
		$sum/=2;
		$cishu++;
	}
	while($sum>5);
	echo $cishu;
	echo '<br />';*/
	
	$ci = 0;
	for($i = 3000; $i > 5; $i/=2){
		$ci++;
	}
	echo $ci.'<br />';
	
/*	$sum = 3000;
	$cishu = 0;
	while($sum > 5){
		$sum /= 2;
		$cishu++;
	}
	echo $cishu.'<br />';*/
	
	//第四题定义一个索引数组和一个关联数组并把它们遍历出来
	$arr = array(1,2,3,4);
	for($i = 0; $i < 4; $i++){
		echo $arr[$i];
	}
	echo '<br />';
	
	$arr = array('1' => ' 哈得很','2' => '猪威');
	
	foreach($arr as $aaa){
		echo $aaa.'<br />';
	}

	foreach($arr as $key => $value){
		echo $key.'=>'.$value;
	}
?>