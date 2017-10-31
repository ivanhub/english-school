<?php

include("config.php");
include("mysql_connect.php");

$sql = "SELECT * FROM results WHERE quiz=" . $_GET['quiz'] . " ORDER BY name";
$result = mysql_query($sql, $mysql_connection);

$rows = mysql_num_rows($result);

echo "<table>";

echo "<th>";
echo "Name";
echo "</th>";
echo "<th>";
echo "ip";
echo "</th>";
echo "<th>";
echo "Correct";
echo "</th>";
echo "<th>";
echo "Incorrect";
echo "</th>";
echo "<th>";
echo "Percentage";
echo "</th>";
echo "<th>";
echo "Username";
echo "</th>";

for ($row = 1; $row <= $rows; $row++)
{
	$array = mysql_fetch_array($result);
	
	echo "<tr>";
	echo "<td>";
	echo $array['name'];
	echo "</td>";
	echo "<td>";
	echo $array['ip'];
	echo "</td>";
	echo "<td>";
	echo $array['correct'];
	echo "</td>";
	echo "<td>";
	echo $array['incorrect'];
	echo "</td>";
	echo "<td>";
	echo $array['percentage'];
	echo "</td>";
	echo "<td>";
	echo $array['username'];
	echo "</td>";
	echo "</tr>";
}

echo "</table>";

mysql_close($mysql_connection);

?>