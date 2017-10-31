<html>
<Head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
  <title>Wirawan Test</title>
  <link rel="stylesheet" href="../css/layouts/pure-min.css">
  <link rel="stylesheet" href="../css/layouts/side-menu.css">
</head>

<body>

<?php
include ("../koneksi.inc.php");
$file   =$_GET['file'];
$userid =$_GET['userid'];
$nama   =$_GET['nama'];
#$kelas  =$_GET['kelas'];
$queri=mysql_query("select * from user where file='$file'",$koneksi);
$query2=mysql_query("select kelas from siswa where userid='$userid'",$koneksi);
while ($row2=mysql_fetch_array($query2))
{ $kelas=$row2["kelas"]; }

$nama=stripcslashes($nama);

echo "<center><table class=\"pure-table\">";
$no=1;
while ($row=mysql_fetch_array($queri))
{
   $waktu=$row["waktu"];
   echo "<thead>";
   echo "<tr>";
   echo "<td>Nama / Kelas</td>";
   echo "<td>";
   echo "$nama / $kelas";
   echo "</td></tr></thead>";

   echo "<tr>";
   echo "<td>Soal</td>";
   echo "<td>";
   echo "<font>";
   echo $row["file"];
   echo "</td></tr>";

   echo "<tr><td>Materi</td>";
   echo "<td>";
   echo $row["materi"];
   echo "</td></tr>";

   echo "<tr><td>Lembaga</td>";
   echo "<td>";
   echo $row["lembaga"];
   $lembaga=$row["lembaga"];
   echo "</td></tr>";

   echo "<tr><td>Pembuat</td>";
   echo "<td>";
   echo $row["nama"];
   echo "</td></tr>";

   echo "<tr><td>Jenis</td>";
   echo "<td>";
   echo $row["untuk"];
   echo "</td></tr>";

   echo "<tr><td>Deskripsi</td>";
   echo "<td>";
   $deskripsi=$row["deskripsi"];
   $untuk=$row["untuk"];
   echo strtoupper($deskripsi);
   echo "</td></tr>";

}
echo "<form class=\"pure-form\" method=\"post\" action=\"kerjakan.php\">";
     echo "<tr><td>Password Soal</td>";
     echo "<td><input type=\"password\" placeholder=\"password\" name=\"pass\" size=\"20\">";
     echo "<input type=\"hidden\" name=\"file\" value=\"$file\">";
     echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\">";
     echo "<input type=\"hidden\" name=\"nama\" value=\"$nama\">";
     echo "<input type=\"hidden\" name=\"lembaga\" value=\"$lembaga\">";
     echo "<input type=\"hidden\" name=\"deskripsi\" value=\"$deskripsi\">";
     echo "<input type=\"hidden\" name=\"untuk\" value=\"$untuk\">";
     echo "<input type=\"hidden\" name=\"waktu\" value=\"$waktu\">";
     echo "<input type=\"hidden\" name=\"kelas\" value=\"$kelas\">";

     echo "</td></tr>";

echo "<td></td><td><input type=\"submit\" class=\"pure-button pure-button-primary\" name=\"submit\" value=\"Kerjakan soal\">";
echo "</form>";
echo "</td></tr></table>";
?>
</body>
</html>
