<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Noto+Serif+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap" rel="stylesheet">    
 <!-- Bootstrap Table CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.1/dist/bootstrap-table.min.css">

<style>
        * {
            font-family: K2D, sans-serif;
        }
    </style>

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
//$searchKeyword = $_POST['searchKeyword']; // คีย์เวิร์ดสำหรับค้นหา (ป้ายทะเบียนหรือรหัสนักศึกษา)

// 3. เตรียมคำสั่ง SQL สำหรับค้นหา
$sql = "SELECT * FROM vehicle";

// 4. ประมวลผลคำสั่ง SQL
$result = $conn->query($sql);

// 5. แสดงผลลัพธ์
if ($result->num_rows > 0) {
    echo "<h2>ผลการค้นหา:</h2>";
    ?>
    
    <table id="studentTable"
        class="table table-striped"
        data-toggle="table"
        data-search="true"
        data-pagination="true"
        data-page-size="10"
        data-show-refresh="true"
        data-show-columns="true">        
        <thead class="table-hover">
    <?php
    
    echo "<tr><th>รหัสรถ</th><th>รหัสนักศึกษา</th><th>ป้ายทะเบียน</th><th>ประเภทรถ</th><th>ยี่ห้อ</th><th>รุ่น</th><th>สี</th><th>สถานะ</th></tr></thead>";
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap Table JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
