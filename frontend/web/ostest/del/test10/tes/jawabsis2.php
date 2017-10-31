<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" />
<title>Wirawan Test</title>
<h2>Lembar Jawaban Siswa</h2>
</head>

<body background="../images/back3.jpg">

<?php
$kodesoal  =$_POST['kodesoal'];
$userid    =$_POST['userid'];
$userid    =rtrim($userid);
$xuserid   =substr($userid,2,10);
$panjang   =strlen($xuserid);

include ("../koneksi.inc.php");

$queri2=mysql_query("select * from siswa where userid='$userid'",$koneksi);
$adasiswa=mysql_num_rows($queri2);
while ($row2=mysql_fetch_array($queri2))
{
   $nama=$row2["nama"];
   $jk=$row2["jk"];
   $kelas=$row2["kelas"];
   $lembaga=$row2["lembaga"];
}

$queri=mysql_query("select * from user where file='$kodesoal'",$koneksi);
$adasoal=mysql_num_rows($queri);
while ($row=mysql_fetch_array($queri))
{
   $guru=$row["nama"];
   $alamat=$row["alamat"];
   $untuk=$row["untuk"];
   $materi=$row["materi"];
   $disajikan=$row["disajikan"];
   $opsi=$row["opsi"];
   $metode=$row["metode"];
   $password=$row["password"];
}

$queri3=mysql_query("select * from hasil where file='$kodesoal' order by nilai desc, lama",$koneksi);
$jumpeserta=mysql_num_rows($queri3);
$rangking=0;
while ($row3=mysql_fetch_array($queri3))
{
     $rangking++;
     $cekuserid=$row3["userid"];
     if ($userid==$cekuserid)
     {
	$rank=$rangking;
	$waktu=$row3["lama"];
     }
}

$query=mysql_query("select * from $kodesoal order by id",$koneksi);

$jumlahsoal=mysql_num_rows($query);

$mulai=time();
echo "<input type=hidden name=mulai value=$mulai>";
echo "<table align=left width=45%>";
     echo "<tr><td>User ID</td>";
     echo "<td><b>$userid</b></td>";
     echo "<tr><td>Nama</td>";
     echo "<td><b>$nama</b></td>";
     echo "<tr><td>Jenis Kelamin</td>";
     echo "<td><b>$jk</b></td>";
     echo "<tr><td>Kelas</td>";
     echo "<td><b>$kelas</b></td>";
     echo "</table><table width=45%>";
     echo "<tr><td>Asal Sekolah</td>";
     echo "<td><b>$lembaga</b></td>";
     echo "<tr><td>Materi Ujian</td>";
     echo "<td><b>$materi</b></td></tr>";
     echo "<tr><td>Jenis Tes</td>";
     echo "<td><b>$untuk</b></td>";
     echo "<tr><td>Pembuat Tes</td>";
     echo "<td><b>$guru</b></td>";
echo "</table><hr>";

echo "<table align=left width=45%>";
echo "<tr><th>No</th><th>Jwb</th><th>Knc</th><th>Benar</th><th>B</th><th>S</th></tr>";
$no=0;
$mulai=0;
$tblbaru=round($jumlahsoal/2)+1;
while ($row=mysql_fetch_array($query))
{
	  $no++;
	  if ($no==$tblbaru)
	  {
		echo "</table><table width=45%>";
		echo "<tr><th>No</th><th>Jwb</th><th>Knc</th><th>Benar</th><th>B</th><th>S</th></tr>";
	  }
	  $kunci=$row["kunci"];
	  $bnr=$row["benar"];
	  $slh=$row["salah"];
	  $sisbenar=$row["sisbenar"];
	  $sissalah=$row["sissalah"];
	  $carijwb=$xuserid."(";
	  $njawab=strpos($sisbenar,$carijwb,0);
	  $mulai=$njawab+$panjang+1;
	  $jawab=substr($sisbenar,$mulai,1);
	  $benar="Benar";
	  $jumbenar++;
	  if ($njawab==0) 
	  { 
		$njawab=strpos($sissalah,$carijwb,0);
		$mulai=$njawab+$panjang+1;
		$jawab=substr($sissalah,$mulai,1);
		$benar="<font color=red>Salah</font>";
		$jumbenar--;
	  }
	  if ($jawab==")") { $jawab="<font color=blue>ksg</font>"; }
	  echo "<tr><td>$no</td><td>$jawab</td><td>$kunci</td><td>$benar</td><td>$bnr</td><td>$slh</td></tr>";
}
echo "</table>";
$nilai=round(($jumbenar/$jumlahsoal)*100);
echo "<br>";
echo "<table width=90%>";
echo "<tr><th>Jumlah Soal</th><td>$jumlahsoal</td><th>Jumlah Jawaban Benar</th><td>$jumbenar</td></tr>";
echo "<tr><th>Nilai</th><td><h2>$nilai</h2></td><th>Rangking</th<td><h2>$rank dari $jumpeserta peserta</h2></td></tr>";
echo "<tr><th>Waktu Menyelesaikan Soal</th><td>$waktu menit</td><td colspan=2>Keterangan: <br>B = jumlah siswa yang menjawab benar<br>S = jumlah siswa yang menjawab salah</td></tr>";
echo "</table>";
include ("../footer1.php");
?>
</body>
</html>
