<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">

<title>WIRAWAN TEST</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$kelas  =$_GET['kelas'];
$kode   =$_GET['kode'];
#$urut   =$_GET['urut'];
#$secara =$_GET['secara'];

echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"10; URL=\"nilaikelas02.php?kelas=$kelas&kode=$kode\"/>";

include ("../koneksi.inc.php");

$query0=mysql_query("select * from user where file = '$kode'",$koneksi);
while ($row0=mysql_fetch_array($query0))
{
    $untuk=$row0["untuk"];
    $materi=$row0["materi"];
    $KKM=$row0["KKM"];
}
echo "<table>";
echo "<tr><td colspan=13><center>Nilai $untuk $materi </td></tr>";

$query1=mysql_query("select * from siswa where kelas like '$kelas' order by userid",$koneksi);

#$query=mysql_query("select * from hasil where $field like '%$cari%' and $field2 like '%$cari2%' order by $field3 $secara",$koneksi);

$jumlah=mysql_num_rows($query1);
echo "<tr>";
echo "<th>No</th>
   <th>User ID</th>
   <th>Nama Peserta</th>
   <th>LP</th>
   <th>Kls</th>
   <th>Nilai</th>
   <td bgcolor=\"grey\"></td>
   <th>No</th>
   <th>User ID</th>
   <th>Nama Peserta</th>
   <th>LP</th>
   <th>Kls</th>
   <th>Nilai</th>

   </tr>";
$no=1;
$klm=1;
$sdhkkm=0;
$bawahkkm=0;
$belum=0;
$sudah=0;
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
      echo substr($lp,0,1);
	  echo "</td>";
      echo "<td><center>";
	  echo $kelas;
	  echo "</td>";

	  $query2=mysql_query("select * from hasil where userid='$userid' and file='$kode'",$koneksi);
      $ketemu=mysql_num_rows($query2);
      if ($ketemu==0) 
	  { 
	      $nilai="<font color=\"red\">blm"; 
              $bg="yellow";
	      $belum++;
	  }
	  else
	  {
          while ($rowk=mysql_fetch_array($query2))
          {
	       $nilai=$rowk["nilai"];
               $bg="white";
	       $sudah++;
          }
      }
      echo "<td bgcolor=$bg><center>";
      if ($nilai<$KKM) { $bawahkkm++; echo "<font color=\"red\">"; } else { $sdhkkm++; echo "<font color=\"green\">"; }
      echo $nilai;
      echo "</td>";
      if ($klm==2)
      {
          echo "</tr>";
          $klm=0;
      }
      else
      {
          echo "<td bgcolor=\"grey\"></td>";
      }
      
      $klm++;
}
$sudahkkm=$sdhkkm-$belum;
echo "<tr><td colspan=10>Jumlah siswa :</td><td colspan=3> <b>$jumlah Orang</b></td></tr>";
if ($belum==0)
{
    echo "<tr><td colspan=12>Semua siswa telah mengikuti tes</td></tr>";
}
else
{
    echo "<tr><td colspan=10>Siswa yang mencapai / melampaui KKM :</td><td colspan=3> <b>$sudahkkm orang</b></td></tr>";
    echo "<tr><td colspan=10>Siswa yang nilainya di bawah KKM :</td><td colspan=3> <b>$bawahkkm orang</b></td></tr>";
    echo "<tr><td colspan=10>Siswa yang belum mengikuti tes :</td><td colspan=3> <b>$belum orang</b></td></tr>";
    echo "<tr><td colspan=10>Siswa yang sudah mengikuti tes :</td><td colspan=3> <b>$sudah orang</b></td></tr>";
}
echo "</table>";
?>

</body>
</html>
