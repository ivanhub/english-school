<html>
<Head>
<link rel="stylesheet" type="text/css" href="../styles.css" media="screen" title="CEdS (screen)" />
<title>Input soal tes online</title>
<hr>
</head>

<body background="../images/back3.jpg">

<?php

include ("koneksi2.inc");

$queri=mysql_query("select * from user where file='$file'",$koneksi);

while ($row=mysql_fetch_array($queri))
{
   $password=$row["password"];
}

if ($pass!=$password)
{
    echo "<br>$nama ..., password yang anda masukkan salah";
    echo "<a href=\"tesku8.php\">Kembali</a>";
}
else
{
  $quera=mysql_query("select * from user where file='$file'",$koneksi);
  while ($row=mysql_fetch_array($quera))
  {
      echo "<form method=\"post\" action=\"tesku3.php\">";
      $guru=$row["nama"];
      $materi=$row["materi"];

      $quere=mysql_query("select * from $file",$koneksi);
      $jsoal=mysql_num_rows($quere)+1;
      echo "<h2>Input Soal Tes Online $row[9]<br></h2>";
      echo "<Table border=\"0\">";
      echo "<tr>";
      echo "<td>Guru / Dosen / Tutor</td><td><b>$guru</b></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Nomor soal</td><td><b>$jsoal soal</b></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Soal</td>";
      echo "<td><textarea name=\"soal\" cols=\"50\" rows=\"5\"></textarea></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>pilihan <b>a</b></td>";
      echo "<td><input type=\"text\" name=opsi1 size=40></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>pilihan <b>b</b></td>";
      echo "<td><input type=\"text\" name=opsi2 size=40></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>pilihan <b>c</b></td>";
      echo "<td><input type=\"text\" name=opsi3 size=40></td>";
      echo "</tr>";
      if ($row["opsi"]>3)
      {
          echo "<tr>";
          echo "<td>pilihan <b>d</b></td>";
          echo "<td><input type=\"text\" name=opsi4 size=40></td>";
          echo "</tr>";
          echo "<tr>";
      }
      if ($row["opsi"]>4)
      {
          echo "<tr>";
          echo "<td>pilihan <b>e</b></td>";
          echo "<td><input type=\"text\" name=opsi5 size=40></td>";
          echo "</tr>";
          echo "<tr>";
      }

      echo "<td>Yang Benar </td>";
      echo "<td><select name=\"kunci\">";
          echo "<option value=\"kosong\">-pilih-</option>";
          echo "<option value=\"a\">A</option>";
          echo "<option value=\"b\">B</option>";
          echo "<option value=\"c\">C</option>";
      if ($row["opsi"]>3)
      {
          echo "<option value=\"d\">D</option>";
      }
      if ($row["opsi"]>4)
      {
          echo "<option value=\"e\">E</option>";
      }
          echo "</select>";
          echo "</td>";
      echo "</tr>";
     echo "<input type=hidden name=file value=$file>";
     echo "</table>";
     echo "<p><input type=\"submit\" name=\"submit\" value=\"Masukkan\">";
  echo "</form>";
  }
}
?>
</body>
</html>
