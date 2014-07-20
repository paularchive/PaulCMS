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
	
	<div class="container">
		
		<h1><?php echo $page['header']; ?></h1>
		
		<?php echo $page['body_formatted']; ?>
		
	</div>
	
	<?php include(D_TEMPLATE.'/footer.php'); // Footer ?>
	
	<?php if($debug == 1) { include('widgets/debug.php'); } ?>
</body>

</html>