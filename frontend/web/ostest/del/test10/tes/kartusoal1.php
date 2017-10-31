<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" />
<title>Wirawan Test</title>
<hr>
<font color=brown>
<h2>Pilih soal yg akan dibuat kartu soal..!</h2>
</head>

<body background="../images/back3.jpg">

<?php
$userid   =$_GET['userid'];

include ("../koneksi.inc.php");

$query=mysql_query("select * from user where userid='$userid'",$koneksi);
echo "<form method=\"post\" action=\"kartusoal2.php\">";

echo "<table width=100%>";
echo "<tr align=center>
<th>No</th>
<th>Soal</th>
<th>Lembaga</th>
<th>Materi</th>
<th>Pembuat</th>
<th>Jenis</th>
<th>Jumlah soal<br>disajikan</th>
<th>Jumlah soal<br>yang ada</th></tr>";

$no=1;
while ($row=mysql_fetch_array($query))
{
   echo "<tr><td>";
   echo "<input type=\"radio\" name=file value=$row[1]>";
   echo "$no";
   $no++;
   echo "</td>";
   echo "<td>";
   echo $row["file"];
   echo "</td>";
   echo "<td>";
   echo $row["lembaga"];
   echo "</td>";
   echo "<td>";
   echo $row["materi"];
   echo "</td>";
   echo "<td>";
   echo $row["nama"];
   echo "</td>";
   echo "<td>";
   echo $row["untuk"];
   echo "</td>";
   echo "<td>";
   echo $row["disajikan"];
   echo "</td>";
   echo "<td>";
   echo $row["jumlahsoal"];
   echo "</td>";
   echo "</tr>";

}
echo "</table>";
echo "<hr>";
echo "<table width=100%>";
     echo "<tr><td>Password</td>";
     echo "<td><input type=\"password\" name=\"pass\" size=\"20\">";
     echo "</td><td>";
#     echo " Tampilakan ABS : ";
#     echo " <input type=radio name=\"abs\" value=\"1\" checked> dengan butir soal ";
#     echo " <input type=radio name=\"abs\" value=\"0\"> tanpa butir soal ";
#     echo "</select></td></tr>";

echo "</table><hr>";



echo "<br><input type=\"submit\" name=\"submit\" value=\"Lanjutkan\">";
echo "</form>";
?>
</body>
</html>
