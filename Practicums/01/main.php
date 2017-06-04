<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Comments</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="outer">
			<h1>Please leave Your comment below</h1>
			<form action="?mode=addcomment" method="POST">
				<table>
					<tr>
						<td>Your name:</td>
						<td><input type="text" name="author"/></td>
					</tr>
					<tr>
						<td>Your text:</td>
						<td><textarea name="commentText" id="commentText" rows="2" cols="40"></textarea></td>
					</tr>
					<tr>
						<th><input type="submit" name="addcomment" value="Post!" onclick="check()" /></th>
						<th></th>
					</tr>
				</table>
			</form>
			<h2>All comments (<?php echo count($comments) ?>)</h2>
			<table id="comments">
				<tr>
					<th>Author</th>
					<th>Comment</th> 
					<th>Time</th>
				</tr>
			<?php foreach($comments as $cmnt):?>
				<tr>
					<td><?php echo $cmnt[0]?></td>
					<td><?php echo $cmnt[1]?></td>
					<td><?php echo $cmnt[2]?></td>
				</tr>
			<?php endforeach; ?>
			</table>
			<p>
				<a href="http://validator.w3.org/check?uri=referer">
					<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
				</a>
			</p>
		</div>	
		<script src="input.js"></script>
	</body>
</html>