#!/usr/bin/php
<?php
    if ($argc < 2)
        exit();

    $month = array(
        1 => "Janvier",
        2 => "Février",
        3 => "Mars",
        4 => "Avril",
        5 => "Mai",
        6 => "Juin",
        7 => "Juillet",
        8 => "Août",
        9 => "Septembre",
        10 => "Octobre",
        11 => "Novembre",
        12 => "Décembre");

    $day = array(
        1 => "Lundi",
        2 => "Mardi",
        3 => "Mercredi",
        4 => "Jeudi",
        5 => "Vendredi",
        6 => "Samedi",
        7 => "dimanche");

    $date = preg_split('/\s+/', trim($argv[1]));
    $date[0] = array_search($date[0], $day);
    $date[2] = array_search($date[2], $month);

    if (count($date) != 5 || !$date[0] || !$date[2] ||
        !preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $date[1], $date[1]) ||
        !preg_match("/^[0-9]{4}$/", $date[3], $date[3]) ||
        !preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $date[4], $date[4])) {
        	echo "Wrong Format\n";
        	exit();
    }

    $time = mktime($date[4][1], $date[4][2], $date[4][3], $date[2], $date[1][0], $date[3][0]);

    echo (date("N", $time) == $date[0]) ? $time."\n" : "Wrong Format\n";
?>