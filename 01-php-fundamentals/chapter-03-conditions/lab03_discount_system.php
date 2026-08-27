<?php

// Lab 03: Discount System (Chapter 03: Conditions)

/*
 * QA Exercise
 * อย่าทดสอบเฉพาะค่าปกติ
 * ลอง: 499, 500, 501, 999, 1000, 1001
 * เริ่มฝึก Boundary Thinking (การคิดค่าขอบเขต) ตั้งแต่ตรงนี้
 */

// กำหนดชุดตัวเลขขอบเขตที่ต้องการทดสอบ (Boundary Cases)
$testCases = [499, 500, 501, 999, 1000, 1001]; // ตัวแปร Array $testCases ของชุดตัวเลขขอบเขต ที่ต้องการทดสอบ

echo "=== QA BOUNDARY TESTING RESULT ===\n\n";

// วนลูปนำค่าขอบเขตแต่ละตัวมาคำนวณและแสดงผล
foreach ($testCases as $totalAmount) { // วนลูปนำค่าขอบเขตแต่ละตัวมาคำนวณและแสดงผล ด้วย foreach
    $discountRate = 0; // ส่วนลดเริ่มต้นเป็น 0

    // ตรวจสอบเงื่อนไขตามเกณฑ์
    if ($totalAmount >= 1000) { // เงื่อนไข ลด 15% สำหรับยอดซื้อ 1000 บาทขึ้นไป
        $discountRate = 0.15; // ลด 15%
    } elseif ($totalAmount >= 500) { // เงื่อนไข ลด 10% สำหรับยอดซื้อ 500 บาทขึ้นไป
        $discountRate = 0.10; // ลด 10%
    } else {
        $discountRate = 0.00; // ไม่ลด สำหรับยอดซื้อน้อยกว่า 500 บาท
    }

    // คำนวณผลลัพธ์
    $discountAmount = $totalAmount * $discountRate; // จำนวนเงินที่ลด = ยอดซื้อ * ส่วนลด
    $netAmount = $totalAmount - $discountAmount; // ยอดชำระจริง = ยอดซื้อ - จำนวนเงินที่ลด

    // แสดงผลลัพธ์ทีละเคส
    echo "ยอดซื้อ: " . $totalAmount . " บาท | "; // แสดงยอดซื้อ ในแต่ละเคส
    echo "ส่วนลด: " . ($discountRate * 100) . "% | "; // แสดงส่วนลดเป็น % ในแต่ละเคส
    echo "จำนวนเงินที่ลด: " . $discountAmount . " บาท | "; // แสดงจำนวนเงินที่ลด ในแต่ละเคส
    echo "ยอดชำระจริง: " . $netAmount . " บาท\n"; // แสดงยอดชำระจริง ในแต่ละเคส
}