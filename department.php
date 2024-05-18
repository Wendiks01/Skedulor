<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lecturers Table</title>
    
</head>
<body>
    <div class="sidebar">
    <img src="logo.png" id="logo">
        <h2>WENDY NDIKUM</h2>
        <ul>
            <li><a href="index1.php">Dashboard</li></a>
            <li><a href="lecturer.php">Lecturers</li></a>
            <li><a href="student.php">Students</a></li>
            <li><a href="department.php">Departments</li></a>
        </ul>
		<hr>
        <div class="bottom-menu">
            <ul>
                <li>Notification</li>
                <li>Settings</li>
                <li>Help Support</li>
            </ul>
            <button class="logout">Logout</button>
        </div>
    </div>
    <div class="main-content">
        <h3>Departments</h3>
        
        <div class="department">
            SWE
            <button class="view"><a href="course.php"> Course</a></button>
            <button class="view"><a href="timetable.php">Timetable</a></button>
        </div>
        <div class="department">
            LTM
            <button class="view"><a href="course.php"> Course</a></button>
            <button class="view"><a href="timetable.php">Timetable</a></button>
        </div>
        <div class="department">
            CNS
            <button class="view"><a href="course.php"> Course</a></button>
            <button class="view"><a href="timetable.php">Timetable</a></button>
        </div>
        <div class="department">
            ACC
            <button class="view"><a href="course.php"> Course</a></button>
            <button class="view"><a href="timetable.php">Timetable</a></button>
        </div>
    </div>
</body>
</html>