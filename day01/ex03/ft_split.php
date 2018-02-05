#!/usr/bin/php
<?php
	function ft_split($input) {
		$arr = preg_split('/\s+/', trim($input));
		sort($arr);
		return $arr;
	}
?>