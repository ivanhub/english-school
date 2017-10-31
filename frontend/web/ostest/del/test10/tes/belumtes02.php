<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">

<title>Wirawan Test</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$kelas  =$_GET['kelas'];
$kode   =$_GET['kode'];

echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"60; URL=\"nilaikelas02.php?kelas=$kelas&kode=$kode\"/>";

include ("../koneksi.inc.php");

$query0=mysql_query("select * from user where file = '$kode'",$koneksi);
while ($row0=mysql_fetch_array($query0))
{
    $untuk=$row0["untuk"];
    $materi=$row0["materi"];
}
echo "<table>";
echo "<tr><td colspan=6><center>Nilai $untuk $materi </td></tr>";

$query1=mysql_query("select * from siswa where kelas like '%$kelas%' order by kelas, userid",$koneksi);

$jumlah=mysql_num_rows($query1);
echo "<tr>";
echo "<th>No</th>
   <th>User ID</th>
   <th>Nama Peserta</th>
   <th>LP</th>
   <th>Kls</th>
   <th>Nilai</th>
   </tr>";
$no=1;;
while ($row=mysql_fetch_array($query1))
{
      $userid=$row["userid"];
      $lp=$row["jk"];
      $nama=$row["nama"];
      $kls=$row["kelas"];
	   $query2=mysql_query("select * from hasil where userid='$userid' and file='$kode'",$koneksi);
      $ketemu=mysql_num_rows($query2);
      if ($ketemu==0) 
	   { 
	      $nilai="<font color=\"red\"><b>blm</b></font>"; 
	      $belum++;
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
         echo substr($lp,0,1);
	      echo "</td>";
         echo "<td><center>";
	      echo $kls;
	      echo "</td>";
         echo "<td><center>";
	      echo $nilai;
	      echo "</td>";
         echo "</tr>";	           
	   }
}
if ($belum==0)
{
    echo "<tr><td colspan=5>Semua siswa telah mengikuti tes</td></tr>";
}
else
{
    echo "<tr><td colspan=5>Siswa yang belum mengikuti tes :</td><td colspan=3> <b>$belum orang</b></td></tr>";
}
echo "</table>";
?>

</body>
</html>
