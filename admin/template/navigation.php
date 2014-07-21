<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	
	<div class="container">	
	
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<i style="color:grey" class="fa fa-list"></i>
			</button>
		</div>	
	
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		
			<ul class="nav navbar-nav">
				
				<?php //nav_main($dbc, $pageid); ?>
				
				<li><a href="#"><i class="fa fa-tasks"></i> Dashboard</a></li>
				<li><a href="#"><i class="fa fa-file"></i> Pages</a></li>
				<li><a href="#"><i class="fa fa-users"></i> Users</a></li>
				<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
				
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				
				<li>
					<?php if($debug == 1) { // Check if debug is turned on ?>
					<a id="btn-debug"><i class="fa fa-bug"></i></a>
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
	
	</div> <!-- END container -->
		
</nav><!-- END nav -->