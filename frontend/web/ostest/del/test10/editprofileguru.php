<html>
<Head>
<basefont face="arial" size="2" color=brown>
<title>Wirawan Test</title>
<hr>
<font face=tahoma color=brown size=5><center><b>EDIT PROFILE</b></center></font>
<hr>
<script language="JavaScript">

function disableEnterKey(e)
{
     var key;      
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox      

     return (key != 13);
}

</script>
</head>

<body OnKeyPress="return disableKeyPress(event)" background="images/back3.jpg">

<?php
$userid   =$_GET['userid'];
include ("koneksi.inc.php");

$query1=mysql_query("select * from guru where userid='$userid'",$koneksi);
while ($row=mysql_fetch_array($query1))
{
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
	
	echo "<form method=\"post\" action=\"updateprofileguru.php\">";
	echo "<table>";
    echo "<tr><td>Nama</td>";
    echo "<td><input type=\"text\" name=\"nama\" size=\"40\" value=\"$nama\" onKeyPress=\"return disableEnterKey(event)\"></td></tr>";
    echo "<tr><td>Jenis Kelamin</td>";
    echo "<td><select name=\"jk\">";
         echo "<option value=\"Laki-laki\">Laki-laki</option>";
         echo "<option value=\"Perempuan\">Perempuan</option>";
    echo "</select>";

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
echo "<input type=\"submit\" name=\"submit\" value=\"Update\">";
echo "</form>";
}
?>
<hr>
</body>
</html>
