<?php
session_start();

if ($_GET['submit'] == 'OK') {
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}

echo "<html><body>
<form name='index.php' method='get'>
	Username: <input type='text' name='login' value='" . $_SESSION['login'] . "' />
	<br />
	Password: <input type='text' name='passwd' value='" . $_SESSION['passwd'] . "' />
	<br />
	<input type='submit' name='submit' value='OK'>
</form>
</body></html>"
?>