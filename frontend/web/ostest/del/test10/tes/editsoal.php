<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" />
<title>Lembar Registrasi tes Online</title>
</head>

<body background="/onlinetest/images/back3.jpg">

<?php
$userid   =$_GET['userid'];
$nama     =$_GET['nama'];
$file	  =$_GET['file'];

include ("../koneksi.inc.php");
$query=mysql_query("select * from user where file='$file'",$koneksi);
while ($row=mysql_fetch_array($query))
{
	$nama=$row["nama"];
	$lembaga=$row["lembaga"];
	$status=$row["status"];
	$untuk=$row["untuk"];
	$keterangan=$row["keterangan"];
	$materi=$row["materi"];
	$jumlahsoal=$row["jumlahsoal"];
	$disajikan=$row["disajikan"];
	$opsi=$row["opsi"];
	$metode=$row["metode"];
	$password=$row["password"];
	$waktu=$row["waktu"];
        $KKM=$row["KKM"];
}
echo "<form method=\"post\" action=\"editsoal2.php\">";
echo "<table width=100%>";
     echo "<tr><th colspan=2><center>MEMPERBAIKI OPSI SOAL: <font color=blue>$file</font></center></th</tr>";
     echo "<tr><td>Nama</td>";
     echo "<td>$nama</td></tr>";
     echo "<tr><td>User ID</td>";
     echo "<td>$userid</td></tr>";
     echo "<tr><td>Lembaga</td>";
     echo "<td>$lembaga</td></tr>";
     echo "<tr><td>Materi / Mata pelajaran / Kuliah</td>";
     echo "<td><input type=\"text\" name=\"materi\" size=\"30\" value=\"$materi\"></td></tr>";

     echo "<tr><td>Status";   
     echo "<td><select name=\"status\">";
          echo "<option value=\"Guru\">Guru</option>";
          echo "<option value=\"Dosen\">Dosen</option>";
          echo "<option value=\"Lain-lain\">Lain-lain</option>";
     echo "</select>";
     echo " Tes dibuat untuk :";

     if ($untuk=="Lomba")
     { $sela="selected"; }
     elseif ($untuk=="tryout")
     { $selb="selected"; }
     elseif ($untuk=="Ujian Akhir")
     { $selc="selected"; }
     elseif ($untuk=="Ujian Semester")
     { $seld="selected"; }
     elseif ($untuk=="Ujian Mid Semester")
     { $sele="selected"; }
     elseif ($untuk=="Ujian Perbaikan")
     { $self="selected"; }
     elseif ($untuk=="Ujian Harian")
     { $selg="selected"; }
     else
     { $selh="selected"; }

     echo "<select name=\"untuk\">";
          echo "<option value=\"Lomba\" $sela>Lomba</option>";
          echo "<option value=\"Tryout\" $selb>Tryout</option>";
          echo "<option value=\"Ujian Akhir\" $selc>Ujian Akhir</option>";
          echo "<option value=\"Ujian Akhir Semester\" $seld>Ujian Akhir Semester</option>";
          echo "<option value=\"Ujian Tengah Semester\" $sele>Ujian Tengah Semester</option>";
          echo "<option value=\"Ujian Perbaikan\" $self>Ujian Perbaikan</option>";
          echo "<option value=\"Ujian Harian\" $selg>Ujian Harian</option>";
          echo "<option value=\"Latihan\" $selh>Latihan</option>";
          echo "<option value=\"Angketdiri\" $seli>Angket Diri</option>";
          echo "<option value=\"Angketteman\" $seli>Angket Teman</option>";
     echo "</select>";
     echo "<tr><td>Keterangan tambahan</td>";
     echo "<td><input type=\"text\" name=\"keterangan\" size=\"60\" value=\"$keterangan\"></td></tr>";
     echo "<tr><td>Jumlah soal yang akan di input</td>";
     echo "<td><input type=\"text\" name=\"jumlahsoal\" size=\"3\" value=\"$jumlahsoal\">";
     echo "--- disajikan : ";
     echo " <input type=\"text\" name=\"disajikan\" size=\"3\" value=\"$disajikan\">";
     echo "--- Waktu / Lama mengerjakan soal : ";
     echo " <input type=\"text\" name=\"waktu\" size=\"3\" value=\"$waktu\">";
     echo " Menit </td></tr>";
     echo "<tr><td>Jumlah pilihan</td>";

     if ($opsi=="3")
     { $ceka="checked"; }
     elseif ($opsi=="4")
     { $cekb="checked"; }
     else
     { $cekc="checked"; }

     echo "<td><input type=radio name=\"opsi\" value=\"3\" $ceka>3";
     echo "<input type=radio name=\"opsi\" value=\"4\" $cekb>4 ";
     echo "<input type=radio name=\"opsi\" value=\"5\" $cekc>5 ";
     echo "----- disajikan secara ";

     if ($metode=="acak") { $mtda="checked"; } else { $mtdb="checked"; }

     echo " <input type=radio name=\"metode\" value=\"acak\" $mtda>acak ";
     echo "<input type=radio name=\"metode\" value=\"urut\" $mtdb>berurutan ";
     echo "</select>";
     echo "<tr><td>KKM</td>";
     echo "<td><input type=\"text\" name=\"KKM\" value=\"$KKM\" size=\"3\">";
     echo "<tr><td>Password untuk mengerjakan soal</td>";
     echo "<td><input type=\"password\" name=\"password1\" size=\"20\" value=\"$password\"></td></tr>";
     echo "<tr><td>Ketik Ulang Password</td>";
     echo "<td><input type=\"password\" name=\"password2\" size=\"20\" value=\"$password\"></td></tr>";
echo "</table>";
echo "<input type=\"hidden\" name=\"file\" value=\"$file\" size=\"9\">";
echo "<input type=\"submit\" name=\"submit\" value=\"Update\">";
echo "</form>";
?>
</body>
</html>
