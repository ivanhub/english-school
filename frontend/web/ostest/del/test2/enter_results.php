<?php

include("config.php");
include("mysql_connect.php");

$name = $_POST['name'];
$correct = $_POST['correct'];
$incorrect = $_POST['incorrect'];
$quiz = $_POST['quiz'];

$ip = $_SERVER['REMOTE_ADDR'];

$percentage = $correct / (($correct + $incorrect) / 100);

$sql = "INSERT INTO results (name, ip, correct, incorrect, percentage, quiz, username) VALUES ('" . $name . "', '" . $ip . "', " . $correct . ", " . $incorrect . ", " . $percentage . ", " . $quiz . ", '')";

mysql_query($sql, $mysql_connection);

mysql_close($mysql_connection);

?>