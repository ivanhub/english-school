<html>
<Head>
<link rel="stylesheet" type="text/css" href="table.css" media="screen" title="CEdS (screen)" />
<title>Profile ku</title>
<font face="arial" size="2" color=brown>
</head>

<body background="images/back3.jpg">

<?php
$userid   =$_GET['userid'];
include ("koneksi.inc.php");
$query=mysql_query("select * from guru where userid='$userid'",$koneksi);
while ($row=mysql_fetch_array($query))
{
	$pic=$row["userid"];
	$nama=$row["nama"];
	$jk=$row["jk"];
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
		
	echo "<table  background=images/m_tabel.jpg border=0 width=100% align=center>";
    echo "<tr background=images/back6.jpg><td colspan=5 align=center><a href=editprofileguru.php?userid=$userid><b><font color=white>Klik disini untuk mengedit Profil</b></a></td></tr>";	
	$foto="guru/".$pic.".jpg";
    echo "<tr><td rowspan=6><img src=\"$foto\" height=\"150\" align=\"center\" border=0></td>";
    echo "<td>User ID</td>";
    echo "<td bgcolor=white>$userid</td>";
    echo "<td>Nama</td>";
    echo "<td bgcolor=white>$nama</td></tr>";
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
	echo "<td bgcolor=white>$tgllahir</td></tr>";
    echo "<tr background=images/back6.jpg><td colspan=5 align=center><a href=uploadfoto.php?userid=$userid><b><font color=white>Klik disini untuk meng-upload foto</b></a></td></tr>";
	echo "</table>";

	echo "<table  background=images/m_tabel.jpg border=0 width=30% align=left>";
	echo "<tr><th colspan=2><center>Kotak Pesan</th></tr>";
	$query2=mysql_query("select * from testimony where userid='$userid' order by tgl desc",$koneksi);
	while ($row=mysql_fetch_array($query2))
	{
		echo "<tr><td width=12% align=center>";

		$dari=$row["dari"];
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
		echo "<img src=\"$foto\" width=\"60px\" align=\"center\" border=0><b>";
		echo "<br><font face=arial size=1 color=blue>$dari";
		echo "</td><td width=92%>";
        	echo "<font face=arial size=2>";
		echo $row["testi"];
		echo "<font face=arial size=1 color=red><br>";
		echo $row["tgl"];
                echo " -----<a href=balaspesan1.php?kepada=$dari&dari=$userid><b>Balas</b></a>-----";
		echo "</td></tr>";
	}
	echo "</table>";

	  echo "<table width=70%><tr><th>kode</th><th>Materi</th><th>Untuk</th><th>J.soal</th><th>proses</th></tr>";
	  $query2=mysql_query("select * from user where userid='$userid'",$koneksi);
	  while ($rows2=mysql_fetch_array($query2))
	  {
          echo "<font face=arial size=1>";
		  echo "<tr>";
		  echo "<td>";
		  echo $rows2["file"];
		  $file=$rows2["file"];
		  echo "</td>";
		  echo "<td>";
		  echo $rows2["materi"];
		  echo "</td>";
		  echo "<td>";
		  echo $rows2["untuk"];
		  echo "</td>";
		  echo "<td>";
		  echo $rows2["jumlahsoal"];
		  echo " / ";
		  echo $rows2["disajikan"];
		  echo "</td><td align=center><a href=tes/editsoal.php?userid=$userid&file=$file>edit</a>";
		  echo "</td></tr>";
	  }	  
	  echo "</table>";
}	
?>
</body>
</html>
