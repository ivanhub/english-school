<html>
<head>
<font color=red>
<hr>
<h1>Statistik</h1>

</head>
<body background="back1.jpg">

<img src="tesonlinelogo.jpg" width="25%" align="right">
<font face=arial color=brown size=2>

<?php
   $page="wirawantest";

   include ("koneksi.inc.php");

   $query1=mysql_query("select * from siswa" ,$koneksi);
   $jumsiswa=mysql_num_rows($query1);
   $query2=mysql_query("select * from hasil" ,$koneksi);
   $jumtesumum=mysql_num_rows($query2);
   $query3=mysql_query("select * from hasiltes" ,$koneksi);
   $jumtesiq=mysql_num_rows($query3);
   $query4=mysql_query("select * from user" ,$koneksi);
   $jumsoal=mysql_num_rows($query4);

   echo "<table>";
   echo "<tr>";
   echo "<td><b>NO</b></td><td><b>KETERANGAN<b></td><td><b>JUMLAH</b></td></tr>";
   echo "<td>1.</td><td>Siswa teregistrasi</td><td>$jumsiswa anak</td></tr>";
   echo "<td>2.</td><td>Tes umum yang diikuti siswa</td><td>$jumtesumum soal</td></tr>";
   echo "<td>3.</td><td>Tes IQ yang diikuti siswa</td><td>$jumtesiq soal</td></tr>";
   echo "<td>4.</td><td>Jumlah soal umum yang ada</td><td>$jumsoal soal</td></tr>";
   echo "</table>";
   include ("counter.php");
   include ("footer.php");
?>
</body>
</html>
