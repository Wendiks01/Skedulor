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
            <button class="logout"><a href="index.php">Logout</a></button>
        </div>
    </div>
    <div class="main-content">
        <h2>Lecturers</h2>
        <button class="add-lect"><a href="addlect.php">Add Lecturer</a></button></h1>
        <table>
            <tr>
                <th>Teacher</th>
                <th>Department</th>
                <th>Level/Class</th>
                <th>Available Hours</th>
                <th></th>
            </tr>
            <tr>
                <td>Mr Ayukanyor</td>
                <td>SWE</td>
                <td>Level 2</td>
                <td>16:00 - 20:30</td>
                <td><button class="update"><a href="lectupdate.php">Update</a></button></td>
            </tr>
            <tr>
                <td>Mrs Zebak</td>
                <td>SWE</td>
                <td>Level 1</td>
                <td>17:00 - 20:30</td>
                <td><button class="update"><a href="lectupdate.php">Update</a></button></td>
            </tr>
            
        </table>
    </div>
</body>
</html>

