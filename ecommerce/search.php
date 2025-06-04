<?php
// Get search query
include 'includes/db.php';
$stmt = $conn->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$searchQuery = $_GET['query'] ?? '';

// Filter products if search query is entered
if (!empty($searchQuery)) {
    $filteredProducts = array_filter($products, function ($product) use ($searchQuery) {
        return stripos($product['name'], $searchQuery) !== false || 
               stripos($product['description'], $searchQuery) !== false;
    });
} else {
    $filteredProducts = $products; // Show all products if no search query
}
?>
 <link rel="stylesheet" href="css/styles.css">
<a href="index.php" class="back-button">⬅ Back</a>

<!-- Display Products -->
<div class="product-list">
    <?php if (empty($filteredProducts)) : ?>
        <p>No products found.</p>
    <?php else : ?>
        <?php foreach ($filteredProducts as $product) : ?>
            <div class="product">
                <h3><?= htmlspecialchars($product['name']); ?></h3>
                <p>Price: $<?= number_format($product['price'], 2); ?></p>
                <p><?= htmlspecialchars($product['description']); ?></p>
                <?php if (!empty($product['image'])) : ?>
                    <img src="images/<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" class="product-image">
                <?php endif; ?>
                <form method="POST" action="pages/cart.php">
                    <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
                    <button type="submit" name="add_to_cart" class="add-to-cart-button">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
