<?php
	$ret = [];
	if (($handle = fopen("list.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000)) !== FALSE) {
			$item = substr($data[0], 3);
			array_push($ret, $item);
		}
	}
	fclose($handle);
	for ($x = count($ret) - 1; $x >= 0; $x--)
		echo "<div class='todo' onclick='ft_rm(this)'>$ret[$x]</div>";
?>