<?php
include 'db.php';
include 'menu.php';
$products = $pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Product List</h2>
<table border="1">
    <tr><th>ID</th><th>Product Name</th><th>Price</th><th>Actions</th></tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['product_name'] ?></td>
        <td><?= $product['price'] ?></td>
        <td>
            <a href="update.php?id=<?= $product['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $product['id'] ?>" onclick="return confirm('Delete this product?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>