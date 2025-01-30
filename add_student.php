<?php
include './config/db_connection.php';

if (isset($_POST['submit'])) {
    $student_id = $_POST['StudentID'];
    $name = $_POST['Name'];
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
    $status = $_POST['Status'];

    $sql = "INSERT INTO student (StudentID, Name, Gender, DateOfBirth, Email, PhoneNumber, Address, City, State, PostalCode, Country, EnrollmentDate, Program, Status)
            VALUES ('$student_id', '$name', '$gender', '$dob', '$email', '$phone', '$address', '$city', '$state', '$postal_code', '$country', '$enrollment_date', '$program', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New student record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="add_student.php">
    StudentID: <input type="text" name="StudentID" required><br>
    Name: <input type="text" name="Name" required><br>
    Gender: <input type="text" name="Gender" required><br>
    Date of Birth: <input type="date" name="DateOfBirth" required><br>
    Email: <input type="email" name="Email" required><br>
    Phone Number: <input type="text" name="PhoneNumber"><br>
    Address: <textarea name="Address"></textarea><br>
    City: <input type="text" name="City" required><br>
    State: <input type="text" name="State" required><br>
    Postal Code: <input type="text" name="PostalCode" required><br>
    Country: <input type="text" name="Country" required><br>
    Enrollment Date: <input type="date" name="EnrollmentDate" required><br>
    Program: <input type="text" name="Program"><br>
    Status: <input type="text" name="Status" required><br>
    <input type="submit" name="submit" value="Add Student">
</form>
