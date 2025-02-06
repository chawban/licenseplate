 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Noto+Serif+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap" rel="stylesheet">    
 <!-- Bootstrap Table CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.1/dist/bootstrap-table.min.css">
<link rel="stylesheet" href="./css/sweetalert2.min.css">

    <style>
        * {
            font-family: K2D, sans-serif;
        }

        /* Apply bold effect when hovering over the link */
        #studentTable a:hover { 
            font-weight: bold; 
        }

        /* Ensure links inside <td> become bold when hovering over the row */
        #studentTable tbody tr:hover td {
            font-weight: bold;
            cursor: pointer;
        }
    </style>
 
<?php
include './config/db_connection.php';

if (isset($_GET['StudentID'])) {
    $student_id = $_GET['StudentID'];

 
     // ดึงข้อมูลของนักศึกษาจากฐานข้อมูล
     $sql = "SELECT * FROM student WHERE StudentID = '$student_id'";
     $result = $conn->query($sql);
 
     if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();
  
}
?>

<div class="container mt-5">
  
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-4">
            <div class="info-box"><span class="info-label">รหัสนักศึกษา:</span> <span class="info-text"><?php echo $row['StudentID']; ?></span></div>
            <div class="info-box"><span class="info-label">ชื่อ-นามสกุล:</span> <span class="info-text"><?php echo $row['StudentName']; ?></span></div>
            <div class="info-box"><span class="info-label">เพศ:</span> <span class="info-text">
                <?php echo ($row['Gender'] == "M") ? "ชาย" : (($row['Gender'] == "F") ? "หญิง" : "อื่นๆ"); ?>
            </span></div>
            <div class="info-box"><span class="info-label">วันเดือนปีเกิด:</span> <span class="info-text"><?php echo $row['DateOfBirth']; ?></span></div>
        </div>

        <!-- Column 2 -->
        <div class="col-md-4">
            <div class="info-box"><span class="info-label">อีเมล:</span> <span class="info-text"><?php echo $row['Email']; ?></span></div>
            <div class="info-box"><span class="info-label">หมายเลขโทรศัพท์:</span> <span class="info-text"><?php echo $row['PhoneNumber']; ?></span></div>
            <div class="info-box"><span class="info-label">ที่อยู่:</span> <span class="info-text"><?php echo $row['Address']; ?></span></div>
            <div class="info-box"><span class="info-label">เมือง:</span> <span class="info-text"><?php echo $row['City']; ?></span></div>
        </div>

        <!-- Column 3 -->
        <div class="col-md-4">
            <div class="info-box"><span class="info-label">รัฐ:</span> <span class="info-text"><?php echo $row['State']; ?></span></div>
            <div class="info-box"><span class="info-label">รหัสไปรษณีย์:</span> <span class="info-text"><?php echo $row['PostalCode']; ?></span></div>
            <div class="info-box"><span class="info-label">ประเทศ:</span> <span class="info-text"><?php echo $row['Country']; ?></span></div>
            <div class="info-box"><span class="info-label">วันเริ่มการศึกษา:</span> <span class="info-text"><?php echo $row['EnrollmentDate']; ?></span></div>
        </div>
    </div>

    <div class="row mt-3">
        <!-- Additional Info -->
        <div class="col-md-4">
            <div class="info-box"><span class="info-label">โปรแกรมการศึกษา:</span> <span class="info-text"><?php echo $row['Program']; ?></span></div>
        </div>
        <div class="col-md-4">
            <div class="info-box"><span class="info-label">สถานะ:</span> <span class="info-text"><?php echo $row['StudentStatus']; ?></span></div>
        </div>
    </div>

    <a href="view_students5.php" class="btn btn-secondary mt-4">ปิด</a>
</div>


<?php
     } else {
        echo "ไม่พบข้อมูลนักศึกษา";
        exit;
    } 
?>

<!-- เชื่อมต่อ JavaScript ของ Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Q1d5HtaWbS7kL91SmW7Jz1jBTeG9R76W+FpsRTMe4b9iM8A" crossorigin="anonymous"></script>

 
 