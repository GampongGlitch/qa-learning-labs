<?php

// Chapter 04: Loops
// Lab 04: Product List

// 1. กำหนดข้อมูลรายการสินค้า (Array 2 มิติแบบพื้นฐาน โครงสร้างข้อมูลแบบอาเรย์ซ้อนอาเรย์ (Array of Array) ที่เก็บข้อมูลในรูปแบบตารางซึ่งมีทั้ง แถว (Row) และ คอลัมน์ (Column))
$products = [
    ["name" => "Laptop", "price" => 25000, "stock" => 5],
    ["name" => "Mouse", "price" => 450, "stock" => 12],
    ["name" => "Keyboard", "price" => 1200, "stock" => 0],
    ["name" => "Monitor", "price" => 4500, "stock" => 3],
    ["name" => "USB Cable", "price" => 150, "stock" => 0],
]; // Array 2 มิติแบบพื้นฐาน $products ประกอบด้วย  ชื่อสินค้า, ราคาสินค้า, จํานวน ของสินค้าแต่ละตัว

// Requirement 1: แสดงสินค้าทั้งหมด
echo "=== 1. ALL PRODUCTS ===\n";
foreach ($products as $item) { // วนลูปแสดงสินค้าทั้งหมด ด้วย foreach
    echo "- " . $item['name'] . " | Price: " . $item['price'] . " THB | Stock: " . $item['stock'] . "\n";
} // แสดงชื่อสินค้า, ราคาสินค้า, จํานวน ของสินค้าแต่ละตัว

// Requirement 2: แสดงเฉพาะสินค้าราคา > 1,000
echo "\n=== 2. PRODUCTS PRICE > 1,000 THB ===\n";
foreach ($products as $item) { // วนลูปแสดงเฉพาะสินค้าราคา > 1,000 ด้วย foreach
    if ($item['price'] > 1000) { // ตรวจสอบเงื่อนไขเฉพาะสินค้าราคา > 1,000
        echo "- " . $item['name'] . " | Price: " . $item['price'] . " THB\n";
    } // แสดงชื่อสินค้า, ราคาสินค้า ของสินค้าแต่ละตัวที่มีราคามากกว่า 1,000
}

// Requirement 3: แสดงสินค้าที่ Stock = 0 (OUT OF STOCK)
echo "\n=== 3. OUT OF STOCK PRODUCTS (STOCK = 0) ===\n";
foreach ($products as $item) { // วนลูปแสดงสินค้าที่ Stock = 0 (OUT OF STOCK) ด้วย foreach
    if ($item['stock'] === 0) { // ตรวจสอบเงื่อนไขเฉพาะสินค้าที่ Stock = 0 (OUT OF STOCK)
        echo "- " . $item['name'] . " | Stock: " . $item['stock'] . "\n";
    } // แสดงชื่อสินค้า, จํานวน ของสินค้าแต่ละตัวที่ Stock = 0 (OUT OF STOCK)
}