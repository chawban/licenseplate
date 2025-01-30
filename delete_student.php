<?php
include './config/db_connection.php';

if (isset($_GET['StudentIDdelete'])) {
    $student_id = $_GET['StudentIDdelete'];

    $sql = "DELETE FROM student WHERE StudentID = '$student_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
