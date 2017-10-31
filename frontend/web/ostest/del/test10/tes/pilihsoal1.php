<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
  <title>Wirawan Test</title>
  <link rel="stylesheet" href="../css/layouts/pure-min.css">
  <link rel="stylesheet" href="../css/layouts/side-menu.css">
</head>

<body>
<div id="layout">
   <a href="#menu" id="menuLink" class="menu-link">
   <span></span>
   </a>
   <div id="menu">
      <div class="pure-menu pure-menu-open">
         <a class="pure-menu-heading" href="#"><center>CEDS</center></a>
         <?
         $userid =$_GET['userid'];
         $nama2  =$_GET['nama'];
         include ("../koneksi.inc.php");

         $query1=mysql_query("select * from siswa where userid='$userid'" ,$koneksi);
         $jum=mysql_num_rows($query1);
         echo "<ul>";
               $row=mysql_fetch_array($query1);
               $password=$row["password"];
	       $pic=$userid;
	       $foto="../siswa/".$pic.".jpg";
	       echo "<img src=\"$foto\" width=\"100%\" align=\"center\" border=\"0\"><center>";
	       echo $row["nama"];
	       echo "<br>";
	       echo "$userid</center>";
	       $nama=$row["nama"];
               echo "<li><a href=\"../index.php\">Logout</a></li>";
         echo "</ul>";
       echo "</div>";
    echo "</div>";

    # Bagian Utama

    ?>

    <div id="main">
        <div class="header">
            <h1><center>Wirawan Test</h1>
            <h2>Pilih Jenis Soal</center></h2>
        </div>
        <div class=\"content\">

            <?php
              $nama=stripcslashes($nama2);
              $no=1;
              echo "<ul>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Lomba&userid=$userid&nama=$nama\">Lomba</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Tryout&userid=$userid&nama=$nama\">Tryout</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Ujian Akhir Semester&userid=$userid&nama=$nama\">Ujian Akhir Semester</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Ujian Tengah Semester&userid=$userid&nama=$nama\">Ujian Tengah Semester</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Ujian Perbaikan&userid=$userid&nama=$nama\">Ujian Perbaikan</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Ujian Akhir&userid=$userid&nama=$nama\">Ujian Akhir</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Ujian Harian&userid=$userid&nama=$nama\">Ujian Harian</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Latihan&userid=$userid&nama=$nama\">Latihan</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Angketdiri&userid=$userid&nama=$nama\">Penilaian Diri</a></li>";
              echo "<li><a href=\"pilihsoal2.php?untuk=Angketteman&userid=$userid&nama=$nama\">Peniliaian Teman</a></li>";
            ?>
       </div>
   </div>
</div>
<script src="../js/ui.js"></script>
</body>
</html>
