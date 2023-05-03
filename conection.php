<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// ایجاد اتصال به دیتابیس با استفاده از کلاس PDO
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// تنظیم ویژگی های PDO
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
echo "اتصال به دیتابیس با موفقیت برقرار شد.";
} catch(PDOException $e) {
echo "خطا در اتصال به دیتابیس: " . $e->getMessage();
}
