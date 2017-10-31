<html>
<Head>
<link rel="stylesheet" type="text/css" href="table.css" media="screen" title="CEdS (screen)" />
<title>tes Online</title>

</head>

<body background="images/back3.jpg">
<hr>
<h2>&nbsp DAFTAR GURU</h2>
<hr>
<?php
include ("koneksi.inc.php");
$field  =$_POST['field'];
$cari   =$_POST['cari'];
$usr    =$_POST['usr'];

$query=mysql_query("select * from guru where $field like '%$cari%'",$koneksi);
$jum=mysql_num_rows($query);
if ($jum==0)
{
   echo " <center><b>$userid ???</b><br>User ID ini belum ada...";
   echo " <a href=dafguru.php>kembali</center></a>";
   exit;
}
echo "&nbsp&nbsp Pada = <b>$field</b> Cari = <b>$cari</b> ";
echo "Diperoleh = <b>$jum Record</b>";
echo "<table width=98% align=\"center\">";
echo "<tr bgcolor=orange>";
echo "<th><font face=arial size=2>No</th>
   <th>User ID</th>
   <th>Nama</th>
   <th>L/P</th>
   <th>Lembaga</th>
   <th>Soal-soal</th>
   <th>Alamat Lengkap</th>
   <th colspan=2>Tpt./Tgl. Lahir</th></tr>";
$no=1;

while ($row=mysql_fetch_array($query))
{
   
	  echo "<td align=\"center\"><b>";
           echo "$no";
          $no++;
          echo "</b></td>";
          echo "<td align=center>";
	$pic=$row["userid"];
	$foto="guru/".$pic.".jpg";
	echo "<img src=\"$foto\" width=\"40px\" align=\"center\" border=0><br><b>";          
	  echo $row["userid"];
	  echo "</b></td>";
          echo "<td>";
	  echo $row["nama"];
	  if ($usr!="")
	  {
	     echo "<br><a href=\"testi1.php?usr=$usr&userid=$row[5]&nama=$row[1]\"><img src=images/pesan.gif></a>";
          }
	  echo "</td>";
          echo "<td>";
	  echo $row["jk"];
	  echo "</td>";
          echo "<td>";
	  echo $row["lembaga"];
	  echo "</td>";
      echo "<td>";
	  $query2=mysql_query("select * from user where userid='$pic'",$koneksi);
	  while ($rows=mysql_fetch_array($query2))
	  {
          echo "- ";
		  echo $rows["materi"];
		  echo "<br>";
	  }	  
	  echo "</td>";
      echo "<td>";
	  echo $row["alamat"];
	  echo "<br>kel. ";
	  echo $row["kelurahan"];
	  echo ", kec. ";
	  echo $row["kecamatan"];
	  echo "<br>";
	  echo $row["kota"];
	  echo " - ";
	  echo $row["kodepos"];
	  echo "<br>";
	  echo $row["telepon"];
	  echo "</td>";
          echo "<td align=center>";
	  echo $row["kotalahir"];
	  echo "</td>";
          echo "<td align=center>";
 	  echo $row["tgllahir"];
	  echo "</td>";
      echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
