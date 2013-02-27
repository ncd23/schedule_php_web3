<?php 
	$week =  array(
		'Sunday' => array(
			'11 am' => 'Procrastinate',
			'4 pm' => 'Hot yoga',
			'7 pm' => 'Dinner',
			'8 pm' => 'Watch TV',
			'2 am' => 'Sleep'
		),
		'Monday' => array(
			'9 am' => 'Work',
			'4 pm' => 'Gym',
			'6 pm' => 'Dinner',
			'7 pm' => 'School Work',
			'2 am' => 'Sleep'
		),
		'Tuesday' => array(
			'9 am' => 'Work',
			'6 pm' => 'Dinner',
			'7 pm' => 'Thesis',
			'10 pm' => 'School Work',
			'2 am' => 'Sleep'
		),
		'Wednesday' => array(
			'9 am' => 'Work',
			'6 pm' => 'Dinner',
			'7 pm' => 'School Work',
			'9 pm' => 'Watch TV',
			'2 am' => 'Sleep'
		),
		'Thursday' => array(
			'9 am' => 'Gym',
			'6 pm' => 'School Work',
			'7 pm' => 'Web 3',
			'10 pm' => 'Watch TV',
			'2 am' => 'Sleep'
		),
		'Friday' => array(
			'9 am' => 'Data Visualization',
			'12 pm' => 'Thesis',
			'6 pm' => 'Dinner',
			'9 pm' => 'Go out or School Work',
			'2 am' => 'Sleep'
		),
		'Saturday' => array(
			'11 am' => 'Procrastinate',
			'1 pm' => 'Gym',
			'3 pm' => 'School Work',
			'6 pm' => 'Dinner',
			'9 pm' => 'Go out or relax'
		)
	);
	
	?>
	<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>My Schedule</title>
		<link rel="stylesheet" type="text/css" href="css/climacons.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<ul id="rb-grid" class="rb-grid clearfix"><li><h1>MY AWESOME SCHEDULE</h1></li>
		
			<?php
				
				foreach($week as $day=>$time){
					echo '<li>';
					echo '<h2>'.$day.'</h2>';
					
					echo '<div class="rb-overlay">
						  <span class="rb-close">close</span>
						  	<div class="rb-week">
						  		<div><span class="rb-city">'.$day.'</span></div>';
						  
						  foreach($week[$day] as $time => $task){
						  	echo '<div><p class="time">'.$time.'</span><p class="task">'.$task.'</span></div>';
						  } //end loop2
												  		
						} //end loop 1
						echo '</li></div></div>';
							
			?>
		</li></ul>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script src="js/boxgrid.js"></script>
		<script>
			$(function() {

				Boxgrid.init();
				

			});
		</script>

	</body>
</html>
	