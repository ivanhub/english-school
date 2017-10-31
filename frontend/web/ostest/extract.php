<?php

//echo "<pre>20081107 *text2xml.php* v0.4 - adding debugging and tracing - issues with vontu.xml issue 11/01 - JL</pre>";
$submitting='submit';

// $submit2=$_POST[submit];
// $_POST[submit]

// $opt2=$_POST[opt];
// $_POST[opt]

// $ufile2=$_POST[ufile]
// $_POST[ufile]
//

$pass="french";
//$pass=$_POST[pass];
// $_POST[pass]

logit("pass::".$pass);

error_reporting(0);

ini_set("allow_call_time_pass_reference","1");

logit ("Error Reporting set to zero and allow call time pass reference set to 1");

$dir="./tests";//full path name of the text file  directory eg /home/testxml/texts  (without trailing slash) 

$uploaddir="./xmldocs";

logit("dir::".$dir);

logit("uploaddir::".$uploaddir);

logit("did we make it to here..");

if($_POST[submit])
{
  $file=$dir."/".$_POST[ufile];
  if(!file_exists($file))
    $error="no file";
  if(!$error)
  {
    $file2=$uploaddir."/".preg_replace('/\.[^\.]*$/','',$_POST[ufile]).".xml";
    $fi = fopen($file, 'r');
    $ofile=fopen($file2,"w");
  }

   if(!$fi)
     $error="Cannot open file $file for reading ";

   if(!$ofile)
     $error="Cannot open file $file2 for writing results";
}

logit ('error::'.$error);
logit ('file2::'.$file2);
logit("===============================================");

if($_POST[submit]&&!$error){
	
header("content-type: application/xml");
ob_start();
logit("ob_started");
//echo "<pre>";
//

ini_set('memory_limit','64M');
define("BUFFER_SIZE", 1024);

// $_POST[submit]
// $_POST[opt]
// $_POST[ufile]
//


$parser = new Parser($fi,intval($_POST[opt]),filesize($file));

logit("right before doparse");

$parser->doparse();
// added gendoc here..
logit("right after doparse");
// just took it out
//$parser->genDoc();
//logit("right back from parser gendoc");

$data=ob_get_clean();

logit("data::".$data);

echo $data;

//$data=preg_replace("/[\r\n]*/","\t",$data);

$data=preg_replace("/[\r]*/","\t",$data);
logit("just did a preg replace");
logit("ofile::".$ofile);

fwrite($ofile,$data);

fclose($ofile);

if($_GET['echo'])
echo $data;
else
{
ob_end_clean();
echo "<br>";
echo "<Result>There was a parsing error.. Please check your file format.</Result>";
echo "<br><br><a href=index.php>Home</a>";
echo "<br><br><a href=/xmldocs/simpletest.xml>simpletest.xml</a>";
}

}
else{
	echo "$error - this condition was reached<br/>";
?>




  does this just appear before the form only?

  <form action='' method='post' enctype='multipart/form-data'>
 
  <input type='checkbox' name='opt' value='1'/>Keep Numbers
  
  
  <p>Text  file  Name </p>
  <input type='text' name='ufile' size='20' value='simpletest.txt'  /><br/>
  <input type='submit' value='Submit' name='submit'/>
  
  </form>
  

<?php

  echo "when did this appear?";
}
//echo "this line was reached<br/>";
//$parser->genDoc();
class Parser {
	var $str;
	var $cur;
	var $f;
	var $len;
	var $state;
	var $s;
	var $t;
	var $prev;
	var $opt;
	var $q;
	var $c;
	var $a;
	var $e;
  var $res;
	function Parser(&$f, $opt = '',$size) {
		$this->f = $f;
		$this->s = "";
		$this->t = '';
		$this->res='';
		$this->str = "";
		$this->cur = 0;
		$this->len = 0;
		$this->state = 'n';
		$this->prev = '';
		$this->opt = $opt; /* 0: no number  */
		$this->q = new Q();
		$this->a = new A();
		$this->c = new C();
		$this->e = new E();
			$this->len = $size;
			$this->cur = 0;

	}
	function strs($i){
		if($this->len<=$i)
		return false;
	if(fseek($this->f,$i,SEEK_SET)==-1)
	return false;
	return fread($this->f,1);
	}
	
