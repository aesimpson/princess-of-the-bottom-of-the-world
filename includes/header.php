<?php 
	include('functions.php'); 
?>
<!DOCTYPE>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />
		<meta name="description" content="Multimedia companion site for the book The Princess of the Botton of the World">
		<meta name="keywords" content=" Princess of the Botton of the World, Dan Linehan">
		<meta name="author" content="Dan Linehan">
		<link rel="icon" href="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>The Princess of the Botton of the World: Multimedia Library</title>
		<link rel="canonical" href="https://www.example.com" />
		<meta property="og:title" content="The Princess of the Botton of the World: Multimedia Library"/>
		<meta property="og:image" content=""/>
		<meta property="og:site_name" content="The Princess of the Botton of the World: Multimedia Library"/>
		<meta property="og:description" content="Multimedia companion site for the book The Princess of the Botton of the World"/>
		<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url.'css/bootstrap.min.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url.'css/style.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url.'css/simple-scrollbar.css'; ?>">
	</head>
	<body>
		<nav class="pl-3">
			<div class="nav-controls">
				<a class="home-btn" href="<?php echo $base_url; ?>">
					<img src="<?php echo $base_url.'images/home.png'; ?>" width="30px" />
				</a>
				<div class="menu-toggle open d-inline-block">
					<span class="bar1"></span>
					<span class="bar2"></span>
					<span class="bar3"></span>
				</div>
			</div>
			<ul class="main-menu p-0 mb-0">
				<li class="nav-item submenu">
					<div class="nav-link">
						<img width="60px" src="<?php echo $base_url.'images/title_black.png'; ?>">
						<div class="episode-info ml-2 d-inline-block">
							<p class="m-0">Series Information</p>
						</div>
					</div>
					<ul class="submenu-menu">
						<li>About</li>
						<li>News</li>
						<li>Events</li>
						<li>All Maps</li>
						<li>All Songs</li>
						<li>Contact/Comments</li>
					</ul>
				</li>
				<li class="nav-item ep-1 submenu">
					<div class="nav-link">
						<img src="<?php echo $base_url.'images/epidsode1_cover_thumb.png'; ?>" width="40px" />
						<div class="episode-info ml-2 d-inline-block">
							<p class="episode-number m-0">Episode 1:</p>
							<p class="episode-title m-0">Journey to the Bottom of the World</p>
						</div>
					</div>
					<ul class="submenu-menu">
						<li><a href="<?php echo $base_url.'episode1/cover.php'; ?>">Cover</a></li>
						<li><a href="<?php echo $base_url.'episode1/about.php'; ?>">About</a></li>
						<li><a href="<?php echo $base_url.'episode1/photos.php'; ?>">Photos</a></li>
						<li>Videos</li>
						<li>Maps</li>
						<li><a href="https://www.smashwords.com/books/view/922099" target="_blank">Buy</a></li>
					</ul>
				</li>
				<li class="nav-item ep-2">
					<div class="nav-link">
						<img src="<?php echo $base_url.'images/epidsode2_cover_thumb.png'; ?>" width="40px" />
							<div class="episode-info ml-2 d-inline-block">
								<p class="episode-number m-0">Episode 2:</p>
								<p class="episode-title m-0">Islands of Penguins</p>
							</div>
					</div>
				</li>
				<li class="nav-item ep-3">
					<div class="nav-link">
						<img src="<?php echo $base_url.'images/epidsode3_cover_thumb.png'; ?>" width="40px" />
							<div class="episode-info ml-2 d-inline-block">
								<p class="episode-number m-0">Episode 3:</p>
								<p class="episode-title m-0"> Glaciers, Bones, and Ghost Towns</p>
							</div>
					</div>
				</li>
				<li class="nav-item ep-4">
					<div class="nav-link">
						<img src="<?php echo $base_url.'images/epidsode4_cover_thumb.png'; ?>" width="40px" />
						<div class="episode-info ml-2 d-inline-block">
							<p class="episode-number m-0">Episode 4:</p>
							<p class="episode-title m-0">Antarctica, Ho!</p>
						</div>
					</div>
				</li>
				<li class="nav-item ep-5">
					<div class="nav-link">
						<img src="<?php echo $base_url.'images/epidsode5_cover_thumb.png'; ?>" width="40px" />
						<div class="episode-info ml-2 d-inline-block">
							<p class="episode-number m-0">Episode 5:</p>
							<p class="episode-title m-0">Patagonia and the World of Waterfalls</p>
						</div>
					</div>
				</li>
				<li class="nav-item ep-6">
					<div class="nav-link">
						<img src="<?php echo $base_url.'images/epidsode6_cover_thumb.png'; ?>" width="40px" />
						<div class="episode-info ml-2 d-inline-block">
							<p class="episode-number m-0">Episode 6:</p>
							<p class="episode-title m-0">Course Corrections</p>
						</div>
					</div>
				</li>
				<li class="nav-item ep-7">
					<div class="nav-link">
						<img src="<?php echo $base_url.'images/epidsode7_cover_thumb.png'; ?>" width="40px" />
						<div class="episode-info ml-2 d-inline-block">
							<p class="episode-number m-0">Episode 7:</p>
							<p class="episode-title m-0">When the Journey Never Ended</p>
						</div>
					</div>
				</li>
				<div class="smashwords-widget" data-type="single" data-items="book:922099" data-affiliate="DSLinehan" data-font="sans" data-ribboncolor="#4181c3" data-bgcolor="#fafafa" data-buttoncolor="#ffc801" data-width="300" data-height="250" data-headline="The Princess of the Bottom of the World (Episode 1): The Journey to the Bottom of the World" style="width: 300px; height: 250px; margin:0 auto;"></div>
				<script id="smashwords-widget-js" async="async" src="http://www.smashwidgets.com/1/widgets.js"></script>
			</ul>
		</nav>