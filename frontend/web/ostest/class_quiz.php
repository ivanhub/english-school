<?php

// version 0.2
// version 0.3 removing notes and preparing for gnu release

class quiz 
//  osQuest5 PHP/XML based Quiz software (and associated Text to XML module)
//  Copyright (C) 2009  Jon-Michael C. Brook
//  based on osQuest4 PHP/XML based Quiz software (and associated Text to XML module)
//  Copyright (C) 2007  Jay Banks
//
//  These program are free software: you can redistribute them and/or modify
//  them under the terms of the GNU Affero General Public License as
//  published by the Free Software Foundation, either version 3 of the
//  License, or (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU Affero General Public License for more details.
//
//  A copy of the GNU Affero General Public License is provided below
//  and it applies to all programs in this archive.
//  See also: <http://www.gnu.org/licenses/> or
//  http://www.fsf.org/licensing/licenses/agpl-3.0.html.
//
//

{
    // change below values to adjust preferences
    //

    //
    //var $script_url='http://www.my-domain.com/quiz';
    //URL address to the base folder of this script, use a full URL and do NOT leave on the trailing /
    var $script_url = 'http://www.my-domain.com/quiz';

   
    // example:  'http://www.my-domain.com/quiz'
    // (this file being located at
    // http://www.my-domain.com/quiz/class_quiz.inc.php)
    
    var $xml_url = 'xmldocs';
    //location of XML quiz documents relative to this file change above values to adjust preferences DO NOT change anything below this line
                                  
    var $quizID;
    var $mode;
    var $current_question = 1;
    var $error = '';

    var $in_question = 0;
    var $in_section = '';

    var $parseXML_cache = null;
    var $parsed_XML = array();

    function quiz($quizID, $mode = 'test')
    {
        $this->quizID = $quizID;
        $this->mode = strtolower($mode);
        if (!($this->mode == 'test' || $this->mode == 'learning' || $this->mode ==
            'flash'))
        {
            $this->error = 'Error: "' . $this->mode .
                '" is not a valid quiz mode. valid modes are "test" "learning" and "flash"';
        }
        
        $this->xml_url = dirname(__file__) . '/' . $this->xml_url;
    }
    
    function do_quiz_here()
    {
        logit('---------------------------------------------------','t2xlog1.txt');
        logit('inside do quiz here','t2xlog1.txt');
        if (isset($_POST['next_question']))
        {
            logit ('inside of isset post next question','t2xlog1.txt');
            if (!isset($_POST['answers'][$_POST['next_question'] - 1]) && $this->mode !=
                'flash')
            {
                $_POST['next_question'] = $_POST['next_question'] - 1;
            }
            $this->print_question($_POST['next_question']);
        } else
        {
            logit('else of isset post next question','t2xlog1.txt');
            unset($_POST);
            $this->print_question(1);
            logit('back from this print question','t2xlog1.txt');
        }
      logit ('end of do quiz here','t2xlog1.txt');
      logit('---------------------------------------------------','t2xlog1.txt');
        
    }
    
    function print_question($question_num)
    {
        logit('<-----PRINT QUESTION BEGIN---------------------------------------------->','t2xlog1.txt');
     
        logit ('question num is '.$question_num.' inside of print question first line in','t2xlog1.txt');
        $question_num = (int)$question_num;
        //$data=$this->parseXML($this->quizID.'.xml');
        //==================> 0.3
        // changed to line below v.0.3

        $data = $this->parseXML($this->quizID);
        if ($data !== false)
        {
            logit('----data is not equal equal false','t2xlog1.txt');
            logit('----data::'.$data,'t2xlog1.txt');
        
            $a = $this->parsed_XML[$question_num];
            $count_a = count($this->parsed_XML);
            //if in learning mode print previous answer
            if ($question_num <= $count_a)
            {
                if ($this->mode != 'flash')
                {
                    if ($this->mode == 'learning' && $question_num > 1)
                    {
                        $this->learning_mode_print_answer($question_num - 1);
                    }
                    //begin printing question

                    echo ('
          <h4>' . $a['text'] . '</h4>
          <form action="" method="post">
          <input type="hidden" name="next_question" value="' . ($question_num +
                        1) . '">' . "\n");
                    if (isset($_POST))
                    {
                        foreach ($_POST['answers'] as $key => $value)
                        {
                            if (!is_array($value))
                            {
                                echo ('<input type="hidden" name="answers[' . $key . ']" value="' . $value .
                                    '">' . "\n");
                            } else
                            {
                                foreach ($value as $literal_key => $valueison)
                                {
                                    echo ('<input type="hidden" name="answers[' . $key . '][' . $literal_key .
                                        ']" value="on">' . "\n");
                                }
                            }
                        }
                    }
                    //                  print_r($_POST['answers']);

                    if ($a['type'] == 'radio')
                    {
                        foreach ($a as $key => $value)
                        {
                            if (strpos($key, 'choice') !== false)
                            {
                                echo ('<input type="radio" name="answers[' . $question_num . ']" id="' . substr
                                    ($key, 6) . '" value="' . substr($key, 6) . '"><label for="' . substr($key, 6) .
                                    '">' . $value . '</label><br>' . "\n");
                            }
                        }
                    } else
                        if ($a['type'] == 'blank')
                        {
                            echo ('<input type="text" name="answers[' . $question_num .
                                ']" value="" size="50"><br>' . "\n");
                        } else
                            if ($a['type'] == 'box')
                            {

                                foreach ($a as $key => $value)
                                {
                                    if (strpos($key, 'choice') !== false)
                                    {
                                        echo ('<input type="checkbox" id="answers[' . $question_num . '][' . substr($key,
                                            6) . ']" name="answers[' . $question_num . '][' . substr($key, 6) .
                                            ']"><label for="answers[' . $question_num . '][' . substr($key, 6) . ']">' . $value .
                                            '</label><br>' . "\n");
                                    }
                                }
                            }
                    echo ('<br/>
          <input type="submit" value="' . ($count_a == $question_num ?
                        'Подсчитать уровень' : 'Далее') . '">
          </form>
          ');
                } else
                    if ($this->mode == 'flash')
                    {
                        //begin printing question
                        $chkanswer = $this->checkanswer($question_num, 1);
                        echo ('
          <h4>' . $a['text'] . '</h4>
          <h5>Answer: ' . $chkanswer['correct_answer'] . '</h5>
          <h5>Explanation: ' . $a['explanation'] . '</h5>
          <form action="" method="post">
          <input type="hidden" name="next_question" value="' . ($question_num +
                            1) . '">
          <input type="submit" value="Далее">
          </form>
          ');
                        if ($question_num > 1)
                        {
                            echo ('<form action="" method="post">
                <input type="hidden" name="next_question" value="' . ($question_num -
                                1) . '">
                <input type="submit" value="Previous Question">
                </form>');
                        }

                    }
            } else
            {
                if ($this->mode != 'flash')
                {
                    if ($this->mode == 'learning' && $question_num > 1)
                    {
                        $this->learning_mode_print_answer($question_num - 1);
                    }

                    //display test results
                    $total_answers = count($_POST['answers']);
                    $total_correct_answers = 0;
                    //          print_r($_POST['answers']);
                    //          echo('<br>');
                    //          print_r($_POST['answers'][3]);
                    foreach ($_POST['answers'] as $_question_num => $_users_answer)
                    {
                        $chkanswer = $this->checkanswer($_question_num);
                        if ($chkanswer['your_answer'] == $chkanswer['correct_answer'])
                        {
                            $total_correct_answers++;
                        }
                    }

		//	$procent = ($total_correct_answers / $total_answers) * 100;
                    echo ('<h2>' . (number_format(($total_correct_answers / $total_answers) * 100, 0,
                        '.', '')) . '%</h2>
                <h3>Количество правильный ответов: ' . $total_correct_answers . ' из ' . $total_answers . '.<br/><br/>');
			if ($total_correct_answers <= 15) echo "Предполагаемый уровень владения языком - Elementary. 
<br/>Данный результат является предварительным. Для более точного определения уровня необходимо пройти устное собеседования с методистом. 
<br/>Для записи на устное тестирование позвоните по телефону: <b>8 (846) 255-69-99</b>";
			if ($total_correct_answers >= 16 && $total_correct_answers <= 25) echo "Предполагаемый уровень владения языком - <b>Pre-Intermediate</b>. 
<br/>Данный результат является предварительным. Для более точного определения уровня необходимо пройти устное собеседования с методистом. 
<br/>Для записи на устное тестирование позвоните по телефону: <b>8 (846) 255-69-99</b>";

			if ($total_correct_answers >= 26 && $total_correct_answers <= 35) echo "Предполагаемый уровень владения языком - <b>Intermediate</b>. 
<br/>Данный результат является предварительным. Для более точного определения уровня необходимо пройти устное собеседования с методистом. 
<br/>Для записи на устное тестирование позвоните по телефону: <b>8 (846) 255-69-99</b>";

			if ($total_correct_answers >= 36 && $total_correct_answers <= 45) echo "Предполагаемый уровень владения языком - <b>Upper-Intermediate</b>. 
<br/>Данный результат является предварительным. Для более точного определения уровня необходимо пройти устное собеседования с методистом. 
<br/>Для записи на устное тестирование позвоните по телефону: <b>8 (846) 255-69-99</b>";

			if ($total_correct_answers >= 46 && $total_correct_answers <= 50) echo "Предполагаемый уровень владения языком – <b>Advanced</b>. 
<br/>Данный результат является предварительным. Для более точного определения уровня необходимо пройти устное собеседования с методистом. 
<br/>Для записи на устное тестирование позвоните по телефону: <b>8 (846) 255-69-99</b>";


//			 <br/>
			   
//			   <br/><a href="">Повторить</a></h3>');
                } else
                {
                    echo ('Flash card set complete. <a href="">Click here to start over</a>.');
                }
            }
        } else
        {
              logit('----quizerror::'.$this->quiz_error(),'t2xlog1.txt');
        
            echo $this->quiz_error();
        }

    }
    function learning_mode_print_answer($question_num)
    {
        $chkanswer = $this->checkanswer($question_num);
        if ($chkanswer['your_answer'] == $chkanswer['correct_answer'])
        {
            echo "<br>Correct!<br>";
            $colortext = '00FF00';
        } else
        {
            echo "<br>Wrong!!<br>";
            $colortext = 'FF0000';
        }

        echo '<h4><b>PREVIOUS QUESTION:</b> ' . $this->parsed_XML[$question_num]['text'] .
            '</h4>
          <p style="color:#' . $colortext . ';">
          <b>YOUR ANSWER:</b> ' . $chkanswer['your_answer'] . '
          <br>
          <b>THE CORRECT ANSWER:</b> ' . $chkanswer['correct_answer'] . '
          <br>
          <b>EXPLANATION:</b> ' . $this->parsed_XML[$question_num]['explanation'] .
            '
          </p>
          <hr>
         ';
    }
    function checkanswer($question, $your_answer = null)
    {
        //if($this->parseXML($this->quizID.'.xml')!==false && $question>0)
        if ($this->parseXML($this->quizID) !== false && $question > 0)
        {
            $a = $this->parsed_XML[$question];
           
            //debug was below
           
            //echo('<br>checkanswer:<pre><br>dollara<br>');
            //print_r($a);
            //print_r("<br><hr><br>your_answer::$your_answer");
            //echo('<br>underscore post:<br>');
            //print_r($_POST);
            //echo('</pre>');
           
            //debugwasabove
           
            if ($your_answer === null)
            {
                $your_answer = '';
            }
            $correct_answer = '';
            if ($a['type'] == 'radio')
            {
                if ($your_answer === '')
                {
                    $your_answer = $a['choice' . $_POST['answers'][$question]];
                }
                $correct_answer = $a['choice' . $a['answer']];
            } else
                if ($a['type'] == 'blank')
                {
                    if ($your_answer === '')
                    {
                        $your_answer = $_POST['answers'][$question];
                    }
                    
                    // add debug looking around in here...
                    
                    $correct_answer = $a['choice' . $a['answer']];
                    $correct_answer = strtolower($correct_answer);
                    $your_answer = strtolower($your_answer);
                    
                    //echo "<br><hr><br>this is new debug line 222 <br><br>$question<hr><br>";
                    
                    //echo "<pre>
                    //okay the $correct_answer is the dollarcorrect_answer
                    //your_answer is $your_answer
                    //      </pre>";
     
                } else
                    if ($a['type'] == 'box')
                    {
                        $correct_answer_array = explode(',', $a['answer']);
                        sort($correct_answer_array);
                        //        print_r($correct_answer_array);
                        foreach ($correct_answer_array as $key => $value)
                        {
                            $correct_answer_array[$key] = $a['choice' . $value];
                            $correct_answer .= $a['choice' . $value] . ' | ';
                        }
                        if ($your_answer === '')
                        {
                            $your_answers = $_POST['answers'][$question];
                            ksort($your_answers);
                            //          print_r($your_answers);
                            //        die();
                            $your_answers_array = array();
                            foreach ($your_answers as $key => $value)
                            {
                                $your_answers_array[] = $a['choice' . $key];
                                $your_answer .= $a['choice' . $key] . ' | ';
                            }
                            $your_answer = substr($your_answer, 0, -3);
                        }
                        $correct_answer = substr($correct_answer, 0, -3);
                    }

            return array('your_answer' => $your_answer, 'correct_answer' => $correct_answer);
        }
        return false;
    }
    function XML_startTag($parser, $data, $attr)
    {
        if (strtolower($data) == 'question')
        {
            $this->in_question++;
        } else
        {
            $this->in_section = strtolower($data);
        }
    }
    function XML_contents($parser, $data)
    {
        if ($this->in_question > 0 && ($this->in_section == 'text' || strpos($this->
            in_section, 'choice') !== false || $this->in_section == 'answer' || $this->
            in_section == 'explanation' || $this->in_section == 'type'))
        {
            if ($this->in_section == 'answer')
            {
                $data = strtolower($data);
            }
            $this->parsed_XML[$this->in_question][$this->in_section] = $data;
        }
    }
    function XML_endTag($parser, $data)
    {
        if (strtolower($data) == 'question')
        {
            //      $this->in_question++;
        } else
        {
            $this->in_section = '';
        }
    }
    function parseXML($file)
    {
        if ($this->parseXML_cache === null)
        {
            $file = str_replace('\\', '/', $this->xml_url . '/' . $file);

            $this->in_question = 0;
            $this->in_section = '';

            $xml_parser = xml_parser_create();
            xml_set_object($xml_parser, $this);
            xml_set_element_handler($xml_parser, 'XML_startTag', 'XML_endTag');
            xml_set_character_data_handler($xml_parser, 'XML_contents');

            $fp = fopen($file, 'r');
            $data = fread($fp, 80000);

            if (!(xml_parse($xml_parser, $data, feof($fp))))
            {

                //$this->error='XML Document error on line '.xml_get_current_line_number($xml_parser);

                $this->parseXML_cache = false;
                return false;
            }
            xml_parser_free($xml_parser);
            fclose($fp);
            foreach ($this->parsed_XML as $a => $value)
            {
                if (!isset($this->parsed_XML[$a]['type']))
                {
                    $this->parsed_XML[$a]['type'] = 'radio';
                }
            }

            $this->parseXML_cache = $data;
            return $data;
        } else
        {
            return $this->parseXML_cache;
        }
    }
    function quiz_error()
    {
        return $this->error;
    }
}

?>

<?php

function logit($outstr, $filename)
{
 	$nuoutstr=date('h:i:s').'::'.$outstr.chr(13).chr(10);
	//file_put_contents($filename, $nuoutstr , FILE_APPEND);
	
	// filewrite
 $handle = fopen($filename, 'a');
 fwrite($handle, $nuoutstr);
 fclose($handle);
}

?>

