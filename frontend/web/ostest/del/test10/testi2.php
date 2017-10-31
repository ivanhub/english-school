<body background="images/back3.jpg">
<?php
$userid  =$_POST['userid'];
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
include("koneksi.inc");

$query=mysql_query ("insert into testimony values ('$userid', '$dari', sysdate(),'$komentar')", $koneksi);
echo "<br>Terima kasih....!";
include ("footer.php");
?>
</body>

