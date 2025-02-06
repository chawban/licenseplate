<?php
include './config/db_connection.php';

if (isset($_GET['StudentID'])) {
    $student_id = $_GET['StudentID'];





     // ดึงข้อมูลของนักศึกษาจากฐานข้อมูล
     $sql = "SELECT * FROM student WHERE StudentID = '$student_id'";
     $result = $conn->query($sql);
 
     if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();
     } else {
         echo "Student not found.";
         exit;
     }   
}else{
    exit();
}
?>

 

<div class="container">
    <h2>แก้ไขข้อมูลนักศึกษา</h2>
    
    <!-- ฟอร์มแก้ไขข้อมูลนักศึกษา -->
    <form method="post" action="">
        <input  type="hidden" name="StudentID" value="<?php echo $student_id; ?>"/>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="StudentName" class="form-label">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" id="StudentName" name="StudentName" value="<?php echo $row['StudentName']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
    <label class="form-label">เพศ</label>
    <select class="form-select" name="Gender" required>
        <option value="M" <?php echo ($row['Gender'] == "M") ? "selected" : ""; ?>>ชาย</option>
        <option value="F" <?php echo ($row['Gender'] == "F") ? "selected" : ""; ?>>หญิง</option>
        <option value="O" <?php echo ($row['Gender'] == "O") ? "selected" : ""; ?>>อื่นๆ</option>
    </select>
</div>

        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="DateOfBirth" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" value="<?php echo $row['DateOfBirth']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="Email" class="form-label">อีเมล</label>
                <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $row['Email']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="PhoneNumber" class="form-label">หมายเลขโทรศัพท์</label>
                <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" value="<?php echo $row['PhoneNumber']; ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label for="City" class="form-label">เมือง</label>
                <input type="text" class="form-control" id="City" name="City" value="<?php echo $row['City']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="Address" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $row['Address']; ?>">
            </div>
 
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="State" class="form-label">รัฐ</label>
                <input type="text" class="form-control" id="State" name="State" value="<?php echo $row['State']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="PostalCode" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="<?php echo $row['PostalCode']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Country" class="form-label">ประเทศ</label>
                <input type="text" class="form-control" id="Country" name="Country" value="<?php echo $row['Country']; ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="EnrollmentDate" class="form-label">วันเริ่มการศึกษา</label>
                <input type="date" class="form-control" id="EnrollmentDate" name="EnrollmentDate" value="<?php echo $row['EnrollmentDate']; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Program" class="form-label">โปรแกรมการศึกษา</label>
                <input type="text" class="form-control" id="Program" name="Program" value="<?php echo $row['Program']; ?>">
            </div>

            <div class="col-md-6 mb-3">
    <label for="StudentStatus" class="form-label">สถานะ</label>
    <select class="form-select" name="StudentStatus" required>
        <option value="กำลังศึกษา" <?php echo ($row['StudentStatus'] == "กำลังศึกษา") ? "selected" : ""; ?>>กำลังศึกษา</option>
        <option value="สำเร็จการศึกษา" <?php echo ($row['StudentStatus'] == "สำเร็จการศึกษา") ? "selected" : ""; ?>>สำเร็จการศึกษา</option>
        <option value="พักการเรียน" <?php echo ($row['StudentStatus'] == "พักการเรียน") ? "selected" : ""; ?>>พักการเรียน</option>
    </select>
</div>
        </div>

        <button type="submit" class="btn btn-primary">อัพเดตข้อมูลนักศึกษา</button>
    </form>
</div>

 
