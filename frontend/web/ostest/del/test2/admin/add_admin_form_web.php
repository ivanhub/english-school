<?php

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
		echo "<form action='add_admin_action_web.php' method='post'>";
		echo "New Username: ";
		echo "<input type='text' name='new_username' />";
		echo "<br />";
		echo "New Email Address: ";
		echo "<input type='text' name='new_email' />";
		echo "<br />";
		echo "New Real Name: ";
		echo "<input type='text' name='new_name' />";
		echo "<br />";
		echo "New Password: ";
		echo "<input type='text' name='new_password' />";
		echo "<br />";
		echo "<input type=submit />";
		echo "</form>";
	} else {
		header("Location: admin_login_web.php");
	}
}

mysql_close($mysql_connection);

?>
