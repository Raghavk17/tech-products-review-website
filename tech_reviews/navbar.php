<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Tech Reviews</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="category.php?category=mobiles">Mobiles</a></li>
                <li><a href="category.php?category=laptops">Laptops</a></li>
                <li><a href="category.php?category=smarttv">Smart TVs</a></li>
                <li><a href="category.php?category=bluetoothheadset">Bluetooth Headsets</a></li>
                <li><a href="category.php?category=smartwatches">Smartwatches</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php } else { ?>
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</body>
</html>
