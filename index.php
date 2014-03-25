<!DOCTYPE html>
<html>
<head>
	<title>book registration</title>
	<script src = "books.js" type="text/javascript"></script>
</head>
<body>

<form onsubmit="myFunction()" method="post" action="book-registration.php">
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
		<button id = "submit" type="submit" name="register">Register</button>
		</div>
	</fieldset>
</form>


</body>
</html>
