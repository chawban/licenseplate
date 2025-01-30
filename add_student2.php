<?php
include './config/db_connection.php';

if (isset($_POST['submit'])) {
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

    $sql = "INSERT INTO student (StudentID, Name, Gender, DateOfBirth, Email, PhoneNumber, Address, City, State, PostalCode, Country, EnrollmentDate, Program, Status)
            VALUES ('$student_id', '$name', '$gender', '$dob', '$email', '$phone', '$address', '$city', '$state', '$postal_code', '$country', '$enrollment_date', '$program', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New student record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Noto+Serif+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap" rel="stylesheet">    
    <style>
        * {
            font-family: K2D, sans-serif;
        }
    </style>
</head>
<body>


<div class="container mt-5">
    <h2>เพิ่มข้อมูลนักศึกษา</h2>
    
    <!-- ฟอร์มเพิ่มนักศึกษา -->
    <form method="post" action="add_student.php">
        <div class="mb-3">
            <label for="StudentID" class="form-label">รหัสนักศึกษา</label>
            <input type="text" class="form-control" id="StudentID" name="StudentID" required>
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" id="Name" name="Name" required>
        </div>

        <div class="mb-3">
            <label for="Gender" class="form-label">เพศ</label>
            <input type="text" class="form-control" id="Gender" name="Gender" required>
        </div>

        <div class="mb-3">
            <label for="DateOfBirth" class="form-label">วันเดือนปีเกิด</label>
            <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" required>
        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" id="Email" name="Email" required>
        </div>

        <div class="mb-3">
            <label for="PhoneNumber" class="form-label">หมายเลขโทรศัพท์</label>
            <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber">
        </div>

        <div class="mb-3">
            <label for="Address" class="form-label">ที่อยู่</label>
            <textarea class="form-control" id="Address" name="Address"></textarea>
        </div>

        <div class="mb-3">
            <label for="City" class="form-label">เมือง</label>
            <input type="text" class="form-control" id="City" name="City" required>
        </div>

        <div class="mb-3">
            <label for="State" class="form-label">รัฐ</label>
            <input type="text" class="form-control" id="State" name="State" required>
        </div>

        <div class="mb-3">
            <label for="PostalCode" class="form-label">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" id="PostalCode" name="PostalCode" required>
        </div>

        <div class="mb-3">
            <label for="Country" class="form-label">ประเทศ</label>
            <input type="text" class="form-control" id="Country" name="Country" required>
        </div>

        <div class="mb-3">
            <label for="EnrollmentDate" class="form-label">วันเริ่มการศึกษา</label>
            <input type="date" class="form-control" id="EnrollmentDate" name="EnrollmentDate" required>
        </div>

        <div class="mb-3">
            <label for="Program" class="form-label">โปรแกรมการศึกษา</label>
            <input type="text" class="form-control" id="Program" name="Program">
        </div>

        <div class="mb-3">
            <label for="Status" class="form-label">สถานะ</label>
            <input type="text" class="form-control" id="Status" name="Status" required>
        </div>

        <button type="submit" class="btn btn-primary">เพิ่มนักศึกษา</button>
    </form>
</div>

<!-- เชื่อมต่อ JavaScript ของ Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Q1d5HtaWbS7kL91SmW7Jz1jBTeG9R76W+FpsRTMe4b9iM8A" crossorigin="anonymous"></script>

</body>
</html>