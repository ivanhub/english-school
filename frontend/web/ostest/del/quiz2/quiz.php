<?
// This script displays the quiz selected

// Display the header
include('header.htm');

$quiz = $_GET['quiz'];
$quizfile = $quiz.".qz";

include($quizfile);
echo "<h2>$title</h2>";
?>
Answer these questions as honestly as you can.  If you think more than one applies to you, just try
to pick the one that <i>most</i> applies to you.<BR><BR>
<center>
<form action="quizresults.php?quiz=<? echo $quiz ?>" method=post>
<table border=0 width="100%">
<?

// Show all the questions and allow the user to select answers
for ($i=0; $i<$questions; $i+=1)
{
?>
	<tr>
      <td colspan=2 bgcolor="#999999"><font color="#000000"><? echo $question[$i]; ?></font></td>
    </tr>
<?
	for ($j=0; $j<$types; $j+=1)
	{
?>
		<tr>
			<td valign=top width=1><input type="radio" name="q_<? echo $i+1; ?>" value="<? echo $j+1; ?>">
			<td><? echo $answer[$i][$j]; ?></td>
		</td></tr>
<?
	}
}
?>
</TABLE>
<BR><BR>
<input type="submit" value="Give me my results!"></center>
</form>
<?
// Display the footer
include('footer.htm');
?>