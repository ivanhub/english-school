<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table2.css" />
<title>Lembar Registrasi tes Online</title>
</head>

<body background="/onlinetest/images/back3.jpg">

<?php
$userid   =$_GET['userid'];
$nama     =$_GET['nama'];
include ("../koneksi.inc.php");
$query=mysql_query("select * from guru where userid='$userid'",$koneksi);
while ($row=mysql_fetch_array($query))
{
	$lembaga=$row["lembaga"];
}
echo "<form method=\"post\" action=\"buatsoal2.php\">";
echo "<table>";
     echo "<tr><th colspan=2><center>MEMBUAT SOAL BARU</center></th</tr>";
     echo "<tr><td>Nama</td>";
     echo "<td>$nama</td></tr>";
     echo "<tr><td>User ID</td>";
     echo "<td>$userid</td></tr>";
     echo "<tr><td>Lembaga</td>";
     echo "<td>$lembaga</td></tr>";
     echo "<tr><td>Materi / Mata pelajaran / Kuliah</td>";
     echo "<td><input type=\"text\" name=\"materi\" size=\"30\"></td></tr>";
     echo "<tr><td>Status";
     echo "<td><select name=\"status\">";
          echo "<option value=\"Guru\">Guru</option>";
          echo "<option value=\"Dosen\">Dosen</option>";
          echo "<option value=\"Lain-lain\">Lain-lain</option>";
     echo "</select>";
     echo " Tes dibuat untuk :";
     echo "<select name=\"untuk\">";
          echo "<option value=\"Lomba\">Lomba</option>";
          echo "<option value=\"Tryout\">Tryout</option>";
          echo "<option value=\"Ujian Akhir\">Ujian Akhir</option>";
          echo "<option value=\"Ujian Akhir Semester\">Ujian Akhir Semester</option>";
          echo "<option value=\"Ujian Tengah Semester\">Ujian Tengah Semester</option>";
          echo "<option value=\"Ujian Perbaikan\">Ujian Perbaikan</option>";
          echo "<option value=\"Ujian Harian\">Ujian Harian</option>";
          echo "<option value=\"Latihan\">Latihan</option>";
          echo "<option value=\"Angketdiri\">Penilaian Diri</option>";
          echo "<option value=\"Angketteman\">Penilaian Teman</option>";
     echo "</select>";
     echo "<tr><td>Keterangan tambahan</td>";
     echo "<td><input type=\"text\" name=\"keterangan\" size=\"60\" value=\"Siswa kelas 7\"></td></tr>";
     echo "<tr><td>Jumlah soal yang akan di input</td>";
     echo "<td><input type=\"text\" name=\"jumlahsoal\" size=\"3\">";
     echo "--- disajikan : ";
     echo " <input type=\"text\" name=\"disajikan\" size=\"3\">";
     echo "--- Waktu / Lama mengerjakan soal : ";
     echo " <input type=\"text\" name=\"waktu\" size=\"3\">";
     echo " Menit </td></tr>";
     echo "<tr><td>Jumlah pilihan</td>";
     echo "<td><input type=radio name=\"opsi\" value=\"2\">2 ";
     echo "<input type=radio name=\"opsi\" value=\"3\">3 ";
     echo "<input type=radio name=\"opsi\" value=\"4\">4 ";
     echo "<input type=radio name=\"opsi\" value=\"5\">5 ";
     echo "----- disajikan secara ";
     echo " <input type=radio name=\"metode\" value=\"acak\">acak ";
     echo "<input type=radio name=\"metode\" value=\"urut\">berurutan ";
     echo "</select></td></tr>";
     echo "<tr><td>Deskrispsi Soal ";
     echo "</td><td><input type=radio name=\"deskripsi\" value=\"lengkap\">di input secara lengkap ";
     echo "<input type=radio name=\"deskripsi\" value=\"ljk\">hanya LJK saja ";
     echo "</select></td></tr>";
     echo "<tr><td>KKM</td>";
     echo "<td><input type=\"text\" name=\"kkm\" size=\"3\">";
     echo "<tr><td>Password untuk mengerjakan soal</td>";
     echo "<td><input type=\"password\" name=\"password1\" size=\"20\"></td></tr>";
     echo "<tr><td>Ketik Ulang Password</td>";
     echo "<td><input type=\"password\" name=\"password2\" size=\"20\"></td></tr>";
     echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\" size=\"12\">";
     echo "<input type=\"hidden\" name=\"nama\" value=\"$nama\" size=\"40\">";
     echo "<input type=\"hidden\" name=\"lembaga\" value=\"$lembaga\" size=\"40\">";
     
echo "</table>";
echo "<input type=\"submit\" name=\"submit\" value=\"Simpan\">";
echo "</form>";
?>
</body>
</html>
