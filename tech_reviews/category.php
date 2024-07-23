<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
include 'db.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category Page</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .main-heading {
            color: #001f3f; /* Navy blue */
            background-color: #ffffff; /* White */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 2.5em;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product {
            border: 1px solid #dddddd;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            text-align: center;
            width: 300px;
            box-sizing: border-box;
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #dddddd;
            padding-bottom: 10px;
        }
        .product h2 {
            font-size: 1.5em;
            color: #001f3f; /* Navy blue */
        }
        .product p {
            color: #555555;
        }
        .product a {
            display: inline-block;
            margin-top: 10px;
            color: #ffffff;
            background-color: #001f3f; /* Navy blue */
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        .product a:hover {
            background-color: #0056b3; /* Lighter blue */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="main-heading">Trending Devices</h1>
        <div class="products">
            <?php
            if (isset($_GET['category'])) {
                $category = $_GET['category'];
                $sql = "SELECT * FROM products WHERE category='$category'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='product'>";
                        echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
                        echo "<h2>" . $row['name'] . "</h2>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<p>Price: ₹" . $row['price'] . "</p>";
                        echo "<a href='" . $row['buy_url'] . "' target='_blank' class='btn btn-primary'>Buy Now</a>";
                        echo "<br><a href='product.php?id=" . $row['id'] . "'>View Reviews</a>";
                        echo "</div>";
                    }
                } else {
                    echo "No products found in this category.";
                }
            } else {
                echo "Invalid category.";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
