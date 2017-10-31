<html>
<head>
<title>Wirawan Test</title>

<!--Ulangan Online
Untuk pelajar sekolah dari tingkat SD, SMP, SMA, SMK, Kampus, Bimbingan belajar
dikembangkan oleh CEdS lembaga yang memfokuskan diri pada pamanfaatan Teknologi
informasi untuk bidang pendidikan. -->
<?php
$userid  =$_POST['userid'];
$pass    =$_POST['pass'];
echo "</head>";

echo "<frameset cols=15%,85% border=0 frameborder=no>";
    echo "<frame src=login2.php?userid=$userid&pass=$pass marginwidth=0 frameborder=no name=utm scrolling=no>";
    echo "<frameset rows=18%,82% border=0 frameborder=no>";
       echo "<frame src=atas.php marginwidth=0 marginheight=0 frameborder=no name=atas scrolling=no>";
       if (substr($userid,0,3)=="sis")
       {
          echo "<frame src=\"bawah.php\" name=\"bawah\">";
       }
       else
       {
          echo "<frame src=\"bawah.php\" name=\"bawah\">";
       }
    echo "</frameset>";
echo "</frameset>";
?>
</html>

