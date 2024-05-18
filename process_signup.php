<?php
// Assuming you have a database connection established
// Replace the placeholders with your actual database credentials

$host = 'localhost';
$dbname = 'timetable_mgt_sys';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve data from the form (assuming you have form fields for student input)
    $firstName = $_POST['firstName']; // Replace with the actual field name
    $lastName = $_POST['lastName']; // Replace with the actual field name
    $email = $_POST['email']; // Replace with the actual field name
    $plainPassword = $_POST['password']; // Replace with the actual field name
    $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT); // Hash the password
    $departmentID = $_POST['departmentID']; // Replace with the actual field name
    $classOrLevel = $_POST['classOrLevel']; // Replace with the actual field name

    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("
        INSERT INTO Student (FirstName, LastName, Email, Password, DepartmentID, ClassOrLevel)
        VALUES (:firstName, :lastName, :email, :password, :departmentID, :classOrLevel)
    ");

    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':departmentID', $departmentID);
    $stmt->bindParam(':classOrLevel', $classOrLevel);

    $stmt->execute();
    header('Location: student-dashboard.PHP');
    exit();

    echo 'Data inserted successfully!';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
