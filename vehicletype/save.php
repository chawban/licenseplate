<?php
include '../config/db_connection.php'; // ไฟล์เชื่อมต่อฐานข้อมูล

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $VehicleTypeID = isset($_POST['VehicleTypeID']) ? $_POST['VehicleTypeID'] : '';
    $TypeName = isset($_POST['TypeName']) ? $_POST['TypeName'] : '';

    if (empty($TypeName)) {
        echo json_encode(["status" => "error", "message" => "กรุณากรอกชื่อประเภทรถ"]);
        exit;
    }

    if (is_numeric($VehicleTypeID) && $VehicleTypeID > 0) {
        $sql = "UPDATE vehicletype SET TypeName=? WHERE VehicleTypeID=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $TypeName, $VehicleTypeID);
    } else {
        $sql = "INSERT INTO vehicletype (TypeName) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $TypeName);
    }

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "บันทึกสำเร็จ"]);
    } else {
        echo json_encode(["status" => "error", "message" => "เกิดข้อผิดพลาด: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Method ไม่ถูกต้อง"]);
}
?>

