<?php

$new_username = $_POST['new_username'];
$new_email = $_POST['new_email'];
$new_name = $_POST['new_name'];
$new_password = $_POST['new_password'];
$new_md5 = md5($new_password);

include("../config.php");
include("../mysql_connect.php");

if (isset($_COOKIE['session_id']) == FALSE) {
	header("Location: admin_login_web.php");
} else {
	$username = $_COOKIE['username'];
	$password_md5 = $_COOKIE['password_md5'];
	$session_id = $_COOKIE['session_id'];
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$sql = "SELECT * FROM sessions WHERE session_id='" . $session_id . "' AND username='" . $username . "'";
	$query = mysql_query($sql, $mysql_connection);
	$array = mysql_fetch_array($query);
	if (($array['password_md5'] == $password_md5) && ($array['ip'] == $ip) && ($array['time_started'] >= (time() - 900))) {
		$sql = "INSERT INTO admins (username, password_hash, real_name, email) VALUES ('" . $new_username . "', '" . $new_md5 . "', '" . $new_name . "', '" . $new_email . "')";
		mysql_query($sql, $mysql_connection);
		echo "Added";
	} else {
		header("Location: admin_login_web.php");
	}
}

mysql_close($mysql_connection);

?>