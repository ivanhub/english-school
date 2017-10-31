<HTML>
<HEAD>
<TITLE>Wirawan Test - Registrasi Siswa</TITLE>

<BODY background="images/back3.jpg" valign=top>
<table border=0 padding=0 width="100%" background="images/back3.jpg">
<tr bgcolor="green" background="images/back6.jpg">
    <td align=center colspan=2><font face=arial color=yellow size=4>Mendaftar Sebagai Siswa</td>
</tr>
<?
    echo "<form method=\"post\" action=\"regsiswa.php\">";
    echo "<tr><td>Nama</td>";
    echo "<td><input type=\"text\" name=\"nama\" size=\"40\"></td></tr>";
    echo "<tr><td>Jenis Kelamin</td>";
    echo "<td><select name=\"jk\">";
         echo "<option value=\"Laki-laki\">Laki-laki</option>";
         echo "<option value=\"Perempuan\">Perempuan</option>";
    echo "</select>";
    echo "<tr><td>Kelas</td>";
    echo "<td><input type=\"text\" name=\"kelas\" size=\"50\"></td></tr>";
    echo "<tr><td>Nama Lembaga</td>";
    echo "<td><input type=\"text\" name=\"lembaga\" size=\"50\"></td></tr>";
    echo "<tr><td>Password</td>";
    echo "<td><input type=\"password\" name=\"password1\" size=\"20\"></td></tr>";
    echo "<tr><td>Ketik Ulang Password</td>";
    echo "<td><input type=\"password\" name=\"password2\" size=\"20\"></td></tr>";
#    echo "<input type=\"hidden\" name=\"userid\" value=\"$userid\">";
    echo "<tr><td></td><td><input type=\"submit\" name=\"submit\" value=\"Selesai\"></td></tr>";
    echo "</form>";
    echo "<tr bgcolor=\"red\" background=\"images/back6.jpg\"><td colspan=2>&nbsp</td></tr>";
?>
</table>

<?php
$page="regsis";
include ("counter.php");
?>
<?php
   include ("footer.php");
?>
</BODY>
</HTML>
