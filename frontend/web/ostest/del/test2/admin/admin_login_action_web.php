<?php

$username = $_POST['username'];
$password = $_POST['password'];

$password_hash = md5($password);
$ip = $_SERVER['REMOTE_ADDR'];

include("../config.php");
include("../mysql_connect.php");

$sql = "SELECT * FROM admins WHERE username='" . $username . "'";
$query = mysqli_query($mysql_connection,$sql);
$array = mysqli_fetch_array($query,MYSQLI_BOTH);

if ($array['password_hash'] == $password_hash) {
	$session_id = mt_rand();
	
	$sql = "INSERT INTO sessions (session_id, ip, username, password_md5, time_started) VALUES ('" . $session_id . "', '" . $ip . "', '" . $username . "', '" . $password_hash . "', " . time() . ")";
	mysqli_query($mysql_connection, $sql);
	
	setcookie("username", $username, (time() + 900));
	setcookie("password_md5", $password_hash, (time() + 900));
	setcookie("session_id", $session_id, (time() + 900));
	
	echo "<a href=index.php >Go to index</a>";
} else {
	header("Location: admin_login_web.php");
}

mysqli_close($mysql_connection);

?>