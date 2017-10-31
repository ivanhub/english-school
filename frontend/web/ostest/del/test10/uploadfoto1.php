<html>
<Head>
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" title="CEdS (screen)" />
<title>Upload Foto</title>
<font face="arial" size="2" color=brown>
<hr>
<h1>Upload Foto</h1>
<hr>
</head>

<body background="images/back3.jpg">

<?php

$userid  =$_POST['userid'];
$foto    =$HTTP_POST_FILES['fotonya']['name'];
$tmpfoto =$HTTP_POST_FILES['fotonya']['tmp_name'];

if (substr($userid,0,1)=="s")
{
	$nfoto="siswa/".$userid.".jpg";
	copy ($tmpfoto, $nfoto);
}	
else	
{
	$nfoto="guru/".$userid.".jpg";
	copy ($tmpfoto, $nfoto);
}

$filename=$nfoto;

// Get new sizes
list($width, $height) = getimagesize($filename);
$newwidth  =1000;
$newheight =round($height*(1000/$width));

// Load
$thumb  = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Output
imagejpeg($thumb,$nfoto);

echo "<br>Selamat...!, foto anda telah ter-update"
?>
</body>
</html>
