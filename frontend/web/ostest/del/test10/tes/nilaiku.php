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

<body">
<?php
$userid =$_GET['userid'];
include ("../koneksi.inc.php");

$query=mysql_query("select * from hasil where userid='$userid' order by waktu",$koneksi);
$jumlah=mysql_num_rows($query);
echo "<br>&nbsp&nbsp Jumlah Soal yang telah dikerjakan : <b>$jumlah soal </b>";
echo "<table class=\"pure-table pure-table-horizontal\">";
echo "<thead><tr>";
echo "<th>No</th>
   <th>Dikerjakan pada </th>
   <th>Jenis Tes</th>
   <th>Nilai</th>
   <th>Lama</th></tr></thead><tbody>";
$no=1;
$j=0;
while ($row=mysql_fetch_array($query))
{
	  if ($j==0)  
	  {
             echo "<tr>";
	     $j++;
	  }
	  else
	  {
             echo "<tr>";
	     $j--;
	  }	   
	  echo "<td><b>";
          echo "$no";
          $no++;
          echo "</b></td>";
          echo "<td>";
	  echo $row["waktu"];
	  echo "</td>";
          echo "<td>";
	  echo $row["jenis_tes"];
	  echo "</td>";
          echo "<td align=center>";
	  echo $row["nilai"];
	  echo "</td>";
          echo "<td align=center>";
          echo $row["lama"];
          echo " menit</td>";
          echo "</tr>";
}
echo "</tbody></table>";
?>
</body>
</html>
