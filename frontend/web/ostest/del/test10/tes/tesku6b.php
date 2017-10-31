<html>
<Head>
<title>Tes Online</title>
<img src="tesku.jpg" width="80%">
</head>

<body background="back3.jpg">
<big>
<?php

include ("koneksi2.inc");

$queri=mysql_query("select * from user where file='$vfile'",$koneksi);

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

$query=mysql_query("select * from $file" ,$koneksi);
$jumlah=mysql_num_rows($query);
echo "<table bgcolor=\"ffbb00\" border=\"0\">";
echo "<tr><td>Nama </td>";
echo "<td> $vnama</td></tr>";
echo "<tr><td>Status </td>";
echo "<td> $vstatus</td></tr>";
echo "<tr><td>Email</td>";
echo "<td><b>$vemail</b></td></tr>";
echo "<tr><td>Kelompok Umur</td>";
echo "<td><b>$vumur</b></td></tr>";

while ($row=mysql_fetch_array($query))
{
     $ary=$row["id"];
     if ($jwb[$ary]==$row["kunci"])
         {
         $benar++;
         }
     else
         {
         $salah++;
         }
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
echo "<tr><td>Soal yang anda kerjakan</td>";
echo "<td> $soaldikerjakan</td></tr>";
echo "<tr><td>Benar </td>";
echo "<td> $benar</td></tr>";
echo "<tr><td>Salah </td>";
echo "<td> $salah</td></tr>";

$nilai=$benar/$soaldikerjakan*100;

echo "<tr><td>Skor Anda </td>";
echo "<td bgcolor=\"#ccff00\"> <b>$nilai</b></td></tr>";

$salah=$jumlahsoal-$benar;
$query=mysql_query ("insert into hasil values (' ',sysdate(),'$file','$guru','$lembaga','$materi','$vnama','$vstatus','$vemail','$vumur','$benar','$salah','$nilai')", $koneksi);

echo "<br>Hasil Tes Anda Telah di Update";

?>
<br><a href=tesku7.php>Lihat hasil dalam tabel</a>
</big>
</body>
</html>
