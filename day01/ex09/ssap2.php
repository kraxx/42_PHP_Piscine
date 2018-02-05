#!/usr/bin/php
<?php
	// function myComparison($a, $b){
	//     if(is_numeric($a) && !is_numeric($b))
	//         return 1;
	//     else if(!is_numeric($a) && is_numeric($b))
	//         return -1;
	//     else
	//         return ($a < $b) ? -1 : 1;
	// } 

	$alpha = $num = $other = [];
	foreach($argv as $k=>$val)
		if ($k) {
			$arr = preg_split('/\s+/', trim($val));
			foreach($arr as $val) {
				if (ctype_alpha($val[0]))
					$alpha[] = $val;
				else if (ctype_digit($val[0]))
					$num[] = $val;
				else
					$other[] = $val;
			}
		}
	natcasesort($alpha);
	// usort($alpha, 'myComparison');
	sort($num);
	sort($other);
	$ret = array_merge($alpha, $num, $other);
	foreach($ret as $val)
		echo("$val\n");
?>