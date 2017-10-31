<?
// This script shows the forms to create a new quiz.

include('config.php');

// Make sure that the page is set properly
$page = $_GET['page'];
if(empty($page))
{
	$page = 1;
}

// Show the first page if requested
if($page == 1)
{
	?>
	<form action="quizmake.php?page=2" method=POST>
	<table border=0>
	<tr>
		<td>Quiz File Name: (optional)</td>
		<td><input type=text name="name"></td>
	</tr>
	<tr>
		<td>Quiz Title:</td>
		<td><input type=text name="title"></td>
	</tr>
	<tr>
		<td>Number of Personality Types:</td>
		<td><input type=text name="types"></td>
	</tr>
	<tr>
		<td>Number of Questions:</td>
		<td><input type=text name="questions"></td>
	</tr>
	<?
	if(!empty($password))
	{
	?>
	
	<tr>
		<td>Password:</td>
		<td><input type=password name="formpass"></td>
	</tr>
	
	<?
	}
	?>
	</table>
	<input type=submit value="Submit">
	</form>
	<?
}
else
{
	// Retrieve the data from the previous form
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
	
	if(empty($name))
	{
		$name = time();
	}
	
	$name = stripslashes($name);
	$title = stripslashes($title);
	settype($types, 'integer');
	settype($questions, 'integer');
	
	if(($types == 0) || ($questions == 0) || (empty($title)))
	{
		echo "<BR><font color=FF0000>ERROR: Please fill in all fields properly</font><BR><BR>";
		die();
	}
	
	// Change to all lower case
	$name = strtolower($name);

	// Replace all spaces with dashes
	$name=str_replace(" ", "-", $name);
	
	// If the name has more than 10 characters, truncate it.
	if(strlen($name2) > 10)
	{
		$name = substr($name,0,10);
	}
	
	?>
	<form action="quizmakewrite.php" method=POST>
	<B>Personality Types:</B><BR>
	Input the description of each personality type here that will be shown to the user.
	Generally, it will start with "You are a...".  You may use HTML code.
	<table border=0>
	<?
		for($i=0; $i<$types; $i++)
		{
			$pnum = $i+1;
			
			echo "<tr><td>$pnum:</td><td><textarea name=\"type$i\"></textarea></td></tr>\n";
		}
	?>
	</table><BR>
	<?
	for($i=0; $i<$questions; $i++)
	{
		$qnum = $i+1;
		echo "<B>Question $qnum: </B><input type=text name=\"question$i\">";
	?>
		<table border=0>
		<?
			for($j=0; $j<$types; $j++)
			{
				$pnum = $j+1;
			
				echo "<tr><td>Answer for type $pnum:</td><td><input type=text name=\"$i-$j\"></td></tr>\n";
			}
		?>
		</table><BR>
	<?
	}
	echo "<input type=hidden name=\"name\" value=\"$name\">";
	echo "<input type=hidden name=\"title\" value=\"$title\">";
	echo "<input type=hidden name=\"types\" value=\"$types\">";
	echo "<input type=hidden name=\"questions\" value=\"$questions\">";
	echo "<input type=hidden name=\"formpass\" value=\"$formpass\">";
	?><input type=submit value="Submit"><?
}
?>
</form>	