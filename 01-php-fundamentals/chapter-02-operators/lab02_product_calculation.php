<?php

// Exercise 1: Product Calculation

// Define Variables
$productName1 = "Laptop";
$pricePerUnit1 = 1000.00;
$quantity1 = 5;
$discountPercentage1 = 10; // 10%

// Calculations
$totalBeforeDiscount1 = $pricePerUnit1 * $quantity1;
$discountAmount1 = $totalBeforeDiscount1 * ($discountPercentage1 / 100);
$netTotal1 = $totalBeforeDiscount1 - $discountAmount1;

// Output Display
echo "=== PRODUCT CALCULATION SUMMARY ===" . "\n";
echo "Product Name    : " . $productName1 . "\n";
echo "Price per Unit  : " . number_format($pricePerUnit1, 2) . " THB" . "\n";
echo "Quantity        : " . $quantity1 . "\n";
echo "Total Price     : " . number_format($totalBeforeDiscount1, 2) . " THB" . "\n";
echo "Discount (" . $discountPercentage1 . "%)  : " . number_format($discountAmount1, 2) . " THB" . "\n";
echo "-----------------------------------" . "\n";
echo "Net Total       : " . number_format($netTotal1, 2) . " THB" . "\n";
echo "===================================" . "\n";

echo "------------------------------\n";

// Exercise 2: Product Calculation

// Define Variables
$productName2 = "Smartphone"; // ชื่อสินค้า
$pricePerUnit2 = 25000.00; // ราคาต่อหน่วย
$quantity2 = 8; // จํานวน
$discountPercentage2 = 5; // 5% (เปอร์เซ็นต์ส่วนลด)

// Calculations
$totalBeforeDiscount2 = $pricePerUnit2 * $quantity2; // ยอดรวม (ก่อนหักส่วนลด) = ราคาต่อหน่วย * จํานวน
$discountAmount2 = $totalBeforeDiscount2 * ($discountPercentage2 / 100); // ส่วนลด = ยอดรวม (ก่อนหักส่วนลด) * (เปอร์เซ็นต์ส่วนลด / 100)
$netTotal2 = $totalBeforeDiscount2 - $discountAmount2; // ยอดสุทธิ = ยอดรวม (ก่อนหักส่วนลด) - ส่วนลด

// Output Display
echo "=== PRODUCT CALCULATION SUMMARY ===" . "\n";
echo "Product Name    : " . $productName2 . "\n"; // แสดงชื่อสินค้า
echo "Price per Unit  : " . number_format($pricePerUnit2, 2) . " THB" . "\n"; // แสดงราคาต่อหน่วย
echo "Quantity        : " . $quantity2 . "\n"; // แสดงจํานวน
echo "Total Price     : " . number_format($totalBeforeDiscount2, 2) . " THB" . "\n"; // แสดงยอดรวม (ก่อนหักส่วนลด)
echo "Discount (" . $discountPercentage2 . "%)  : " . number_format($discountAmount2, 2) . " THB" . "\n"; // แสดงส่วนลด
echo "-----------------------------------" . "\n";
echo "Net Total       : " . number_format($netTotal2, 2) . " THB" . "\n"; // แสดงยอดสุทธิ
echo "===================================" . "\n";