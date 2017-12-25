<!--webbot bot="PurpleText"
PREVIEW="This file is part of osQuest5. osQuest5 is free software published under the terms of the GNU General Public License (AGPL v.3 or later)."
-->
<?php
//$var1 = trim($_REQUEST['var1']);
//$var2 = trim($_REQUEST['var2']);

$var1 = "ourtest.xml";
//$var1 = "simpletest.xml";
$var2 = "test";

//echo "<br>";  
//echo "<h2><b>generatequiz v0.96   vontu.xml issue 10/31/2008</b></h2> - with $var1 as filename and $var2 as the mode.<br>";

//echo "<br>";  

// -v0.31 changed to class_quiz.php from class_quiz.inc.php
//   ^^^^  that worked as there was no class_quiz
// v0.32 new quiz class instantiated with var1 and two
// from index.php as variables to use to switch the
// quiz engine into different modes.

require('class_quiz.php');
$quiz=new quiz($var1,$var2);

//$quiz=new quiz($var1, $var2);
//$quiz=new quiz('xmldoc','learning');
//$quiz=new quiz('xmldoc','flash');

//xmldoc.xml is the name of the quiz file inside the XMLdocs directory, which is why the first paramter is xmldoc. this is used to
//change what test your doing etc

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Тест на уровень английского языка</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="styles.css" rel="stylesheet">
</head>

<body>
<!--<p class="quiz-header"> Тест на уровень английского языка </p>-->
<?php

$quiz->do_quiz_here(); //pretty self explanatory
?>
</body>
</html>
