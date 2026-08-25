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

$productName2 = "Smartphone"; // ชื่อสินค้า
$price2 = 20000.00; // ราคาต่อหน่วย
$quantity2 = 10; // จํานวน
$isAvailable2 = false; // สถานะ

$total2 = $price2 * $quantity2; // ยอดรวม = ราคาต่อหน่วย * จํานวน

echo "Product Name: " . $productName2 . "\n"; // แสดงชื่อสินค้า
echo "Price: " . $price2 . " THB\n"; // แสดงราคา
echo "Quantity: " . $quantity2 . "\n"; // แสดงจํานวน
echo "Status: " . ($isAvailable2 ? "In Stock" : "Out of Stock") . "\n"; // แสดงสถานะ (ถ้า $isAvailable2 เป็น true จะแสดง "In Stock" ถ้าเป็น false จะแสดง "Out of Stock")
echo "Total: " . number_format($total2, 2) . " THB\n"; // แสดงยอดรวม (รูปแบบตัวเลขมีทศนิยม 2 ตําแหน่ง)