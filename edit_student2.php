<?php
include './config/db_connection.php';

if (isset($_GET['StudentID'])) {
    $student_id = $_GET['StudentID'];



    if (isset($_POST['StudentName'])) {
        $Studentname = $_POST['StudentName'];
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
        $StudentStatus = $_POST['StudentStatus'];

        $sql_update = "UPDATE student SET StudentName = '$Studentname', Gender = '$gender', DateOfBirth = '$dob', Email = '$email', PhoneNumber = '$phone', Address = '$address', 
                      City = '$city', State = '$state', PostalCode = '$postal_code', Country = '$country', EnrollmentDate = '$enrollment_date', Program = '$program', StudentStatus = '$StudentStatus'
                      WHERE StudentID = '$student_id'";

        //print $sql_update;  

        if ($conn->query($sql_update) === TRUE) {
            echo "Record updated successfully.";
        } else {
            echo "Error: " . $sql_update . "<br>" . $conn->error;
        }
    }

     // ดึงข้อมูลของนักศึกษาจากฐานข้อมูล
     $sql = "SELECT * FROM student WHERE StudentID = '$student_id'";
     $result = $conn->query($sql);
 
     if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();
     } else {
         echo "Student not found.";
         exit;
     }   
}
?>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลนักศึกษา</title>
    <!-- เชื่อมต่อกับ Bootstrap -->
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
    <h2>แก้ไขข้อมูลนักศึกษา</h2>
    
    <!-- ฟอร์มแก้ไขข้อมูลนักศึกษา -->
    <form method="post" action="edit_student2.php?StudentID=<?php echo $student_id; ?>">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="StudentName" class="form-label">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" id="StudentName" name="StudentName" value="<?php echo $row['StudentName']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="Gender" class="form-label">เพศ</label>
                <input type="text" class="form-control" id="Gender" name="Gender" value="<?php echo $row['Gender']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="DateOfBirth" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" value="<?php echo $row['DateOfBirth']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="Email" class="form-label">อีเมล</label>
                <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $row['Email']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="PhoneNumber" class="form-label">หมายเลขโทรศัพท์</label>
                <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" value="<?php echo $row['PhoneNumber']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label for="City" class="form-label">เมือง</label>
                <input type="text" class="form-control" id="City" name="City" value="<?php echo $row['City']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="Address" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $row['Address']; ?>">
            </div>
 
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="State" class="form-label">รัฐ</label>
                <input type="text" class="form-control" id="State" name="State" value="<?php echo $row['State']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="PostalCode" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="<?php echo $row['PostalCode']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Country" class="form-label">ประเทศ</label>
                <input type="text" class="form-control" id="Country" name="Country" value="<?php echo $row['Country']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="EnrollmentDate" class="form-label">วันเริ่มการศึกษา</label>
                <input type="date" class="form-control" id="EnrollmentDate" name="EnrollmentDate" value="<?php echo $row['EnrollmentDate']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Program" class="form-label">โปรแกรมการศึกษา</label>
                <input type="text" class="form-control" id="Program" name="Program" value="<?php echo $row['Program']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label for="StudentStatus" class="form-label">สถานะ</label>
                <input type="text" class="form-control" id="StudentStatus" name="StudentStatus" value="<?php echo $row['StudentStatus']; ?>" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">อัพเดตข้อมูลนักศึกษา</button>
    </form>
</div>

<!-- เชื่อมต่อ JavaScript ของ Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Q1d5HtaWbS7kL91SmW7Jz1jBTeG9R76W+FpsRTMe4b9iM8A" crossorigin="anonymous"></script>

</body>
</html>
