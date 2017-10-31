<?php

include("config.php");
include("mysql_connect.php");

$sql = "SELECT num_quizzes FROM stats WHERE version=1";
$query = mysql_query($sql, $mysql_connection);

$array = mysql_fetch_array($query);

$output = "number=" . $array['num_quizzes'];
$num_quizzes = $array['num_quizzes'];

$sql = "SELECT name FROM quizzes ORDER BY number" . $quiz_number;
$query = mysql_query($sql, $mysql_connection);

if ($num_quizzes >= 1) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name1=" . urlencode($array['name']);
}
if ($num_quizzes >= 2) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name2=" . urlencode($array['name']);
}
if ($num_quizzes >= 3) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name3=" . urlencode($array['name']);
}
if ($num_quizzes >= 4) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name4=" . urlencode($array['name']);
}
if ($num_quizzes >= 5) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name5=" . urlencode($array['name']);
}
if ($num_quizzes >= 6) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name6=" . urlencode($array['name']);
}
if ($num_quizzes >= 7) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name7=" . urlencode($array['name']);
}
if ($num_quizzes >= 8) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name8=" . urlencode($array['name']);
}
if ($num_quizzes >= 9) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name9=" . urlencode($array['name']);
}
if ($num_quizzes >= 10) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name10=" . urlencode($array['name']);
}
if ($num_quizzes >= 11) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name11=" . urlencode($array['name']);
}
if ($num_quizzes >= 12) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name12=" . urlencode($array['name']);
}
if ($num_quizzes >= 13) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name13=" . urlencode($array['name']);
}
if ($num_quizzes >= 14) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name14=" . urlencode($array['name']);
}
if ($num_quizzes >= 15) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name15=" . urlencode($array['name']);
}
if ($num_quizzes >= 16) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name16=" . urlencode($array['name']);
}
if ($num_quizzes >= 17) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name17=" . urlencode($array['name']);
}
if ($num_quizzes >= 18) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name18=" . urlencode($array['name']);
}
if ($num_quizzes >= 19) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name19=" . urlencode($array['name']);
}
if ($num_quizzes >= 20) {
	$array = mysql_fetch_array($query);
	$output .= "&quiz_name20=" . urlencode($array['name']);
}

echo $output;

mysql_close($mysql_connection);

?>