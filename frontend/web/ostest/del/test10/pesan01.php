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

   $userid2 =$_GET['userid'];
   $userid  =strtolower($userid2);

   include ("koneksi.inc.php");
   $vuserid=substr($userid,0,3);
   if ($vuserid=="adm")
   {
	$file="admin";
   }
   else
   {
  	if ($vuserid=="gur")
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
               $query1=mysql_query("select * from testimony where userid='$userid' order by tgl desc",$koneksi);
               while ($row=mysql_fetch_array($query1))
               $pesan=mysql_num_rows($query1);	
               $row=mysql_fetch_array($query1);
	       $pic=$userid;
	       $foto="$file/".$pic.".jpg";
	       echo "<img src=\"$foto\" width=\"100%\" align=\"center\" border=\"0\"><center>";
	       echo $row["nama"];
	       echo "<br>";
	       echo "$userid</center>";
	       $nama=$row["nama"];
               echo "<li class=\"menu-item-divided pure-menu-selected\">";
	       echo "<a href=\"profileguru.php?userid=$userid\">Profile</a></li>";
               echo "<li><a href=\"pesan01.php?userid=$userid\">Ada $pesan pesan</a></li>";
               echo "</ul>";
           echo "</div>
           </div>";


# Bagian Utama
    echo "<div id=\"main\">
        <div class=\"header\">
            <h1>Wirawan Test</h1>
            <h2>Aplikasi Ujian Online</h2>
        </div>";

	echo "<table class=\"pure-table-horizontal\">";
	echo "<tr><th colspan=2><center>Kotak Pesan</th></tr>";
	$query2=mysql_query("select * from testimony where userid='$userid' order by tgl desc",$koneksi);
	while ($row=mysql_fetch_array($query2))
	{

		echo "<tr><td align=center>";

		$dari=$row["dari"];
		$pesan=$row["testi"];

		if (substr($dari,0,3)=="gur")
		{
			$foto="guru/".$dari.".jpg";
		}
		elseif (substr($dari,0,3)=="sis")
		{
			$foto="siswa/".$dari.".jpg";
		}
		else
		{
			$foto="admin/".$dari.".jpg";
		}			

		$query3=mysql_query("select * from siswa where userid='$dari'",$koneksi);
		while ($row2=mysql_fetch_array($query3))
		{
			$namadari=$row2["nama"];
		}

		echo "<img src=\"$foto\" width=\"60px\" align=\"center\" border=0><b>";
		echo "<br>$dari ($namadari)";
		echo "</td><td>";
		echo "$pesan";
		echo "<br>";
		echo $row["tgl"];
                echo " -----<a href=balaspesan1.php?kepada=$dari&dari=$userid><b>Balas</b></a>-----";
		echo "</td></tr>";
	}
	echo "</table>";
   ?>

                Belajar, Berlatih, Berprestasi
            </p>
        </div>
    </div>
</div>
<script src="js/ui.js"></script>
</body>
</HTML>


