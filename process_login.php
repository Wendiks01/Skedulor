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

    // Retrieve form data and validate
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;

    // Basic validation (you can add more as needed)
    if (empty($email) || empty($password)) {
        throw new Exception("Email and password are required.");
    }

    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("
        INSERT INTO users (email, Password)
        VALUES (:email, :password)
    ");

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    $stmt->execute();

    // Redirect to a success page
    header('Location: student-dashboard.php');
    exit();
} catch (PDOException $e) {
    // Handle database errors
    echo 'Database Error: ' . $e->getMessage();
} catch (Exception $e) {
    // Handle validation errors
    echo 'Error: ' . $e->getMessage();
}
?>