<?php
error_reporting(0);
$host    ="localhost";
$db      ="wirawantest";
$user    ="root";
$passw   ="local";
$koneksi =mysql_connect($host, $user, $passw);
mysql_select_db($db,$koneksi);
?>