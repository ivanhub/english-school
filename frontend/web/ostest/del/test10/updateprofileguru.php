<html>
<Head>
<basefont face="arial" size="2">
<title>Update Profile Guru</title>
<hr>
</head>

<body background="images/back3.jpg">
<?php
$userid   =$_POST['userid'];
$nama     =$_POST['nama'];
$jk       =$_POST['jk'];
$lembaga  =$_POST['lembaga'];
$alamat   =$_POST['alamat'];
$kelurahan=$_POST['kelurahan'];
$kecamatan=$_POST['kecamatan'];
$kota     =$_POST['kota'];
$kodepos  =$_POST['kodepos'];
$telepon  =$_POST['telepon'];
$kotalahir=$_POST['kotalahir'];
$tgllahir =$_POST['tgllahir'];
$password1=$_POST['password1'];

include ("koneksi.inc.php");


$query_update_porfile_guru=mysql_query("update guru set nama='$nama', jk='$jk', lembaga='$lembaga', alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan', kota='$kota', kodepos='$kodepos', telepon='$telepon', kotalahir='$kotalahir', tgllahir='$tgllahir', password='$password1' where userid='$userid'", $koneksi) or die (mysql_error());

?>
</body>
</html>
