<?php

$question_sequence_number = $_GET['order_number'];
$quiz_number = $_GET['quiz'];

include("config.php");

include("mysql_connect.php");

$sql = "SELECT question FROM questions WHERE quiz=" . $quiz_number . " AND order_number=" . $question_sequence_number;

$query = mysql_query($sql, $mysql_connection);

$array = mysql_fetch_array($query);

$output = "question=";
$output .= urlencode($array['question']);

echo $output;

mysql_close($mysql_connection);

?>