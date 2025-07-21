<?php
// Database configuration
$servername = "localhost";
$username = "root";       // Default for XAMPP
$password = "";           // Default for XAMPP
$dbname = "blood_donation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password_raw = $_POST['password'];

// Hash password
$password = password_hash($password_raw, PASSWORD_DEFAULT);

// Prepare and bind SQL
$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// If prepare fails, show error
if (!$stmt) {
    die("SQL Error: " . $conn->error);
}

// Bind and execute
$stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

if ($stmt->execute()) {
    echo "<script>alert('Signup successful!'); window.location.href='login.php';</script>";
} else {
    // Handle duplicate email or other errors
    if ($conn->errno === 1062) {
        echo "<script>alert('Email already registered. Please use a different one.'); window.history.back();</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>
