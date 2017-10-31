<html>
<Head>
<title>WIRAWAN TEST</title>
<hr>
<font color=brown>
</head>

<body background="../images/back3.jpg">

<?php
$file =$_GET['file'];
$id   =$_GET['id'];

include ("../koneksi.inc.php");

$query=mysql_query("delete from $file where id=$id",$koneksi);
echo "<br>record sudah di hapus ....";
?>
</body>
</html>
