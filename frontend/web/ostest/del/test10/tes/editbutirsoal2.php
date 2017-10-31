<?php
	 session_start();
?>
<html>
<Head>
<link rel="stylesheet" type="text/css" href="../table.css" />
<title>Wirawan Test</title>
<hr>
</head>

<body">

<?php
$file      =$_POST['file'];
$pass      =$_POST['pass'];

include ("../koneksi.inc.php");

$queri=mysql_query("select * from user where file='$file'",$koneksi);

while ($row=mysql_fetch_array($queri))
{
   $guru=$row["nama"];
   $lembaga=$row["lembaga"];
#   $alamat=$row["alamat"];
   $untuk=$row["untuk"];
   $materi=$row["materi"];
   $jumlahsoal=$row["jumlahsoal"];
   $disajikan=$row["disajikan"];
   $opsi=$row["opsi"];
   $metode=$row["metode"];
   $waktu=$row["waktu"];
   $password=$row["password"];
   $deskripsi=$row["deskripsi"];
}

if ($deskripsi=="ljk")
{
  echo "<table>";
     echo "<tr><td>Materi Ujian</td>";
     echo "<td><b>$materi</b></td></tr>";
     echo "<tr><td>Jenis Tes</td>";
     echo "<td><b>$untuk</b></td>";
     echo "<tr><td>Guru / Tutor / Dosen</td>";
     echo "<td><b>$guru</b></td>";
  echo "</table><hr>";
  $no=1;
  $query=mysql_query("select * from $file order by id",$koneksi);
  echo "<form method=\"post\" action=\"editljk.php\">";
  echo "<table>";

  echo "<tr><th>No</th><th>A</th><th>B</th><th>C</th>";
  if ($opsi>3)
  {
    echo "<th>D</th>";
  }
  if ($opsi>4)
  {
    echo "<th>E</th>";
  }
  echo "</tr>";

  while ($row=mysql_fetch_array($query))
  {
     $kunci=$row["kunci"];
     $contrenga="";
     $contrengb="";
     $contrengc="";
     $contrengd="";
     $contrenge="";
     switch ($kunci) 
     {
       case "a":
         $contrenga="checked";
         break;
       case "b":
         $contrengb="checked";
         break;
       case "c":
         $contrengc="checked";
         break;
       case "d":
         $contrengd="checked";
         break;
       case "e":
         $contrenge="checked";
         break;
     }
     echo "<tr><td>$no</td>";
     echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"a\" $contrenga></td>";
     echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"b\" $contrengb></td>";
     echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"c\" $contrengc></td>";
     if ($opsi>3)
     {
        echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"d\" $contrengd></td>";
     }
     if ($opsi>4)
     {
        echo "<td><input type=\"radio\" name=\"jawab[$no]\" value=\"e\" $contrenge></td>";
     }
     echo "</tr>";
     $no++;
  }
  echo "</table>";
  echo "<input type=\"hidden\" name=\"file\" value=\"$file\">";
  echo "<br><input type=\"submit\" name=\"submit\" value=\"Lanjutkan\">";
  echo "</form>";
}
else
{

  if ($pass!=$password)
  {
    echo "<br>$nama ..., password yang anda masukkan salah";
    echo "<a href=\"tesku9.php\">Kembali</a>";
    exit;
  }

  $query=mysql_query("select * from $file order by id",$koneksi);

  $jumlah=mysql_num_rows($query);

  $mulai=time();
  echo "<input type=hidden name=mulai value=$mulai>";
  echo "<table>";
     echo "<tr><td>Materi Ujian</td>";
     echo "<td><b>$materi</b></td></tr>";
     echo "<tr><td>Jenis Tes</td>";
     echo "<td><b>$untuk</b></td>";
     echo "<tr><td>Guru / Tutor / Dosen</td>";
     echo "<td><b>$guru</b></td>";
  echo "</table><hr>";

  echo "<input type=\"hidden\" name=\"vfile\" value=\"$file\">";

  $no=1;
  while ($row=mysql_fetch_array($query))
  {
  echo "<table border=\"0\">";
          $ary=$row["id"];
          $jawab="jwb[$ary]";
	  $kunci=$row["kunci"];
          echo "<tr><td colspan=\"2\"><a href=\"editbutirsoal3.php?file=$file&id=$ary&kunci=$kunci\" >| edit | </a>";
          echo "<a href=hapusbutirsoal.php?file=$file&id=$ary&pass=$password>| hapus | </a></td></tr>";

          echo "<tr><td valign=\"top\" width=\"25\"><b>";
          echo "$no";
          $no++;
          echo "</b>";
          echo "</td><td>";
          echo $row["soal"];
          echo "</td></tr><tr><td></td><td>";
          echo "a. ";
          echo $row["opsia"];
          echo "<br>";
          echo "b. ";
          echo $row["opsib"];
          echo "<br>";
          if ($opsi>2)
          {
             echo "c. ";
             echo $row["opsic"];
             echo "<br>";
	  }
          if ($opsi>3)
          {
             echo "d. ";
             echo $row["opsid"];
             echo "<br>";
          }
          if ($opsi>4)
          {
             echo "e. ";
             echo $row["opsie"];
             echo "</td></tr>";
          }
          echo "<tr><td colspan=\"2\"><font color=\"blue\">kunci : <b>";
          echo $row["kunci"];
          echo "</b></td></tr>";

  echo "</table>";
  }
}
?>
</body>
</html>