<html>
<Head>
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" title="CEdS (screen)" />
<basefont face="arial" size="2">
<title>tes Online</title>

</head>

<body background="../images/back3.jpg">
<hr>
<h1>&nbsp Pesan Singkat</h1>
<hr>
<?php

$kepada  =$_GET['kepada'];
$dari    =$_GET['dari'];

echo "<br>$dari memembalas pesan untuk: <b>$kepada </b>";
echo "<form method=post action=balaspesan2.php>";
	echo "<input type=\"hidden\" name=\"kepada\" value=\"$kepada\">";
	echo "<input type=\"hidden\" name=\"dari\" value=\"$dari\">";
?>
	<hr>
	<table border=0 width="100%" background="images/back3.jpg">
      	<tr>
          <td><font face=arial color=green size=2>Komentar</td>
          <td><textarea name="komentar" rows=5 cols=40></textarea></td>
      	</tr>
     	<tr><td></td><td><input type="image" src="images/kirim.gif" vspace="5">
     	</td></tr>
	</table>
</form>
</body>
</html>
