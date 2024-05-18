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
        <img src="logo.png" id="logo" alt="Logo">
        <form method="post" action="process_login.php">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="student-signup.php">New here? Sign up</a>
    </div>
    <div class="left">
        <img src="deadline.png" alt="Deadline Image">
    </div>
</body>
</html>