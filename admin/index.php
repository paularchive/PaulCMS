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
						
						if(isset($_POST['submitted']) == 1) {
								
							$title = mysqli_real_escape_string($dbc, $_POST['title']);
							$label = mysqli_real_escape_string($dbc, $_POST['label']);
							$header = mysqli_real_escape_string($dbc, $_POST['header']);
							$body = mysqli_real_escape_string($dbc, $_POST['body']);	
							
							$q = "INSERT INTO pages (user ,title, label, header, body) VALUES ($_POST[user] ,'$title', '$label', '$header', '$body')";
							$r = mysqli_query($dbc, $q);
							
							if($r) {
								
								$message = '<p>Page was added!</p>';
								
							} else {
								
								$message = '<p>Page could not be added because: '.mysqli_error($dbc).'</p>';
								$message .= '<p>'.$q.'</p>';
								
							}
							
						}
					
					?>
					
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
				
				<?php if(isset($message)) { echo $message; } ?>
				
				<form action="index.php" method="post" role="form">
					
					<div class="form-group">
						
						<label for="title">Title:</label>
						<input class="form-control" type="text" name="title" id="title" placeholder="Page Title">
						
					</div>
					
					<div class="form-group">
						
						<label for="label">User:</label>
						<select class="form-control" name="user" id="user">
							
							<option value="0">No User</option>
							
							<?php
							
							$q = "SELECT id FROM users ORDER BY first ASC";
							$r = mysqli_query($dbc, $q);
							
							while($user_list = mysqli_fetch_assoc($r)) {
								 
								$user_data = data_user($dbc, $user_list['id']);
									
							?>
								
								<option value="<?php echo $user_data['id']; ?>"><?php echo $user_data['fullname']; ?></option>						
								
							<?php } ?>

						</select>
						
					</div>

					<div class="form-group">
						
						<label for="label">Label:</label>
						<input class="form-control" type="text" name="label" id="label" placeholder="Page Label">
						
					</div>
	
					<div class="form-group">
						
						<label for="header">Header:</label>
						<input class="form-control" type="text" name="header" id="header" placeholder="Page Header">
						
					</div>
	
					<div class="form-group">
						
						<label for="body">Body:</label>
						<textarea class="form-control" name="body" id="body" rows="8" placeholder="Page Body"></textarea>
						
					</div>
					
					<button type="submit" class="btn btn-default">Save</button>
					<input type="hidden" name="submitted" value="1">
				
				</form>
				
			</div> <!-- END Colum 9 -->
			
		</div> <!-- END row -->
	
	<?php include(D_TEMPLATE.'/footer.php'); // Footer ?>
	
	<?php if($debug == 1) { include('widgets/debug.php'); } ?>
</body>

</html>