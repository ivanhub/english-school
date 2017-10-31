<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">

<title>WIRAWAN TEST</title>

</head>

<body background="../images/back3.jpg">
<?php
$user2  =$_GET['userid'];
$field  =$_GET['field'];
$cari   =$_GET['cari'];
$field2 =$_GET['field2'];
$cari2  =$_GET['cari2'];
$field3 =$_GET['field3'];
$secara =$_GET['secara'];

echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"10; URL=hasiltes2.php?user2=$user2&cari=$cari&field=$field&cari2=$cari2&field2=$field2&field3=$field3&secara=$secara\"/>";
include ("../koneksi.inc.php");

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
   <th>Lama</th>
   <th>Aksi</th></tr>";
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
	  $guru=$row["guru"];
	  $id=$row["id"];
	  echo "</td>";
          echo "<td>";
          echo $row["lama"];
          echo " menit</td>";
          echo "<td>";
          if ($user2==$guru)
	  {
             echo "<a href=\"hapusnilai.php?id=$id&user2=$user2&cari=$cari&field=$field&cari2=$cari2&field2=$field2&field3=$field3&secara=$secara\">hapus</a>";
	  }
          echo "</td>";
          echo "</tr>";
}
echo "</table>";
echo "<input type=\"hidden\" name=\"field\" value=\"$field\">";
echo "<input type=\"hidden\" name=\"cari\" value=\"$cari\">";
?>
</body>
</html>
