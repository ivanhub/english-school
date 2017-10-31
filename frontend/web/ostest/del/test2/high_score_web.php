<?php

include("config.php");
include("mysql_connect.php");

$sql = "SELECT * FROM results WHERE quiz=" . $_GET['quiz'] . " ORDER BY percentage DESC LIMIT 1";
$result = mysql_query($sql, $mysql_connection);

$array = mysql_fetch_array($result);

$name = $array['name'];
$correct = $array['correct'];
$incorrect = $array['incorrect'];

mysql_close($mysql_connection);

$output = "name: " . $name . "<br />correct: " . $correct . "<br />incorrect: " . $incorrect;

echo $output;

?>