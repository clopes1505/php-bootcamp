<?php
	$arr = explode(" ", $argv[1]);
	$final= array_shift($arr);
	array_push($arr, $final);
	echo(implode(" ",$arr)."\n");
?>