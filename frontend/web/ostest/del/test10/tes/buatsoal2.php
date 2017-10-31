<html>
<Head>
<basefont face="arial" size="2">
<title>Buat table Wirawan Test</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$nama      =$_POST['nama'];
$userid    =$_POST['userid'];
$lembaga   =$_POST['lembaga'];
$status    =$_POST['status'];
$untuk     =$_POST['untuk'];
$keterangan=$_POST['keterangan'];
$materi    =$_POST['materi'];
$jumlahsoal=$_POST['jumlahsoal'];
$disajikan =$_POST['disajikan'];
$opsi      =$_POST['opsi'];
$metode    =$_POST['metode'];
$waktu     =$_POST['waktu'];
$deskripsi =$_POST['deskripsi'];
$kkm       =$_POST['kkm'];
$password1 =$_POST['password1'];
$password2 =$_POST['password2'];
$pass      =$password1;

echo "userid $userid   nama = $nama   lembaga  = $lembaga";
include ("../koneksi.inc.php");

if ($password1==$password2)
{
   $queri=mysql_query("select * from user",$koneksi);
   $queri2=mysql_query("select id from user order by id desc limit 1",$koneksi);
   while ($row=mysql_fetch_array($queri2))
   { 
      $numfile=$row['id'];
   }
   $numfile++;
   $file="soal"."_".$numfile;
   $query=mysql_query ("insert into user values (' ','$file','$nama','$userid','$lembaga','$status','$untuk','$keterangan','$materi','$jumlahsoal','$disajikan','$opsi','$metode','$password1','$waktu','$deskripsi','$kkm','','','','','')", $koneksi);
   $buatfile="CREATE TABLE $file (
   id int(5) NOT NULL auto_increment,
   soal text NOT NULL,
   opsia text NOT NULL,
   opsib text NOT NULL,
   opsic text NOT NULL,
   opsid text NOT NULL,
   opsie text NOT NULL,
   kunci char(1) NOT NULL default '',
   benar int(5) NOT NULL,
   salah int(5) NOT NULL,
   sisbenar text collate utf8_unicode_ci NOT NULL,
   sissalah text collate utf8_unicode_ci NOT NULL,
   ja int(6) NOT NULL,
   jb int(6) NOT NULL,
   jc int(6) NOT NULL,
   jd int(6) NOT NULL,
   je int(6) NOT NULL,
   jk int(6) NOT NULL,

   PRIMARY KEY  (id)
   ) ENGINE=MyISAM";

   $hasil = mysql_query($buatfile);

   if ($deskripsi=="ljk")
   {
      echo "<hr><form method=\"POST\" action=\"ljk.php\">";
   }
   else
   {
      echo "<hr><form method=\"POST\" action=\"tambahbutirsoal.php\">";
   }
   echo "Mulai menginput Soal ? <br>";
   echo "<input type=\"hidden\" name=\"file\" value=$file>";
   echo "<input type=\"hidden\" name=\"pass\" value=$pass>";
   echo "<input type=\"submit\" name=\"submit\" value=\"Ya\">";
   echo "&nbsp <input type=\"reset\" name=\"reset\" value=\"Tidak\">";
   echo "</form>";
}
else
{
   echo "password yang anda ketik harus sama";
   echo "<a href=\"index.php\">Kembali</a>";
}
//}
?>
</body>
</html>
