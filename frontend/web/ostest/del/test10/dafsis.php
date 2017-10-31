<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" title="CEdS (screen)" />
<TITLE>pgri</TITLE>
</HEAD>

<BODY BACKGROUND="images/back3.jpg">
<hr>

<? $usr     =$_GET['usr']; ?>

<h1>&nbsp DAFTAR SISWA</h1>
<hr>
<form method="post" action="dafsis2.php">
<hr>
<table>

     <tr><td>&nbsp&nbsp Tampilkan berdasarkan</td>
     <td><select name="field">
          <option value="nama">Semua data</option>
          <option value="nama">Nama</option>
          <option value="jk">Jenis Kelamin</option>
          <option value="lembaga">Lembaga</option>
	  <option value="kelas">Kelas</option>          
          <option value="kelurahan">Kelurahan</option>
          <option value="tgllahir">Tanggal Lahir</option>
          <option value="userid">User ID</option></select></td>
     <td><input type="text" name="cari" size="20"></td></tr>
</table><hr>

<table>

     <tr><td>&nbsp&nbsp Tampilkan berdasarkan</td>
     <td><select name="field2">
          <option value="nama">Semua data</option>
          <option value="nama">Nama</option>
          <option value="jk">Jenis Kelamin</option>
          <option value="lembaga">Lembaga</option>
	  <option value="kelas">Kelas</option>          
          <option value="kelurahan">Kelurahan</option>
          <option value="tgllahir">Tanggal Lahir</option>
          <option value="userid">User ID</option></select></td>
     <td><input type="text" name="cari2" size="20"></td></tr>
</table>

<? echo "<input type=\"hidden\" name=\"usr\" value=$usr>"; ?>
<br>&nbsp&nbsp<input type="submit" name="submit" value="Tampilkan">
<hr>
<center>
<font face="arial" size="1">
</font>
</center>
</body>
</html>
