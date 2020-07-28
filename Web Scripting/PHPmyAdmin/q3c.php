<?php

$file = fopen("welcome.txt", "r") or exit("Unable to open file!");
$line = fgets($file);
echo "$line";
fclose($file);

?> 