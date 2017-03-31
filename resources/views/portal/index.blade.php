<!DOCTYPE html>
<html>
<head>
	<title>Courseland</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nano.css') }}">
	<script type="text/javascript" src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/nano.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/javascript/main.js') }}"></script>
</head>
<body>
	<div class="topnav on-cover">
		<div class="logo">COURSELAND</div>
		<div class="menu-button" id="open-menu"><span class="icon-menu" id="open-menu"></span></div>
	</div>
	<div class="right-nav">
		<div class="title">MENU</div>
		<div class="close"><span class="icon-close"></span></div>
		<div class="menu-box">
			<a href="{{ url('/') }}" class="menu-item"><span class="icon-home icon"></span>HOME</a>
			<div class="menu-item scrollto" data-to="about-us" style="border-bottom: 1px solid #ddd"><span class="icon-person icon"></span>ABOUT US</div>
			<div class="title">COURSES</div>
			<div class="menu-item course"><span class="icon-ondemand_video icon"></span>FLAPPY BIRD</div>
			<div class="menu-item course"><span class="icon-chat icon"></span>TETRIS CAR</div>
			<div class="menu-item course" style="border-bottom: 1px solid #ddd"><span class="icon-chat icon"></span>FROGGER</div>
		</div>
	</div>
	<div class="cover-page">
		<div class="flappy-bird-background"></div>
		<div class="cover-container">
			<div class="title">COURSELAND</div>
			<div class="description">Create games like flappy birds in an hour even without programming knowledge.</div>
		</div>
		<div class="more-button scrollto" data-to="courses">More</div>
	</div>
	<div class="index-page-content">
		<div class="list-of-courses" id="courses">
			<div class="description"><b>We strongly believe that programming is fun.</b><br>Just pick one of our courses to be cool.</div>
			<div class="courses-box">
				<div class="course-box">
					<div class="image flappy-bird"></div>
					<div class="course-content">
						<div class="title">Simple flappy bird game video tutorial</div>
						<div class="details"><span class="icon-schedule"></span> about 50 mins&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-network_check"></span> completely beginner</div>
						<div class="start-button">Let's start! <span class="icon-play_arrow"></span></div>
					</div>
				</div>
				<div class="course-box">
					<div class="image tetris-car"></div>
					<div class="course-content">
						<div class="title">Simple tetris car race game text tutorial</div>
						<div class="details"><span class="icon-schedule"></span> about 40 mins&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-network_check"></span> first tutorial recommended</div>
						<div class="start-button">Let's start! <span class="icon-play_arrow"></span></div>
					</div>
				</div>
				<div class="course-box" style="border-bottom: none">
					<div class="image frogger"></div>
					<div class="course-content">
						<div class="title">Simple frogger text tutorial</div>
						<div class="details"><span class="icon-schedule"></span> about 50 mins&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-network_check"></span> first tutorial recommended</div>
						<div class="start-button">Let's start! <span class="icon-play_arrow"></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-us" id="about-us">
			<div class="description"><b>Who are we?</b><br><span>We are Computer Science students at UCL. We choosed this course because programming is the most creative and effective tool to create awesomeness. This website has been set up to show you why.</span></div>
			<div class="description" style="margin-bottom: 0px"><b>Our Team</b></div>
			<div class="team-box">
				<div class="team-member">
					<div class="image cavan"></div>
					<div class="details"><span class="name">Cavan Black</span><br><span class="role">Frogger Tutorial</span></div>
				</div>
				<div class="team-member">
					<div class="image zachar"></div>
					<div class="details"><span class="name">Zakhar Borok</span><br><span class="role">Flappy Bird & Tetris Car Tutorial</span></div>
				</div>
				<div class="team-member">
					<div class="image marton"></div>
					<div class="details"><span class="name">Marton Takacs</span><br><span class="role">Web Development & Design</span></div>
				</div>
				<div class="team-member">
					<div class="image darius"></div>
					<div class="details"><span class="name">Darius Pop</span><br><span class="role">-</span></div>
				</div>
			</div>
		</div>
		<!-- div class="footer"></div -->
	</div>
</body>
</html>