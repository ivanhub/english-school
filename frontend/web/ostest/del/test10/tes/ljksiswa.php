
<?php
#$file   =$_GET['file'];
#$pass   =$_GET['pass'];
#$userid =$_GET['userid'];
#$nama   =$_GET['nama'];
#$waktu  =$_GET['waktu'];

$nama=stripcslashes($nama);

?>
<script type="text/javascript"> 

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

</script>

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

<body onLoad="timer()">

<?php
include ("../koneksi.inc.php");

$queri=mysql_query("select * from user where file='$file'",$koneksi);

while ($row=mysql_fetch_array($queri))
{

   $guru=$row["nama"];
   $lembaga=$row["lembaga"];
#   $alamat=$row["alamat"];
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

echo "<form name=\"ljkform\" method=\"post\" action=\"updatejawaban.php\">";

$mulai=time();
echo "<input type=hidden name=mulai value=$mulai>";

echo "<table  class=\"pure-table pure-table-horizontal\">";
     echo "<tbody><tr><td>User ID</td>";
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
     echo "<td>$waktu menit</td></tr></tbody>";
echo "</table><hr>";

echo "<input type=\"hidden\" name=\"nama\" value=\"$nama\">";
echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\">";
#echo "<input type=\"hidden\" name=\"vstatus\" value=\"$status\">";
#echo "<input type=\"hidden\" name=\"vemail\" value=\"$email\">";
#echo "<input type=\"hidden\" name=\"vumur\" value=\"$umur\">";
echo "<input type=\"hidden\" name=\"vfile\" value=\"$file\">";


$no=1;
echo "<table class=\"pure-table pure-table-horizontal\">"; 
echo "<thead><tr><th>No</th><th>A</th><th>B</th><th>C</th>";
if ($opsi>3)
{
   echo "<th>D</th>";
}
if ($opsi>4)
{
   echo "<th>E</th>";
}
echo "</tr></thead><tbody>";
while ($row=mysql_fetch_array($query))
{
          echo "<tr><td valign=\"top\" width=\"25\"><b>";
          $ary=$row["id"];
          $jawab="jwb[$ary]";       
          echo "$no";
          $no++;
          echo "</b>";
          echo "</td><td bgcolor=\"#FF0000\">";
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
echo "<tbody></table>";

echo "<br><input type=\"submit\"  class=\"pure-button pure-button-primary\" name=\"submit\" value=\"selesai\">";
echo "</form>";
}
//}
?>
