<html>
<Head>
<link rel="stylesheet" type="text/css" href="table3.css" media="screen" title="CEdS (screen)" />
<title>Wirawan Test</title>

</head>

<body background="images/back3.jpg">
<hr>
<h1>&nbsp DAFTAR SISWA</h1>
<hr>
<?php

$field    =$_POST['field'];
$cari     =$_POST['cari'];
$field2   =$_POST['field2'];
$cari2    =$_POST['cari2'];
$usr      =$_POST['usr'];


include ("koneksi.inc.php");

$query=mysql_query("select * from siswa where $field like '%$cari%' and $field2 like '%$cari2%' order by nama",$koneksi);
$jum=mysql_num_rows($query);
if ($jum==0)
{
   echo " <center><b>$userid ???</b><br>User ID ini belum ada...";
   echo " <a href=dafsis.php>kembali</center></a>";
   exit;
}
echo "&nbsp&nbsp Pada = <b>$field</b> Cari = <b>$cari</b> Diperoleh = <b>$jum Record</b>";
echo "<table width=100%>";
echo "<tr>";
$ulangjudul=1;
for ($ulangjudul; $ulangjudul<=4; $ulangjudul++)
{
	echo "<th>No</th><th>Siswa</th>";
}
echo "</tr>";
$no=1;
$kolom=0;
while ($row=mysql_fetch_array($query))
{
	  $kolom++;
	  if ($kolom==5) { $kolom=1; echo "</tr><tr>"; }
	  echo "<td width=\"15px\"><center>";
          echo "$no";
          $no++;
          echo "</td>";
          echo "<td width=\"90px\"><center>";
	  $pic=$row["userid"];
	  $foto="siswa/".$pic.".jpg";
	  if (!file_exists($foto)) 
	  { 
		$foto="siswa/sis0.gif"; 
	  }
	  echo "<img src=\"$foto\" width=\"130px\" align=\"center\" border=0><br><b>";          
	  echo $row["userid"];
	  $userid=$row["userid"];
	  $nama=$row["nama"];
          echo "<br>";
	  echo "$nama";
          echo "<b>(";
	  echo $row["jk"];
          echo "</b>)";
	  if ($usr!="")
	  {
	     echo "<br><a href=\"testi1.php?usr=$usr&userid=$userid&nama=$row[1]\"><img src=images/pesan.gif></a>";
          }
	  echo "</td>";
}
echo "</tr></table>";
?>
</body>
</html>
