<!DOCTYPE html>
<html>
<head>
	<title>RMS</title>
	<?= link_tag('assets/css/bootstrap.min.css')?>
	<?= link_tag('assets/css/admin-sidebar.css')?>
	
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Admin Panel</a>
			</div>
					
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?=anchor('login/logout','Logout') ?>
				</li>	
			</ul>

			</div>
		</div>
	</nav>


