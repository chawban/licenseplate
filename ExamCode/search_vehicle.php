<?php
// ไฟล์: search_vehicle.php
// วัตถุประสงค์: ค้นหาข้อมูลรถยนต์จากป้ายทะเบียนหรือรหัสนักศึกษา

// 1. เชื่อมต่อฐานข้อมูล
$host = 'localhost'; // ชื่อโฮสต์ของฐานข้อมูล
$dbname = 'udru'; // ชื่อฐานข้อมูล
$username = 'root'; // ชื่อผู้ใช้ฐานข้อมูล
$password = ''; // รหัสผ่านฐานข้อมูล

$conn = new mysqli($host, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// 2. รับค่าจากฟอร์มค้นหา (ตัวอย่าง)
 $searchKeyword = $_GET['searchKeyword']; // คีย์เวิร์ดสำหรับค้นหา (ป้ายทะเบียนหรือรหัสนักศึกษา)

// 3. เตรียมคำสั่ง SQL สำหรับค้นหา
$sql = "SELECT * FROM vehicle 
        WHERE LicensePlate LIKE '%$searchKeyword%' 
        OR StudentID LIKE '%$searchKeyword%'";

// 4. ประมวลผลคำสั่ง SQL
$result = $conn->query($sql);

// 5. แสดงผลลัพธ์
if ($result->num_rows > 0) {
    echo "<h2>ผลการค้นหา:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>รหัสรถ</th><th>รหัสนักศึกษา</th><th>ป้ายทะเบียน</th><th>ประเภทรถ</th><th>ยี่ห้อ</th><th>รุ่น</th><th>สี</th><th>สถานะ</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['VehicleID'] . "</td>";
        echo "<td>" . $row['StudentID'] . "</td>";
        echo "<td>" . $row['LicensePlate'] . "</td>";
        echo "<td>" . $row['VehicleType'] . "</td>";
        echo "<td>" . $row['Brand'] . "</td>";
        echo "<td>" . $row['Model'] . "</td>";
        echo "<td>" . $row['Color'] . "</td>";
        echo "<td>" . $row['VehicleStatus'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "ไม่พบข้อมูลที่ค้นหา";
}

// 6. ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>