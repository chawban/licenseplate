<?php
// ไฟล์: insert_vehicle.php
// วัตถุประสงค์: เพิ่มข้อมูลรถยนต์ใหม่ลงในตาราง `vehicle`

// 1. เชื่อมต่อฐานข้อมูล
$host = 'localhost'; // ชื่อโฮสต์ของฐานข้อมูล
$dbname = 'your_database_name'; // ชื่อฐานข้อมูล
$username = 'your_username'; // ชื่อผู้ใช้ฐานข้อมูล
$password = 'your_password'; // รหัสผ่านฐานข้อมูล

$conn = new mysqli($host, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// 2. รับข้อมูลจากฟอร์ม (ตัวอย่าง)
$studentID = $_POST['studentID']; // รหัสนักศึกษา
$licensePlate = $_POST['licensePlate']; // ป้ายทะเบียน
$vehicleType = $_POST['vehicleType']; // ประเภทรถ
$brand = $_POST['brand']; // ยี่ห้อรถ
$model = $_POST['model']; // รุ่นรถ
$color = $_POST['color']; // สีรถ
$vehicleStatus = $_POST['vehicleStatus']; // สถานะรถ (Active/Inactive)

// 3. เตรียมคำสั่ง SQL สำหรับเพิ่มข้อมูล
$sql = "INSERT INTO vehicle (StudentID, LicensePlate, VehicleType, Brand, Model, Color, VehicleStatus) 
        VALUES ('$studentID', '$licensePlate', '$vehicleType', '$brand', '$model', '$color', '$vehicleStatus')";

// 4. ประมวลผลคำสั่ง SQL
if ($conn->query($sql) === TRUE) {
    echo "เพิ่มข้อมูลรถยนต์สำเร็จ!";
} else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล: " . $conn->error;
}

// 5. ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>