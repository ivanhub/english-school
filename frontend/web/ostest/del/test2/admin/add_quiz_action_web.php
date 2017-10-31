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
		$adding_num_questions = $_POST['num_questions'];
		
		$sql = "SELECT * FROM stats WHERE version=1";
		$query = mysql_query($sql, $mysql_connection);
		$array = mysql_fetch_array($query);
		$num_quizzes = $array['num_quizzes'];
		$num_questions = $array['num_questions'];
		$num_answers = $array['num_answers'];
		
		$num_quizzes++;
		
		$sql = "INSERT INTO quizzes (number, name, questions) VALUES (" . $num_quizzes . ", '" . $_POST['quiz_name'] . "', " . $adding_num_questions . ")";
		mysql_query($sql, $mysql_connection);
		
		for ($on = 1; $on <= $adding_num_questions; $on++)
		{
			$answers_this_question = 0;
			
			if ($_POST['question_' . $on . '_answer_1'] != "")
			{
				$answers_this_question++;
				$num_answers++;
				
				$sql = "INSERT INTO answers (number, quiz, question_order_number, order_number, answer) VALUES (" . $num_answers . ", " . $num_quizzes . ", " . $on . ", 1, '" . $_POST['question_' . $on . '_answer_1'] . "')";
				mysql_query($sql, $mysql_connection);
			}
			
			if ($_POST['question_' . $on . '_answer_2'] != "")
			{
				$answers_this_question++;
				$num_answers++;
				
				$sql = "INSERT INTO answers (number, quiz, question_order_number, order_number, answer) VALUES (" . $num_answers . ", " . $num_quizzes . ", " . $on . ", 2, '" . $_POST['question_' . $on . '_answer_2'] . "')";
				mysql_query($sql, $mysql_connection);
			}
			
			if ($_POST['question_' . $on . '_answer_3'] != "")
			{
				$answers_this_question++;
				$num_answers++;
				
				$sql = "INSERT INTO answers (number, quiz, question_order_number, order_number, answer) VALUES (" . $num_answers . ", " . $num_quizzes . ", " . $on . ", 3, '" . $_POST['question_' . $on . '_answer_3'] . "')";
				mysql_query($sql, $mysql_connection);
			}
			
			if ($_POST['question_' . $on . '_answer_4'] != "")
			{
				$answers_this_question++;
				$num_answers++;
				
				$sql = "INSERT INTO answers (number, quiz, question_order_number, order_number, answer) VALUES (" . $num_answers . ", " . $num_quizzes . ", " . $on . ", 4, '" . $_POST['question_' . $on . '_answer_4'] . "')";
				mysql_query($sql, $mysql_connection);
			}
			
			if ($_POST['question_' . $on . '_answer_5'] != "")
			{
				$answers_this_question++;
				$num_answers++;
				
				$sql = "INSERT INTO answers (number, quiz, question_order_number, order_number, answer) VALUES (" . $num_answers . ", " . $num_quizzes . ", " . $on . ", 5, '" . $_POST['question_' . $on . '_answer_5'] . "')";
				mysql_query($sql, $mysql_connection);
			}
			
			$num_questions++;
			
			$sql = "INSERT INTO real_answer (number, quiz, question_order_number, corect_order_number) VALUES (" . $num_questions . ", " . $num_quizzes . ", " . $on . ", " . $_POST['question_' . $on . '_real_answer_number'] . ")";
			mysql_query($sql, $mysql_connection);
			
			$sql = "INSERT INTO questions (number, quiz, order_number, picture_name, question, answers) VALUES (" . $num_questions . ", " . $num_quizzes . ", " . $on . ", '" . $_POST['question_' . $on . '_picture_name'] . "', '" . $_POST['question_' . $on] . "', " . $answers_this_question . ")";
			mysql_query($sql, $mysql_connection);
		}
		
		$sql = "UPDATE stats SET num_quizzes=" . $num_quizzes . ", num_questions=" . $num_questions . ", num_answers=" . $num_answers . " WHERE version=1";
		mysql_query($sql, $mysql_connection);
		
		echo "<a href=index.php >Go to index</a>";
	} else {
		header("Location: admin_login_web.php");
	}
}

mysql_close($mysql_connection);

?>