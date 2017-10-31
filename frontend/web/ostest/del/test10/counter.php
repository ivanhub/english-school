<?php
include ("koneksi.inc.php");
$query=mysql_query("SELECT * FROM counter WHERE page LIKE '$page'",$koneksi);
while ($row=mysql_fetch_array($query))
{
   $hits=$row["hit"];
   $pages=$row["page"];
   $hits++;
   $query2=mysql_query("update counter set hit='$hits' where page='$page'",$koneksi);
}
?>