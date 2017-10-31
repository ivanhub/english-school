<?php
 echo "<br><h1>uploadform.php</h1><br>";
 include "indexbar.php";
 echo "<br>";
 echo "<br>";
// echo "v0.11 uploadform.php";
 echo "<br>";
 echo "<br>";
 ?>
<BR>
<BR>
<br>
<br>
<body>

<form action="upload_file.php" method="post"
enctype="multipart/form-data">
Select a file to upload:
<label for="file">Filename:</label>
<br />
<input type="file" name="file" id="file" /> 
<br />
<BR>
<br>
Password:
<br />
<br />
<input type="password" name=pass />
<br />
<br />

<input type="submit" name="submit" value="Submit" />
<br />
<br />
</form>

</body>
</html>

<?php

  echo " ";

?>
