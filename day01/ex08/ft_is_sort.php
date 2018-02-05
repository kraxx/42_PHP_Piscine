#!/usr/bin/php
<?php
	function ft_is_sort($input) {
		$copy = $input;
		sort($input);
		foreach($input as $key=>$val)
			if ($val != $copy[$key])
				return (0);
		return (1);
	}
?>