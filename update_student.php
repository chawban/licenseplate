<?php
include './config/db_connection.php';

 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['StudentID'];
    $student_name = $_POST['StudentName'];
    $gender = $_POST['Gender'];
    $dob = $_POST['DateOfBirth'];
    $email = $_POST['Email'];
    $phone = $_POST['PhoneNumber'];
    $city = $_POST['City'];
    $program = $_POST['Program'];
    $status = $_POST['StudentStatus'];

    $sql_update = "UPDATE student SET 
                    StudentName = '$student_name',
                    Gender = '$gender',
                    DateOfBirth = '$dob',
                    Email = '$email',
                    PhoneNumber = '$phone',
                    City = '$city',
                    Program = '$program',
                    StudentStatus = '$status'
                    WHERE StudentID = '$student_id'";

    if ($conn->query($sql_update) === TRUE) {
        echo json_encode(["success" => true, "message" => "ข้อมูลอัปเดตเรียบร้อย"]);
    } else {
        echo json_encode(["success" => false, "message" => "เกิดข้อผิดพลาด: " . $conn->error]);
    }
} 
