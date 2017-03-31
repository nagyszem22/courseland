<!DOCTYPE html>
<html>
<head>
	<title>{{ $course->name }} - {{ $lesson->name }}</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
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
	<div class="topnav">
		<div class="logo">COURSELAND</div>
		<div class="menu-button"><span class="icon-menu"></span></div>
	</div>
	<div class="right-nav">
		<div class="title">MENU</div>
		<div class="close"><span class="icon-close"></span></div>
		<div class="menu-box">
			<a href="{{ url('/') }}" class="menu-item"><span class="icon-home icon"></span>HOME</a>
			<a href="{{ url('/#about-us') }}" class="menu-item" style="border-bottom: 1px solid #ddd"><span class="icon-person icon"></span>ABOUT US</a>
			<div class="title">COURSES</div>
			<div class="menu-item course"><span class="icon-ondemand_video icon"></span>FLAPPY BIRD</div>
			<div class="menu-item course"><span class="icon-chat icon"></span>TETRIS CAR</div>
			<div class="menu-item course" style="border-bottom: 1px solid #ddd"><span class="icon-chat icon"></span>FROGGER</div>
		</div>
	</div>
	<div class="leftnav">
		<div class="nano">
			    <div class="nano-content">
			    	<div class="course-details">
			    		<div class="name"><span class="icon-account_balance"></span> {{ $course->name }}</div>
			    		<div class="description">{{ str_limit($course->description, 150) }}</div>
			    	</div>
			    	@foreach($course->sections as $section)
			    		<div class="section-name"><span class="icon-library_books"></span> {{ str_limit($section->name, 33) }}</div>
			    		@foreach($section->lessons as $oneLesson)
			    			<?php
			    				$icon = 'play_circle_outline';
			    				if ($oneLesson->id != $lesson->id && $oneLesson->isVisited($guest->id)) {
			    					$icon = 'check';
			    				}
			    			?>
			    			<a class="lesson-name {{ $oneLesson->isVisited($guest->id) ? 'seen' : '' }} {{ $oneLesson->id == $lesson->id ? 'active' : '' }}" href="{{ url('course/'.$course->id.'/'.$oneLesson->id) }}"><span class="icon-{{ $icon }}"></span> {{  str_limit($oneLesson->name, 40) }}</a>
			    		@endforeach
			    	@endforeach
			    </div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="lesson">
			<div class="nano">
			    <div class="nano-content">
			    	@if($lesson->type == 'video')
			    	<div class="video-background">
			    		<iframe src="https://www.youtube.com/embed/{{ $lesson->link }}" frameborder="0" allowfullscreen></iframe>
			    	</div>
			    	@endif
			    	<div class="name">{{ $lesson->name }}</div>
			    	<div class="description">{{ $lesson->description }}</div>
			    </div>
			</div>
		</div>
	</div>
</body>
</html>