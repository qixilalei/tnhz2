<?php
	header("content-type:text/html;charset=utf-8");
	var_dump((int)array(10,2,'a'));
	var_dump(@(string)array('aa'));
/*	$name = '猪威';
	$sex = '人妖';
	$age = '110';
	$arr = compact('name','sex','age');
	print_r($arr);
	
	$a = array('姓名' => '猪威', '性别' => '人妖',
	'睿智' => '酱家耆');
	extract($a);*/
	$a = 1;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	<p<?php if ($a): ?>class = "a"<?php endif;?>>test</p>	
</body>
</html>