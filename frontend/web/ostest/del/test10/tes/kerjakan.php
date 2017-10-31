<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
  <title>Wirawan Test</title>
  <link rel="stylesheet" href="../css/layouts/pure-min.css">
  <link rel="stylesheet" href="../css/layouts/side-menu.css">
<?php
  $userid =$_POST['userid'];
  $nama   =$_POST['nama'];
  $untuk  =$_POST['untuk'];
  $waktu  =$_POST['waktu'];
  $lembaga=$_POST['lembaga'];
  $nama=stripcslashes($nama);
  include ("waktu.js");
?>

</head>

<body onLoad="dispJam()">
<div id="layout">
   <a href="#menu" id="menuLink" class="menu-link">
   <span></span>
   </a>
   <div id="menu">
      <div class="pure-menu pure-menu-open">
         <a class="pure-menu-heading" href="#"><center>CEDS</center></a>

<?php

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
     ?>
  		  <hr>
	       <FORM NAME=User> 
 		  <center>Sisa Waktu<br><INPUT TYPE="TEXT" NAME="TimeLeft" Value="" SIZE="8">
   		  <br>Waktu<br><INPUT TYPE="TEXT" NAME="TimeTaken" VALUE="" SIZE="8">
   		  <br>Sekarang Jam<br><INPUT TYPE="TEXT" NAME="Watch" Value="" SIZE="8">
	       </FORM>
  		  <hr>
               <li><a href="../index.php">Logout</a></li>
	  	</center>

         </ul>
       </div>
    </div>

<!-- Bagian Utama -->

    <div id="main">
        <div class="header">
            <h1><center>Wirawan Test</h1>
        </div>
        <div class=\"content\">

<?php
$file     =$_POST['file'];
$userid   =$_POST['userid'];
$nama     =$_POST['nama'];
$pass     =$_POST['pass'];
$kelas    =$_POST['kelas'];
$lembaga  =$_POST['lembaga'];
$deskripsi=$_POST['deskripsi'];
$untuk    =$_POST['untuk'];

$nama=stripcslashes($nama);

$queri=mysql_query("select * from user where file='$file'",$koneksi);
while ($row=mysql_fetch_array($queri))
{
    $waktu=$row["waktu"];
}

    if ($untuk=="Angketteman")
    {
	include ("penilaianteman.php");
#       echo "<frame src=\"penilaianteman1.php?userid=$userid&nama=$nama&file=$file&pass=$pass&waktu=$waktu&kelas=$kelas\" name=bawah>";
    }
    else if ($deskripsi=="ljk")
    {
#       echo "<frame src=\"ljksiswa.php?userid=$userid&nama=$nama&file=$file&pass=$pass&waktu=$waktu&kelas=$kelas\" name=bawah>";
	include ("ljksiswa.php");
    }
    else
    {
#       echo "<frame src=\"entrijawaban.php?userid=$userid&nama=$nama&file=$file&pass=$pass&waktu=$waktu&kelas=$kelas\" name=bawah>";
	include ("entrijawaban.php");
    }

?>
       </div>
   </div>
</div>
<script src="../js/ui.js"></script>


</head>
</html>

