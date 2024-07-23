<?php
include 'db.php';
include 'navbar.php';

$product_id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name']; ?> - Tech Reviews</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="main-heading"><?php echo $product['name']; ?></h1>
        <div class="product-detail">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-responsive">
            <p><?php echo $product['description']; ?></p>
        </div>
        <div class="reviews">
            <h2>Reviews</h2>
            <?php
            $sql = "SELECT * FROM reviews WHERE product_id=$product_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='review'>";
                    echo "<p>Rating: " . $row['rating'] . "</p>";
                    echo "<p>" . $row['comment'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No reviews yet.</p>";
            }
            ?>
            <h3>Add a Review</h3>
            <form action="add_review.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                <label for="rating">Rating:</label>
                <select name="rating" id="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="comment">Comment:</label>
                <textarea name="comment" id="comment" rows="4" required></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
