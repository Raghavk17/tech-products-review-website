<?php
include 'db.php';

$product_id = $_POST['product_id'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$sql = "INSERT INTO reviews (product_id, rating, comment) VALUES ('$product_id', '$rating', '$comment')";

if ($conn->query($sql) === TRUE) {
    header("Location: product.php?id=$product_id");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
