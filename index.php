<?php
$servername = "34.126.132.128";
$username = "liquid-sylph-446512-p8:asia-southeast1:allamandacafedb";
$password = "";
$dbname = "wadprojectdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Kuning Allamanda</title>
    <link rel="stylesheet" href="Menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b289f244d1.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="logo">
            <i class="fas fa-mug-hot"></i>
            <h1>Cafe Kuning Allamanda</h1>
        </div>
        <input type="text" placeholder="Search..." class="search-bar">
        <div class="user-options">
            <a href="Kafe.html" style="text-decoration: none; color: inherit;">Login/Register</a>
            <a href="Checkout.html" class="cart">🛒</a>
        </div>
    </header>

    <nav class="categories">
        <button class="category-btn active" data-target="food">Food</button>
        <button class="category-btn" data-target="drinks">Drinks</button>
        <button class="category-btn" data-target="snacks">Snacks</button>
        <button class="category-btn" data-target="desserts">Desserts</button>
        <button class="category-btn" data-target="others">Others</button>
    </nav>

    <section id="food" class="menu-section active">
        <h2>Food</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="placeholder.png" alt="Nasi Goreng Ayam">
                <h3>Nasi Goreng Ayam</h3>
                <p>RM 6.00</p>
            </div>
            <div class="product-card">
                <img src="placeholder.png" alt="Nasi Goreng Kampung">
                <h3>Nasi Goreng Kampung</h3>
                <p>RM 5.50</p>
            </div>
        </div>
    </section>

    <section id="drinks" class="menu-section hidden">
        <h2>Drinks</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="placeholder.png" alt="Iced Coffee">
                <h3>Iced Coffee</h3>
                <p>RM 3.00</p>
            </div>
            <div class="product-card">
                <img src="placeholder.png" alt="Teh Tarik">
                <h3>Teh Tarik</h3>
                <p>RM 2.50</p>
            </div>
        </div>
    </section>

    <section id="snacks" class="menu-section hidden">
        <h2>Snacks</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="placeholder.png" alt="Keropok Lekor">
                <h3>Keropok Lekor</h3>
                <p>RM 2.00</p>
            </div>
        </div>
    </section>

    <section id="desserts" class="menu-section hidden">
        <h2>Desserts</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="placeholder.png" alt="Cake Slice">
                <h3>Cake Slice</h3>
                <p>RM 5.00</p>
            </div>
        </div>
    </section>

    <!-- Add more sections as needed -->

    <script src="Menu.js"></script>
</body>
</html>
