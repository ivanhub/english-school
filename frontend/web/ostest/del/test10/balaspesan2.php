<body background="images/back3.jpg">
<?php
$userid  =$_POST['kepada'];
$dari    =$_POST['dari'];
$komentar=$_POST['komentar'];
if (strstr($komentar,'<'))
{
   echo "Tidak diperkenankan menggunakan tag html";
   echo "Klik <b><i>Back</i></n> untuk mengulangi";
   exit;
}
if ($komentar==" " or $pass==" " or $nama==" ")
{
   echo "tidak boleh kosong";
   exit;
}
include("koneksi.inc.php");

$query=mysql_query ("insert into testimony values ('$kepada', '$dari', sysdate(),'$komentar')", $koneksi);
echo "<br>Terima kasih....!";
include ("footer.php");
?>
</body>

