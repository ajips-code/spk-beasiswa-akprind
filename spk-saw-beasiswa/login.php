<?php
include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();
	
if($_POST){
	
	include_once 'includes/login.inc.php';
	$login = new Login($db);

	$login->userid = $_POST['username'];
	$login->passid = md5($_POST['password']);
	
	if($login->login()){
		echo "<script>location.href='index.php'</script>";
	}
	
	else{
		echo "<script>alert('Gagal Login..! Ulangi Lagi...')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SPK - SAW</title>
	<link rel="shortcut icon" href="images/logo.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:url(images/login.png) left center fixed; background-size:cover;">
  
	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		 <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>-->
<strong style="font-size:14pt; color:#ddd; text-shadow:2px 2px 2px rgb(250, 120, 21); letter-spacing: 1px;"><img src="images/logo.png" height="50" width="50"> 
SISTEM BEASISWA INSTITUT SAINS & TEKNOLOGI AKPRIND YOGYAKARTA
 </strong>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="http://www.codeberkas.xyz/">Code Berkas</a></li>
			<li><a href="http://kautube.com/">Kautube</a></li> 
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  
    <div class="container">
		<div class="row">
		  <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
		  <div class="col-xs-12 col-sm-4 col-md-4">
		  	
		  	<div style="margin-top: 100px;" class="panel panel-default"><div class="panel-body">
		  		<div class="text-center"><h4>Form Login</h4></div>
		  		<form method="post">
				  <div class="form-group">
				    <label for="InputUsername1">Username</label>
				    <input type="text" class="form-control" name="username"  id="InputUsername1" autocomplete="off" placeholder="Nama Pengguna" required="" autofocus="" data-errormessage-value-missing="username masih kosong..!">
				  </div>
				  <div class="form-group">
				    <label for="InputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Kata Sandi" required="" autofocus="" data-errormessage-value-missing="password masih kosong..!">
				  </div>
				
				  <button type="submit" class="btn btn-primary">Login</button>
				</form>
		  	</div></div>
		  	
		  </div>
		  <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/civem.js"></script>
  </body>
</html>