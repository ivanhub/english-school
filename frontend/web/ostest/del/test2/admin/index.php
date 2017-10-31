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
		echo "<form action='add_quiz_web.php' method='get'>";
		echo "Add a quiz with X questions: ";
		echo "<input type=text value='X' name=questions />";
		echo "<input type=submit value='Go' />";
		echo "</form>";
		echo "<a href=add_admin_form_web.php>Add an Admin</a>";
	} else {
		header("Location: admin_login_web.php");
	}
}

mysql_close($mysql_connection);

?>