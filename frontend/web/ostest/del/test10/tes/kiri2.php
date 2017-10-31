<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<img src="../images/ceds.jpg" width="100%" height="95">
<?php
$userid =$_GET['userid'];
$nama   =$_GET['nama'];
$waktu  =$_GET['waktu'];
$lembaga=$_GET['lembaga'];

?>
<SCRIPT>
var TimeOver = true

function getJam(Tanggal)
{
   Jam =  (Tanggal.getHours() < 10) ? "0"  + Tanggal.getHours()  + ":" : Tanggal.getHours() + ":"
   Jam += (Tanggal.getMinutes() < 10) ? "0" + Tanggal.getMinutes() + ":" : Tanggal.getMinutes() + ":"
   Jam += (Tanggal.getSeconds() < 10) ? "0" + Tanggal.getSeconds() : Tanggal.getSeconds()
   return Jam
}
function dispJam()
{
   TglCur = new Date()
   document.User.Watch.value = getJam(TglCur)
   document.User.TimeTaken.value = getWaktu(TglCur,TglStart)
   if ((Tgl.getTime() - TglCur.getTime()) <= 0)
   {
      if(TimeOver) TimeOverWarn()
      document.User.TimeLeft.value = "Habis"
   }
   else
   {
		document.User.TimeLeft.value = getWaktu(Tgl,TglCur)
    	setTimeout("dispJam()",1000)
    }
}
function getWaktu(Tgl,TglCur)
{
   TmLf = Tgl.getTime() - TglCur.getTime()
   TmLfHours = Math.floor(TmLf/3600000) 
   TmLfMinutes = Math.floor((TmLf%3600000)/60000)
   TmLfSeconds = Math.round((TmLf%60000)/1000)
   TmLfStr = (TmLfHours < 10) ? "0" + TmLfHours + ":" : TmLfHours + ":"
   TmLfStr += (TmLfMinutes < 10) ? "0" + TmLfMinutes + ":" : TmLfMinutes + ":"
   TmLfStr += (TmLfSeconds < 10) ? "0" + TmLfSeconds : TmLfSeconds
   return TmLfStr
}
function TimeOverWarn()
{
   alert("\n Maaf <?=$nama?> ....\n Waktu Anda Habis")
//   InputHidden()
   TimeOver = true
   return true
}
Tanggal =  new Date()
Tgl = new Date()
TglStart = new Date()
ArrayBulan = new Array("Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember")
Tahun =  Tanggal.getYear()
TglStr = Tanggal.getDate()  + " " + ArrayBulan[Tanggal.getMonth()] + " " + Tahun
Tgl.setTime(Tgl.getTime() + <?=$waktu?> * 60 * 1000) 
</SCRIPT>

<title>CedS</title>
</head>

<BODY Background=../images/back1.jpg onLoad="dispJam()">
<?php

include ("../koneksi.inc.php");
$query1=mysql_query("select * from siswa where userid='$userid'" ,$koneksi);
$row=mysql_fetch_array($query1);
$password=$row["password"];
$lembaga=$row["lembaga"];
echo "<table border=0 width=100% background=\"../images/back5.gif\">";
echo "<tr align=center><td>";
$pic=$row["userid"];
$foto="../siswa/".$pic.".jpg";
echo "<img src=\"$foto\" height=\"110\" align=\"center\" border=0>";
echo "</tr></td>";
echo "<tr bgcolor=yellow><td align=center><font face=arial size=2>";
echo $row["nama"];
echo "<br>";
echo $row["userid"];
echo "<br>";
echo $row["lembaga"];
$nama=$row["nama"];
echo "</tr></td>";
?>
<FORM NAME=User> 
   <tr><td><font face=arial size=2 color=white><center>Sisa Waktu<br><INPUT TYPE=TEXT NAME=TimeLeft Value="" SIZE=8></td></tr>
   <tr><td><font face=arial size=2 color=white><center>Waktu<br><INPUT TYPE=TEXT NAME=TimeTaken VALUE="" SIZE=8></td></tr>
   <tr><td><font face=arial size=2 color=white><center>Sekarang Jam<br><INPUT TYPE=TEXT NAME=Watch Value="" SIZE=8></td></tr>
   <table>
</FORM>
<hr>
</body>
</html>
