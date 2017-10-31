<html>
<Head>
<title>Update perbaikan soal</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$file      =$_POST['file'];
$status    =$_POST['status'];
$untuk     =$_POST['untuk'];
$keterangan=$_POST['keterangan'];
$materi    =$_POST['materi'];
$jumlahsoal=$_POST['jumlahsoal'];
$disajikan =$_POST['disajikan'];
$opsi      =$_POST['opsi'];
$metode    =$_POST['metode'];
$KKM       =$_POST['KKM'];
$password1 =$_POST['password1'];
$password2 =$_POST['password2'];
$waktu     =$_POST['waktu'];

include ("../koneksi.inc.php");

if ($password1==$password2)
{

$query_update_porfile_siswa=mysql_query("update user set status='$status', untuk='$untuk', keterangan='$keterangan', materi='$materi', jumlahsoal='$jumlahsoal', disajikan='$disajikan', opsi='$opsi', metode='$metode', KKM='$KKM', password='$password1', waktu='$waktu' where file='$file'", $koneksi) or die (mysql_error());
}
else
{
	echo "Password tidak sama...!!!, silahkan klik <b>back<b>... ";
}

?>
</body>
</html>
