<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Invalid username";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url('images/background.jpg'); /* Specify the path to your background image */
            background-size: cover;
            background-position: center;
            height: 100vh; /* Make sure the background covers the entire viewport height */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            width: 300px;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Add opacity to the background color */
            text-align: center;
        }

        .login-form input {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
