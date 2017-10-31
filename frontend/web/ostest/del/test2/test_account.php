<?php

$username_test = $_POST['username'];
$password_test = $_POST['password'];

include("config.php");
include("mysql_connect.php");

$md5_test = md5($password_test);

$sql = "SELECT * FROM users WHERE username='" . $username_test "'";
$query = mysql_query($sql, $mysql_connection);
$array = mysql_fetch_array($query);

if ($array['password_hash'] == $md5_test) {
	$output = "valid=1";
} else {
	$output = "valid=0";
}

echo $output;

mysql_close($mysql_connection);

?>