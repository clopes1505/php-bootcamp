<?php
	for($k=1; $k < $argc; $k++)
		$str.=" ".$argv[$k];
	$str = array_filter(explode(" ", $str));
	sort($str);
	foreach ($str as $final)
		echo $final."\n";
?>