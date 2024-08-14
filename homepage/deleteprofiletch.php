<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลบสมาชิก</title>
</head>

<body>

</body>

</html>
<?php
include '../server_another/server.php';
include '../server_another/sweetaleart.php';
$id = $_GET['id'];
$sql = "DELETE FROM db_teacher WHERE TCH_id='$id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>
        Swal.fire({
            title: 'ลบข้อมูลสำเร็จ',
            icon: 'success',
            timer: 3000,
            showConfirmButton: false
        }).then(function() {
            window.location.href = '../index.php';
        });
        </script>";
    exit();
} else {
    // แสดงข้อผิดพลาดที่เกิดขึ้น
    echo "ลบไม่สำเร็จ: " . $conn->error;
}
$conn->close();

?>