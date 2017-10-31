<?php

$question_sequence_number = $_GET['order_number'];
$quiz_number = $_GET['quiz'];

include("config.php");

include("mysql_connect.php");

$sql = "SELECT picture_name FROM questions WHERE quiz=" . $quiz_number . " AND order_number=" . $question_sequence_number;
$query = mysql_query($sql, $mysql_connection);
$array = mysql_fetch_array($query);

$picture_file = "./pictures/";

$picture_file = $picture_file . $array['picture_name'];

mysql_close($mysql_connection);

header('Content-Description: File Transfer');
header('Content-Type: image/jpg');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($picture_file));
ob_clean();
flush();
readfile($picture_file);

?>