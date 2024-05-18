<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
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
            <h1>Courses<button class="add-courses"><a href="add-course.php">Add Courses</a></button></h1>
            <div class="course-list">
                <div class="course-row">
                    <h4>Course</h4>
                    <h4>Course code</h4>
                    <h4>Department</h4>
                    <h4>Class/Level</h4>
                    
                    <button class="update"><a href="updatecourse.php">Update</a></button>
                    <button class="delete">Delete</button>
                </div>
                <br>
                <div class="course-row">
                    <p>Programming</p>
                    <p>P001</p>
                    <p>SWE</p>
                    <p>Level 1</p>
                    
                    <button class="update">Update</button>
                    <button class="delete">Delete</button>
                </div>
                <br>
                <div class="course-row">
                    <p>Graphic Designing</p>
                    <p>G001</p>
                    <p>CNSM</p>
                    <p>Level 3</p>
                    <button class="update">Update</button>
                    <button class="delete">Delete</button>
                </div>
                <!-- Add more course rows here -->
            </div>
        </div>
    </body>
    </html>