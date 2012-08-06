<html>
	<head>

		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>

		<!-- Attach JavaScript files -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>

		<title><?php echo $title; ?></title>
	</head>

	<body>

		<header>
			<?php $this -> load -> view('banner'); ?>
			<nav>
				<ul>
					<li>
						<a>Home</a>
					</li>
					<li>
						<a>Info</a>
					</li>
					<li>
						<a>About</a>
					</li>
					<li>
						<a>Contact Us</a>
					</li>
				</ul>
				<!--<section class="search">
					<form>
						<input type="search" placeholder="Search Here..."/
					</form>
				</section> -->
			</nav>
		</header>
		<section class="taskbar">
			<ul>
				<li>Attendance</li>
				<li>Curriculum</li>
				<li>Schedules</li>
				<li>Reports</li>
			</ul>
		</section>
		<section class="left-sidebar">
				<ul>
					<li>Mentors</li>
					<li>Mentees</li>
				</ul>
			</section>
		<section class="content">
			
		</section>
		<footer>
			
		</footer>
	
	</body>
</html>