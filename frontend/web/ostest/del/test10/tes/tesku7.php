<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">

<title>tes Online</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$field  =$HTTP_GET_VARS['field'];
$cari   =$HTTP_GET_VARS['cari'];
$field2 =$HTTP_GET_VARS['field2'];
$cari2  =$HTTP_GET_VARS['cari2'];
$field3 =$HTTP_GET_VARS['field3'];
$secara =$HTTP_GET_VARS['secara'];

echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"20; URL=tesku7.php?cari=$cari&field=$field&cari2=$cari2&field2=$field2&field3=$field3&secara=$secara\"/>";
include ("koneksi.inc");

echo "cari : <b>$cari</b> pada : <b>$field dan <b>$cari2</b> pada : <b>$field2</b>";

$query=mysql_query("select * from hasil where $field like '%$cari%' and $field2 like '%$cari2%' order by $field3 $secara, lama",$koneksi);

$jumlah=mysql_num_rows($query);
echo " ditemukan : <b>$jumlah Record</b>";
echo "<table>";
echo "<tr>";
echo "<th>No</th>
   <th>User ID</th>
   <th>Waktu</th>
   <th>Nama Peserta</th>
   <th>LP</th>
   <th>Kelas</th>
   <th>Sekolah</th>
   <th>Jenis Tes</th>
   <th>Nilai</th>
   <th>Lama</th></tr>";
$no=1;
while ($row=mysql_fetch_array($query))
{
	  echo "<td>";
          echo "$no";
          $no++;
          echo "</b></td>";
          echo "<td>";
	  echo $row["userid"];
	  echo "</td>";
          echo "<td>";
	  echo $row["waktu"];
	  echo "</td>";
          echo "<td>";
	  echo $row["nama"];
	  echo "</td>";
          echo "<td>";
          $userid=$row["userid"];
	  $query6=mysql_query("select * from siswa where userid='$userid'",$koneksi);
          while ($rowk=mysql_fetch_array($query6))
          {
		        $lp=$rowk["jk"];
		        echo "$lp</td><td>";
	     		$vkelas=$rowk["kelas"];
	     		echo "$vkelas";
			$vlembaga=$rowk["lembaga"];
          }
	  echo "</td>";
          echo "<td>";
	  echo "$vlembaga";
	  echo "</td>";
          echo "<td>";
	  echo $row["jenis_tes"];
	  echo "</td>";
          echo "<td>";
	  echo $row["nilai"];
	  echo "</td>";
          echo "<td>";
          echo $row["lama"];
          echo " menit</td>";
          echo "</tr>";
}
echo "</table>";
echo "<input type=\"hidden\" name=\"field\" value=\"$field\">";
echo "<input type=\"hidden\" name=\"cari\" value=\"$cari\">";
?>
</body>
</html>
