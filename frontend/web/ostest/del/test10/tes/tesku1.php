<html>
<Head>
<basefont face="arial" size="2">
<title>Buat table tes online</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$nama      =$HTTP_POST_VARS['nama'];
$userid    =$HTTP_POST_VARS['userid'];
$lembaga   =$HTTP_POST_VARS['lembaga'];
$status    =$HTTP_POST_VARS['status'];
$untuk     =$HTTP_POST_VARS['untuk'];
$keterangan=$HTTP_POST_VARS['keterangan'];
$materi    =$HTTP_POST_VARS['materi'];
$jumlahsoal=$HTTP_POST_VARS['jumlahsoal'];
$disajikan =$HTTP_POST_VARS['disajikan'];
$opsi      =$HTTP_POST_VARS['opsi'];
$metode    =$HTTP_POST_VARS['metode'];
$waktu     =$HTTP_POST_VARS['waktu'];
$password1 =$HTTP_POST_VARS['password1'];
$password2 =$HTTP_POST_VARS['password2'];

echo "userid $iserid   nama = $nama   lembaga  = $lembaga";
include ("koneksi.inc");

if ($password1==$password2)
{
   $queri=mysql_query("select * from user",$koneksi);
   $queri2=mysql_query("select id from user order by id desc limit 1",$koneksi);
   while ($row=mysql_fetch_array($queri2))
   { 
      $numfile=$row['id'];
   }
   $numfile++;
   $file=soal."_".$numfile;
   $query=mysql_query ("insert into user values (' ','$file','$nama','$userid','$lembaga','$status','$untuk','$keterangan','$materi','$jumlahsoal','$disajikan','$opsi','$metode','$password1','$waktu')", $koneksi);
   $buatfile="CREATE TABLE $file (
   id int(5) NOT NULL auto_increment,
   soal text NOT NULL,
   opsia varchar(200) NOT NULL default '',
   opsib varchar(200) NOT NULL default '',
   opsic varchar(200) NOT NULL default '',
   opsid varchar(200) NOT NULL default '',
   opsie varchar(200) NOT NULL default '',
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
   ) TYPE=MyISAM";
   $hasil = mysql_query($buatfile);
   echo "<hr><form method=\"POST\" action=\"tesku2.php\">";
   echo "Mulai menginput Soal ? <br>";
   echo "<input type=hidden name=file value=$file>";
   echo "<input type=hidden name=pass value=$pass>";
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
