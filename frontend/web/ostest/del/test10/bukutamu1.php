<body background="images/back3.jpg">
<?php
$tanggal  =$_POST['tanggal'];
$nama     =$_POST['nama'];
$email    =$_POST['email'];
$komentar =$_POST['komentar'];
$polaemail=".+@.+\..+$";
if (!eregi($polaemail,$email))
{
   echo "$nama ($email)..., isi email dgn benar";
   exit;
}
if (strstr($komentar,'<'))
{
   echo "Tidak diperkenankan menggunakan tag html";
   echo "Klik <b><i>Back</i></n> untuk mengulangi";
   exit;
}
if ($komentar==" " or $email==" " or $nama==" ")
{
   echo "tidak boleh kosong";
   exit;
}
include("koneksi.inc.php");
$query=mysql_query ("insert into bukutamu values (sysdate(),'$nama','$email','$komentar')", $koneksi);
echo "<br>Terima kasih....!";
include ("bukutamu.php");
include ("footer.php");
?>
</body>

