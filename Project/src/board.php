<!DOCTYPE html>
	<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="Day Of The Year 1/12/2017">
	  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="../assets/css/board.css">
	  <title>Board of Tasks</title>
	</head>
	<body>
		<div class="outer" id="wrapper">
			<div class="middle" id="header">
				<div class="inner" id="main">				 
					<?php foreach ($tasks as $row): ?>
						<a class="block" href="task.php?id=<?=$row?>"><?=$row?></a>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</body>
</html>
