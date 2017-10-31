<?php

include("config.php");
include("mysql_connect.php");

$sql = "SELECT * FROM results WHERE quiz=" . $_POST['quiz'] . " ORDER BY percentage DESC LIMIT 1";
$result = mysql_query($sql, $mysql_connection);

$array = mysql_fetch_array($result);

$high_name = $array['name'];
$high_correct = $array['correct'];
$high_incorrect = $array['incorrect'];
$high_percentage = $array['percentage'];

mysql_close($mysql_connection);

$name = $_POST['name'];
$correct = $_POST['correct'];
$incorrect = $_POST['incorrect'];
$quiz = $_POST['quiz'];
$percentage = $correct / (($correct + $incorrect) / 100);

if ($percentage > $high_percentage) {
	$output = "high=" . 1;
	$output .= "&tie=" . 0;
}
if ($percentage = $high_percentage) {
	$output = "high=" . 0;
	$output .= "&tie=" . 1;
}
if ($percentage < $high_percentage) {
	$output = "high=" . 0;
	$output .= "&tie=" . 0;
}

echo $output;

?>