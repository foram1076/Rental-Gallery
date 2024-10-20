<?php
// Connect to the database (use your own connection details)
$conn = new mysqli("localhost", "username", "password", "database");

$category = $_GET['category'];

// Query to fetch products from the selected category
$sql = "SELECT * FROM products WHERE category = '$category'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<h3>" . $row['product_name'] . "</h3>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "<img src='" . $row['image_url'] . "' alt='" . $row['product_name'] . "'>";
        echo "</div>";
    }
} else {
    echo "<p>No products found in this category.</p>";
}
$conn->close();
?>
