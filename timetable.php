<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Timetable Table</title>
    
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
            <button class="logout"><a href="index.php">Logout</a></button>
        </div>
    </div>
    <div class="main-content">
        <h2>Welcome back, Mr Ayukanyor</h2>
        <p>Please, fill your schedule for the semester below</p>

        <!-- Schedule Table -->
        <table class="schedule">
            <thead>
                <tr>
                    <th>Period</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4:00PM-5:30PM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>UI/UX Design</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5:30PM-7:00PM</td>
                    <td>Graphics Design</td>
                    <td></td>
                    <td>UI/UX Design</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7:00PM-8:30PM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>UI/UX Design</td>
                </tr>
                
            </tbody>
        </table>

       
        <p class="ps-note">PS: Ensure that you arrive early for your lessons in order to avoid a reduction in your salary</p>

        <button class="edit-button">Edit</button>
    </div>
</div>
</body>
</html>