<?php
include './config/db_connection.php';
include './helper/thaiHelper.php';

if (isset($_GET['StudentID'])) {
    $student_id = $_GET['StudentID'];

    // ดึงข้อมูลของนักศึกษาจากฐานข้อมูล
    $sql = "SELECT * FROM student WHERE StudentID = '$student_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        * { font-family: K2D, sans-serif; }
        .info-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .info-label {
            font-weight: bold;
            color: #555;
        }
        .info-text {
            color: #000;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-label">รหัสนักศึกษา:</div>
                <div class="info-text"><?php echo $row['StudentID']; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">ชื่อ-นามสกุล:</div>
                <div class="info-text"><?php echo $row['StudentName']; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">เพศ:</div>
                <div class="info-text"><?php echo ($row['Gender'] == "M") ? "ชาย" : (($row['Gender'] == "F") ? "หญิง" : "อื่นๆ"); ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">วันเกิด:</div>
                <div class="info-text"><?php echo convertToThaiDate($row['DateOfBirth']); ?></div>
            </div>
        </div>

        <!-- Column 2 -->
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-label">อีเมล:</div>
                <div class="info-text"><?php echo $row['Email']; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">หมายเลขโทรศัพท์:</div>
                <div class="info-text"><?php echo $row['PhoneNumber']; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">ที่อยู่:</div>
                <div class="info-text"><?php echo $row['Address']; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">เมือง:</div>
                <div class="info-text"><?php echo $row['City']; ?></div>
            </div>
        </div>

        <!-- Column 3 -->
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-label">รัฐ:</div>
                <div class="info-text"><?php echo $row['State']; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">รหัสไปรษณีย์:</div>
                <div class="info-text"><?php echo $row['PostalCode']; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">ประเทศ:</div>
                <div class="info-text"><?php echo $row['Country']; ?></div>
            </div>
            <div class="info-box">
                <div class="info-label">วันเริ่มการศึกษา:</div>
                <div class="info-text"><?php echo convertToThaiDate($row['EnrollmentDate']); ?></div>
            </div>
        </div>
    </div>

    <!-- Additional Information -->
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-label">โปรแกรมการศึกษา:</div>
                <div class="info-text"><?php echo $row['Program']; ?></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-label">สถานะ:</div>
                <div class="info-text"><?php echo $row['StudentStatus']; ?></div>
            </div>
        </div>
    </div>

    <!-- Close Button -->
    <div class="text-center">
        <a href="view_students5.php" class="btn btn-secondary mt-4">ปิด</a>
    </div>
</div>

 
</body>
</html>

<?php
    } else {
        echo "<div class='container mt-5'><p class='text-danger text-center'>ไม่พบข้อมูลนักศึกษา</p></div>";
    }
}
?>
