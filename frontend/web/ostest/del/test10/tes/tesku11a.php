<html>
<Head>
<title>Wirawan Test</title>
<hr>
</head>

<body background="../images/back3.jpg">

<?php
$file   =$_POST['file'];
$pass   =$_POST['pass'];

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
    echo "<a href=\"tesku4.php\">Kembali</a>";
    exit;
}

$query=mysql_query("select * from $file order by id",$koneksi);


$jumlah=mysql_num_rows($query);

$mulai=time();
echo "<input type=hidden name=mulai value=$mulai>";

echo "<table>";
     echo "<tr><td>Materi Ujian</td>";
     echo "<td><b>$materi</b></td></tr>";
     echo "<tr><td>Jenis Tes</td>";
     echo "<td><b>$untuk</b></td>";
     echo "<tr><td>Pengajar</td>";
     echo "<td><b>$guru</b></td>";
echo "</table><hr>";

echo "<input type=\"hidden\" name=\"vfile\" value=\"$file\">";

echo "<table border=\"0\">";
$no=1;
while ($row=mysql_fetch_array($query))
{
          echo "<tr><td valign=\"top\" width=\"25\"><b>";
          $ary=$row["id"];
          $jawab="jwb[$ary]";
          echo "$no";
          $no++;
          echo "</b>";
          echo "</td><td>";
          echo $row["soal"];
          echo "</td></tr><tr><td></td><td>";
          echo "a. ";
          echo $row["opsia"];
          echo "<br>";
          echo "b. ";
          echo $row["opsib"];
          echo "<br>";
          if ($opsi>3)
          {
             echo "c. ";
             echo $row["opsic"];
             echo "<br>";
	  }
          if ($opsi>3)
          {
             echo "d. ";
             echo $row["opsid"];
             echo "<br>";
          }
          if ($opsi>4)
          {
             echo "e. ";
             echo $row["opsie"];
             echo "</td></tr>";
          }
}
echo "</table>";
?>
</body>
</html>
