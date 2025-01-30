<?php
include '../config/db_connection.php'; // ไฟล์เชื่อมต่อฐานข้อมูล

// ดึงข้อมูล VehicleType
$sql = "SELECT * FROM vehicletype ORDER BY VehicleTypeID ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Type Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Noto+Serif+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap" rel="stylesheet">    
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="./css/sweetalert2.min.css">
<style>
        * {
            font-family: K2D, sans-serif;
        }
    </style>    
</head>
<body>

<div class="container mt-4">
    <h3>จัดการประเภทพาหนะ</h3>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#vehicleModal" onclick="clearForm()">+ เพิ่มประเภทพาหนะ</button>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>ชื่อประเภท</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['VehicleTypeID'] ?></td>
                    <td><?= $row['TypeName'] ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editVehicle(<?= $row['VehicleTypeID'] ?>, '<?= $row['TypeName'] ?>')">แก้ไข</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteVehicle(<?= $row['VehicleTypeID'] ?>)">ลบ</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="vehicleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เพิ่ม/แก้ไข ประเภทพาหนะ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="vehicleForm">
                    <input type="hidden" id="VehicleTypeID" name="VehicleTypeID">
                    <div class="mb-3">
                        <label for="TypeName" class="form-label">ชื่อประเภท</label>
                        <input type="text" class="form-control" id="TypeName" name="TypeName" required>
                    </div>
                    <button type="submit" class="btn btn-success">บันทึก</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function clearForm() {
    $("#VehicleTypeID").val("");
    $("#TypeName").val("");
}

function editVehicle(id, name) {
    $("#VehicleTypeID").val(id);
    $("#TypeName").val(name);
    $("#vehicleModal").modal("show");
}

function deleteVehicle(id) {
    Swal.fire({
        title: "ยืนยันการลบ?",
        text: "คุณต้องการลบข้อมูลนี้ใช่หรือไม่?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "ใช่, ลบเลย!",
        cancelButtonText: "ยกเลิก"
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("delete.php", { VehicleTypeID: id }, function(response) {
                Swal.fire("ลบข้อมูลแล้ว!", "", "success").then(() => {
                    location.reload();
                });
            });
        }
    });
}

$("#vehicleForm").submit(function(e) {
    e.preventDefault();
    $.post("save.php", $(this).serialize(), function(response) {
        Swal.fire("บันทึกสำเร็จ!", "", "success").then(() => {
            location.reload();
        });
    });
});
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- SweetAlert2 JS -->
<script src="../js/sweetalert2.all.min.js"></script> <!-- Ensure path is correct -->

</body>
</html>
