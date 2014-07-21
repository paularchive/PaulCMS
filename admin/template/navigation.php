<nav class="navbar navbar-default" role="navigation">
	

	
		
		<ul class="nav navbar-nav">
			
			<?php //nav_main($dbc, $pageid); ?>
			
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Pages</a></li>
			<li><a href="#">Users</a></li>
			<li><a href="#">Settings</a></li>
			
		</ul>
		
		<div class="pull-right">
			<ul class="nav navbar-nav">
				
				<li>
					<?php if($debug == 1) { // Check if debug is turned on ?>
					<button type="button" class="btn btn-default navbar-btn" id="btn-debug"><i class="fa fa-bug"></i></button>
					<?php } ?>
				</li>
				<li class="dropdown">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['fullname']; ?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="logout.php">Logout</a></li>
					</ul>
				
				</li>
				
			</ul>
		</div>
		
		
</nav><!-- END nav -->