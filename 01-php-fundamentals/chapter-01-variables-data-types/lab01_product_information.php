<?php

// Exercise 1: Product Information

$productName1 = "Laptop";
$price1 = 30000.00;
$quantity1 = 5;
$isAvailable1 = true;

$total1 = $price1 * $quantity1;

echo "Product Name: " . $productName1 . "\n";
echo "Price: " . $price1 . " THB\n";
echo "Quantity: " . $quantity1 . "\n";
echo "Status: " . ($isAvailable1 ? "In Stock" : "Out of Stock") . "\n";
echo "Total: " . number_format($total1, 2) . " THB\n";

echo "-----------------------------\n";

// Exercise 2: Product Information

$productName2 = "Smartphone";
$price2 = 20000.00;
$quantity2 = 10;
$isAvailable2 = false;

$total2 = $price2 * $quantity2;

echo "Product Name: " . $productName2 . "\n";
echo "Price: " . $price2 . " THB\n";
echo "Quantity: " . $quantity2 . "\n";
echo "Status: " . ($isAvailable2 ? "In Stock" : "Out of Stock") . "\n";
echo "Total: " . number_format($total2, 2) . " THB\n";

?>