<html>
<Head>
<title>Wirawan Test</title>

<font color=brown>
</head>

<body background="../images/back3.jpg">

<?php
$id   =$_GET['id'];
$user2  =$_GET['userid2'];
$field  =$_GET['field'];
$cari   =$_GET['cari'];
$field2 =$_GET['field2'];
$cari2  =$_GET['cari2'];
$field3 =$_GET['field3'];
$secara =$_GET['secara'];
include ("../koneksi.inc.php");

$query=mysql_query("delete from hasil where id=$id",$koneksi);
echo "Record sudah dihapus...<br>";
include ("hasiltes2.php");

?>
</body>
</html>
