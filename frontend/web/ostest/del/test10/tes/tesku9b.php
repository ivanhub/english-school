<html>
<Head>
<link rel="stylesheet" type="text/css" href="../styles.css" media="screen" title="CEdS (screen)" />
<title>Edit soal tes online</title>
</head>

<body background="../images/back3.jpg">

<?php
$file =$HTTP_GET_VARS['file'];
$id   =$HTTP_GET_VARS['id'];
$kunci=$HTTP_GET_VARS['kunci'];

include ("koneksi.inc");


	$query2=mysql_query("select * from $file where id='$id'",$koneksi);
	while ($row=mysql_fetch_array($query2))
	{
   		$soal=$row["soal"];
   		$opsia=$row["opsia"];
   		$opsib=$row["opsib"];
   		$opsic=$row["opsic"];
   		$opsid=$row["opsid"];
   		$opsie=$row["opsie"];
   		$kunci=$row["kunci"];
   	}

  $quera=mysql_query("select * from user where file='$file'",$koneksi);
  while ($row=mysql_fetch_array($quera))
  {
      echo "<form method=\"post\" action=\"tesku9c.php\">";
      $guru=$row["nama"];
      $materi=$row["materi"];
	  $password=$row["password"];
      $quere=mysql_query("select * from $file",$koneksi);
      $jsoal=mysql_num_rows($quere)+1;
      echo "<h1>Perbaikan Soal Tes Online <b>$row[8]<b><br></h1>";
      echo "<Table border=\"0\">";
      echo "<tr>";
      echo "<td>Guru / Dosen / Tutor</td><td><b>$guru</b></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Nomor soal</td><td><b>$id soal</b></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Soal</td>";
      echo "<td><textarea name=\"soal\" cols=\"80\" rows=\"5\">$soal</textarea></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>pilihan <b>a</b></td>";
      echo "<td><textarea name=\"opsia\" cols=\"80\" rows=\"2\">$opsia</textarea></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>pilihan <b>b</b></td>";
      echo "<td><textarea name=\"opsib\" cols=\"80\" rows=\"2\">$opsib</textarea></td>";
      echo "</tr>";
      if ($row["opsi"]>2)
      {
          echo "<tr>";
          echo "<td>pilihan <b>c</b></td>";
          echo "<td><textarea name=\"opsic\" cols=\"80\" rows=\"2\">$opsic</textarea></td>";
          echo "</tr>";
      }
      if ($row["opsi"]>3)
      {
          echo "<tr>";
          echo "<td>pilihan <b>d</b></td>";
          echo "<td><textarea name=\"opsid\" cols=\"80\" rows=\"2\">$opsid</textarea></td>";
          echo "</tr>";
          echo "<tr>";
      }
      if ($row["opsi"]>4)
      {
          echo "<tr>";
          echo "<td>pilihan <b>e</b></td>";
          echo "<td><textarea name=\"opsie\" cols=\"80\" rows=\"2\">$opsie</textarea></td>";
          echo "</tr>";
          echo "<tr>";
      }
      if ($kunci=="a") { $pa="selected"; }
      elseif ($kunci=="b") { $pb="selected"; }
      elseif ($kunci=="c") { $pc="selected"; }
      elseif ($kunci=="d") { $pd="selected"; }
      else { $pe="selected";}

      echo "<td>Yang Benar </td>";
      echo "<td><select name=\"kunci\">";
          echo "<option value=\"kosong\">-pilih-</option>";
          echo "<option value=\"a\" $pa>A</option>";
          echo "<option value=\"b\" $pb>B</option>";
          echo "<option value=\"c\" $pc>C</option>";
      if ($row["opsi"]>3)
      {
          echo "<option value=\"d\" $pd>D</option>";
      }
      if ($row["opsi"]>4)
      {
          echo "<option value=\"e\" $pe>E</option>";
      }
          echo "</select>";
          echo "</td>";
      echo "</tr>";
     echo "<input type=hidden name=file value=$file>";
     echo "<input type=hidden name=id value=$id>";
     echo "<input type=hidden name=pass value=$password>";
     echo "</table>";
     echo "<p><input type=\"submit\" name=\"submit\" value=\"Masukkan\">";
  echo "</form>";
  }
?>
</body>
</html>
