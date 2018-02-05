#!/usr/bin/php
<?php
	if (count($argv) == 2)
		echo trim(preg_replace('/ +/', ' ', $argv[1]))."\n";
?>