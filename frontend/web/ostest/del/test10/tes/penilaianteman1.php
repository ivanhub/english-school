<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table1.css" />
<title>Wirawan Test</title>

<?php
$file   =$_GET['file'];
$pass   =$_GET['pass'];
$userid =$_GET['userid'];
$nama   =$_GET['nama'];
$waktu  =$_GET['waktu'];
$kelas  =$_GET['kelas'];
$untuk  =$_GET['untuk'];

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

function disableEnterKey(e)
{
     var key;      
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox      

     return (key != 13);
}
</script>

<hr>
</head>

<body onLoad="timer()" background="../images/back3.jpg">

<?php
include ("../koneksi.inc.php");

$query6=mysql_query("select * from siswa where userid='$userid'",$koneksi);
while ($row6=mysql_fetch_array($query6))
{
	$kelas=$row6["kelas"];
}

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

//if ($metode=="acak")
//{
//    $query=mysql_query("select * from $file order by RAND() limit 0,$disajikan",$koneksi);
//}
//else
//{
//    $query=mysql_query("select * from $file limit 0,$disajikan",$koneksi);
//}

echo "<form name=\"ljkform\" method=\"post\" action=\"updatejawaban.php\">";

$mulai=time();
echo "<input type=hidden name=mulai value=$mulai>";

echo "<table>";
     echo "<tr><td>User ID</td>";
     echo "<td><b>$userid</b></td></tr>";
     echo "<tr><td>Nama Peserta / Kelas</td>";
     echo "<td><b>$nama / $kelas</b></td></tr>";
     echo "<tr><td>Materi Ujian</td>";
     echo "<td>$materi</td></tr>";
     echo "<tr><td>Jenis Tes</td>";
     echo "<td>$untuk</td>";
     echo "<tr><td>Pengajar</td>";
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

$query7=mysql_query("select * from siswa where kelas='$kelas'",$koneksi);

$nom=1;
while ($row7=mysql_fetch_array($query7))
{
    $namasiswa=$row7["nama"];
    echo "$nom. Nama : $namasiswa";
    $nom++;
    $no=1;
    $query=mysql_query("select * from $file limit 0,$disajikan",$koneksi);
    $jumlah=mysql_num_rows($query);
    while ($row=mysql_fetch_array($query))
    {
	  echo "<table border=\"1\" size=80%>"; 
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
          echo "<input type=\"radio\" name=$jawab value=\"a\" onKeyPress=\"return disableEnterKey(event)\">";
	  echo "</td><td>";
          echo $row["opsia"];
	  echo "</td></tr>";

	  echo "<tr><td></td><td>";
          echo "<input type=\"radio\" name=$jawab value=\"b\" onKeyPress=\"return disableEnterKey(event)\">";
	  echo "</td><td>";
          echo $row["opsib"];
	  echo "</td></tr>";

          if ($opsi>2)
          {
   	     echo "<tr><td></td><td>";
             echo "<input type=\"radio\" name=$jawab value=\"c\" onKeyPress=\"return disableEnterKey(event)\">";
	     echo "</td><td>";
             echo $row["opsic"];
	     echo "</td></tr>";
          }
          if ($opsi>3)
          {
  	     echo "<tr><td></td><td>";
             echo "<input type=\"radio\" name=$jawab value=\"d\" onKeyPress=\"return disableEnterKey(event)\">";
	     echo "</td><td>";
             echo $row["opsid"];
	     echo "</td></tr>";
          }
          if ($opsi>4)
          {
  	     echo "<tr><td></td><td>";
             echo "<input type=\"radio\" name=$jawab value=\"e\" onKeyPress=\"return disableEnterKey(event)\">";
	     echo "</td><td>";
             echo $row["opsie"];
             echo "</td></tr>";
          }
      echo "</table>";
      }
}
echo "<br><input type=\"submit\" name=\"submit\" value=\"selesai\">";
echo "</form>";
}
?>
</body>
</html>
