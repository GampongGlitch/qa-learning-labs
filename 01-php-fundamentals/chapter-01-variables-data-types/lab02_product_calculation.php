<?php
// Define Variables
$productName = "Laptop";
$pricePerUnit = 1000.00;
$quantity = 5;
$discountPercentage = 10; // 10%

// Calculations
$totalBeforeDiscount = $pricePerUnit * $quantity;
$discountAmount = $totalBeforeDiscount * ($discountPercentage / 100);
$netTotal = $totalBeforeDiscount - $discountAmount;

// Output Display
echo "=== PRODUCT CALCULATION SUMMARY ===" . "\n";
echo "Product Name    : " . $productName . "\n";
echo "Price per Unit  : " . number_format($pricePerUnit, 2) . " THB" . "\n";
echo "Quantity        : " . $quantity . "\n";
echo "Total Price     : " . number_format($totalBeforeDiscount, 2) . " THB" . "\n";
echo "Discount (" . $discountPercentage . "%)  : " . number_format($discountAmount, 2) . " THB" . "\n";
echo "-----------------------------------" . "\n";
echo "Net Total       : " . number_format($netTotal, 2) . " THB" . "\n";
echo "===================================" . "\n";