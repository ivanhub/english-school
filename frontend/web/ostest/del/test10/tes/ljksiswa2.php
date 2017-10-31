<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" />
<title>WIRAWAN TEST</title>

<?php
$file   =$_POST['kodesoal'];
$userid =$_POST['userid'];

include ("../koneksi.inc.php");

$queri2=mysql_query("select * from siswa where userid='$userid'",$koneksi);
while ($row=mysql_fetch_array($queri2))
{
   $nama=$row["nama"];
}
$nama=stripcslashes($nama);

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
   $password=$row["password"];
}

$query5=mysql_query("select * from hasil where userid='$userid' and file='$file'",$koneksi);
$pernah=mysql_num_rows($query5);
if ($pernah>0)
{
	echo "$nama, anda telah mengikuti tes $materi ini";
	exit;
}

$query=mysql_query("select * from $file limit 0,$disajikan",$koneksi);

$jumlah=mysql_num_rows($query);

echo "<form name=\"ljkform\" method=\"post\" action=\"updatejawaban.php\">";

$mulai=time();
echo "<input type=hidden name=mulai value=$mulai>";

echo "<table>";
     echo "<tr><td>User ID</td>";
     echo "<td><b>$userid</b></td></tr>";
     echo "<tr><td>Nama Peserta</td>";
     echo "<td><b>$nama</b></td></tr>";
     echo "<tr><td>Materi Ujian</td>";
     echo "<td>$materi</td></tr>";
     echo "<tr><td>Jenis Tes</td>";
     echo "<td>$untuk</td>";
     echo "<tr><td>Guru</td>";
     echo "<td>$guru</td>";
     echo "<tr><td>Jumlah soal</td>";
     echo "<td>$disajikan</td></tr>";
     echo "<tr><td>Waktu</td>";
     echo "<td>$waktu menit</td></tr>";
echo "</table><hr>";

echo "<input type=\"hidden\" name=\"nama\" value=\"$nama\">";
echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\">";
echo "<input type=\"hidden\" name=\"vstatus\" value=\"$status\">";
echo "<input type=\"hidden\" name=\"vemail\" value=\"$email\">";
echo "<input type=\"hidden\" name=\"vumur\" value=\"$umur\">";
echo "<input type=\"hidden\" name=\"vfile\" value=\"$file\">";


$no=1;
echo "<table border=\"1\" size=80%>"; 
echo "<tr><th>No</th><th>A</th><th>B</th><th>C</th>";
if ($opsi>3)
{
   echo "<th>D</th>";
}
if ($opsi>4)
{
   echo "<th>E</th>";
}
echo "</tr>";
while ($row=mysql_fetch_array($query))
{
          echo "<tr><td valign=\"top\" width=\"25\"><b>";
          $ary=$row["id"];
          $jawab="jwb[$ary]";       
          echo "$no";
          $no++;
          echo "</b>";
          echo "</td><td>";
          echo "<input type=\"radio\" name=$jawab value=\"a\">";

	  echo "</td><td>";
          echo "<input type=\"radio\" name=$jawab value=\"b\">";

	  echo "</td><td>";
          echo "<input type=\"radio\" name=$jawab value=\"c\">";

          if ($opsi>3)
          {
  	     echo "</td><td>";
             echo "<input type=\"radio\" name=$jawab value=\"d\">";
          }
          if ($opsi>4)
          {
  	     echo "</td><td>";
             echo "<input type=\"radio\" name=$jawab value=\"e\">";
          }
          echo "</td></tr>";
}
echo "</table>";

echo "<br><input type=\"submit\" name=\"submit\" value=\"selesai\">";
echo "</form>";
?>
</body>
</html>
