<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" />
<title>Tes Online</title>
</head>

<body background="../images/back3.jpg">
<big>

<?php

include ("../koneksi.inc.php");
$userid =$_GET['userid'];
$kelas  =$_GET['kelas'];
$kode   =$_GET['kode'];
$nilai  =$_GET['nilai'];
$password=$_GET['password'];

$query5=mysql_query("select * from hasil where userid='$userid' and file='$kode'",$koneksi);
$pernah=mysql_num_rows($query5);
if ($pernah>0)
{
	echo "$nama, anda telah mengikuti tes ini";
	echo "<a href=\"inputnilai02.php?kelas=$kelas&kode=$kode\"/>Silahkan klik disini..</a>";
	exit;
}
$query=mysql_query ("insert into hasil values (' ',sysdate(),'$kode','','$kelas','','','$nama','$userid','','','$nilai','')", $koneksi);

echo "<br>Nilai Telah Masuk";
echo "<a href=\"inputnilai02.php?kelas=$kelas&kode=$kode&password=$password\"/>Silahkan klik disini..</a>";
?>
</big>
</body>
</html>

</body>
</html>
