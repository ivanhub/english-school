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

<?php
$userid =$_GET['userid'];
$nama   =$_GET['nama'];
$untuk  =$_GET['untuk'];

$nama=stripcslashes($nama);

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
        </div>
        <div class=\"content\">
<?

echo "<h2><center>Soal-soal $untuk</center></h2><hr>";
$query=mysql_query("select * from user where untuk='$untuk' order by file",$koneksi);
echo "<form method=\"post\" action=\"kerjakan.php\">";


$no=1;
echo "<ul>";
while ($row=mysql_fetch_array($query))
{
   $pilih=$no."|".$row[1]."|".$row[8]."|".$row[4]."|".$row[2]."|".$row[6];
   echo "<li><a href=\"passwordsoal.php?file=$row[1]&userid=$userid&nama=$nama\">$row[1]-|-$row[8]-|-$row[7]-|-$row[2]</a></li>";
   $no++;
}

?>
       </div>
   </div>
</div>
<script src="../js/ui.js"></script>

</body>
</html>
