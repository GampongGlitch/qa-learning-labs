<?php

// Chapter 04: Loops
// Lab 04: Product List

// 1. กำหนดข้อมูลรายการสินค้า (Array 2 มิติแบบพื้นฐาน)
$products = [
    ["name" => "Laptop", "price" => 25000, "stock" => 5],
    ["name" => "Mouse", "price" => 450, "stock" => 12],
    ["name" => "Keyboard", "price" => 1200, "stock" => 0],
    ["name" => "Monitor", "price" => 4500, "stock" => 3],
    ["name" => "USB Cable", "price" => 150, "stock" => 0],
];

// Requirement 1: แสดงสินค้าทั้งหมด
echo "=== 1. ALL PRODUCTS ===\n";
foreach ($products as $item) {
    echo "- " . $item['name'] . " | Price: " . $item['price'] . " THB | Stock: " . $item['stock'] . "\n";
}

// Requirement 2: แสดงเฉพาะสินค้าราคา > 1,000
echo "\n=== 2. PRODUCTS PRICE > 1,000 THB ===\n";
foreach ($products as $item) {
    if ($item['price'] > 1000) {
        echo "- " . $item['name'] . " | Price: " . $item['price'] . " THB\n";
    }
}

// Requirement 3: แสดงสินค้าที่ Stock = 0 (OUT OF STOCK)
echo "\n=== 3. OUT OF STOCK PRODUCTS (STOCK = 0) ===\n";
foreach ($products as $item) {
    if ($item['stock'] === 0) {
        echo "- " . $item['name'] . " | Stock: " . $item['stock'] . "\n";
    }
}