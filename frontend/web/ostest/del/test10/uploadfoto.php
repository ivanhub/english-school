<html>
<Head>
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" title="CEdS (screen)" />
<title>Upload Foto</title>
<font face="arial" size="2" color=brown>
<hr>
<h1>Upload Foto</h1>
<hr>
</head>

<BODY BACKGROUND="images/back3.jpg">

<?php

$userid  =$_GET['userid'];

echo "<form input method=\"post\" action=\"uploadfoto1.php\" ENCTYPE=\"MULTIPART/FORM-DATA\" />";
echo "<b>Perhatian</b> :File foto harus memiliki format <b>jpg</b>";
echo "<table>
	<tr><td>Foto</td>
	<td><input type=\"file\" name=\"fotonya\">
	</td></tr>
	<input type=\"hidden\" name=\"userid\" value=\"$userid\">
	<tr><td></td><td><input type=\"submit\" value=\"Upload\">
	<input type=\"reset\" value=\"Batal\">
	</td></tr>
	</table>";
echo "</form>";
?>
</body>
</html>
