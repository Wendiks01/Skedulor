<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Timetable View</title>
</head>
<body>
    <div class="sidebar">
    <img src="logo.png" id="logo">
        <h2>WENDY NDIKUM</h2>
        <ul>
            <li><a href="index1.php">Dashboard</a></li>
            <li><a href="lecturer.php">Lecturers</a></li>
            <li><a href="students.php">Students</a></li>
            <li><a href="department.php">Departments</a></li>
        </ul>
        <hr>
        <div class="bottom-menu">
            <ul>
                <li>Notification</li>
                <li>Settings</li>
                <li>Help/ Support</li>
            </ul>
            <button class="logout">Logout</button>
        </div>
    </div>

    <div class="main-content">
        <h1>Timetable</h1>
        <table class="timetable">
            <tr>
                <th>Period</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                
            </tr>
            <tr>
                <td>14:00 - 17:30</td>
                <td>Programming<br>Mr Akim</td>
                <td>Mobile Programming<br>Mrs Zainab</td>
                <td>Discrete Mathematics<br>Mrs Wuba</td>
                <td>Ethical Law Blogging<br>Mrs Siby</td>
                <td>UNIX Designing<br>Mr Ayuk</td>
              
            </tr>
            <tr>
                <td>14:00 - 17:30</td>
                <td>Programming<br>Mr Akim</td>
                <td>Mobile Programming<br>Mrs Zainab</td>
                <td>Discrete Mathematics<br>Mrs Wuba</td>
                <td>Ethical Law Blogging<br>Mrs Siby</td>
                <td>UNIX Designing<br>Mr Ayuk</td>
                
            </tr>
            <tr>
                <td>14:00 - 17:30</td>
                <td>Programming<br>Mr Akim</td>
                <td>Mobile Programming<br>Mrs Zainab</td>
                <td>Discrete Mathematics<br>Mrs Wuba</td>
                <td>Ethical Law Blogging<br>Mrs Siby</td>
                <td>UNIX Designing<br>Mr Ayuk</td>
                
            </tr>
           
        </table>
        <button class="re-generate">Re-generate</button><button class="save">Save</button>
    </div>
</body>
</html>
