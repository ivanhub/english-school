<html>
<Head>
<link rel="stylesheet" type="text/css" href="table.css" media="screen" title="CEdS (screen)" />
<title>Profile ku</title>

</head>

<body background="images/back3.jpg">

<?php
$userid  =$_GET['userid'];
include ("koneksi.inc.php");
$query=mysql_query("select * from siswa where userid='$userid'",$koneksi);
while ($row=mysql_fetch_array($query))
{
//	$pic=$row["userid"];
//	$foto="siswa/".$pic.".png";
//	echo "<img src=\"$foto\" width=\"30%\" align=\"right\" border=0>";

	$pic=$row["userid"];
	$nama=$row["nama"];
	$jk=$row["jk"];
	$kelas=$row["kelas"];
	$lembaga=$row["lembaga"];
	$alamat=$row["alamat"];
	$kelurahan=$row["kelurahan"];
	$kecamatan=$row["kecamatan"];
	$kota=$row["kota"];
	$kodepos=$row["kodepos"];
	$telepon=$row["telepon"];
	$kotalahir=$row["kotalahir"];
	$tgllahir=$row["tgllahir"];
	$password=$row["password"];
	$vtgllahir=substr($tgllahir,8,2)."-".substr($tgllahir,5,2)."-".substr($tgllahir,0,4);

	echo "<table  background=images/m_tabel.jpg border=0 width=100% align=center>";
    echo "<tr background=images/back6.jpg><td colspan=5 align=center><a href=editprofilesiswa.php?userid=$userid><font color=white><b>Klik disini untuk mengedit Profil</b></a></td></tr>";	
    echo "<tr><td>User ID</td>";
    echo "<td bgcolor=white>$userid</td>";
    echo "<td>Nama</td>";
    echo "<td bgcolor=white>$nama [$kelas]</td>";
   	$foto="siswa/".$pic.".jpg";
    echo "<td rowspan=6><img src=\"$foto\" height=\"150\" align=\"center\" border=0></td></tr>";
    echo "<tr><td>Jenis Kelamin</td>";
    echo "<td bgcolor=white>$jk</td>";
    echo "<td>Alamat Rumah</td>";
	echo "<td bgcolor=white>$alamat</td>";	
    echo "<tr><td>Kelurahan</td>";
	echo "<td bgcolor=white>$kelurahan</td>";	
    echo "<td>Kecamatan</td>";
	echo "<td bgcolor=white>$kecamatan</td></tr>";	
    echo "<tr><td>Kota</td>";
	echo "<td bgcolor=white>$kota</td>";	
    echo "<td>Kode Pos</td>";
	echo "<td bgcolor=white>$kodepos</td></tr>";	
    echo "<tr><td>Telepon Rumah</td>";
	echo "<td bgcolor=white>$telepon</td>";
    echo "<td>Nama Lembaga</td>";
	echo "<td bgcolor=white>$lembaga</td>";
    echo "<tr><td>Kota kelahiran</td>";
	echo "<td bgcolor=white>$kotalahir</td>";
    echo "<td>Tanggal Lahir</td>";
	echo "<td bgcolor=white>$vtgllahir</td></tr>";
    echo "<tr background=images/back6.jpg><td colspan=5 align=center><a href=uploadfoto.php?userid=$userid><font color=white><b>Klik disini untuk meng-upload foto</b></a></td></tr>";
	echo "</table>";

	echo "<table  background=images/m_tabel.jpg border=0 width=40% align=left>";
	echo "<tr><th colspan=2><center>Kotak Pesan</th></tr>";
	$query2=mysql_query("select * from testimony where userid='$userid' order by tgl desc",$koneksi);
	while ($row=mysql_fetch_array($query2))
	{
		echo "<tr><td width=12%>";
		$dari=$row["dari"];
		if (substr($dari,0,3)=="gur")
		{
			$foto="guru/".$dari.".jpg";
		}
		else
		{
			$foto="siswa/".$dari.".jpg";
		}
		echo "<img src=\"$foto\" width=\"60px\" align=\"center\" border=0><b>";
		echo "<br><font face=arial size=1 color=blue>$dari";
		echo "</td><td width=92%>";
        echo "<font face=arial size=2>";
		echo $row["testi"];
		echo "<font face=arial size=1 color=blue><br>";
		echo $row["tgl"];
                echo " -----<a href=balaspesan1.php?kepada=$dari&dari=$userid><b>Balas</b></a>-----";
		echo "</td></tr>";
	}
	echo "</table>";

$query3=mysql_query("select * from hasil where userid='$userid' order by waktu",$koneksi);
$jumlah=mysql_num_rows($query3);
echo "<table border=\"0\" width=\"60%\" align=\"center\">";
echo "<tr bgcolor=orange>";
echo "<th>No</th>
   <th>Dikerjakan pada </th>
   <th>Jenis Tes</th>
   <th>Nilai</th>
   <th>Lama</th></tr>";
$no=1;
while ($row3=mysql_fetch_array($query3))
{
	  echo "<td align=\"center\">";
          echo "$no";
          $no++;
          echo "</td>";
          echo "<td>";
	  echo $row3["waktu"];
	  echo "</td>";
          echo "<td>";
	  echo $row3["jenis_tes"];
	  echo "</td>";
          echo "<td align=center>";
	  echo $row3["nilai"];
	  echo "</td>";
          echo "<td align=center>";
          echo $row3["lama"];
          echo " menit</td>";
          echo "</tr>";
}
echo "</table>";

}	
?>

</body>
</html>
