<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" title="CEdS (screen)" />
<TITLE>pgri</TITLE>
</HEAD>

<BODY BACKGROUND="images/back3.jpg">
<? $usr     =$_GET['usr']; ?>
<hr>
<h2>&nbsp Lembar Jawaban Siswa</h2>
<hr>
<form method="post" action="jawabsis2.php">
<hr>
<table>
     <tr><td>Masukkan Kode Soal</td>
     <td><input type="text" name="kodesoal" size="12"></td>
     <td>Masukkan user ID</td>
     <td><input type="text" name="userid" size="12"></td></tr>
</table><hr>

<? 
echo "<input type=\"hidden\" name=\"usr\" value=$usr>"; ?>
<br>&nbsp&nbsp <input type="submit" name="submit" value="Tampilkan">
<hr>
<center>
<font face="arial" size="1">
copyright &copy Adi Wirawan 2009
</font>
</center>
</body>
</html>
