<html>
<Head>
<link rel="stylesheet" type="text/css" href="table.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2" color=brown>
<title>Registrasi Siswa</title>
<hr>
<font face=tahoma color=brown size=5><center><b>EDIT PROFILE</b></center></font>
<hr>

<script language="javascript"> 

function disableEnterKey(submit){
        var key;      
        if(window.event)
            key = window.event.keyCode; //IE
        else
            key = submit.which; //firefox      

        return (key != 13);
    }

</script>

</head>

<body onLoad="disableEnterKey(submit)" background="images/back3.jpg">

<?php
$userid  =$_GET['userid'];
include ("koneksi.inc.php");

$query1=mysql_query("select * from siswa where userid='$userid'",$koneksi);
while ($row=mysql_fetch_array($query1))
{
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
	
	echo "<form method=\"post\" action=\"updateprofilesiswa.php\">";
	echo "<table>";
    echo "<tr><td>Nama</td>";
    echo "<td><b>$nama</b></td></tr>";
    echo "<tr><td>Jenis Kelamin</td>";
    echo "<td><select name=\"jk\">";
         echo "<option value=\"L\">Laki-laki</option>";
         echo "<option value=\"P\">Perempuan</option>";
    echo "</select>";
    echo "<tr><td>Kelas</td>";
    echo "<td><input type=\"text\" name=\"kelas\" size=\"30\" value=\"$kelas\"></td></tr>";
    echo "<tr><td>Alamat Rumah (Komplek / Jln / RT / RW)</td>";
    echo "<td><input type=\"text\" name=\"alamat\" size=\"50\" value=\"$alamat\"></td></tr>";
    echo "<tr><td>Kelurahan</td>";
    echo "<td><input type=\"text\" name=\"kelurahan\" size=\"30\" value=\"$kelurahan\"></td></tr>";
    echo "<tr><td>Kecamatan</td>";
    echo "<td><input type=\"text\" name=\"kecamatan\" size=\"30\" value=\"$kecamatan\"></td></tr>";
    echo "<tr><td>Kota</td>";
    echo "<td><input type=\"text\" name=\"kota\" size=\"25\" value=\"$kota\"></td></tr>";
    echo "<tr><td>Kode Pos</td>";
    echo "<td><input type=\"text\" name=\"kodepos\" size=\"5\" value=\"$kodepos\"></td></tr>";

    echo "<tr><td>Telepon Rumah</td>";
    echo "<td><input type=\"text\" name=\"telepon\" size=\"18\" value=\"$telepon\"></td></tr>";
    echo "<tr><td>Nama Lembaga</td>";
    echo "<td><input type=\"text\" name=\"lembaga\" size=\"50\" value=\"$lembaga\"></td></tr>";
    echo "<tr><td>Kota Lahir</td>";
    echo "<td><input type=\"text\" name=\"kotalahir\" size=\"20\" value=\"$kotalahir\"></td></tr>";
    echo "<tr><td>Tanggal Lahir</td>";
    echo "<td><input type=\"text\" name=\"tgllahir\" size=\"10\" value=\"$tgllahir\"><--THUN-BL-TG</td></tr>";
    echo "<tr><td>Password</td>";
    echo "<td><input type=\"password\" name=\"password1\" size=\"20\" value=\"$password\"></td></tr>";
    echo "<tr><td>Ketik Ulang Password</td>";
    echo "<td><input type=\"password\" name=\"password2\" size=\"20\" value=\"$password\"></td></tr>";
	echo "</table><hr>";
    echo "<td><input type=\"hidden\" name=\"userid\" value=\"$userid\">";
    echo "<td><input type=\"hidden\" name=\"nama\" value=\"$nama\">";
echo "<input type=\"submit\" name=\"submit\" value=\"Update\">";
echo "</form>";
}
?>
<hr>
</body>
</html>
