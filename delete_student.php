<?php
include './config/db_connection.php';

$response = ["success" => false, "message" => ""];

if (isset($_GET['StudentID'])) {
    $student_id = $_GET['StudentID'];
    $sql = "DELETE FROM student WHERE StudentID = '$student_id'";

    if ($conn->query($sql) === TRUE) {
        $response["success"] = true;
        $response["message"] = "ลบข้อมูลสำเร็จ!";
    } else {
        $response["message"] = "เกิดข้อผิดพลาด: " . $conn->error;
    }
} else {
    $response["message"] = "ไม่มี StudentID ที่จะลบ";
}

header('Content-Type: application/json');
echo json_encode($response);
?>
