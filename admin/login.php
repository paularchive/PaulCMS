<?php

# Start Session:
session_start();

# Database Connection:
include('../config/connection.php');

if($_POST) {
	
	$q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
	$r = mysqli_query($dbc, $q);
	
	if(mysqli_num_rows($r) == 1) {
		
		$_SESSION['username'] = $_POST['email'];
		header('Location: index.php');
		
	}
	
}


 ?>

<!DOCTYPE html>
<html>
	
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
	
	<?php include('config/css.php'); ?>
	
	<style>
		
		body {
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #eee;
		}
		
		.form-signin {
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
		  margin-bottom: 10px;
		}
		.form-signin .checkbox {
		  font-weight: normal;
		}
		.form-signin .form-control {
		  position: relative;
		  height: auto;
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
		
	</style>
	
	<?php include('config/js.php'); ?>

</head>

<body>
		
	<?php //include(D_TEMPLATE.'/navigation.php'); // Main Navigation ?>
	
	<div class="container">
		
		<form class="form-signin" action="login.php" method="post" role="form">
			
			<h2 class="form-signin-heading">Login</h2>
			<strong class="form-signin-heading">If you are a demo user:<br>Email is demo@alphasloth.tk</br>Password is demo</strong>
				
			<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required autofocus>
	        
			<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
	        
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
	        
			<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		      
			</form> <!-- END Login Form -->
	
	</div> <!-- END Container -->
	<?php //include(D_TEMPLATE.'/footer.php'); // Footer ?>
	
	<?php //if($debug == 1) { include('widgets/debug.php'); } ?>
</body>

</html>