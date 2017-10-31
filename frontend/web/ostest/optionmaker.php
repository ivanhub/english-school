<?php

if ($handle = opendir('./xmldocs')) {
    //echo "Directory handle: $handle\n";
    //echo "Files:\n";
    //echo "<br>";
    //echo "<br>";
    $i=1;
    // List all the files
    while (false !== ($file = readdir($handle))) {
        if ($i>2) {
        echo "<OPTION>$file</OPTION>";
        //ECHO "<br>"; 
        }
        $i++;
    
    }

    closedir($handle);
}
 
?>
