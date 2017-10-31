<html>
<Head>
<title>Tes Online</title>
<hr>
<font color=brown>
</head>

<body background="../images/back3.jpg">

<?php
$file =$HTTP_GET_VARS['file'];
$id   =$HTTP_GET_VARS['id'];

include ("koneksi.inc");

$query=mysql_query("delete from $file where id=$id",$koneksi);
echo "<br>record sudah di hapus ....";
?>
</body>
</html>
