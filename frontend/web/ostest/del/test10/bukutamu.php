<HTML>
<HEAD>
<TITLE>pgri</TITLE>

</HEAD>

<hr>
<body background="images/back3.jpg">
<form method="post" action="bukutamu.php">
<table border="0">
      <td></td><td><font face=arial color=brown size=5><b>Isi Buku Tamu</b></font></td>
      <tr>
          <td><font face=arial color=green size=2>Nama</td>
          <td><input type="text" name=nama size=30></td>
      </tr>
      <tr>
          <td><font face=arial color=green size=2>email</td>
          <td><input type="text" name=email size=40></td>
      </tr>
      <tr>
          <td><font face=arial color=green size=2>Komentar</td>
          <td><textarea name="komentar" rows=5 cols=40></textarea></td>
      </tr>

   <tr><td><input type="submit" name="submit" value="Masukkan"></td></tr>
</table>
</form>

<?php
$page="bukutamu";
include ("counter.php");
?>

<?php
include("koneksi.inc.php");

$query=mysql_query("select * from bukutamu order by tanggal desc",$koneksi);
echo "<table bgcolor=white";

echo "<tr background=images/tablehead1.jpg>
<th background=images/kiri.jpg>TANGGAL</th>
<th background=images/kiri.jpg>NAMA</th>
<th background=images/kiri.jpg>EMAIL</th>
<th background=images/kiri.jpg>KOMENTAR</th></tr>";

while ($row=mysql_fetch_array($query))
{
      echo "<tr><td background=images/m_tabel.jpg align=\"center\">";
      echo "<font face=arial size=2 color=brown>";
      echo $row["tanggal"];
	  echo "</td>";
      echo "<td background=images/m_tabel.jpg><font face=arial size=2 color=brown>";
	  echo $row["nama"];
	  echo "</td>";
      echo "<td background=images/m_tabel.jpg><font face=arial size=2 color=brown>";
	  echo $row["email"];
	  echo "</td>";
      echo "<td background=images/m_tabel.jpg><font face=arial size=2 color=brown>";
	  echo $row["komentar"];
	  echo "</td>";
      echo "</tr>";
}
echo "</table>";
include ("footer.php");
?>
</body>
</html>
