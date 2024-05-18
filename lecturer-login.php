<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="student-login.css">
</head>
<body>
	<div class="right">
		<h1>Welcome to</h1>
		<img src="logo.png" id="logo">
		<form>
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="password" placeholder="Password">
		</form>
		<button id="login">Login</button>

		<a href="student-signup.php">New here? Sign up</a>
	</div>
	<div class="left">
		<img src="deadline.png">
	</div>
	<script>
		document.getElementById("login").addEventListener("click", function() {
			window.location.href = "department.php";
		});

	</script>
</body>
</html>