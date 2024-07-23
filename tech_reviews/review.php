<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Bootstrap Navigation Bar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Tech Reviews</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="category.php?category=mobiles">Mobiles</a></li>
                <li><a href="category.php?category=laptops">Laptops</a></li>
                <li><a href="category.php?category=smarttv">Smart TVs</a></li>
                <li><a href="category.php?category=bluetoothheadset">Bluetooth Headsets</a></li>
                <li><a href="category.php?category=smartwatches">Smartwatches</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Review Page</h1>
        <p>This is the review page of our website. You can add any content you want here.</p>
    </div>
</body>
</html>
