<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="#" class="logo">
						<img src="<?=site_url(); ?>assets/images/logo-default.png" height="35" alt="ti3a Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?=site_url(); ?>assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="<?=site_url(); ?>assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Session Login</span>
								<span class="role">Session Level</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Menu
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Home</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-dollar" aria-hidden="true"></i>
											<span>Keuangan</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													 <i class="fa fa-arrow-down"></i> Income
												</a>
											</li>
											<li>
												<a href="#">
													 <i class="fa fa-arrow-up"></i> Outcome
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-group" aria-hidden="true"></i>
											<span>Personalia</span>
										</a>
										<ul class="nav nav-children">
											
											<li>
												<a href="#">
													 <i class="fa fa-user"></i> Data Pegawai
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-search"></i>  Rekrut Pegawai
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-puzzle-piece"></i> Kerjasama
												</a>
											</li>
											
											
											<li>
												<a href="#">
													<i class="fa fa-suitcase"></i> Administrasi Kepegawaian
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Manajemen</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													 <i class="fa fa-file-text-o"></i>  Persuratan
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-globe"></i>  Web
												</a>
											</li>
											<li>
												<a href="#">
													 <i class="fa fa-wrench"></i> Teknis
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-gears"></i> Servis
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-book" aria-hidden="true"></i>
											<span>Laporan</span>
										</a>
									</li>				
							<hr class="separator" />
						</div>
					</div>
				</aside>
				<!-- end: sidebar -->