<?php
$file      =$_POST['file'];
$jawab     =$_POST['jawab'];
include ("../koneksi.inc.php");

$queri=mysql_query("select * from user where file='$file'",$koneksi);

while ($row=mysql_fetch_array($queri))
{
   $userid=$row["userid"];
   $guru=$row["nama"];
   $lembaga=$row["lembaga"];
   $alamat=$row["alamat"];
   $untuk=$row["untuk"];
   $materi=$row["materi"];
   $jumlahsoal=$row["jumlahsoal"];
   $disajikan=$row["disajikan"];
   $opsi=$row["opsi"];
   $metode=$row["metode"];
   $password=$row["password"];
}

$no=1;
echo "<table border=\"1\">";
echo "<tr><th>No</th><th>Kunci Jawaban</th></tr>";

while ($no<=$jumlahsoal)
{
          echo "<tr><td>";
          echo "$no";
          echo "<td>$jawab[$no]</td>";
	  echo "</td>";
          echo "</tr>";
	  $query=mysql_query ("INSERT INTO $file (id, kunci) VALUES ('$no', '$jawab[$no]')", $koneksi);
          $no++;
}
echo "</table>";
?>
