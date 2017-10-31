<link rel="stylesheet" type="text/css" href="../table.css" />
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
          $kunci=$jawab[$no];
          echo "<tr><td>";
          echo "$no";
          echo "<td>$kunci</td>";
	  echo "</td>";
          echo "</tr>";
	  $query_update_ljk=mysql_query("update $file set kunci='$kunci' where id='$no'",$koneksi) or die (mysql_error());
          $no++;
}
echo "</table>";
?>
