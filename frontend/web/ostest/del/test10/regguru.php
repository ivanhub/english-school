<html>
<Head>
<basefont face="arial" size="2">
<title>Wirawan Test - Registrasi Guru</title>
<hr>
</head>
<body background="images/back3.jpg">
<?php
$nama     =$_POST['nama'];
$jk       =$_POST['jk'];
$lembaga  =$_POST['lembaga'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];

include ("koneksi.inc.php");
$query1=mysql_query("select * from guru where nama='$nama'",$koneksi);
$jum=mysql_num_rows($query1);
if ($jum>0)
{
   echo "Anda telah mendaftar sebelumnya, ....!";
   echo "<br>Klik \"back\" untuk merevisi....";
   exit;
}

if ($password1!=$password2)
{
   echo "password yang anda ketik harus sama";
   echo "<a href=\"index.php\">Kembali</a>";
   exit;
}
$query2=mysql_query("select id from guru order by id desc limit 1",$koneksi);
while ($row=mysql_fetch_array($query2))
$noid=$row['id'];
$noid++;
$userid=guru.$noid;
$query3=mysql_query("insert into guru values (' ','$nama','$jk','$lembaga','$password1','$userid',' ',' ',' ',' ',' ',' ',' ',' ')", $koneksi);
echo "<br>Selamat... Anda sekarang sudah terdaftar";
echo "<br>Catat/ingat informasi ini :"; 
echo "<br>Nama :<b>$nama</b>";
echo "<br>User ID: <b>$userid<b>";
echo "<br>Ingat selalu password anda.......!";
echo "<hr>Anda bisa segera login dan memanfaatkan konten situs ini, namun kami sarankan anda melengkapi profile anda";

?>
</body>
</html>
