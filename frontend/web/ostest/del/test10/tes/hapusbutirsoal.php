<html>
<Head>
<title>Tes Online</title>
<hr>
<font color=brown>
</head>

<body background="../images/back3.jpg">

<?php

$file =$_GET['file'];
$id   =$_GET['id'];
$pass =$_POST['pass'];

include ("../koneksi.inc.php");

$query=mysql_query("select * from $file where id=$id",$koneksi);
while ($row=mysql_fetch_array($query))
{
	$soal=$row["soal"];
	$opsia=$row["opsia"];
	$opsib=$row["opsib"];
	$opsic=$row["opsic"];
	$opsid=$row["opsid"];
	$opsie=$row["opsie"];
	$kunci=$row["kunci"];
}
echo "<table border=0>";
echo "<tr><td>$id. </td><td>$soal</td></tr>";
echo "<tr><td></td><td>a. $opsia<br>b. $opsib<br>c. $opsic<br>d. $opsid<br>e. $opsie</td></tr>";
echo "</table>";
echo "<a href=\"hapusbutirsoal2.php?file=$file&id=$id\">| hapus |</a>";
echo "<a href=\"../bawah.php\">| batal |</a>";
?>
</body>
</html>