	function get() {
		global $ofile;
		if ($this->cur >= $this->len) {
			if($this->cur)
		{
			if($this->state=='e'&&is_object($this->e))
			$this->setstate('',$this->e);
else 
			if($this->state=='a'&&is_object($this->a))
			$this->setstate('',$this->a);
else
return -1;
			$this->addBlock();
	echo "<Quiz>".$this->res."</Quiz>";
		$this->str='';
		////var_dump($this);
///		echo htmlspecialchars($this->s);


if($ofile){
$data=ob_get_clean();

// Original Line Follows - removed "tab"
//$data=preg_replace("/[\r\n]*/","\t",$data);

$data=preg_replace("/[\r]*/","",$data);
fwrite($ofile,$data);
fclose($ofile);
}

if($_GET['echo'])
echo $data;
else{
ob_end_clean();
echo "<Result>Parsing ended successfully and for whatever its worth the get echo was true... wtf is get echo??</Result>";
echo "<br><br><a href=index.php>Home</a>";
echo "<br><br><a href=/xmldocs/simpletest.xml>simpletest.xml</a>";
} 


		exit;
		}
		
		}
///		echo $this->str[$this->cur];
   	return $this->strs($this->cur++);

	}
	function forward($x) {
		$s = '';
		$str = array ();
		$j = 0;
$i=$this->cur;
$dx='';
do{
$c=$this->strs($i);
if(preg_match('/\s/',$c)&&!$dx)
$x++;
else{
$dx.=$c;
}
$i++;
}while($i<$this->cur+$x);		
$this->cur=$i;
return strtolower($dx);
	}
	

	
	function readahead($x = 1) {	
		$s = '';
		$j = 0;
$i=$this->cur;
$dx='';
		do{
		$d=$this->strs($i);
		if(preg_match('/\s/',$d)&&!$dx){
		$x++;
				}
		else
		$dx.=$d;
		$i++;
		}while($i<$this->cur+$x);
		
		
	
	return strtolower($dx);
	
	
	}
	function readmatch($match,$c=''){
		global $debug;
		$s = '';
		$j = 0;
$i=$this->cur;
$dx='';
if($c)
if(!preg_match("/\s/",$c)){
$this->cur--;
$dx=$c;
}
$j=0;

		do{
		$d=$this->strs($i);
		if($debug)
		echo $d;
		if(preg_match("/$match/i",$dx)){
		break;
				}
		else
		$i++;
		if(preg_match('/\s/',$d)&&!$dx){}
		else{
		$j++;
		$dx.=$d;
		}
		}while($i<$this->len&&$j<4);
	
		if(!preg_match("/$match/i",$dx))
		return false;
	
		
return $i-$this->cur;		
	
	
	}
	function read($l){
	$dx='';
	for($i=$this->cur;$i<$this->cur+$l;$i++){
	$d=$this->strs($i);
	if(preg_match('/\s/',$d)&&!$dx)
	continue;
	$dx.=$d;
	
	}
	return $dx;
	}
	function forwardto($l){
		$dx='';
	for($i=$this->cur;$i<$this->cur+$l;$i++){
	$d=$this->strs($i);
	if(preg_match('/\s/',$d)&&!$dx)
	continue;
	$dx.=$d;
	}
	$this->cur+=$l;
return $dx;
	}
	function readnum() {

	}
	function setstate($state, $node) {
		$this->prev = $this->state;
		
		switch ($this->state) {
			case 'q' :
		
				$this->s.= "<TEXT>" . htmlspecialchars($this->q->s, ENT_NOQUOTES) . "</TEXT>";
				$this->t = $this->q->t;
	///	echo $this->q->s;

				break;
			case 'c' :
				$c = $node->s;
				if ($node->s[0])
					$str .= "<CHOICEA>" .
					trim(htmlspecialchars($node->s[0], ENT_NOQUOTES)) . "</CHOICEA>";
				if ($node->s[1])
					$str .= "<CHOICEB>" .
					trim(htmlspecialchars($node->s[1], ENT_NOQUOTES)) . "</CHOICEB>";
				if ($node->s[2])
					$str .= "<CHOICEC>" .
					trim(htmlspecialchars($node->s[2], ENT_NOQUOTES)) . "</CHOICEC>";
				if ($node->s[3])
					$str .= "<CHOICED>" .
					trim(htmlspecialchars($node->s[3], ENT_NOQUOTES)) . "</CHOICED>";
				if ($node->s[4])
					$str .= "<CHOICEE>" .
					trim(htmlspecialchars($node->s[4], ENT_NOQUOTES)) . "</CHOICEE>";
			
			

			$this->s.=$str;

				break;
			case 'e' :
				$this->s .= "<EXPLANATION>" . htmlspecialchars($node->s, ENT_NOQUOTES) . "</EXPLANATION>";
				break;
			case 'a' :
			
			if ($this->q->t == 'b')
					$str = "<TYPE>blank</TYPE>";
				else
					if ($this->q->t == 'm') {
						$str= "<TYPE>box</TYPE>";
						// added this to trim spaces between
						// multiple choice answers.
						//
						$temp = str_replace(" ","",$node->s);
						$node->s = $temp;
					}
					else {
						$str= "<TYPE>radio</TYPE>";

					}
				$this->q->t='';	
				$this->s .= "$str<ANSWER>" . trim(htmlspecialchars($node->s, ENT_NOQUOTES)) . "</ANSWER>";

				break;
		//	default :
		//		$this->state = 'n';
		}
		$this->state = $state;
		switch($state){
		case 'q':
$dx='';
		
$dx=$this->forwardto($this->readmatch("\d+\."));
			if ($this->opt) {
				$this->q->s = $dx;
				return;
			}
			return;
		break;
		case 'c':
	
			
				$d=$this->readmatch("a\.");
				if(!$d)
				return false;
				$dx=$this->read($d);
				$this->forwardto($d);
			  if($this->opt)
			  $this->c->c=strtolower($dx);
break;
  case 'a':

  $d=$this->readmatch("ans:");
		
$d= $this->forwardto($d);
break;
case  'e':
break;			
default:
break;
		
		}
		
		
	}
	function addBlock() {
		$this->res .= "<QUESTION>" . $this->s . "</QUESTION>";
		$this->s = '';
		$this->state = 'n';
		$this->t = '';
		$this->q = new Q();
		$this->a = new A();
		$this->c = new C();
		$this->e = new E();
		$this->prev = '';
	}
	function genDoc(){
	//echo "inside of genDoc did this 222 happen monday 13th";
	header("Content-Type: application/xml");
	echo '<xml version="1"><QUIZ>';
	echo htmlspecialchars($this->s, ENT_NOQUOTES);
	echo "</QUIZ>";
	
	
	}

