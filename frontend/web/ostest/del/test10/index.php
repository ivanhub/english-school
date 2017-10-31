<?php
session_start();
$_SESSION['passingvariable']="post";
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
<!--  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
  <meta name="viewport" content="width=device-width,initial-scale=0.8" />

  <title>Wirawan Test</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mobile2.css">
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

  <section class="container">
    <div class="login">
      <h1>Wirawan Test</h1>
      <form method="post" action="login2.php">
        <p><input type="text" name="userid" value="" placeholder="user ID kamu"></p>
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Inget user ID dan password
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
  </section>
</body>
</html>
