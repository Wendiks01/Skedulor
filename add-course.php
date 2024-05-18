<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Table</title>
</head>
<body>
    <div class="sidebar">
    <img src="logo.png" id="logo">
        <h2>WENDY NDIKUM</h2>
        <ul>
            <li><a href="index1.php">Dashboard</a></li>
            <li><a href="lecturer.php">Lecturers</a></li>
            <li><a href="student.php">Students</a></li>
            <li><a href="department.php">Departments</a></li>
        </ul>
        <hr>
        <div class="bottom-menu">
            <ul>
                <li>Notification</li>
                <li>Settings</li>
                <li>Help Support</li>
            </ul>
            <button class="logout"><a href="index.php">Logout</a></button>
        </div>
    </div>
    <div class="main-content">
        <div class="student-info">
           
            <div class="student-details">
                <form>
                    <p><strong>Course Name:</strong> <input type="text" name="course_name"></p>
                    <p><strong>Code:</strong> <input type="text" name="code"></p>
                    <p><strong>Department:</strong> <input type="text" name="department"></p>
                    <p><strong>Lecturer:</strong> <input type="text" name="lecturer"></p>
                    <p><strong>Level/Class:</strong> <input type="text" name="level"></p>
                    <p><strong>Semester:</strong> <input type="text" name="department"></p>
                    
                </form>
                <button class="update-btn">Update</button>
            <button class="delete-btn">Disable</button>
            </div>
            
        </div>
    </div>
</body>
</html>