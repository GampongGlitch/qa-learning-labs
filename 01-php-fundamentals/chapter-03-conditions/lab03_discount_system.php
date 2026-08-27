<?php

// Lab 03: Discount System (Chapter 03: Conditions)

// กำหนดค่ายอดซื้อที่ต้องการทดสอบ
$totalAmount = 500; // ตัวอย่าง ยอดซื้อ 500 บาท
$discountRate = 0; // ตัวอย่าง ส่วนลด 0%

// ตรวจสอบเงื่อนไขตามเกณฑ์
if ($totalAmount >= 1000) { // ลด 15% สำหรับยอดซื้อ 1000 บาทขึ้นไป
    $discountRate = 0.15; // ลด 15%
} elseif ($totalAmount >= 500) { // ลด 10% สำหรับยอดซื้อ 500 บาทขึ้นไป
    $discountRate = 0.10; // ลด 10%
} else {
    $discountRate = 0.00; // ไม่ลด
}

// คำนวณผลลัพธ์
$discountAmount = $totalAmount * $discountRate; // จำนวนเงินที่ลด = ยอดซื้อ * ส่วนลด
$netAmount = $totalAmount - $discountAmount; // ยอดชำระจริง = ยอดซื้อ - จำนวนเงินที่ลด

// แสดงผลลัพธ์
echo "ยอดซื้อ: " . $totalAmount . " บาท\n"; // แสดงยอดซื้อ
echo "ส่วนลด: " . ($discountRate * 100) . "%\n"; // แสดงส่วนลดเป็นเปอร์เซ็นต์
echo "จำนวนเงินที่ลด: " . $discountAmount . " บาท\n"; // แสดงจำนวนเงินที่ลด
echo "ยอดชำระจริง: " . $netAmount . " บาท\n"; // แสดงยอดชำระจริง