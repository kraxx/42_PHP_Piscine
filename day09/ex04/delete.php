<?php
	$array = [];
	$match = "id;" . $_POST['id'];

	echo $match;

	if (($handle = fopen("list.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000)) !== FALSE) {
			if ($data[0] != $match) {
				echo $data[0] . "\n";
				array_push($array, $data[0]);
			}
		}
		fclose($handle);
		unlink("list.csv");
		$handle = fopen("list.csv", "w");
	}

	foreach ($array as $item) {
		$tmp = [];
		array_push($tmp, $item);
		fputcsv($handle, $tmp);
	}
	fclose($handle);
?>