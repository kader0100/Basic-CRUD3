<?php
include 'db.php';
include 'menu.php';
$id = $_GET['id'];
$product = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$product->execute([$id]);
$product = $product->fetch(PDO::FETCH_ASSOC);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $pdo->prepare("UPDATE products SET product_name = ?, price = ? WHERE id = ?");
    $stmt->execute([$_POST['product_name'], $_POST['price'], $id]);
    header("Location: index.php");
    exit;
}
?>
<h2>Edit Product</h2>
<form method="POST">
    Product Name: <input type="text" name="product_name" value="<?= $product['product_name'] ?>" required><br>
    Price: <input type="number" name="price" value="<?= $product['price'] ?>" step="0.01" required><br>
    <button type="submit">Update</button>
</form>
