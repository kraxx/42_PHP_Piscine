#!/usr/bin/php
<?php
    function to_upper($matches) {
        return strtoupper($matches[0]);
    }
    function search_for_spots($matches) {
        $matches = preg_replace_callback('/(?<=title=")(?:.|\n)*(?=")/iU', 'to_upper', $matches);
        $matches = preg_replace_callback('/(?<=>)(?!<.*>)(?:.|\n)*(?=<)/iU', 'to_upper', $matches);
        return $matches[0];
    }
    if ($argc > 1) {
        $file = file_get_contents($argv[1]);
        $file = preg_replace_callback('/<a(?:.|\n)+<\/a>/iU', 'search_for_spots', $file);
        print($file);
    }
?>