<?php
	$array = [];
	$task = "id;" . $_POST['id'];
	array_push($array, $task);
	$handle = fopen("list.csv", "a");
	fputcsv($handle, $array);
	fclose($handle);
	echo "<div class='todo' onclick='ft_rm(this)'>" . $_POST['id'] . "</div>";
?>