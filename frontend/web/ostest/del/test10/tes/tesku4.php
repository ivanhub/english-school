<html>
<Head>
<title>Tes Online</title>
<hr>
<font color=red>
<h4>Pilih soal yang akan dikerjakan, lalu ketik password untuk soal tersebut</h4>
</head>

<body background="../images/back3.jpg">

<?php
include ("koneksi.inc");

$query=mysql_query("select * from user",$koneksi);
echo "<form method=\"post\" action=\"kerjakan.php\" target=_top>";

echo "<table border=\"0\">";
echo "<tr bgcolor=brown align=center>
<td><font color=white>No</td>
<td><font color=white>Soal</td>
<td><font color=white>Materi</td>
<td><font color=white>Lembaga</td>
<td><font color=white>Pembuat</td>
<td><font color=white>Jenis</td></tr>";
$no=1;
while ($row=mysql_fetch_array($query))
{
   echo "<tr bgcolor=orange><td>";
   echo "<input type=\"radio\" name=file value=$row[1]>";
   echo "$no";
   $no++;
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=2>";
   echo $row["file"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=2>";
   echo $row["materi"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=2>";
   echo $row["lembaga"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=2>";
   echo $row["nama"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=2>";
   echo $row["untuk"];
   echo "</td>";
}
echo "</table>";
echo "<hr>";
echo "<table>";
     echo "<tr><td><font face=arial size=1>Password Soal</td>";
     echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\">";
     echo "<input type=\"hidden\" name=\"nama\" value=\"$nama\">";
     echo "<td><input type=\"password\" name=\"pass\" size=\"20\">";
     echo "</td></tr>";
echo "</table><hr>";
echo "<br><input type=\"submit\" name=\"submit\" value=\"Kerjakan soal\">";
echo "</form>";
?>
</body>
</html>
