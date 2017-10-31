<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table1.css" />
<title>Tes Online</title>

<?php
$file   =$HTTP_GET_VARS['file'];
$pass   =$HTTP_GET_VARS['pass'];
$userid =$HTTP_GET_VARS['userid'];
$nama   =$HTTP_GET_VARS['nama'];
$waktu  =$HTTP_GET_VARS['waktu'];

$nama=stripcslashes($nama);

?>

<script language="javascript"> 
function selesai() {
document.ljkform.submit.click();
clearTimeout(timeID);
} 
function timer() {
timeID=setTimeout("selesai()",60000*<?=$waktu?>);
}
</script>

<hr>
</head>

<body onLoad="timer()" background="../images/back3.jpg">

<?php
include ("koneksi.inc");

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
if ($pass!=$password)
{
    echo "<br><b>$nama ...!!!</b>, <br>password yang anda masukkan untuk mengikuti tes $materi salah, <br>Silahkan tanya ke <b>$guru</b> password untuk soal ini, <br>klik ";
    echo "<a href=\"tesku4.php?userid=$userid&nama=$nama\"> Kembali</a>";
}
else
{

//$polaemail=".+@.+\..+$";
//if (!eregi($polaemail,$email))
//{
//    echo "$nama ($email)..., email masukkan ini salah";
//    echo "<a href=\"tesku4.php\">Kembali</a>";
//}
//else
//{
$query5=mysql_query("select * from hasil where userid='$userid' and file='$file'",$koneksi);
$pernah=mysql_num_rows($query5);
if ($pernah>0)
{
	echo "$nama, anda telah mengikuti tes $materi ini";
	exit;
}

if ($metode=="acak")
{
    $query=mysql_query("select * from $file order by RAND() limit 0,$disajikan",$koneksi);
}
else
{
    $query=mysql_query("select * from $file limit 0,$disajikan",$koneksi);
}

$jumlah=mysql_num_rows($query);

echo "<form name=\"ljkform\" method=\"post\" action=\"tesku6.php\">";

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
while ($row=mysql_fetch_array($query))
{
echo "<table border=\"0\" size=80%>"; 
          echo "<tr><td valign=\"top\" width=\"25\"><b>";
          $ary=$row["id"];
          $jawab="jwb[$ary]";       
          echo "$no";
          $no++;
          echo "</b>";
          echo "</td><td colspan=2>";
          echo $row["soal"];
          echo "</td></tr>";
	  echo "<tr><td></td><td width=10>";
          echo "<input type=\"radio\" name=$jawab value=\"a\">";
	  echo "</td><td>";
          echo $row["opsia"];
	  echo "</td></tr>";

	  echo "<tr><td></td><td>";
          echo "<input type=\"radio\" name=$jawab value=\"b\">";
	  echo "</td><td>";
          echo $row["opsib"];
	  echo "</td></tr>";

	  echo "<tr><td></td><td>";
          echo "<input type=\"radio\" name=$jawab value=\"c\">";
	  echo "</td><td>";
          echo $row["opsic"];
	  echo "</td></tr>";
          if ($opsi>3)
          {
  	     echo "<tr><td></td><td>";
             echo "<input type=\"radio\" name=$jawab value=\"d\">";
	     echo "</td><td>";
             echo $row["opsid"];
	     echo "</td></tr>";
          }
          if ($opsi>4)
          {
  	     echo "<tr><td></td><td>";
             echo "<input type=\"radio\" name=$jawab value=\"e\">";
	     echo "</td><td>";
             echo $row["opsie"];
             echo "</td></tr>";
          }
echo "</table>";
}

echo "<br><input type=\"submit\" name=\"submit\" value=\"selesai\">";
echo "</form>";
}
//}
?>
</body>
</html>
