<?php
include './config/db_connection.php';

$searchStudentID = '';
$searchStudentName = '';
$searchGender = '';

// ตรวจสอบว่ามีการค้นหาหรือไม่
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchStudentID = $_POST['StudentID'];
    $searchName = $_POST['StudentName'];
    $searchGender = $_POST['Gender'];

    $sql = "SELECT * FROM student WHERE StudentID LIKE '%$searchStudentID%' 
            AND StudentName LIKE '%$searchName%' 
            AND Gender LIKE '%$searchGender%'";
} else {
    $sql = "SELECT * FROM student";
}

$result = $conn->query($sql);
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
 <!-- Bootstrap Table CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.1/dist/bootstrap-table.min.css">
<link rel="stylesheet" href="./css/sweetalert2.min.css">

    <style>
        * {
            font-family: K2D, sans-serif;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">รายการนักศึกษา</h2>

    <!-- ฟอร์มค้นหาข้อมูล -->
    <form action="view_students3.php" method="POST" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <label for="StudentID" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" id="StudentID" name="StudentID" value="<?php echo $searchStudentID; ?>" placeholder="กรุณากรอกรหัสนักศึกษา">
            </div>
            <div class="col-md-3">
                <label for="StudentName" class="form-label">ชื่อนามสกุล</label>
                <input type="text" class="form-control" id="StudentName" name="StudentName" value="<?php echo $searchStudentName; ?>" placeholder="กรุณากรอกชื่อนามสกุล">
            </div>
            <div class="col-md-2">
                <label for="Gender" class="form-label">เพศ</label>
                <select class="form-select" id="Gender" name="Gender">
                    <option value="" <?php echo ($searchGender == '') ? 'selected' : ''; ?>>ทั้งหมด</option>
                    <option value="M" <?php echo ($searchGender == 'M') ? 'selected' : ''; ?>>ชาย</option>
                    <option value="F" <?php echo ($searchGender == 'F') ? 'selected' : ''; ?>>หญิง</option>
                </select>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">ค้นหา</button>
            </div>
        </div>
    </form>

    <!-- ตารางข้อมูลนักศึกษา -- >
    <table class="table table-hover table-bordered" -->
    <table id="studentTable"
        class="table table-striped table-bordered"
        data-toggle="table"
        data-search="true"
        data-pagination="true"
        data-page-size="10"
        data-show-refresh="true"
        data-show-columns="true">        
        <thead class="table-hover">
            <tr>
                <th>StudentID</th>
                <th>Name</th>
                <th>Gender</th>
                <!-- th>DateOfBirth</th>
                <th>Email</th>
                <th>Phone Number</th-->
                <th>City</th> 
                <th>State</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["StudentID"] . "</td>";
                    echo "<td>" . $row["StudentName"] . "</td>";
                    echo "<td>" . $row["Gender"] . "</td>";
 //                   echo "<td>" . $row["DateOfBirth"] . "</td>";
 //                   echo "<td>" . $row["Email"] . "</td>";
 //                   echo "<td>" . $row["PhoneNumber"] . "</td>";
                    echo "<td>" . $row["City"] . "</td>";
                    echo "<td>" . $row["State"] . "</td>";
                    echo "<td>" . $row["StudentStatus"] . "</td>";
                    echo "<td>
                            <a href='edit_student2.php?StudentID=" . $row["StudentID"] . "' class='btn btn-warning btn-sm'>Edit</a>
                            <a data-id='". $row["StudentID"] ."' href='delete_student.php?StudentID=" . $row["StudentID"] . "' class='btn btn-danger btn-sm btn_Delete'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10' class='text-center'>ไม่พบข้อมูลที่ค้นหา</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>







    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap Table JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
<!-- SweetAlert2 JS -->
<script src="./js/sweetalert2.all.min.js"></script> <!-- Ensure path is correct -->

</body>
</html>

<!-- script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> < !-- Ensure SweetAlert2 is included -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".btn_Delete").forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default action

            let deleteId = this.getAttribute("data-id"); // Get the ID from data attribute
            let deleteUrl = "delete_student.php?StudentID=" + deleteId; // API endpoint

            Swal.fire({
                title: "กรุณายืนยันการลบข้อมูล?",
                text: "ข้อมูลนี้จะถูกลบอย่างถาวร!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "ใช่, ลบเลย!",
                cancelButtonText: "ยกเลิก"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Use fetch to call delete script without redirecting
                    fetch(deleteUrl, { method: "GET" })
                    .then(response => response.json()) // Expecting JSON response
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: "ลบสำเร็จ!",
                                text: "ข้อมูลถูกลบเรียบร้อยแล้ว",
                                icon: "success",
                                timer: 2000, // Auto-close after 2 seconds
                                showConfirmButton: false
                            }).then(() => {
                                location.reload(); // Reload after success
                            });
                        } else {
                            Swal.fire("เกิดข้อผิดพลาด!", data.message, "error");
                        }
                    })
                    .catch(error => {
                        Swal.fire("เกิดข้อผิดพลาด!", "ไม่สามารถลบข้อมูลได้", "error");
                    });
                }
            });
        });
    });
});
</script>
