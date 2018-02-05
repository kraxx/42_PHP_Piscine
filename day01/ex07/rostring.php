#!/usr/bin/php
<?php
	$arr = preg_split('/\s+/', trim($argv[1]));
	array_push($arr, $arr[0]);
	unset($arr[0]);
	echo(join(' ', $arr)."\n");
?>