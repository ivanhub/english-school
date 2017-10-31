<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="CEdS" content="_Computer for Education studies_" />
<meta name="Adi Wirawan" content="computer,education,pendidikan,sekolah,depok,tes,test,online,ujian,soal,bank,kumpulan" />
<meta name="author" content="_Adi Wirawan" />
<link rel="stylesheet" type="text/css" href="/onlinetest/styles.css" media="screen" title="CEdS (screen)" />
<link rel="stylesheet" type="text/css" href="/onlinetest/print.css" media="print" />
<title>CedS</title>
</head>

<body><div id="body">

<?php
$userid =$_GET['userid'];
$nama   =$_GET['nama'];

include ("../koneksi.inc.php");

$query=mysql_query("select * from user order by file",$koneksi);
echo "<form method=\"post\" action=\"kerjakan.php\" target=_top>";

$nama=stripcslashes($nama);

$no=1;
echo "<div id=\"avmenu2\">";
echo "<h2 class=\"hide\">Menu:</h2>";
echo "<ul>";
echo "<table>";
while ($row=mysql_fetch_array($query))
{
   $pilih="<tr bgcolor=orange><td>".$no."</td><td>".$row[1]."</td><td>".$row[8]."</td><td>".$row[4]."</td><td>".$row[2]."</td><td>".$row[6]."</tr>";

   echo "<li><a href=\"passwordsoal.php?file=$row[1]&userid=$userid&nama=$nama\" target=\"bawah\"><font face=arial size=2>$row[1]---$row[8]---$row[7]...$row[2]</a></li>";
   $no++;
}
echo "</table>";

?>
</body>
</html>
