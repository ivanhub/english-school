<?php
$kelas  =$_GET['kelas'];
$kode   =$_GET['kode'];
$urut   =$_GET['urut'];
$secara =$_GET['secara'];

include ("../koneksi.inc.php");

$filename=$kelas.$kode.".xls";
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
// Mendefinisikan nama file ekspor 
header("Content-Disposition: attachment; filename=$filename");

$query0=mysql_query("select * from user where file = '$kode'",$koneksi);
while ($row0=mysql_fetch_array($query0))
{
    $untuk=$row0["untuk"];
    $materi=$row0["materi"];
}

echo "<table>";
echo "<tr><td colspan=6><center>Matrik jawaban siswa rombel <b>$kelas</b> $untuk $materi</td></tr>";

$query1=mysql_query("select * from siswa where kelas like '$kelas' order by userid",$koneksi);

#$query=mysql_query("select * from hasil where $field like '%$cari%' and $field2 like '%$cari2%' order by $field3 $secara",$koneksi);

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
   echo "<th rowspan=2>Benar</th><th rowspan=2>Nilai</th>";
   echo "</tr><tr><td colspan=4><center>K U N C I</td>";
   $knc=1;
   for ($knc; $knc<=$jumsoal; $knc++)
   {
	echo "<td align=center><font color=\"blue\"><b>";
	echo strtoupper($kunci["$knc"]);
	echo "</td>";
   }
   echo "</tr>";

$no=1;
while ($row=mysql_fetch_array($query1))
{
      $userid2=$row["userid"];
      $userid=strtoupper($userid2);
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
	  $query2=mysql_query("select * from $kode order by id",$koneksi);
          while ($rowk=mysql_fetch_array($query2))
          {
		$nosoal++;
		$kunci2=$rowk["kunci"];
                $kunci=strtoupper($kunci2);
		$jawab='  '.$rowk["sisbenar"].$rowk["sissalah"];
		$jawab=strtoupper($jawab);
		$pjg=strlen($userid);
		$posjawab=strpos($jawab,$userid,0);
		$jawaban=strtoupper(substr($jawab,$posjawab+$pjg+1,1));
		if ($jawaban==")") { $jawaban="o"; }
		if ($kunci=="") { $kunci="o"; }
		if ($posjawab==0) { $jawaban="-"; }
		if ($jawaban==$kunci) 
		{ 
		    echo "<td><font color=\"black\"><center>";
		    $benarsis++;
		    $benarsoal[$nosoal]++;
		}
		else 
		{ 
		    echo "<td><font color=\"red\"><center>"; 
		}
		echo "$jawaban</td>";
          }
	  $nilaisis=round(($benarsis/$jumsoal)*100);
	  echo "<td><center>$benarsis</td>";
	  echo "<td><center>$nilaisis</td>";
      echo "</tr>";
}
echo "<tr><td colspan=4><center>B e n a r</td>";
$bnr=1;
for ($bnr; $bnr<=$jumsoal; $bnr++)
{
   echo "<td><font color=\"blue\"><b><center>";
   echo $benarsoal["$bnr"];
   echo "</td>";
}
echo "</tr>";
echo "</table>";
?>