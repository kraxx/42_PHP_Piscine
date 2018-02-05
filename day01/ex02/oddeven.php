#!/usr/bin/php
<?php
	echo("Enter a number: ");
	$input = trim(fgets(STDIN));
	if (is_numeric($input))
		echo("The number $input is ".($input % 2 ? "odd\n" : "even\n"));
	else
		echo("'$input' is not a number\n");
?>