<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="../styles.css" media="screen" title="CEdS (screen)" />
<TITLE>Wirawan Test</TITLE>
</HEAD>

<BODY BACKGROUND="../images/back3.jpg">

<h2>&nbsp Hasil Tes</h2>

<form method="get" action="hasiltes2.php">
<hr>
<table>

     <tr><td>&nbsp&nbsp Tampilkan berdasarkan</td>
     <td><select name="field">
          <option value="nama">Semua data</option>
          <option value="kelas">Kelas</option>
          <option value="userid">User ID</option>
          <option value="guru">Guru/pembuat soal</option>
          <option value="nama">Nama Peserta Tes</option>
          <option value="lembaga">Lembaga</option>
          <option value="jenis_tes">Jenis Tes</option>
          <option value="waktu">Waktu Mengerjakan Tes</option>
          <option value="file">Kode Soal</option></select></td>
     <td><input type="text" name="cari" size="20"></td></tr>

     <tr><td>&nbsp&nbsp dan tampilkan berdasarkan</td>
     <td><select name="field2">
          <option value="nama">Semua data</option>
          <option value="kelas">Kelas</option>
          <option value="userid">User ID</option>
          <option value="guru">Guru/pembuat soal</option>
          <option value="nama">Nama Peserta Tes</option>
          <option value="lembaga">Lembaga</option>
          <option value="jenis_tes">Jenis Tes</option>
          <option value="waktu">Waktu Mengerjakan Tes</option>
          <option value="file">Kode Soal</option></select></td>
     <td><input type="text" name="cari2" size="20"></td></tr>

     <tr><td>&nbsp&nbsp Urut berdasarkan</td>
     <td><select name="field3">
          <option value="nilai">Nilai</option>
          <option value="Userid">User ID</option>
          <option value="Nama">Nama Peserta</option>
          <option value="jenis_tes">Jenis Tes</option>
          <option value="lambaga">Lembaga</option>
          <option value="Kelas">Kelas</option>
          <option value="waktu">Waktu Mengerjakan Tes</option></select></td>

     <td>&nbsp&nbsp secara : 
     <select name="secara">
          <option value="ASC">Menaik</option>
          <option value="DESC">Menurun</option></select></td></tr>

</table><hr>
<?php
$userid  =$_GET['userid'];
echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\">";
?>

<br>&nbsp&nbsp<input type="submit" name="submit" value="Tampilkan">
<hr>
<font face="arial" size="3">
<center>
<a href="nilaikelas01.php">Nilai per kelas</a>
</font>
</center>
</body>
</html>
