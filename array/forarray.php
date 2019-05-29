<?php
	$arr = array(1,2,3,4);
	for($i = 0; $i < 4; $i++){
	echo $arr[$i];
}
echo '<br />';

$arr = array('101' => '猪威','102' => '猴子');

foreach($arr as $value){
	echo $value;	
}
echo '<br />';

foreach($arr as $key => $value){ 
	echo $key.'=>'.$value;	
}


	
	
?>