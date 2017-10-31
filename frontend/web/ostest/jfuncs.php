<?php
 //jfuncs.php
 // v0.1
 //
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
