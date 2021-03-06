
<header class="main-header">
	<a href="<?php echo site_url(); ?>" class="logo"><b>Pays de la Drôme</b></a>
	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="hidden-xs"><?php echo $user['full_name']; ?></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<p><?php echo $user['full_name']; ?></p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?php echo site_url('account'); ?>" class="btn btn-default btn-flat">Mon compte</a>
							</div>
							<div class="pull-right">
								<a href="<?php echo site_url('account/logout'); ?>" class="btn btn-default btn-flat">Se déconnecter</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>