<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New user registered successfully";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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

        .register-form {
            width: 300px;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Add opacity to the background color */
            text-align: center;
        }

        .register-form input {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            box-sizing: border-box; /* Include padding and border in width calculation */
        }

        .register-form button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50; /* Green */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-form button:hover {
            background-color: #45a049; /* Darker green */
        }

        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="register-form">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
