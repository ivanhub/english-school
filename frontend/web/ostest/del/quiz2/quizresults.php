<?
// This script determines the results of the quiz
// and displays them to the user

// Display the header
include('header.htm');

$quiz = $_GET['quiz'];
$quizfile = $quiz.".qz";

include($quizfile);

// Set up the current max value sets
for ($i=1; $i<=$types; $i+=1)
{
	$nowval[$i] = 0;
}

// Add up each question's answers
for ($i=1; $i<=$questions; $i+=1)
{
	$qvar = "q_$i";
	tally ($_POST[$qvar]);
}

// Determine the dominant answer type
$dominant = 1;
$domval = $nowval[1];
for ($i=2; $i<=$types; $i+=1)
{
	if ($domval < $nowval[$i])
	{
		$dominant = $i;
		$domval = $nowval[$i];
	}
}

// Function to tally the number of responses for each answer
function tally ($question)
{	
	global $nowval;
	$nowval[$question]++;
}
?>
<h2>Your Quiz Results:</h2>
<?
echo $type[$dominant-1];

if (is_file("$quiz.rsl"))
{
	$fp = fopen("$quiz.rsl", 'r');
	$line = fgets($fp, 1024);
	fclose($fp);
	$people = explode("|", $line);
	$people[$dominant-1] += 1;
	
	$timestaken = 0;
	foreach($people as $tally)
	{
		settype($tally, 'integer');
		$timestaken += $tally;
	}
	
	$fp = fopen("$quiz.rsl", 'w');
	for($i=0; $i<$types; $i++)
	{
		fwrite($fp, $people[$i]."|");
	}
	fclose($fp);
}
else
{
	for($i=0; $i<$types; $i++)
	{
		$people[] = 0;
	}
	$people[$dominant-1] += 1;
	$timestaken = 1;
	
	$fp = fopen("$quiz.rsl", 'w');
	for($i=0; $i<$types; $i++)
	{
		fwrite($fp, $people[$i]."|");
	}
	fclose($fp);
}

$percentage = ($people[$dominant-1] / $timestaken) * 100;

$dec=2;
$format="%.$dec" . "f";  
$number=sprintf($format,$percentage);
$percentage=strtok($number,".");
$dc=strtok(".");   

if ($dec!=0) 
{ 
        $percentage = "$percentage" . ".$dc";
} 

echo "<HR>This quiz has been taken $timestaken times.  Your personality type matches $percentage% of the people who have taken this quiz.";
	
// Display the footer
include('footer.htm');	
?>