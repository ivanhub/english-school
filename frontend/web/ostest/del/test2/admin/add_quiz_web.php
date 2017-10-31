<?php

include("../config.php");
include("../mysql_connect.php");

if (isset($_COOKIE['session_id']) == FALSE) {
	header("Location: admin_login_web.php");
} else {
	$username = $_COOKIE['username'];
	$password_md5 = $_COOKIE['password_md5'];
	$session_id = $_COOKIE['session_id'];
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$sql = "SELECT * FROM sessions WHERE session_id='" . $session_id . "' AND username='" . $username . "'";
	$query = mysql_query($sql, $mysql_connection);
	$array = mysql_fetch_array($query);
	if (($array['password_md5'] == $password_md5) && ($array['ip'] == $ip) && ($array['time_started'] >= (time() - 900))) {
		$num_questions = $_GET['questions'];
		
		echo "<form action='add_quiz_action_web.php' method='post'>";
		
		echo "<input name='num_questions' value='" . $num_questions . "' type='hidden' />";
		
		echo "Quiz Name: ";
		echo "<input type='text' name='quiz_name' />";
		echo "<br />";
		
		for ($question = 1; $question <= $num_questions; $question++)
		{
			echo "Question " . $question . ":";
			echo "<input type='text' name='question_" . $question . "' />";
			echo "<br />";
			
			echo "Answer 1: ";
			echo "<input type='text' name='question_" . $question . "_answer_1' />";
			echo "<br />";
			echo "Answer 2: ";
			echo "<input type='text' name='question_" . $question . "_answer_2' />";
			echo "<br />";
			echo "Answer 3: ";
			echo "<input type='text' name='question_" . $question . "_answer_3' />";
			echo "<br />";
			echo "Answer 4: ";
			echo "<input type='text' name='question_" . $question . "_answer_4' />";
			echo "<br />";
			echo "Answer 5: ";
			echo "<input type='text' name='question_" . $question . "_answer_5' />";
			echo "<br />";
			
			echo "Real answer number: ";
			echo "<input type='text' name='question_" . $question . "_real_answer_number' />";
			echo "<br />";
			
			echo "Question picture name: ";
			echo "<input type='text' name='question_" . $question . "_picture_name' />";
			echo "<br />";
		}
		
		echo "<input type=submit />";
		
		echo "</form>";
	} else {
		header("Location: admin_login_web.php");
	}
}

mysql_close($mysql_connection);

?>