<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
  <title>Wirawan Test</title>
  <link rel="stylesheet" href="../css/layouts/pure-min.css">
  <link rel="stylesheet" href="../css/layouts/side-menu.css">
</head>

<body>


<?php
include ("sidebar.php");
include ("../koneksi.inc.php");

$query=mysql_query("select * from user where userid='$userid'",$koneksi);
echo "<form method=\"post\" action=\"editbutirsoal2.php\">";
echo "<table width=100%>";
echo "<tr bgcolor=red align=center>
<td><font color=white>No</td>
<td><font color=white>Soal</td>
<td><font color=white>Lembaga</td>
<td><font color=white>Materi</td>
<td><font color=white>Pembuat</td>
<td><font color=white>Jenis</td>
<td><font color=white>Deskripsi</td>
<td><font color=white>Jumlah soal<br>disajikan</td>
<td><font color=white>Jumlah soal<br>yang ada</td></tr>";

$no=1;
while ($row=mysql_fetch_array($query))
{
   echo "<tr bgcolor=lightblue><td>";
   echo "<input type=\"radio\" name=file value=$row[1]>";
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
   echo $row["deskripsi"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["disajikan"];
   echo "</td>";
   echo "<td>";
   echo "<font face=arial size=1>";
   echo $row["jumlahsoal"];
   echo "</td>";
   echo "</tr>";

}
echo "</table>";
echo "<hr>";
echo "<table>";
     echo "<tr><td><font face=arial size=1>Password</td>";
     echo "<td><input type=\"password\" name=\"pass\" size=\"20\">";
     echo "</td></tr>";
echo "</table><hr>";

echo "<br><input type=\"submit\" name=\"submit\" value=\"Lanjutkan\">";
echo "</form>";
?>
       </div>
   </div>
</div>
<script src="../js/ui.js"></script>

</body>
</html>
