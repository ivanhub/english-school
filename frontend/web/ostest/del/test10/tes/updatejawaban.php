<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
  <title>Wirawan Test</title>
  <link rel="stylesheet" href="../css/layouts/pure-min.css">
  <link rel="stylesheet" href="../css/layouts/side-menu.css">
</head>

<body>
<big>

<?php

include ("../koneksi.inc.php");

$vfile     =$_POST['vfile'];
$nama      =$_POST['nama'];
$userid    =$_POST['userid'];
$mulai     =$_POST['mulai'];
#$vemail    =$_POST['vemail'];
#$tes       =$_POST['tes'];
#$vstatus   =$_POST['vstatus'];
#$vumur     =$_POST['vumur'];
#jumlahsoal =$_POST['jumlahsoal'];

$query5=mysql_query("select * from hasil where userid='$userid' and file='$vfile'",$koneksi);
$pernah=mysql_num_rows($query5);
if ($pernah>0)
{
	echo "$nama, anda telah mengikuti tes ini";
        echo "<br><a href=../index.php target=_top>Silahkan klik disini..</a>";
	exit;
}

$lama=time() - $mulai;
$lama2=$lama / 60;

$queri=mysql_query("select * from user where file='$vfile'",$koneksi);

while ($row=mysql_fetch_array($queri))
{

   $guru=$row["userid"];
   $lembaga=$row["lembaga"];
#   $alamat=$row["alamat"];
   $untuk=$row["untuk"];
   $materi=$row["materi"];
   $jumlahsoal=$row["jumlahsoal"];
   $disajikan=$row["disajikan"];
   $opsi=$row["opsi"];
   $metode=$row["metode"];
   $waktu=$row["waktu"];
   $password=$row["password"];
}

$query=mysql_query("select * from $vfile" ,$koneksi);

$jumlah=mysql_num_rows($query);
echo "<table class=\"pure-table pure-table-horizontal\">";
echo "<thead><tr><td>Nama </td>";
echo "<td> $nama</td></tr></thead>";
echo "<tbody><tr><td>User ID </td>";
echo "<td> $userid</td></tr>";
$benar=0;
$salah=0;
while ($row=mysql_fetch_array($query))
{
     $ary=$row["id"];
     $jwb=$_POST['jwb'];
 	  $vbenar=$row["benar"];
	  $vsisbenar=$row["sisbenar"];
	  $vsalah=$row["salah"];
	  $jawaban=$jwb[$ary];
	  $vsissalah=$row["sissalah"];
     if ($jwb[$ary]==$row["kunci"])
         {
         $benar++;
		   $vbenar++;
		   $vsisbenar=$vsisbenar.$userid."(".$jwb[$ary].")-";
         }
     else
         {
         $salah++;
		   $vsalah++;
		   $vsissalah=$vsissalah.$userid."(".$jwb[$ary].")-";
         }
    $ja=$row["ja"];
    $jb=$row["jb"];
    $jc=$row["jc"];
    $jd=$row["jd"];
    $je=$row["je"];
    $jk=$row["jk"];
    if ($jawaban=="a") { $ja++; }
    elseif ($jawaban=="b") { $jb++; }
    elseif ($jawaban=="c") { $jc++; }
    elseif ($jawaban=="d") { $jd++; }
    elseif ($jawaban=="e") { $je++; }
    else { $jk++; }
$query_updateanalisis=mysql_query("update $vfile set benar='$vbenar', salah='$vsalah', sisbenar='$vsisbenar', sissalah='$vsissalah', ja='$ja', jb='$jb', jc='$jc', jd='$jd', je='$je', jk='$jk' where id='$ary'", $koneksi) or die (mysql_error());
}

if ($disajikan>$jumlah)
{
   $soaldikerjakan=$jumlah;
}
else
{
   $soaldikerjakan=$disajikan;
}
$salah=$soaldikerjakan-$benar;

if ($untuk!="Angketdiri")
{
	echo "<tr><td>Soal yang anda kerjakan</td>";
	echo "<td> $soaldikerjakan</td></tr>";
	echo "<tr><td>Lama</td>";
	echo "<td>$lama2 menit</td></tr>";
#	echo "<tr><td>Benar </td>";
#	echo "<td> $benar</td></tr>";
#	echo "<tr><td>Salah </td>";
#	echo "<td> $salah</td></tr>";
	$nilai=$benar/$soaldikerjakan*100;
#	echo "<tr><td>Nilai </td>";
	#echo "<td bgcolor=\"#ccff00\"> <b>$nilai</b></td></tr></tbody>";
	$salah=$jumlahsoal-$benar;
}
$querykelas=mysql_query("select * from siswa where userid='$userid'",$koneksi);
while ($row=mysql_fetch_array($querykelas))
{
	$kelas=$row["kelas"];
#        $lembaga=$row["Lembaga"];
}
echo "kelas = $kelas";
$query=mysql_query ("insert into hasil values (' ',sysdate(),'$vfile','$guru','$kelas','$lembaga','$materi','$nama','$userid','$benar','$salah','$nilai','$lama2')", $koneksi);

echo "<br>Hasil Tes Anda Telah di Update";

?>
<br><a href=../index.php target=_top>Silahkan klik disini..</a>
</big>
</body>
</html>

</body>
</html>
