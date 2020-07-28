<?php

$str = "<strong>Hello</strong>";

printf($str."<br>");

echo htmlspecialchars($str)."<br>";
echo strip_tags($str)."<br>";

echo htmlentities($str)."<br>";
echo addslashes($str)."<br>";
echo stripslashes($str);

?>