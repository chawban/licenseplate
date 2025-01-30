<?php
include './config/db_connection.php';

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "StudentID: " . $row["StudentID"]. " - Name: " . $row["Name"]. " - Gender: " . $row["Gender"]. " - DateOfBirth: " . $row["DateOfBirth"]. " - Email: " . $row["Email"]. "<br>";
    }
} else {
    echo "0 results";
}
?>


<form method="post" action="edit_student.php?StudentID=<?php echo $student_id; ?>">
    Name: <input type="text" name="StudentName" value="<?php echo $row['StudentName']; ?>" required><br>
    Gender: <input type="text" name="Gender" value="<?php echo $row['Gender']; ?>" required><br>
    Date of Birth: <input type="date" name="DateOfBirth" value="<?php echo $row['DateOfBirth']; ?>" required><br>
    Email: <input type="email" name="Email" value="<?php echo $row['Email']; ?>" required><br>
    Phone Number: <input type="text" name="PhoneNumber" value="<?php echo $row['PhoneNumber']; ?>"><br>
    Address: <textarea name="Address"><?php echo $row['Address']; ?></textarea><br>
    City: <input type="text" name="City" value="<?php echo $row['City']; ?>" required><br>
    State: <input type="text" name="State" value="<?php echo $row['State']; ?>" required><br>
    Postal Code: <input type="text" name="PostalCode" value="<?php echo $row['PostalCode']; ?>" required><br>
    Country: <input type="text" name="Country" value="<?php echo $row['Country']; ?>" required><br>
    Enrollment Date: <input type="date" name="EnrollmentDate" value="<?php echo $row['EnrollmentDate']; ?>" required><br>
    Program: <input type="text" name="Program" value="<?php echo $row['Program']; ?>"><br>
    Status: <input type="text" name="Status" value="<?php echo $row['StudentStatus']; ?>" required><br>
    <input type="submit" name="submit" value="Update Student">
</form> 