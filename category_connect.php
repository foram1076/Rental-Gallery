<?php
//  database connection
$conn = new mysqli("localhost", "username", "password", "database");

// Fetch categories from the database
$category_sql = "SELECT id, category_name FROM categories";
$category_result = $conn->query($category_sql);
?>

<ul>
    <?php while($category = $category_result->fetch_assoc()) { ?>
        <li><a href="shop.php?category_id=<?php echo $category['id']; ?>">
            <?php echo $category['category_name']; ?></a></li>
    <?php } ?>
</ul>
