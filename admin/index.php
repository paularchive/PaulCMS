<?php

# Start the session:
session_start();

# Check if user is logged in:
if (!isset($_SESSION['username'])) {
	header('Location: login.php');
}

?>

<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
	
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page['title'].' | '.$site_title; ?></title>
	
	<?php include('config/css.php'); ?>
	
	<?php include('config/js.php'); ?>

</head>

<body>
		
	<?php include(D_TEMPLATE.'/navigation.php'); // Main Navigation ?>
	
	<h1>Admin Dashboard</h1>
	
	<?php include(D_TEMPLATE.'/footer.php'); // Footer ?>
	
	<?php if($debug == 1) { include('widgets/debug.php'); } ?>
</body>

</html>