	function doparse() {
	  logit("first line inside of doparse");
		while (($c = $this->get()) !== -1) {
			switch ($this->state) {

				case 'q' :
					$this->q->add($c, $this);
					break;
				case 'c' :
					$this->c->add($c,$this);
					break;
				case 'a' :
					$this->a->add($c, $this);
					break;
				case 'e' :
						$this->e->add($c, $this);
					break;
				case 'n' :
					if ($this->prev == 'a' || $this->prev == 'e') {
						$this->addBlock();
					}
					else {
				$x=$this->readmatch("\d+\.",$c);
///d($x);
				if($x)
				$this->setstate('q',$this);
 			
					}

			}

		}

	}

}




class N {
	var $t;
	var $s;
	var $st;
	function add($x, $parser) {
	}
}




class Q extends N {
	var $t;
	var $s;
	var $st;
	function add($x, $parser) {

		if ($x == '_'&&$this->t!='b') {
			$d = $parser->readahead();
			if ($d == '_') {
				$this->t = 'b';
			}
		}
		if ($x == "\n") {
		///	if ($this->t != 'b') {
				$d = $parser->readahead(2);
				if ($d == 'a.') {
				return $parser->setstate('c', $this);
				}
	///		}
///			else {
///				$d = $parser->readahead(4);
///				if ($d == 'ans:') {
///				return $parser->setstate('a', $this);
///				}

//			}
		}
		$this->s .= $x;

	}
}
class A extends N {
	var $t;
	var $s;
	var $st;
	function add($x, $parser) {
		if ($x == "\n") {
			$ax = explode(",", $this->s);
			if (count($ax) > 1&&$parser->q->t!='b') {
				$parser->q->t = 'm';
	////			return;
			}
			else {
	///			if (strstr(strtolower($parser->q->s), '(choose')) {
////					$parser->q->t = 'm';
				//// return;
	///			}

			}
			$dx = "";
			$d = $parser->readmatch("\d+\.");
	////		d($parser->read($d));
			if ($d) {
				$parser->setstate('e',$this);
				$parser->addBlock();
///					$parser->setstate('q', $this);
			
			}
			else {
				{
					$parser->setstate('e', $this);
				return;
				}
			}
		}
		$this->s .= $x;
	}
}



