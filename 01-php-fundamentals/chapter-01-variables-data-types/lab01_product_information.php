<?php
$productName = "Laptop";
$price = 1000.00;
$quantity = 5;
$isAvailable = true;

$total = $price * $quantity;

echo "Product Name: " . $productName . "\n";
echo "Price: $" . $price . "\n";
echo "Quantity: " . $quantity . "\n";
echo "Status: " . ($isAvailable ? "In Stock" : "Out of Stock") . "\n";
echo "Total: $" . number_format($total, 2) . "\n";
?>