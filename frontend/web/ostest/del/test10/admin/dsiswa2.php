<html>
<Head>
<link rel="stylesheet" type="text/css" href="../styles.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">
<title>tes Online</title>

</head>

<body background="../images/back1.jpg">
<hr>
<h1>DAFTAR SISWA</h1>
<hr>
<?php
include ("koneksi2.inc");

$query=mysql_query("select * from siswa where $field like '%$cari%'",$koneksi);
$jum=mysql_num_rows($query);
if ($jum==0)
{
   echo " <center><b>$userid ???</b><br>User ID ini belum ada...";
   echo " <a href=dafsis.php>kembali</center></a>";
   exit;
}
echo "Pada = <b>$field</b> Cari = <b>$cari</b> ";
echo "Diperoleh = <b>$jum Record</b>";
echo "<table width=100% border=\"0\">";
echo "<tr bgcolor=orange>";
echo "<th><font face=arial size=2>No</th>
   <th><font face=arial size=2>Operasi</th>
   <th><font face=arial size=2>User ID</th>
   <th><font face=arial size=2>Nama</th>
   <th><font face=arial size=2>L/P</th>
   <th><font face=arial size=2>Lembaga</th>";
$no=1;
$j=0;
while ($row=mysql_fetch_array($query))
{
	  if ($j==0)  
	  {
             echo "<tr bgcolor=yellow>";
	     $j++;
	  }
	  else
	  {
             echo "<tr bgcolor=orange>";
	     $j--;
	  }	   
	  echo "<td align=\"center\">";
          echo "<font face=arial size=1>";
          echo "<font face=arial size=2>";
          $ary=$row["id"];
          $jawab="jwb[$ary]";
          echo "$no";
          $no++;
          echo "</b>";
          echo "</td><td align=center>";
          echo "<a href=dsiswa3.php?file=id=$ary> edit |</a>";
          echo "<a href=dsiswa4.php?file=id=$ary> hapus </a></td><td>";
	  echo $row["userid"];
	  echo "</b></td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["nama"];
	  echo "</td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["jk"];
	  echo "</td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["lembaga"];
	  echo "</td>";
      echo "</tr>";
}
echo "</table>";
?>
</body>
</html>