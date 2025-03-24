<?php
include 'db.php';
include 'menu.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("INSERT INTO products (product_name, price) VALUES (?, ?)");
    $stmt->execute([$_POST['product_name'], $_POST['price']]);
    header("Location: index.php");
    exit;
}
?>
<h2>Add Product</h2>
<form method="POST">
    Product Name: <input type="text" name="product_name" required><br>
    Price: <input type="number" name="price" step="0.01" required><br>
    <button type="submit">Add</button>
</form>
