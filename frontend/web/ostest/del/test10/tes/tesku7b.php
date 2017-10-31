<html>
<Head>
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">

<?php
## $field  =$HTTP_GET_VARS['field'];
## $cari   =$HTTP_GET_VARS['cari'];
## echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"5; URL=http://localhost/onlinetest/tes/tesku7.php?field=$field&cari=$cari\"/>";
?>

<title>tes Online</title>
<hr>
</head>

<body background="../images/back3.jpg">
<?php
$field  =$HTTP_POST_VARS['field'];
$cari   =$HTTP_POST_VARS['cari'];
$field2  =$HTTP_GET_VARS['field'];
$cari2   =$HTTP_GET_VARS['cari'];

include ("koneksi.inc");

echo "cari : <b>$cari</b> pada : <b>$field</b>";

$query=mysql_query("select * from hasil where $field like '%$cari%' order by nilai desc, lama",$koneksi);

$jumlah=mysql_num_rows($query);
echo " ditemukan : <b>$jumlah Record</b>";
echo "<table border=\"0\">";
echo "<tr bgcolor=darkbrown>";
echo "<th><font face=arial size=2>Rangking</th>
   <th><font face=arial size=2>User ID</th>
   <th><font face=arial size=2>Waktu</th>
   <th><font face=arial size=2>Nama Peserta</th>
   <th><font face=arial size=2>Jenis Tes</th>
   <th><font face=arial size=2>Nilai</th>
   <th><font face=arial size=2>Lama</th></tr>";
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
	  echo "<td align=\"center\"><b>";
          echo "<font face=arial size=1>";
          echo "$no";
          $no++;
          echo "</b></td>";
          echo "<td align=center>";
          echo "<font face=arial size=1>";
	  echo $row["userid"];
	  echo "</td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["waktu"];
	  echo "</td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["nama"];
	  echo "</td>";
          echo "<td>";
          echo "<font face=arial size=1>";
	  echo $row["jenis_tes"];
	  echo "</td>";
          echo "<td align=center>";
          echo "<font face=arial size=1>";
	  echo $row["nilai"];
	  echo "</td>";
          echo "<td align=center>";
          echo "<font face=arial size=1>";
          echo $row["lama"];
          echo " menit</td>";
          echo "</tr>";
}
echo "</table>";

echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"2; URL=http://localhost/onlinetest/tes/tesku7.php?field=$fiel2&cari=$cari\"/>";
?>
</body>
</html>
