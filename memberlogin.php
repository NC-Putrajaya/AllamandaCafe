<?php
$servername = "34.126.132.128";
$username = "root"; // Replace with your actual username
$password = ""; // Replace with your actual password
$dbname = "wadprojectdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userID'];
    $userPassword = $_POST['userPassword'];

    // SQL query to check user credentials
    $sql = "SELECT * FROM users WHERE user_id='$userID' AND password='$userPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found
        header("Location: dashboard.html");
    } else {
        // Invalid credentials
        echo "Invalid ID or Password";
    }
}
?>
