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
            <li><a href="index1.php">Dashboard</li></a>
            <li><a href="lecturer.php">Lecturers</li></a>
            <li><a href="student.php"></a>Students</li></a>
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
    <h1>Students 
    <button class="add-student"><a href="addstud.php">Add Student</a></button></h1>
    
        <table>
            <tr>
                <th>FullName</th>
               <th>Level</th>
               <th>Department</th>
            </tr>
            <tr>
                <td>Faith Nazah</td>
                <td>3</td>
                <td>SWE</td>
                
                <td><button class="update"><a href="studupdate.html">Update</a></button></td>
            </tr>
            <tr>
                <td>Levi Che</td>
                <td>2</td>
                <td>ACC</td>
                
                <td><button class="update"><a href="studupdate.html">Update</a></button></td>
            </tr>
            <tr>
                <td>Lois Favor</td>
                <td>1</td>
                <td>BF</td>
                
                <td><button class="update"><a href="studupdate.html">Update</a></button></td>
            </tr>
        </table>
</body>
</html>