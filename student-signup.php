<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<div class="right">
		<h1>Sign Up</h1>
		<form method="post" action="process_signup.php">
			<div class="">
				<input type="text" name="FirstName" placeholder="First Name" required>
				<input type="text" name="LastName" placeholder="Last Name" required>
			</div>
			<input type="text" name="Email" placeholder="Email" required>
			<input type="text" name="Password" placeholder="Password" required>
			<input type="text" name="Department" placeholder="Department"required>
			<input type="text" name="ClassOrLevel" placeholder="ClassOrLevel" required>
			<label for="checkbox">
				<input type="checkbox" name="checkbox" required>I accept the <a href="terms" id="terms">terms and conditions</a>
			</label>	
		</form>
        <button type="submit" a href="student-dashboard.php">>Sign-up</button></a>
		<a href="studlogin.php">Already have an account? Login</a>

	</div>
	<div class="left">

	</div>
	
</body>
</html>