<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">

<title>Penilaian diri sendiri</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$kelas  =$_GET['kelas'];
$kode   =$_GET['kode'];
$urut   =$_GET['urut'];
$secara =$_GET['secara'];

include ("../koneksi.inc.php");

$query0=mysql_query("select * from user where file = '$kode'",$koneksi);
while ($row0=mysql_fetch_array($query0))
{
    $untuk=$row0["untuk"];
    $materi=$row0["materi"];
}
echo "Penilaian diri sendiri kelas $kelas <b>$materi</b>";

echo "<table>";

$query1=mysql_query("select * from siswa where kelas like '$kelas' order by userid",$koneksi);


$jumlah=mysql_num_rows($query1);
echo "<tr>";
echo "<th>No</th>
   <th>User ID</th>
   <th>Nama Peserta</th>
   <th>LP</th>";
   $query3=mysql_query("select * from $kode order by id",$koneksi);
   $jumsoal=mysql_num_rows($query3);
   while ($row3=mysql_fetch_array($query3))
   {
	$nosoal++;
	echo "<th>$nosoal</th>";
	$kunci["$nosoal"]=$row3["kunci"];
	if ($kunci["$nosoal"]=="") { $kunci["$nosoal"]="o"; }
   }
   echo "<th>Statistik</th><th>SKOR</th>";
   echo "</tr>";
#  echo "<tr><td colspan=4><center>Skor</td>";
#   $knc=1;
#   for ($knc; $knc<=$jumsoal; $knc++)
#   {
#	echo "<td><font color=\"blue\"><b>";
#	echo $kunci["$knc"];
#	echo "</td>";
#   }
#   echo "</tr>";

$no=1;
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
	  $benarsis=0;
	  $nosoal=0;
 	  $skor=0;
 	  $jum_a=0;
 	  $jum_b=0;
 	  $jum_c=0;
 	  $jum_d=0;
	  $jawaban="";
	  $query2=mysql_query("select * from $kode order by id",$koneksi);
          while ($rowk=mysql_fetch_array($query2))
          {
		$nosoal++;
#		$kunci=$rowk["kunci"];
		$jawab='  '.$rowk["sisbenar"].$rowk["sissalah"];
		$pjg=strlen($userid);
		$posjawab=strpos($jawab,$userid,0);
		$jawaban=substr($jawab,$posjawab+$pjg+1,1);
		if ($jawaban==")") { $jawaban="o"; }
		if ($kunci=="") { $kunci="o"; }
		if ($posjawab==0) { $jawaban="-"; }
#		if ($jawaban==$kunci) 
#		{ 
#		    echo "<td><font color=\"black\">";
#		    $benarsis++;
#		    $benarsoal[$nosoal]++;
#		}
#		else 
#		{ 
#		    echo "<td><font color=\"red\">"; 
#		}
		if (strtoupper($jawaban)=="A" ) { $skor=$skor+4 ; $jum_a++; }
		if (strtoupper($jawaban)=="B" ) { $skor=$skor+3 ; $jum_b++; }
		if (strtoupper($jawaban)=="C" ) { $skor=$skor+2 ; $jum_c++; }
		if (strtoupper($jawaban)=="D" ) { $skor=$skor+1 ; $jum_d++; }


		echo "<td>$jawaban</td>";
          }
#	  $nilaisis=round(($benarsis/$jumsoal)*100);
	  $r_skor=$skor/$jumsoal;
	  echo "<td>menjawab SELALU $jum_a";
	  echo "<br>menjawab SERING $jum_b";
	  echo "<br>menjawab KADANG $jum_c";
	  echo "<br>menjawab TIDAK PERNAH $jum_d</td>";

	  echo "<td>Skor = $skor <br> Rata-rata = $r_skor</td>";
      echo "</tr>";
}
echo "<tr><td colspan=4>B e n a r</td>";
$bnr=1;
for ($bnr; $bnr<=$jumsoal; $bnr++)
{
   echo "<td><font color=\"blue\"><b>";
   echo $benarsoal["$bnr"];
   echo "</td>";
}
echo "</tr>";
echo "</table>";
?>

</body>
</html>
