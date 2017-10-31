<?
// This script writes the quiz to a file

include('config.php');

// Retrieve the user entered data
$name = $_POST['name'];
$title = $_POST['title'];
$types = $_POST['types'];
$questions = $_POST['questions'];
$formpass = $_POST['formpass'];

if($formpass != $password)
{
	echo "<BR><font color=FF0000>ERROR: Incorrect Password</font><BR><BR>";
	die();
}

$name = stripslashes($name);
$title = stripslashes($title);
settype($types, 'integer');
settype($questions, 'integer');

// Retrieve the numbered variables
for($i=0; $i<$types; $i++)
{
	$type[$i] = $_POST["type$i"];
	$type[$i] = stripslashes($type[$i]);
}
for($i=0; $i<$questions; $i++)
{
	$question[$i] = $_POST["question$i"];
	$question[$i] = stripslashes($question[$i]);
	for($j=0; $j<$types; $j++)
	{
		$answer[$i][$j] = $_POST["$i-$j"];
		$answer[$i][$j] = stripslashes($answer[$i][$j]);
	}
}

// Open the file for writing
$fp = fopen("$name.qz", 'w') or die("unable to open file");

// Write the data to the file
fwrite($fp, "<?\n\$title=\"$title\";\n\n\$types=\"$types\";\n\$questions=\"$questions\";\n\n");
for ($i=0; $i<$types; $i++)
{
	fwrite($fp, "\$type[$i] = \"".$type[$i]."\";\n");
}
for($i=0; $i<$questions; $i++)
{
	fwrite($fp, "\n\$question[$i] = \"".$question[$i]."\";\n");
	for($j=0; $j<$types; $j++)
	{
		fwrite($fp, "\$answer[$i][$j] = \"".$answer[$i][$j]."\";\n");
	}
}
fwrite($fp, "?>");
fclose($fp);

// Inform the user
echo "Your quiz has been saved.  You may access it through: http://www.yoururl.com/yourpath/quiz.php?quiz=$name<BR><BR>(replace yoururl and yourpath with the URL and path of the quiz script on your server)"
?>
