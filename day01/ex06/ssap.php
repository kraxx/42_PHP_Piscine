#!/usr/bin/php
<?php
	$ret = [];
	foreach($argv as $k=>$val)
		if ($k) {
			$arr = preg_split('/\s+/', trim($val));
				foreach($arr as $val)
					array_push($ret, $val);
		}
	sort($ret);
	foreach($ret as $val)
		echo("$val\n");
?>