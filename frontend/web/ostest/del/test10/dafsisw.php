<html>
<Head>
<basefont face="arial" size="2">
<title>WIRAWAN TEST</title>
<hr>
</head>

<body background="../back1.jpg">
<?php

include ("koneksi2.inc.php");

echo "<br>field = <b>$field</b> <br>Cari = <b>$cari</b>";
$query=mysql_query("select * from hasil where $field like '%$cari%'",$koneksi);

$jumlah=mysql_num_rows($query);
echo "<br>Jumlah = <b>$jumlah Record</b>";
echo "<table border=\"0\">";
echo "<tr bgcolor=orange>";
echo "<th><font face=arial size=2>No</th>
   <th><font face=arial size=2>kode Soal</th>
   <th><font face=arial size=2>Waktu</th>
   <th><font face=arial size=2>Nama Peserta</th>
   <th><font face=arial size=2>Jenis Tes</th>
   <th><font face=arial size=2>Nilai</th>
   <th><font face=arial size=2>Lama</th></tr>";
$no=1;
$j=0;
while ($row=mysql_fetch_array($query))
{
	  if ($j==0)  
	  {
             echo "<tr bgcolor=yellow>";
	     $j++;
	  }
	  else
	  {
             echo "<tr bgcolor=white>";
	     $j--;
	  }	   
	  echo "<td align=\"center\"><b>";
          echo "<font face=arial size=1>";
          echo "$no";
          $no++;
          echo "</b></td>";
          echo "<td align=center>";
          echo "<font face=arial size=1>";
	  echo $row["file"];
	  echo "</td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["waktu"];
	  echo "</td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["nama"];
	  echo "</td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["jenis_tes"];
	  echo "</td>";
          echo "<td align=center>";
          echo "<font face=arial size=1>";
	  echo $row["nilai"];
	  echo "</td>";
          echo "<td align=center>";
          echo "<font face=arial size=1>";
          echo $row["lama"];
          echo " menit</td>";
          echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
