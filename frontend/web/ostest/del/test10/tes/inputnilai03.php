<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">

<title>Wirawan Test</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$kelas   =$_GET['kelas'];
$kode    =$_GET['kode'];
$userid  =$_GET['userid'];
$password=$_GET['password'];
include ("../koneksi.inc.php");

$query=mysql_query("select * from siswa where userid = '$userid'",$koneksi);
while ($row=mysql_fetch_array($query))
{
    $nama=$row["nama"];
}

echo "<form method=\"get\" action=\"inputnilai04.php\">";
echo "<table>";
echo "<tr><td>User ID</td><td>$userid</td></tr>";
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Kelas</td><td>$kelas</td></tr>";
echo "<tr><td>Soal</td><td>$kode</td></tr>";
echo "<tr><td>Nilai</td><td><input type=\"text\" name=\"nilai\" size=\"2\"></td></tr>";

echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\">";
echo "<input type=\"hidden\" name=\"nama\" value=\"$nama\">";
echo "<input type=\"hidden\" name=\"kelas\" value=\"$kelas\">";
echo "<input type=\"hidden\" name=\"kode\" value=\"$kode\">";

echo "<tr><td></td><td><input type=\"submit\" name=\"submit\" value=\"Masukkan\"></td></tr>";
echo "</table>";
?>
</body>
</html>
