<!DOCTYPE html>
	<head>
			<meta charset="UTF-8">
			<meta name="description" content="Admin Panel">
			<meta name="keywords" content="HTML,CSS,XML,JavaScript">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
			<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
			<link rel="stylesheet" type="text/css" href="../assets/css/registration.css">
			<title>Admin Panel</title>
	</head>
	<body>
		<div class="form">
			<ul class="tab-group">
				<li class="tab active"><a href="#create">Create</a></li>
				<li class="tab"><a href="#find">Find</a></li>
			</ul>
			 <div class="tab-content">
				<div id="create">
					<h1>Create new Task</h1>
					<form action="create_task.php" method="post">
						<div class="double-row">
							<div class="field-wrap">
								<label>Title</label>
								<input type="text" name="Tile">
							</div>
							<div class="field-wrap">
								<input type="datetime-local" name="EndTime">
							</div>
						</div>
						<div class="field-wrap">
							<label>Content</label>
							<textarea type="text" name="Content"></textarea>
						</div>
						<div class="double-row">
							<div class="field-wrap">
								<label>Latitude</label>
								<input type="number" min="-90.0" max="90.0" name="Lat">
							</div>
							<div class="field-wrap">
								<label>Longitude</label>
								<input type="number" min="-180.0" max="180.0" name="Long">
							</div>
						</div>
						<div class="field-wrap">
							<label>Notes</label>
							<input type="text" name="Notes">
						</div>
						<div class="field-wrap">
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div>
						<div class="field-wrap">
							<label>Comment</label>
							<input type="text" name="Commnets">
						</div>
						<button type="submit" class="button button-block">Create</button>
					</form>
				</div>
				<div id="find" style="display: none;">
					<h1>Find a user</h1>
					<form action="/" method="post">
						<div class="field-wrap">
							<label>Username</label>
							<input type="text" name="Username">
						</div>
						<div class="field-wrap">
							<label>Email</label>
							<input type="email" name="Email">
						</div>
						<button type="submit" class="button button-block">Log In</button>
					</form>
				</div>
			</div>
		</div>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
			<script src="../assets/js/registration.js"></script>
	</body>
</html>
