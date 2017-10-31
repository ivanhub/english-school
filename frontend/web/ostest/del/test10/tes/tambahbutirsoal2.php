<html>
<head>
<basefont face="arial" size="2">
<title>Input soal tes online</title>
<hr>
</head>

<body background="../images/back3.jpg">

<?php

$file      =$_POST['file'];
$pass      =$_POST['pass'];
$soal      =$_POST['soal'];
$opsi1     =$_POST['opsi1'];
$opsi2     =$_POST['opsi2'];
$opsi3     =$_POST['opsi3'];
$opsi4     =$_POST['opsi4'];
$opsi5     =$_POST['opsi5'];
$kunci     =$_POST['kunci'];
include ("../koneksi.inc.php");

$queri=mysql_query("select * from user where file='$file'",$koneksi);

$quere=mysql_query("select * from $file",$koneksi);

$query=mysql_query ("insert into $file values (' ','$soal','$opsi1','$opsi2','$opsi3','$opsi4','$opsi5','$kunci','','','','','','','','','','')", $koneksi);
$jmsoal=mysql_num_rows($quere)+1;
$queru=mysql_query ("update user set jumlahsoal='$jmsoal' where file='$file'", $koneksi);
echo "<h3>Jumlah soal yang telah di entry : $jmsoal records</h3>";


echo "<hr><form method=\"POST\" action=\"tambahbutirsoal.php\">";
echo "Tambahkan butir soal lagi ? <br>";
echo "<input type=hidden name=file value=$file>";
echo "<input type=hidden name=pass value=$pass>";
echo "<input type=\"submit\" name=\"submit\" value=\"Ya\">";
echo "&nbsp <input type=\"reset\" name=\"reset\" value=\"Tidak\">";
echo "</form>";
?>

</body>
</html>
