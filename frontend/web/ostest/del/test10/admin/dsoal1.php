<html>
<Head>
<title>Tes Online</title>
<hr>
<font color=brown>
<h2>Daftar Soal</h2>
</head>

<body background="../images/back3.jpg">

<?php

include ("koneksi.inc");

$query=mysql_query("select * from user",$koneksi);
echo "<table width=100%>";
echo "<tr bgcolor=red align=center>
<td><font color=white>No</td>
<td><font color=white>Soal</td>
<td><font color=white>Lembaga</td>
<td><font color=white>Materi</td>
<td><font color=white>Pembuat</td>
<td><font color=white>Jenis</td>
<td><font color=white>Jumlah soal<br>disajikan</td>
<td><font color=white>Jumlah soal<br>yang ada</td>
<td><font color=white>Password</td></tr>";
$no=1;
while ($row=mysql_fetch_array($query))
{
   echo "<tr bgcolor=orange><td>";
   echo "$no";
   $no++;
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["file"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["lembaga"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["materi"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["nama"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["untuk"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["disajikan"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["jumlahsoal"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["password"];
   echo "</td>";
   echo "</tr>";

}
echo "</table>";
echo "<hr>";
?>
</body>
</html>
