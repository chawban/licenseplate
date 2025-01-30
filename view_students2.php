<?php
include './config/db_connection.php';

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <!-- เชื่อมต่อ Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3Ln0QM1s7b9F6R5aMGo5Kkz0X5Jw3D7y4W92Dxh+Jl0X8B0jtqExzAsJe" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Noto+Serif+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap" rel="stylesheet">    
<style>
*{
    font-family: K2D, sans-serif;
}
</style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">รายการนักศึกษา</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>StudentID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>DateOfBirth</th>
                <th>Email</th>
                <th>Phone Number</th>
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
                    echo "<td>" . $row["DateOfBirth"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "<td>" . $row["PhoneNumber"] . "</td>";
                    echo "<td>" . $row["City"] . "</td>";
                    echo "<td>" . $row["State"] . "</td>";
                    echo "<td>" . $row["StudentStatus"] . "</td>";
                    echo "<td>
                            <a href='edit_student.php?StudentID=" . $row["StudentID"] . "' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete_student.php?StudentID=" . $row["StudentID"] . "' class='btn btn-danger btn-sm'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10' class='text-center'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- เชื่อมต่อ JavaScript สำหรับ Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Q1d5HtaWbS7kL91SmW7Jz1jBTeG9R76W+FpsRTMe4b9iM8A" crossorigin="anonymous"></script>

</body>
</html>
