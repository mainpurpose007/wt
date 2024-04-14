<?php
$host = "localhost";
$port = "5432";
$dbname = "admin";
$user = "postgres";
$password = "1234";

$conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);

$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "Login successful";
} else {
    echo "Invalid username or password";
}

$conn = null;
?>
