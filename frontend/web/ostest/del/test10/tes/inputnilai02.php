<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">

<title>tes Online</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$kelas   =$_GET['kelas'];
$kode    =$_GET['kode'];
$password=$_GET['password'];
##$urut   =$_GET['urut'];
##$secara =$_GET['secara'];

echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"10; URL=\"inputnilai02.php?kelas=$kelas&kode=$kode\"/>";

include ("../koneksi.inc.php");

$query0=mysql_query("select * from user where file = '$kode'",$koneksi);
while ($row0=mysql_fetch_array($query0))
{
    $untuk=$row0["untuk"];
    $materi=$row0["materi"];
    $password2=$row0["password"];
}
if ($password!=$password2)
{
	echo "Password salah";
	exit;
}
echo "<table>";
echo "<tr><td colspan=5><center>Nilai $untuk $materi kelas <b>$kelas</b></td></tr>";

$query1=mysql_query("select * from siswa where kelas like '$kelas' order by userid",$koneksi);

#$query=mysql_query("select * from hasil where $field like '%$cari%' and $field2 like '%$cari2%' order by $field3 $secara",$koneksi);

$jumlah=mysql_num_rows($query1);
echo "<tr>";
echo "<th>No</th>
   <th>User ID</th>
   <th>Nama Peserta</th>
   <th>LP</th>
   <th>Nilai</th>
   </tr>";
$no=1;
$baris=1;
while ($row=mysql_fetch_array($query1))
{
      $userid=$row["userid"];
      $lp=$row["jk"];
      $nama=$row["nama"];
	  echo "<td><center>";
      echo "$no";
      $no++;
      echo "</b></td>";
      echo "<td><center>";
	  echo $userid;
	  echo "</td>";
      echo "<td>";
	  echo $nama;
	  echo "</td>";
      echo "<td><center>";
      echo "$lp";
	  echo "</td>";

	  $query2=mysql_query("select * from hasil where userid='$userid' and file='$kode'",$koneksi);
      $ketemu=mysql_num_rows($query2);
      if ($ketemu==0) 
	  { 
	      $nilai="<font color=\"red\"><b>blm</b></font>"; 
	      $belum++;
	  }
	  else
	  {
          while ($rowk=mysql_fetch_array($query2))
          {
			  $nilai=$rowk["nilai"];
			$sudah++;
          }
      }
      echo "<td><center>";
	  echo "<a href=inputnilai03.php?userid=$userid&kode=$kode&kelas=$kelas&password=$password> $nilai </a>";
	  echo "</td>";
      echo "</tr>";
}
echo "<tr><td colspan=3>Jumlah siswa :</td><td colspan=2> <b>$jumlah Orang</b></td></tr>";
if ($belum==0)
{
    echo "<tr><td colspan=5>Semua siswa telah mengikuti tes</td></tr>";
}
else
{
    echo "<tr><td colspan=3>Siswa yang belum mengikuti tes :</td><td colspan=2> <b>$belum orang</b></td></tr>";
    echo "<tr><td colspan=3>Siswa yang sudah mengikuti tes :</td><td colspan=2> <b>$sudah orang</b></td></tr>";
}
echo "</table>";
?>

</body>
</html>
