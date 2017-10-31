<?php

// v 0.94
//  osQuest5 PHP/XML based Quiz software (and associated Text to XML module)
//  Copyright (C) 2009  Jon-Michael C. Brook & Johnny Lang
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


 include "indexbar.php";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<h1>";
 echo "Pick Your mode";
 echo "</h1>";
 echo "<br><br>";
 echo "<form action=generatequiz.php>";

 echo "<SELECT name=var1>";
 include "optionmaker.php";

 echo "</SELECT>";
 echo "<BR>";
 echo "<BR>";
 echo "<SELECT name=var2>";
 echo "<OPTION>test</OPTION>";
 echo "<OPTION>learning</OPTION>";
 echo "<OPTION>flash</OPTION>";
 echo "</SELECT>";
 echo "<BR>";
 echo "<BR>";
 echo "<BR>";
 echo "<input type=submit></input>";
 echo "</form>";
 echo "<BR>";

 
 ?>
