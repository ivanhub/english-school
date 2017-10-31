<div id="layout">
   <a href="#menu" id="menuLink" class="menu-link">
   <span></span>
   </a>
   <div id="menu">
      <div class="pure-menu pure-menu-open">
         <a class="pure-menu-heading" href="#"><center>CEDS</center></a>
         <?
         $userid =$_GET['userid'];
         $nama   =$_GET['nama'];

	 $pass   =$_SESSION['pass'];
         
  	 $_SESSION['passingvariable']="session";
 	 $_SESSION['pass']=$pass;
 	 $_SESSION['userid']=$userid;


	 $pic=$userid;
	 $foto="../guru/".$pic.".jpg";
	 echo "<img src=\"$foto\" width=\"100%\" align=\"center\" border=\"0\"><center>";
	 echo $nama;
	 echo "<br>";
	 echo "$userid</center>";
         echo "<li><a href=\"../login2.php?userid=$userid\">Home</a></li>";
	 ?>
         <li><a href="../index.php">Logout</a></li>
         </ul>
       </div>
    </div>

<!--- Bagian Utama -->

    <div id="main">
        <div class="header">