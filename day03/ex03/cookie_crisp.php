<?php
	$name = $_GET['name'];
	$value = $_GET['value'];
	switch ($_GET['action']) {

		case("set"):
			if ($name && $value)
				setcookie($name, $value);
			break;
		case("get"):
			if ($name && $_COOKIE[$name] && !$value)
				echo $_COOKIE[$name]."\n";
			break;
		case("del"):
			if ($name && !$value)
				setcookie($name, '', 1);
			break;
	}
?>
