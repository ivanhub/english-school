<HTML>
<HEAD>
<TITLE>pgri</TITLE>

<BODY background="images/back1.jpg" valign=top>
<table border=0 padding=0 width="100%" background="images/back3.jpg">
<tr bgcolor="green" background="images/back6.jpg">
    <td><font face=arial color=yellow size=4>Daftar sebagai siswa</td>
    <td><font face=arial color=yellow size=4>Daftar sebagai guru</td>
</tr>
<tr><td valign=top>
     <table border=0>
     <form method="post" action="regsiswa.php">
     <tr><td align="left"><font face=arial size=1>Nama Lengkap</td>
     <td align="left"><input type="text" name="nama" size="22"></td></tr>
     <tr><td align="left"><font face=arial size=1>Lembaga</td>
     <td align="left"><input type="text" name="lembaga" size="24"></td></tr>
     <tr><td align="left"><font face=arial size=1>Masukkan Pasrsword</td>
     <td align="left"><input type="password" name="password1" size="12"></td></tr>
     <tr><td align="left"><font face=arial size=1>Masukkan lagi Pasrsword</td>
     <td align="left"><input type="password" name="password2" size="12"></td></tr>
     <tr><td align="left"></td><td><input type="image" src="images/signup.gif" vspace="0">
     </td></tr>
     </form>
     </table>
<font face=arial size=1>Proses Registrasi ini hanya dilakukan sekali. Setelah registrasi selesai anda akan memperoleh User ID. <br>Selanjutnya User ID serta Password ini yang digunakan untuk login serta mengakses soal-soal serta fitur-fitur lain yang tersedia.

</td>
<td valign=top>
     <table border=0>
     <form method="post" action="regguru.php">
     <tr><td align="left"><font face=arial size=1>Nama Lengkap</td>
     <td align="left"><input type="text" name="nama" size="22"></td></tr>
     <tr><td align="left"><font face=arial size=1>Lembaga</td>
     <td align="left"><input type="text" name="lembaga" size="24"></td></tr>
     <tr><td align="left"><font face=arial size=1>Masukkan Password</td>
     <td align="left"><input type="password" name="password1" size="12"></td></tr>
     <tr><td align="left"><font face=arial size=1>Masukkan lagi Pasrsword</td>
     <td align="left"><input type="password" name="password2" size="12"></td></tr>
     <tr><td align="left"></td><td><input type="image" src="images/signup.gif" vspace="0">
     </td></tr>
     </form>
     </table>
<font face=arial size=1>Dengan mendaftar sebagai guru anda bisa membuat soal-soal sendiri untuk murid-murid anda. Setelah registrasi selesai anda akan memperoleh User ID. <br>Selanjutnya User ID serta Password ini yang digunakan untuk login lalu menyiapkan soal-soal serta fitur-fitur lain yang tersedia.</td>

</td>
</tr>
<tr bgcolor="red" background="images/back6.jpg">
    <td colspan=2 align=center><font face=arial color=yellow size=4><a href=tes/bantubuatsoal.php>Bantu Buat Soal</a></td>
</tr>
</table>

<?php
$page="utama";
include ("counter.php");
?>
<?php
   include ("footer.php");
?>
</BODY>
</HTML>
