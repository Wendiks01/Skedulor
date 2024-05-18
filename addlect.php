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
                <form action="insert_student.php" method="post">
                    <p><strong>Full Name:</strong> <input type="text" name="full_name"></p>
                    <p><strong>Department:</strong> <input type="text" name="department"></p>
                    <p><strong>Level/Class:</strong> <input type="text" name="level"></p>
                    <p><strong>Start Time:</strong> <input type="time" name="start_time"></p>
                    <p><strong>End Time:</strong> <input type="time" name="end_time"></p>
                    <button type="submit" name="submit">Register</button>
                </form>
            </div>
        </div>

        <?php
        // Handle form submission
        if (isset($_POST['submit'])) {
            $fullName = $_POST['full_name'];
            $department = $_POST['department'];
            $level = $_POST['level'];
            $availableTime = $_POST['start_time'];
            $availableTime = $_POST['end_time'];

            // Connect to the database (replace with your actual credentials)
            $dsn = 'mysql:host=localhost;dbname=timetable_mgt_sys';
            $username = 'root';
            $password = '';

            try {
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Insert data into the Students table
                $sql = "INSERT INTO addlect (fullname, department, level, start_time,end_time) VALUES (:fullname, :department, :level, :start_time,:end_time )";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':fullname' => $fullName,
                    ':department' => $department,
                    ':level' => $level,
                    ':start_time' => $startTime,
                    ':end_time' => $endTime,
                ]);

                echo '<p>Student data inserted successfully!</p>';
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }

            // Display data from the Students table
            $sql = "SELECT * FROM addlect";
            $stmt = $pdo->query($sql);
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($students)) {
                echo '<h2>Registered Students</h2>';
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>Full Name</th><th>Department</th><th>Level/Class</th><th>Available Time</th></tr>';
                foreach ($students as $student) {
                    echo '<tr>';
                    echo '<td>' . $student['id'] . '</td>';
                    echo '<td>' . $student['fullname'] . '</td>';
                    echo '<td>' . $student['department'] . '</td>';
                    echo '<td>' . $student['level'] . '</td>';
                    echo '<td>' . $student['start_time'] . '</td>';
                    echo '<td>' . $student['end_time'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
        }
        ?>
    </div>
</body>
</html>