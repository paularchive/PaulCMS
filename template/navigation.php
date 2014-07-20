<nav class="navbar navbar-default" role="navigation">
	
	<?php if($debug == 1) { // Check if debug is turned on ?>
		<button class="btn btn-default" id="btn-debug"><i class="fa fa-bug"></i></button>
	<?php } ?>
	
	<div class="container">
		
		<ul class="nav navbar-nav">
			<?php nav_main($dbc, $pageid); ?>
			
			<li><a href="#">FAQ</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		
	</div>
		
</nav><!-- END nav -->