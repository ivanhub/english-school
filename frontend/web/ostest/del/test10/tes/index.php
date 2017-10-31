<html>
<Head>
<basefont face="arial" size="2" color=brown>
<title>Lembar Registrasi tes Online</title>
<hr>
<h1>Registrasi pembuatan soal online</h1>
</head>

<body background="../back1.jpg">

<?php

include ("../koneksi.inc.php");

echo "<form method=\"post\" action=\"tesku1.php\">";
echo "<table>";
     echo "<tr><td>Nama</td>";
     echo "<td><input type=\"text\" name=\"nama\" size=\"40\"></td></tr>";
     echo "<tr><td>Email</td>";
     echo "<td><input type=\"text\" name=\"email\" size=\"50\"></td></tr>";
     echo "<tr><td>Lembaga</td>";
     echo "<td><input type=\"text\" name=\"lembaga\" size=\"50\"></td></tr>";
     echo "<tr>";
         echo "<td>Alamat lembaga</td>";
         echo "<td><textarea name=\"alamat\" rows=3 cols=40></textarea></td>";
     echo "</tr>";
     echo "<tr><td>Status</td>";
     echo "<td><select name=\"status\">";
          echo "<option value=\"Guru\">Guru</option>";
          echo "<option value=\"Dosen\">Dosen</option>";
          echo "<option value=\"Tutor\">Tutor pada Bimbel</option>";
          echo "<option value=\"Staf\">Staf/Manajer Perusahaan</option>";
          echo "<option value=\"Orangtua\">Orang tuan</option>";
          echo "<option value=\"Lain-lain\">Lain-lain</option>";
     echo "</select>";
     echo "<tr><td>Tes dibuat untuk</td>";
     echo "<td><select name=\"untuk\">";
          echo "<option value=\"Latihan\">Latihan</option>";
          echo "<option value=\"Tes Reguler\">Tes reguler</option>";
          echo "<option value=\"Seleksi\">Seleksi</option>";
          echo "<option value=\"Tes formal\">Tes formal</option>";
          echo "<option value=\"Tes Susulan\">Tes Susulan</option>";
          echo "<option value=\"Tes Perbaikan\">Tes Perbaikan</option>";
          echo "<option value=\"Lain-lain\">Lain-lain</option>";
     echo "</select>";
     echo "<tr><td>Keterangan tambahan</td>";
     echo "<td><input type=\"text\" name=\"keterangan\" size=\"60\" value=\"Siswa kelas 1 SMP\"></td></tr>";
     echo "<tr><td>Materi / Mata pelajaran / Kuliah</td>";
     echo "<td><input type=\"text\" name=\"materi\" size=\"30\"></td></tr>";
     echo "<tr><td>Jumlah soal yang akan di input</td>";
     echo "<td><input type=\"text\" name=\"jumlahsoal\" size=\"3\"></td></tr>";
     echo "<tr><td>Jumlah soal yang disajikan</td>";
     echo "<td><input type=\"text\" name=\"disajikan\" size=\"3\"></td>";
     echo "<tr><td>Waktu / Lama mengerjakan soal</td>";
     echo "<td><input type=\"text\" name=\"waktu\" size=\"3\">";
     echo " Menit </td></tr>";
     echo "<tr><td>Jumlah pilihan</td>";
     echo "<td><input type=radio name=\"opsi\" value=\"3\">3 ";
     echo "<input type=radio name=\"opsi\" value=\"4\">4 ";
     echo "<input type=radio name=\"opsi\" value=\"5\">5 ";
     echo "<tr><td>Soal disajikan secara</td>";
     echo "<td><input type=radio name=\"metode\" value=\"acak\">acak ";
     echo "<input type=radio name=\"metode\" value=\"urut\">berurutan ";
     echo "</select>";
     echo "<tr><td>Password untuk mengerjakan soal</td>";
     echo "<td><input type=\"password\" name=\"password1\" size=\"20\"></td></tr>";
     echo "<tr><td>Ketik Ulang Password</td>";
     echo "<td><input type=\"password\" name=\"password2\" size=\"20\"></td></tr>";

echo "</table><hr>";
echo "<input type=\"submit\" name=\"subit\" value=\"Lanjutkan\">";
echo "</form>";
?>
<hr>
<center>
<font face=arial color=green size=2>
Programmer: Adi Wirawan Program dikembangkan di bawah lisensi GPL (General Public License) 2005
<br>
</font>
</center>
</body>
</html>
