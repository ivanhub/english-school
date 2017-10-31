<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" />
<title>LJK</title>

<?php
$file      =$_POST['file'];
$pass      =$_POST['pass'];
?>

<hr>
</head>

<body onLoad="timer()" background="../images/back3.jpg">

<?php
include ("../koneksi.inc.php");

$queri=mysql_query("select * from user where file='$file'",$koneksi);

while ($row=mysql_fetch_array($queri))
{
   $userid=$row["userid"];
   $guru=$row["nama"];
   $lembaga=$row["lembaga"];
   $alamat=$row["alamat"];
   $untuk=$row["untuk"];
   $materi=$row["materi"];
   $jumlahsoal=$row["jumlahsoal"];
   $disajikan=$row["disajikan"];
   $waktu=$row["waktu"];
   $opsi=$row["opsi"];
   $metode=$row["metode"];
   $password=$row["password"];
}

echo "<form name=\"ljkform\" method=\"post\" action=\"ljk2.php\">";

echo "<input type=hidden name=mulai value=$mulai>";

echo "<table>";
     echo "<tr><td>User ID</td>";
     echo "<td><b>$userid</b></td></tr>";
     echo "<tr><td>Nama guru</td>";
     echo "<td><b>$guru</b></td></tr>";
     echo "<tr><td>Materi Ujian</td>";
     echo "<td>$materi</td></tr>";
     echo "<tr><td>Jenis Tes</td>";
     echo "<td>$untuk</td>";
     echo "<tr><td>Lembaga</td>";
     echo "<td>$lembaga</td>";
     echo "<tr><td>Jumlah soal</td>";
     echo "<td>$jumlahsoal</td></tr>";
     echo "<tr><td>Waktu</td>";
     echo "<td>$waktu menit</td></tr>";
echo "</table><hr>";

echo "<input type=\"hidden\" name=\"nama\" value=\"$guru\">";
echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\">";
echo "<input type=\"hidden\" name=\"file\" value=\"$file\">";

$no=1;
echo "<table border=\"1\">";
echo "<tr><th>No</th><th>A</th><th>B</th><th>C</th>";
if ($opsi>3)
{
   echo "<th>D</th>";
}
if ($opsi>4)
{
   echo "<th>E</th>";
}
echo "</tr>";

while ($no<=$jumlahsoal)
{
          echo "<tr><td>";
          echo "$no";
          echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"a\">";
	  echo "</td>";

          echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"b\">";
	  echo "</td>";

          echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"c\">";
	  echo "</td>";

          if ($opsi>3)
          {
             echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"d\">";
	     echo "</td>";
          }
          if ($opsi>4)
          {
             echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"e\">";
	     echo "</td>";
          }
          echo "</tr>";
          $no++;
}
echo "</table>";

echo "<br><input type=\"submit\" name=\"submit\" value=\"selesai\">";
echo "</form>";


?>
</body>
</html>
