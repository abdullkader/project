<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mvc_app";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists";
} else {
    die("Error creating database: " . $conn->error);
}

$conn->select_db($dbname);

$create_table = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('manager', 'user') NOT NULL DEFAULT 'user'
)";

if ($conn->query($create_table) === TRUE) {
    echo "Table created successfully or already exists";
} else {
    die("Error creating table: " . $conn->error);
}
// انشاء مدير (Admin)
// $admin_email = 'manager@gmail.com';
// $admin_password = password_hash('3bd', PASSWORD_DEFAULT);
// $insert_admin = "INSERT INTO users (name, email, password, role) VALUES ('Manager', '$admin_email', '$admin_password', 'manager')";
// $conn->query($insert_admin);
// $conn->close();
?>
