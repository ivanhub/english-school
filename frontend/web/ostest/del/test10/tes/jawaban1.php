<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" title="CEdS (screen)" />
<TITLE>pgri</TITLE>
</HEAD>

<BODY BACKGROUND="images/back3.jpg">
<? $usr     =$_GET['usr']; ?>
<hr>
<h2>&nbsp DAFTAR GURU</h2>
<hr>
<form method="post" action="dafguru2.php">
<hr>
<table>

     <tr><td>&nbsp&nbsp Tampilkan berdasarkan</td>
     <td><select name="field">
          <option value="nama">Semua data</option>
          <option value="nama">Nama</option>
          <option value="lembaga">Lembaga</option>
          <option value="kelurahan">Kelurahan</option>
          <option value="tgllahir">Tanggal Lahir</option></select></td>
     <td><input type="text" name="cari" size="20"></td></tr>
</table><hr>

<? echo "<input type=\"hidden\" name=\"usr\" value=$usr>"; ?>

<br>&nbsp&nbsp <input type="submit" name="submit" value="Tampilkan">
<hr>
<center>
<font face="arial" size="1">
copyright &copy Adi Wirawan awr05@yahoo.com 2005
</font>
</center>
</body>
</html>