<?php

$requested_username = $_POST['username'];
$requested_password = $_POST['password'];
$requested_password_confirm = $_POST['password_confirm'];
$requested_real_name = $_POST['real_name'];
$requested_email = $_POST['email'];

$requested_password_hash = md5($requested_password);

include("config.php");
include("mysql_connect.php");

$sql = "SELECT * FROM users WHERE username='" . $requested_username . "'";
$query = mysql_query($sql, $mysql_connection);
if ($query == FALSE) {
	$sql = "SELECT * FROM users WHERE real_name='" . $requested_real_name . "'";
	$query = mysql_query($sql, $mysql_connection);
	if ($query == FALSE) {
		$sql = "SELECT * FROM users WHERE email='" . $requested_email . "'";
		$query = mysql_query($sql, $mysql_connection);
		if ($query == FALSE) {
			if ($requested_password == $requested_password_confirm) {
				$sql = "INSERT INTO users (username, real_name, email, password_hash) VALUES ('" . $requested_username . "', '" . $requested_real_name . "', '" . $requested_email . "', '" . $requested_password_hash . "')";
				mysql_query($sql, $mysql_connection);
				$output = "exit_code=0";
			} else {
				$output = "exit_code=4";
			}
		} else {
			$output = "exit_code=3";
		}
	} else {
		$output = "exit_code=2";
	}
} else {
	$output = "exit_code=1";
}

mysql_close($mysql_connection);

?>