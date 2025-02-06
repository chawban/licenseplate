<?php
include './config/db_connection.php';

 
// Query ข้อมูลรถ
$vehicle_sql = "SELECT
	vehicle.VehicleID, 
	vehicle.LicensePlate, 
	vehicle.VehicleType, 
	vehicle.Brand, 
	vehicle.Model, 
	vehicle.Color, 
	student.StudentID, 
	student.StudentName, 
	student.Gender, 
	student.PhoneNumber, 
	student.Email, 
	student.Address, 
	student.EnrollmentDate, 
	student.Program
FROM
	vehicle
	LEFT JOIN
	student
    ON vehicle.StudentID =student.StudentID
WHERE
	vehicle.VehicleID = ".$_GET['vid'];
$vehicle_result = $conn->query($vehicle_sql);

// Query ข้อมูลการเข้าออกของรถ
$log_sql = "SELECT VehicleID, StudentID, EntryTime, ExitTime, GateNumber, LogStatus, LastUpdated FROM vehicleentrylog WHERE VehicleID =".$_GET['vid'];
$log_result = $conn->query($log_sql);
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
</head>
<body>

<div class="container mt-5"> 
        <h1>ข้อมูลรถ</h1>

        <?php if ($vehicle_result->num_rows > 0): ?>
            <?php while($row = $vehicle_result->fetch_assoc()): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ข้อมูลรถ: <?= $row["Brand"] ?> <?= $row["Model"] ?></h5>
                        <p class="card-text"><strong>ทะเบียน:</strong> <?= $row["LicensePlate"] ?></p>
                        <p class="card-text"><strong>ประเภท:</strong> <?= $row["VehicleType"] ?></p>
                        <p class="card-text"><strong>สี:</strong> <?= $row["Color"] ?></p>
                        <p class="card-text"><strong>StudentName:</strong> <?= $row["StudentName"] ?></p>                        
                        

                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>ไม่พบข้อมูลรถ.</p>
        <?php endif; ?>

        <h2 class="mt-5">รายละเอียดการเข้าออกของรถ</h2>

        <?php if ($log_result->num_rows > 0): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Entry Time</th>
                        <th>Exit Time</th>
                        <th>Gate Number</th>
                        <th>Log Status</th>
                        <th>Last Updated</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($log = $log_result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $log["StudentID"] ?></td>
                            <td><?= $log["EntryTime"] ?></td>
                            <td><?= $log["ExitTime"] ?></td>
                            <td><?= $log["GateNumber"] ?></td>
                            <td><?= $log["LogStatus"] ?></td>
                            <td><?= $log["LastUpdated"] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>ไม่พบข้อมูลการเข้าออกของรถ.</p>
        <?php endif; ?>
    </div>

    <!-- เพิ่ม Bootstrap JS และ jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// ปิดการเชื่อมต่อ
$conn->close();
?>
