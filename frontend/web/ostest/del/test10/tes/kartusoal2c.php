<html>
<Head>
<title>Online Test</title>
<link rel="stylesheet" type="text/css" href="../table.css" />

</head>

<body background="../images/back3.jpg">

<?php
$file      =$_POST['file'];
$pass      =$_POST['pass'];
$abs       =$_POST['abs'];

include ("../koneksi.inc.php");

$queri=mysql_query("select * from user where file='$file'",$koneksi);

while ($row=mysql_fetch_array($queri))
{
   $guru=$row["nama"];
   $lembaga=$row["lembaga"];
   $alamat=$row["alamat"];
   $untuk=$row["untuk"];
   $materi=$row["materi"];
   $jumlahsoal=$row["jumlahsoal"];
   $disajikan=$row["disajikan"];
   $opsi=$row["opsi"];
   $metode=$row["metode"];
   $waktu=$row["waktu"];
   $password=$row["password"];
}
if ($pass!=$password)
{
    echo "<br>$nama ..., password yang anda masukkan salah";
    echo "<a href=\"tesku9.php\">Kembali</a>";
    exit;
}

$query=mysql_query("select * from $file order by id",$koneksi);
$jumlahsoal=mysql_num_rows($query);

$qhasiltes=mysql_query("select * from hasil where file='$file'", $koneksi);
$jumlahtestee=mysql_num_rows($qhasiltes);
while ($row=mysql_fetch_array($qhasiltes))
{
	$totnilai=$totnilai+$row["nilai"];
}
if ($jumlahtestee<100)
{
	$katas=floor($jumlahtestee*.50);
}
else
{
	$katas=floor($jumlahtestee*.27);
}

$kbawah=$katas;

#echo "<table>";
#     echo "<tr><th>Materi Ujian</th>";
#     echo "<td><b>$materi</b></td>";
#     echo "<th>Jumlah testee</th><td><b>$jumlahtestee orang</b></td></tr>"; 
#     echo "<tr><th>Jenis Tes</th>";
#     echo "<td><b>$untuk</b></td>";
#     echo "<th>kelompok atas / bawah </th><td><b>$kbawah orang</b></td></tr>";
#     echo "<tr><th>Guru / Tutor / Dosen</th>";
#     echo "<td><b>$guru</b></td>";
#     echo "<th>Jumlah soal</th><td><b>$jumlahsoal butir</b></td></tr>";
#echo "</table>";

$qatas=mysql_query("select * from hasil where file='$file' order by nilai DESC limit $katas", $koneksi);
$atas=0;
#echo "<table align=left width=50%>";
#echo "<tr><th colspan=3><center>Kelompok Atas : </th></tr>";
while ($row=mysql_fetch_array($qatas))
{
	$atas++;
	$sisatas[$atas]=substr($row["userid"],3,6)."(";
#	echo "<tr><td>$atas</td>";
	$nama=$row["nama"];
	$nilai=$row["nilai"];
#	echo "<td>$nama</td>";
#	echo "<td>$nilai</td></tr>";
}

#echo "</table>";
$qbawah=mysql_query("select * from hasil where file='$file' order by nilai limit $kbawah", $koneksi);
$bawah=0;
#echo "<table width=50%>";
#echo "<tr><th colspan=3><center>Kelompok Bawah : </th></tr>";
while ($row=mysql_fetch_array($qbawah))
{
	$bawah++;
	$sisbawah[$bawah]=substr($row["userid"],3,6)."(";
#	echo "<tr><td>$bawah</td>";
	$nama=$row["nama"];
	$nilai=$row["nilai"];
#	echo "<td>$nama</td>";
#	echo "<td>$nilai</td></tr>";
}
#echo "</table>";

echo "<input type=\"hidden\" name=\"vfile\" value=\"$file\">";

$no=1;
$spankolom=$opsi+1;

