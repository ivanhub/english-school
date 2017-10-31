<?php

include("config.php");
include("mysql_connect.php");

$correct = $_POST['correct'];
$incorrect = $_POST['incorrect'];
$quiz = $_POST['quiz'];
$username = $_POST['username'];
$password = $_POST['password'];

$ip = $_SERVER['REMOTE_ADDR'];

$password_md5 = md5($password);
$percentage = $correct / (($correct + $incorrect) / 100);

$sql = "SELECT * FROM users WHERE username='" . $username "'";
$query = mysql_query($sql, $mysql_connection);
$array = mysql_fetch_array($query);

if ($array['password_hash'] == $password_md5) {
	$sql = "INSERT INTO results (name, ip, correct, incorrect, percentage, quiz, username) VALUES ('" . $name . "', '" . $ip . "', " . $correct . ", " . $incorrect . ", " . $percentage . ", " . $quiz . ", '" . $username . "')";
	mysql_query($sql, $mysql_connection);
	
	$output = "valid=1";
} else {
	$output = "valid=0";
}

mysql_close($mysql_connection);

?>