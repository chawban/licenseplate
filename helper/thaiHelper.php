<?php 

function convertToThaiDate($date) {
    $thaiMonths = [
        "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
        "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];

    $dateParts = explode("-", $date); // แยกวันที่เป็น [ปี, เดือน, วัน]
    $year = $dateParts[0] + 543; // แปลง ค.ศ. เป็น พ.ศ.
    $month = $thaiMonths[(int)$dateParts[1] - 1]; // ดึงชื่อเดือนจาก array
    $day = (int)$dateParts[2]; // แปลงวันเป็นตัวเลขเต็ม

    return "$day $month $year";
}



?>