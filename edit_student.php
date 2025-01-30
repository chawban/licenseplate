<?php
include './config/db_connection.php';

if (isset($_GET['StudentID'])) {
    $student_id = $_GET['StudentID'];



    if (isset($_POST['submit'])) {
        $name = $_POST['StudentName'];
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
        $status = $_POST['StudentStatus'];

        $sql_update = "UPDATE student SET StudentName = '$name', Gender = '$gender', DateOfBirth = '$dob', Email = '$email', PhoneNumber = '$phone', Address = '$address', 
                      City = '$city', State = '$state', PostalCode = '$postal_code', Country = '$country', EnrollmentDate = '$enrollment_date', Program = '$program', StudentStatus = '$status'
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
    Status: <input type="text" name="StudentStatus" value="<?php echo $row['StudentStatus']; ?>" required><br>
    <input type="submit" name="submit" value="Update Student">
</form>
