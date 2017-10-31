<?php
   session_start();
   $passingvariable=$_SESSION['passingvariable'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
  <title>Wirawan Test</title>
  <link rel="stylesheet" href="css/layouts/pure-min.css">
  <link rel="stylesheet" href="css/layouts/side-menu.css">
</head>

<body>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
    <!-- Hamburger icon -->
    <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="#"><center>CEDS</center></a>


<?php
   if ($passingvariable=="session") 
   {
	$userid=$_GET['userid'];
	$pass   =$_SESSION['pass'];
   }
   else
   {
   	$userid2 =$_POST['userid'];
   	$pass2   =$_POST['pass'];
   	$userid  =strtoupper($userid2);
   	$pass    =strtoupper($pass2);
   }

   $_SESSION['pass']=$pass;

   include ("koneksi.inc.php");
   $vuserid=substr($userid,0,1);
   if ($vuserid=="A")
   {
	$file="admin";
   }
   else
   {
  	if ($vuserid=="G")
	{
		$file="guru";
	}
	else
	{
		$file="siswa";
	}
   }
   $query1=mysql_query("select * from $file where userid='$userid'" ,$koneksi);
   $jum=mysql_num_rows($query1);
   if ($jum==0)
   {
      echo " <center><b>$userid ???</b><br>User ID ini belum ada pada daftar $file...";
      echo " <a href=\"index.php\">kembali</center></a>";
     exit;
   }
   echo "      <ul>";
               $pesan=0;
               $query2=mysql_query("select * from testimony where userid='$userid'",$koneksi);
               while ($row=mysql_fetch_array($query2))
               $pesan=mysql_num_rows($query2);	
               $row=mysql_fetch_array($query1);
               $password=$row["password"];
               if ($password==$pass)
               {
	          $pic=$userid;
	          $foto="$file/".$pic.".jpg";
	          echo "<img src=\"$foto\" width=\"100%\" align=\"center\" border=\"0\"><center>";
	          echo $row["nama"];
	          echo "<br>";
	          echo "$userid</center>";
	          $nama=$row["nama"];
               }
               else
               {
	          echo "<center>password yang anda masukkan salah....";
   	          echo " <a href=\"index.php\">kembali</center></a></ul>";
                  exit;
               }
	       $fileprofile="profile".$file.".php";
               echo "<li class=\"menu-item-divided pure-menu-selected\">";
	       echo "<a href=\"$fileprofile?userid=$userid\">Profile</a></li>";
               echo "<li><a href=\"pesan01.php?userid=$userid\">Ada $pesan pesan</a></li>";
               echo "<li><a href=\"index.php\">Logout</a></li>";
               echo "</ul>";
           echo "</div>
           </div>";
# Bagian Utama
    echo "<div id=\"main\">
        <div class=\"header\">
            <h1>Wirawan Test</h1>
            <h2>Aplikasi Ujian Online</h2>
        </div>

        <div class=\"content\">";

   if ($vuserid=="A")
   {
	echo "<ul>";
	echo "<li><a href=\"dafsis.php?usr=$userid\">Data Siswa</a></li>";
	echo "<li><a href=\"dafguru.php?usr=$userid\">Data Guru </a></li>";
	echo "<li><a href=\"admin/dsoal1.php\">Data Soal</a></li>";
	echo "<li><a href=\"tes/hasiltes.php\">Data Nilai</a></li>";
	echo "<li><a href=\"tes/jawabsis1.php\">LJ Siswa</a></li>";
	echo "<li><a href=\"index.php\">Logout</a></li>";
	echo "</ul>";
   }
   else
   {
	if ($vuserid=="G")
	{
		echo "<ul>";
		echo "<li><a href=\"tes/buatsoal.php?userid=$userid&nama=$nama\">Buat Soal Baru</a></li>";
		echo "<li><a href=\"tes/tambahsoal.php?userid=$userid\">Tambah Item Soal</a></li>";
		echo "<li><a href=\"tes/editbutirsoal.php?userid=$userid&nama=$nama\">Perbaiki Soal</a></li>";
		echo "<li><a href=\"tes/cetaksoal01.php?userid=$userid\">Cetak/Ambil Soal</a></li>";
		echo "<li><a href=\"tes/hasiltes.php?userid=$userid\">Hasil Tes</a></li>";
		echo "<li><a href=\"tes/analisis1.php?userid=$userid\">Analisis Soal</a></li>";
		echo "<li><a href=\"dafsis.php?usr=$userid\">Daftar Siswa</a></li>";
		echo "<li><a href=\"dafguru.php?usr=$userid\">Daftar guru</a></li>";
		echo "<li><a href=\"tes/kartusoal1.php?userid=$userid\">Kartu Soal</a></li>";
		echo "<li><a href=\"tes/matrikkelas1.php?userid=$userid\">Matrik jawaban per rombel</a></li>";
		echo "<li><a href=\"tes/matrikkelasb1.php?userid=$userid\">Matrik jawaban per kelas</a></li>";
		echo "<li><a href=\"tes/penilaiandirib1.php?userid=$userid\">Penilaian Diri(Y/T)</a></li>";
		echo "<li><a href=\"tes/penilaiandiri1.php?userid=$userid\">Penilaian Diri(4 Opsi)</a></li>";
		echo "<li><a href=\"tes/penilaiantemana1.php?userid=$userid\">Penilaian Teman</a></li>";
		echo "</ul>";
	}
	else
	{
		echo "<ul>";
		echo "<li><a href=\"tes/pilihsoal1.php?userid=$userid&nama=$nama\">Ikuti Tes</a></li>";
#		echo "<li><a href=\"tes/pilihsoal1.php?userid=$userid\">Ikuti Tes</a></li>";
		echo "<li><a href=\"tes/nilaiku.php?userid=$userid\">Nilai</a></li>";
		echo "<li><a href=\"dafsis.php?usr=$userid\">Daftar Siswa</a></li>";
		echo "<li><a href=\"dafguru.php?usr=$userid\">Daftar Guru</a></li>";
		echo "<li><a href=\"tes/hasiltes.php?userid=$userid\">Hasil Tes</a></li>";
		echo "<li><a href=\"index.php\">Logout</a></li>";
		echo "</ul>";
	}
   }
   ?>

                Belajar, Berlatih, Berprestasi
            </p>
        </div>
    </div>
</div>
<script src="js/ui.js"></script>
</body>
</HTML>
