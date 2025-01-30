<?php
include '../config/db_connection.php'; // ไฟล์เชื่อมต่อฐานข้อมูล

$VehicleTypeID = $_POST['VehicleTypeID'];
$sql = "DELETE FROM vehicletype WHERE VehicleTypeID=$VehicleTypeID";
$conn->query($sql);
$conn->close();
?>
