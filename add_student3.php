<?php
include './config/db_connection.php';

if (isset($_POST['StudentID'])) {
    $student_id = $_POST['StudentID'];
    $name = $_POST['Name'];
    $gender = $_POST['Gender'];
    $dob = $_POST['DateOfBirth'];
    $email = $_POST['Email'];
    $phone = $_POST['PhoneNumber'];
    $address = $_POST['Address'];
    $city = $_POST['City'];
    $state = $_POST['State'];
    $postal_code = $_POST['PostalCode'];
    $country = $_POST['Country'];
    $enrollment_date = $_POST['EnrollmentDate'];
    $program = $_POST['Program'];
    $status = $_POST['Status'];

    $sql = "INSERT INTO student (StudentID, StudentName, Gender, DateOfBirth, Email, PhoneNumber, Address, City, State, PostalCode, Country, EnrollmentDate, Program, StudentStatus)
            VALUES ('$student_id', '$name', '$gender', '$dob', '$email', '$phone', '$address', '$city', '$state', '$postal_code', '$country', '$enrollment_date', '$program', '$status')";

    // Debug SQL Query
    // echo "<pre>$sql</pre>"; // แสดงคำสั่ง SQL

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center'>เพิ่มข้อมูลนักศึกษาเรียบร้อยแล้ว!</div>";
        echo "<META HTTP-EQUIV='Refresh' CONTENT='5;URL=view_students4.php'>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลนักศึกษา</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Noto+Serif+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="./css/sweetalert2.min.css">

    <style>
        * {
            font-family: K2D, sans-serif;
        }
    </style>  
    <style>

        * { font-family: 'K2D', sans-serif; }
        body { background-color: #f8f9fa; }
        .card { box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body>
 
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 800px;">
        <div class="card-header bg-primary text-white text-center">
            <h3>เพิ่มข้อมูลนักศึกษา</h3>
        </div>
        <div class="card-body">
            <form  action="add_student3.php" method="post" id="AddStudentForm">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="StudentID" class="form-label">รหัสนักศึกษา</label>
                        <input type="text" class="form-control" id="StudentID" name="StudentID" required  pattern="^\d{11}$" placeholder="กรุณากรอกหมายเลขรหัสนักศึกษา 11 หลัก">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="Name" class="form-label">ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" id="Name" name="Name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">เพศ</label>
                        <select class="form-select" name="Gender" required>
                            <option value="M">ชาย</option>
                            <option value="F">หญิง</option>
                            <option value="O">อื่นๆ</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="DateOfBirth" class="form-label">วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Email" class="form-label">อีเมล</label>
                    <input type="email" class="form-control" id="Email" name="Email" required>
                </div>

                <div class="mb-3">
                    <label for="PhoneNumber" class="form-label">หมายเลขโทรศัพท์</label>
                    <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="กรุณากรอกหมายเลขโทรศัพท์ 11 หลัก">
                </div>

                <div class="mb-3">
                    <label for="Address" class="form-label">ที่อยู่</label>
                    <textarea class="form-control" id="Address" name="Address" rows="2"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="City" class="form-label">เมือง</label>
                        <input type="text" class="form-control" id="City" name="City" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="State" class="form-label">รัฐ</label>
                        <input type="text" class="form-control" id="State" name="State" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="PostalCode" class="form-label">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" id="PostalCode" name="PostalCode" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="Country" class="form-label">ประเทศ</label>
                        <input type="text" class="form-control" id="Country" name="Country" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="EnrollmentDate" class="form-label">วันเริ่มการศึกษา</label>
                        <input type="date" class="form-control" id="EnrollmentDate" name="EnrollmentDate" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="Program" class="form-label">โปรแกรมการศึกษา</label>
                        <input type="text" class="form-control" id="Program" name="Program">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">สถานะ</label>
                    <select class="form-select" name="Status" required>
                        <option value="กำลังศึกษา">กำลังศึกษา</option>
                        <option value="สำเร็จการศึกษา">สำเร็จการศึกษา</option>
                        <option value="พักการเรียน">พักการเรียน</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">เพิ่มนักศึกษา</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
 