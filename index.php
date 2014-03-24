<!DOCTYPE html>
<html>
<head>
	<title>book registration</title>
</head>
<body>

<form id="book-form" method="post" action="/bookregistration.php">
	<fieldset>
		<legen>Register Book</legend>
		<div>
			<label>
				Book name:
			<input type="text" name="book_name">
			</label>
		</div>
		<div>
			<label>
				Book author:
			<input type="text" name="book_author">
			</label>
		</div>
		<div>
		<button type="submit" name="register">Register</button>
		</div>
	</fieldset>
</form>

</body>
</html>
