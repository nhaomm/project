<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขสมาชิก</title>
</head>

<body>

</body>

</html>
<?php

include '../server_another/server.php';
include '../server_another/sweetaleart.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$department = $_POST['department'];

$sql = "UPDATE db_teacher SET TCH_fname='$fname',
TCH_lname='$lname',TCH_email='$email',TCH_password='$password',TCH_department='$department' WHERE TCH_id = '$id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>
        Swal.fire({
            title: 'แก้ไขข้อมูลสำเร็จ',
            icon: 'success',
            timer: 3000,
            showConfirmButton: false
        }).then(function() {
            window.location.href = './adminshowuser.php';
        });
        </script>";
    exit();
} else {
    // แสดงข้อผิดพลาดที่เกิดขึ้น
    echo "แก้ไขไม่สำเร็จ: " . $conn->error;
}
$conn->close();
?>