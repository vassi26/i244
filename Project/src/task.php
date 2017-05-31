<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Day Of The Year 1/12/2017">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/task.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/map.css">
		<link id="toChange" rel="stylesheet" type="text/css" href="../assets/css/other.css">
		<script src="../assets/js/timer.js"></script>
		<script src="../assets/js/button.js"></script>
		<title>01/12/2017</title>
	</head>
	<body>
	<?php $task_id = $_GET['id'];
	 include 'load_task.php';
	 include_once 'cookie.php';
	?>
		<script type="text/javascript">
			var task_id=<?php echo $task_id ?>;
			var t = "<?php echo $end_time ?>".split(/[- :]/);
			var end = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
			var timer = setInterval(function () { showRemaining(end); }, 1000);
			var lat = parseFloat(<?php echo $lng;?>);
			var lng = parseFloat(<?php echo $lat;?>);
			// "parseFloat('<?php echo $lat;?>')"
		</script>

		<div class="form">
			 <div class="tab-content">
				<div id="register">
					<h1><?php echo $title ?></h1>
					<div class="task-content">
						<p><?php echo $content ?></p>
					</div>
					<div class="wrapper">
						<div class="task-notes">
							<p><?php echo $notes ?></p>
							<div class="legend">
								<svg height="5" width="5">
									<circle cx="50" cy="50" r="5" fill="#f49726" />
								</svg>
							</div>
						</div>
						<div class="task-map" id="map"></div>
					</div>
					<div class="wrapper">
						<div class="inside-wrapper-left">
							<div class="task-deadline">
								<embed type="image/svg+xml" src="../assets/svg/alarm.svg" />
								<p class="time-left"><span id="counter"></span></p>
							</div>
						</div>
						<div id="verify" class="inside-wrapper-right">
							<div class="field-wrap">
								<label>Answer</label>
								<input type="text" name="answer" id="answer">
							</div>
							<button onClick="verify()"  class="button button-block">→</button>
							<script>disableButton(end);</script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="correctModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2>Correct Answer</h2>
				</div>
				<div class="modal-body">
					<p>You did well, here's Your prize:</p>
					<p><?php echo $success;?></p>
				</div>
				<div class="modal-footer">
					<h3>One step towards the mystery</h3>
				</div>
			</div>
		</div>
		<div id="wrongModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2>Wrong answer</h2>
				</div>
				<div class="modal-body">
					<p>What a pity!</p>
					<p>Please try again, You still have some time left</p>
				</div>
				<div class="modal-footer">
					<h3>Tragedy plus time equals humor</h3>
				</div>
			</div>
		</div>
		<div id="otherModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2>Oops! This was unexpected...</h2>
				</div>
				<div class="modal-body">
					<p>The only advice is to try a bit later</p>
					<p>Sincerest apologies</p>
				</div>
				<div class="modal-footer">
					<h3>May be You can look for a support contact</h3>
				</div>
			</div>
		</div>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="../assets/js/registration.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgQsuHcmNvOE1WWdbQFc6zvNgBVBYGKto&callback=initMap"
		async defer></script>
		<script src="../assets/js/map.js"></script>
		<script src="../assets/js/modal.js"></script>
		<script src="../assets/js/answer.js"></script>
	</body>
</html>