class E extends N {
	var $t;
	var $s;
	var $st;
	function add($x, $parser) {
		global $debug;
		if ($x == "\n") {
			$dx = "";
			
	//		$debug=true;
			$d = $parser->readmatch("^\d+\.");
			if ($d) {
			$parser->setstate('',$this);
			$parser->addBlock();
			}
			else {
		///		$parser->genDoc();
				///if(!$parser->eof())
				//$parser->setstate('n',$this); 	
			}

		}
		$this->s .= $x;
	}
}
class C extends N {
	var $t;
	var $s;
	var $st;
	var $c;
	function C() {
		$this->c = '';
		$this->s = array();
		$this->st='A';
	}
	function add($x, $parser) {
		if ($x == "\n") {
			
			$d = $parser->readahead(2);
			switch ($this->st) {
				case 'A' :
					if ($d == 'b.') {
						$this->s[0] = $this->c;
						$parser->forward(2);
						if($parser->opt)
						$this->c = $d;
						else
						$this->c='';
						$this->st = 'B';
					}
												else
						if ($d == 'an') {
							$d = $parser->readahead(4);
							if ($d == 'ans:') {
							    // this is a blank one choice only question..
									$parser->q->t = 'b';
								  //$this->s[2] = $this->c; changed 6/26 jl
								  $this->s[0] = $this->c;
								  return $parser->setstate('a', $this);

							}

						}
					
					break;
				case 'B' :
					if ($d == 'c.') {
						$this->s[1] = $this->c;
						$parser->forward(2);
						if($parser->opt)
						$this->c = $d;
						else
						$this->c='';
						$this->st = 'C';


					}
							else
						if ($d == 'an') {
							$d = $parser->readahead(4);
							if ($d == 'ans:') {
								$this->s[2] = $this->c;
								return $parser->setstate('a', $this);

							}

						}
					break;
				case 'C' :
					if ($d == 'd.') {
						$this->s[2] = $this->c;
						$parser->forward(2);
						if($parser->opt)
						$this->c = $d;
						else
						$this->c='';
						$this->st = 'D';


					}
					else
						if ($d == 'an') {
							$d = $parser->readahead(4);
							if ($d == 'ans:') {
								$this->s[2] = $this->c;
								return $parser->setstate('a', $this);

							}

						}
					break;
				case 'D' :
									if ($d == 'e.') {
						$this->s[3] = $this->c;
						$parser->forward(2);
						if($parser->opt)
						$this->c = $d;
						else
						$this->c='';
						$this->st = 'E';


					}	else
						if ($d == 'an') {
							$d = $parser->readahead(4);
							if ($d == 'ans:') {
								$this->s[3] = $this->c;
								return $parser->setstate('a', $this);

							}
						}
					break;

				case 'E' :
					$d = $parser->readahead(4);
					if ($d == 'ans:') {
						$this->s[4] = $this->c;
						return $parser->setstate('a', $this);

					}
					break;

		
			}

		}
		
		$this->c .= $x;

	}
}
/*
 * used for debugging only
 */
function d($x,$val="val"){
	return;
	if(is_array($x)){
	echo "<br/>-----";
	print_r($x);
	echo "---<br/>";
	}
	else
echo "$val: $x";
exit;
}
?>

<?php

function logit($outstr)
{
 	$nuoutstr=date('h:i:s').'::'.$outstr.chr(13).chr(10);
	//file_put_contents($filename, $nuoutstr , FILE_APPEND);
	// if this were php 5.0+
	// filewrite
 $handle = fopen('t2xlog1.txt', 'a');
 fwrite($handle, $nuoutstr);
 fclose($handle);
}