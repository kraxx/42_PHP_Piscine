<?php

	header('WWW-Authenticate: Basic realm="My Realm"');
    $usr = $_SERVER['PHP_AUTH_USER'];
	$pwd = $_SERVER['PHP_AUTH_PW'];

	if ($usr == 'zaz' && $pwd == 'jaimelespetitsponeys') {
   		$img = base64_encode(file_get_contents("./img/42.png"));
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,$img'>\n</body></html>\n";
	} else {
   		header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>That area is accessible for members only</body></html>\n";
	}
	
?>