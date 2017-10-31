<html>
<head>
<basefont face="arial" size="2">
<title>Wirawan Test</title>
<hr>
</head>

<body background="../images/back3.jpg">

<?php
$file      =$_POST['file'];
$id        =$_POST['id'];
$soal      =$_POST['soal'];
$opsia     =$_POST['opsia'];
$opsib     =$_POST['opsib'];
$opsic     =$_POST['opsic'];
$opsid     =$_POST['opsid'];
$opsie     =$_POST['opsie'];
$kunci     =$_POST['kunci'];
$pass      =$_POST['pass'];

include ("../koneksi.inc.php");


$update=mysql_query ("update $file set soal='$soal',opsia='$opsia',opsib='$opsib',opsic='$opsic',opsic='$opsic',opsid='$opsid',opsie='$opsie',kunci='$kunci' where id='$id'", $koneksi);
echo "Perbaikan soal telah di update";

echo "<hr><form method=\"POST\" action=\"tesku9a.php\">";
echo "Perbaiki butir soal lain ? <br>";
echo "<input type=hidden name=file value=$file>";
echo "<input type=hidden name=pass value=$pass>";
echo "<input type=\"submit\" name=\"submit\" value=\"Ya\">";
echo "&nbsp <input type=\"reset\" name=\"reset\" value=\"Tidak\">";
echo "</form>";
?>
<hr>
</body>
</html>
