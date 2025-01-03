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
        header("Location: index.html");
    } else {
        // Invalid credentials
        echo "Invalid ID or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe Kuning Allamanda - Member Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b289f244d1.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-mug-hot"></i>
        </div>
    </header>
    <main>
      <header class="header">    
      <h1>Cafe Kuning Allamanda</h1>
      <h2>Member Login</h2>
    </header>
    <form class="login-form" method="POST">
    <div>
      <input type="text" name="userID" placeholder="ID" required>
    </div>
    <div>
      <input type="password" name="userPassword" placeholder="Password" required>
    </div>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