while ($row=mysql_fetch_array($query))
{
	  echo "<table width=100%><th><Center><font color=#0F68A1><h2><b>Kartu Soal Pilihan Ganda</b></h2></font></center></th></table><br>";
	  echo "<table width=100%>";
	  echo "<tr><td>Jenis Sekolah</td><td>$lembaga</td><td>Penyusun</td><td>$guru</td><tr>";
	  echo "<tr><td>Mata Pelajaran</td><td>$materi</td><td> </td><td>-</td><tr>";
	  echo "<tr><td>Kelas / Semester</td><td>$kelas / $semester</td><td> </td><td>-</td><tr>";
	  echo "<tr><td>Bentuk Tes</td><td>Tertulis / Pilihan ganda</td><td>Tahun Pelajaran</td><td>2008 / 2009</td><tr>";
	  echo "</table>";

	  echo "<table width=100%>";
	  $kolomgabung=10+$opsi;
	  $kolompilihan=2+$opsi;
	  $soal=$row["soal"];
	  $opsia=$row["opsia"];
	  $opsib=$row["opsib"];
	  $opsic=$row["opsic"];
	  $opsid=$row["opsid"];
	  $opsie=$row["opsie"];
	  $kunchi=$row["kunci"];
	  echo "<tr><td valign=top width=30% height=150>";
	  echo "Kompetensi Dasar :";
	  echo "</td>";

	  echo "<td rowspan=3 valign=top>";
	  echo "<table width=100%>";
	  echo "<tr><td width=10%>No. Soal</td><td width=10%>Kunci Jawaban</td><td rowspan=2 width=15%>Buku Sumber </td><td rowspan=2>:</tr>";
	  echo "<tr><td>$no</td><td>$kunchi</td></tr>";
	  echo "</table>";

	  echo "$soal";
	  echo "<br>a. $opsia";
	  echo "<br>c. $opsib";
	  echo "<br>b. $opsic";
	  if ($opsi>3)
	  {
		echo "<br>d. $opsid";
	  }
	  if ($opsi>4)
	  {
		echo "<br>e. $opsie";
	  }
	  echo "</td></tr>";

	  echo "<tr><td valign=top height=150>";
	  echo "Materi :";
	  echo "</td></tr>";

	  echo "<tr><td valign=top height=150>";
	  echo "Indikator Soal :";
	  echo "</td></tr>";

	  echo "</table>";


#	  echo "<table width=100%>";
#	  echo "<tr><th colspan=$spankolom><center>Efektifitas Distraktor <br><font size=1>(A=Kelompok Atas B=Kelompok Bawah)</th><th colspan=4><center>Tingkat Kesulitan</th><th colspan=4><center>Daya Pembeda</th></tr>";
#	  echo "<tr><th>a</th><th>b</th><th>c</th>";
#	  if ($opsi>3) { echo "<th>d</th>"; }
#	  if ($opsi>4) { echo "<th>e</th>"; }
#	  echo "<th>ksg</th><th>Bnr</th><th>Slh</th><th>Poin</th><th>TK</th><th>Bnr Ats</th><th>Bnr Bwh</th></th><th>Poin DP</th><th>DP</th></tr>";

          $ary=$row["id"];
          $jawab="jwb[$ary]";
          $no++;
          echo "</b></td>";
          $benar=$row["benar"];
          $salah=$row["salah"];
          $jumlahtestee=$benar+$salah;
          $ntk=$benar/$jumlahtestee;
          $ptk=number_format(($ntk),2,',','');
	  if ($ntk <= .3) { $tk="Sulit"; $jumsulit++; }
	  elseif ($ntk <= .7) { $tk="Sedang"; $jumsedang++; }
	  else { $tk="Mudah"; $jummudah++; } 

	  $jumtk=$jumtk+$ntk;

	  $kunci=$row["kunci"];
	  $ja=$row["ja"];
	  $jb=$row["jb"];
	  $jc=$row["jc"];
	  $jd=$row["jd"];
	  $je=$row["je"];
	  $jk=$row["jk"];
	  $slha=$ja/$jumlahtestee*100; $tslha=number_format($slha,0,',','');
	  $slhb=$jb/$jumlahtestee*100; $tslhb=number_format($slhb,0,',','');
	  $slhc=$jc/$jumlahtestee*100; $tslhc=number_format($slhc,0,',','');
	  $slhd=$jd/$jumlahtestee*100; $tslhd=number_format($slhd,0,',','');
	  $slhe=$je/$jumlahtestee*100; $tslhe=number_format($slhe,0,',','');
	  $slhk=$jk/$jumlahtestee*100; $tslhk=number_format($slhk,0,',','');
	  if ($slha>=2) { $warna_a="<font color=grey>"; } else { $warna_a="<font color=red>"; }
	  if ($slhb>=2) { $warna_b="<font color=grey>"; } else { $warna_b="<font color=red>"; }
	  if ($slhc>=2) { $warna_c="<font color=grey>"; } else { $warna_c="<font color=red>"; }
	  if ($slhd>=2) { $warna_d="<font color=grey>"; } else { $warna_d="<font color=red>"; }
	  if ($slhe>=2) { $warna_e="<font color=grey>"; } else { $warna_e="<font color=red>"; }
	  $hdp=1;
	  $benaratas=0;
	  $benarbawah=0;
	  $sisbenar=$row["sisbenar"];
	  for ($hdp; $hdp<=$katas; $hdp++)
	  {
		$posatas =strpos($sisbenar,$sisatas[$hdp],0);
		$posbawah=strpos($sisbenar,$sisbawah[$hdp],0);
		if ($posatas)  
		{ 
			$benaratas++;
		}
		if ($posbawah) 
		{ 
			$benarbawah++; 
		}
	  }
	  $jwbabcde=1;
	  $salahatasa=0;
	  $salahatasb=0;
	  $salahatasc=0;
	  $salahatasd=0;
	  $salahatase=0;
	  $salahatask=0;
	  $salahbawaha=0;
	  $salahbawahb=0;
	  $salahbawahc=0;
	  $salahbawahd=0;
	  $salahbawahe=0;
	  $salahbawahk=0;
	  $sissalah=$row["sissalah"];
	  for ($jwbabcde; $jwbabcde<=$katas; $jwbabcde++)
	  {
		$vposatas =strpos($sissalah,$sisatas[$jwbabcde],0);
		$vposbawah=strpos($sissalah,$sisbawah[$jwbabcde],0);
		if ($vposatas)
		{
			$ambiljawaban=$vposatas+strlen(rtrim($sisatas[$jwbabcde]))-1;
			$jwbuseratas=substr($sissalah,$ambiljawaban,3);
			switch ($jwbuseratas)
			{
			case "(a)":
				$salahatasa++;
				break;
			case "(b)":
				$salahatasb++;
				break;
			case "(c)":
				$salahatasc++;
				break;
			case "(d)":
				$salahatasd++;
				break;
			case "(e)":
				$salahatase++;
				break;
			case "(k)":
				$salahatask++;
				break;
			}
		}
		if ($vposbawah)
		{
			$ambiljawabans=$vposbawah+strlen(rtrim($sisbawah[$jwbabcde]))-1;
			$jwbuserbawah=substr($sissalah,$ambiljawabans,3);
			switch ($jwbuserbawah)
			{
			case "(a)":
				$salahbawaha++;
				break;
			case "(b)":
				$salahbawahb++;
				break;
			case "(c)":
				$salahbawahc++;
				break;
			case "(d)":
				$salahbawahd++;
				break;
			case "(e)":
				$salahbawahe++;
				break;
			case "(k)":
				$salahbawahk++;
				break;
			}
		}
	  }
	  if ($salahatasa>$salahbawaha) { $warnaa="<font color=red>"; } else { $warnaa="<font color=grey>"; }
	  if ($salahatasb>$salahbawahb) { $warnab="<font color=red>"; } else { $warnab="<font color=grey>"; }
	  if ($salahatasc>$salahbawahc) { $warnac="<font color=red>"; } else { $warnac="<font color=grey>"; }
	  if ($salahatasd>$salahbawahd) { $warnad="<font color=red>"; } else { $warnad="<font color=grey>"; }
	  if ($salahatase>$salahbawahe) { $warnae="<font color=red>"; } else { $warnae="<font color=grey>"; }
	
	  $ndp=(2 * ($benaratas - $benarbawah)) / ($katas+$kbawah);
	  $jumdp=$jumdp+$ndp;
	  $pdp=number_format($ndp,2,',','');
	  if ($ndp >= 0.20) { $qdp = "Dipakai"; $jumdipakai++; } else { if ($ndp>=.14) { $qdp = "Direvisi"; $jumdirevisi++; } else { $qdp = "dibuang"; $jumdibuang++; } }

#	  echo "<td>";

#	  if ($kunci=="a") { echo "<font color=blue>kunci"; } else { echo "$warna_a $tslha% <br>$warnaa A:$salahatasa-B:$salahbawaha"; }
#	  echo "</td>";
#	  echo "<td>";
#	  if ($kunci=="b") { echo "<font color=blue>kunci"; } else { echo "$warna_b $tslhb% <br>$warnab A:$salahatasb-B:$salahbawahb"; }
#	  echo "</td>";
#	  echo "<td>";
#	  if ($kunci=="c") { echo "<font color=blue>kunci"; } else { echo "$warna_c $tslhc% <br>$warnac A:$salahatasc-B:$salahbawahc"; }
#	  echo "</td>";
#	  if ($opsi>3)
#	  {
#		echo "<td>";
#	  	if ($kunci=="d") { echo "<font color=blue>kunci"; } else { echo "$warna_d $tslhd% <br>$warnad A:$salahatasd-B:$salahbawahd"; }
#	  	echo "</td>";
#	  }
#	  if ($opsi>4)
#	  {
#		echo "<td>";
#		if ($kunci=="e") { echo "<font color=blue>kunci"; } else { echo "$warna_e $tslhe% <br>$warnae A:$salahatase-B:$salahbawahe"; }
#		echo "</td>";
#	  }
#	  echo "<td>$tslhk%</td>";
#	  echo "<td>$benar</td>";
#	  echo "<td>$salah</td>";
#	  echo "<td>$ptk</td>";
#	  echo "<td>$tk</td>";
#	  echo "<td>$benaratas</td>";
#	  echo "<td>$benarbawah</td>";
#	  echo "<td>$pdp</td>";
#	  echo "<td>$qdp</td>";
#         echo "</td></tr>";
#	  echo "</table>";

	  echo "<table width=100%>";
	  echo "<tr><td rowspan=2>Digunakan untuk</td>";
	  echo "<td rowspan=2>Tanggal</td>";
	  echo "<td rowspan=2>Jumlah <br>siswa</td>";
	  echo "<td rowspan=2>Tingkat <br>Kesukaran</td>";
	  echo "<td rowspan=2>Daya <br>Pembeda</td>";
	  echo "<td colspan=5>Proporsi Jawaban pada Pilihan</td>";
	  echo "<td rowspan=2>Keterangan</td></tr>";
	  echo "<tr><td>A</td><td>B</td><td>C</td><td>D</td><td>Omit</td></tr>";
	  echo "<tr><td>vuntuk</td><td>vtanggal</td><td>$jumlahtestee</td><td>$tk ($ptk)</td>";
	  echo "<td>$pdp</td><td>$tslha%</td><td>$tslhb%</td><td>$tslhc%</td><td>$tslhd%</td><td>$tslhk%</td><td>$qdp</td></tr>";
	  echo "</table><br>";

	  echo "<p class=pisah>halaman berikut</p>";

}
echo "</table>";

$ratatk=$jumtk/$jumlahsoal;
$ratadp=$jumdp/$jumlahsoal;
$sratatk=number_format($ratatk,2,',','');
$sratadp=number_format($ratadp,2,',','');

#echo "<hr><table width=100%>";
#echo "<tr><th>Hasil Analisis Tes $materi</th><th>Rata-rata Tingkat Kesulitan : $sratatk</th><th>Rata-rata Daya Pembeda : $sratadp</th></tr>";
#echo "<tr><td>Soal mudah : $jummudah butir</td><td>Soal Sedang : $jumsedang butir</td><td>Soal Sulit : $jumsulit butir</td></tr>";
#echo "<tr><td>Soal Dipakai : $jumdipakai butir</td><td>Soal harus direvisi : $jumdirevisi butir</td><td>Soal dibuang : $jumdibuang butir</td></tr>";
echo "</table>";
include ("../footer.php");
?>
</body>
</html>
