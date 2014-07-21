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
	
	
	<div class="row">
		
		<div class="col-md-3">
			
			<div class="list-group">
			
				<?php
				
					$q = "SELECT * FROM pages ORDER BY title ASC";
					$r = mysqli_query($dbc, $q);
					
					while($page_list = mysqli_fetch_assoc($r)) { 
					
						$blurb = substr(strip_tags($page_list['body']), 0, 120);
						
					?>
						
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-header"><?php echo $page_list['title']; ?></h4>
							<p class="list-group-item-text"><?php echo $blurb; ?></p>
						</a>
						
				<?php } ?>
			
			</div> <!-- END List Group -->
		
		</div> <!-- END Colum 3 -->
		
		<div class="col-md-9">
			
			<p>Page Form</p>
			
		</div>
		
	</div> <!-- END row -->
	
	<?php include(D_TEMPLATE.'/footer.php'); // Footer ?>
	
	<?php if($debug == 1) { include('widgets/debug.php'); } ?>
</body>

</html>