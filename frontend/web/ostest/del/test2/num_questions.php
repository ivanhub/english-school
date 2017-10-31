<?php

$quiz_number = $_GET['quiz'];

include("config.php");
include("mysql_connect.php");

$sql = "SELECT questions FROM quizzes WHERE number=" . $quiz_number;
$query = mysql_query($sql, $mysql_connection);
$array = mysql_fetch_array($query);

echo "num_questions=" . $array['questions'];

mysql_close($mysql_connection);

?>