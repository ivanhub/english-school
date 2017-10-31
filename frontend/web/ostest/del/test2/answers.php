<?php

$question_sequence_number = $_GET['order_number'];
$quiz_number = $_GET['quiz'];

include("config.php");
include("mysql_connect.php");

$sql = "SELECT answers FROM questions WHERE quiz=" . $quiz_number . " AND order_number=" . $question_sequence_number;
$query = mysql_query($sql, $mysql_connection);
$array = mysql_fetch_array($query);

$output = "number=" . $array['answers'];
$answers = $array['answers'];

$sql = "SELECT * FROM answers WHERE quiz=" . $quiz_number . " AND question_order_number=" . $question_sequence_number;
$query = mysql_query($sql, $mysql_connection);

for ($on = 1; $on <= $answers; $on++) {
	$array = mysql_fetch_array($query);
	$output .= "&answer" . $on . "=" . urlencode($array['answer']);
}

$sql = "SELECT corect_order_number FROM real_answer WHERE quiz=" . $quiz_number . " AND question_order_number=" . $question_sequence_number;
$query = mysql_query($sql, $mysql_connection);
$array = mysql_fetch_array($query);
$output .= "&realanswer=" . $array['corect_order_number'];

echo $output;

mysql_close($mysql_connection);

?>