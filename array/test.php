<?php
	header("content-type:text/html;charset=utf-8");
	
//1.定义两个变量,并对这两个变量进行强制转换,且输出转换后的类型  (至少2种方法)
	$a = 123;
	$b = 12;
	echo (string)$a;
	echo '<br />';
	echo floatval($b);
	echo settype($b,'string');
	var_dump($b);
	
	
//2.一张纸的厚度大约是0.08mm,对折多少次之后能达1000米？
$a = 0;
for($b = 8; $b <= 100000000; $b*=2){
	$a++;
}
echo $a.'<br />';


//3.我国古代数学家张邱建在《算经》中出了一道“百钱买百鸡
//”的问题，题意是这样的：
//5文钱可以买一只公鸡，3文钱可以买一只母鸡，
//1文钱可以买3只雏鸡。现在用100文钱买100只鸡，
//那么各有公鸡、母鸡、雏鸡多少只？请编写程序实现	
for($a = 1; $a <= 100; $a++){
	for($b = 1; $b <= 100; $b++){
		for($c = 1; $c <= 100; $c++){
			if($a*5+$b*3+$c/3==100 && $a+$b+$c==100){
				echo $a.'公鸡'.$b.'母鸡'.$c.'雏鸡';
			}
		}
	}
}
echo '<br />';


//4.至少使用3种方法定义数组并赋值	
	$arr = array('101' => '文本');
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	$arr = array(null => 'aaa');
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	$arr = array(1,2,'aa' => '文字');
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	
	
?>