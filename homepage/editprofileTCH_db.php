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
session_start();
include '../server_another/server.php';
include '../server_another/sweetaleart.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$department = $_POST['department'];
$imgFile = $_FILES['profile'];

// print_r($imgFile);
function UploadTopath($file)
{

    $tmp = $file['tmp_name'];
    $path = '../img/profile/' . $_SESSION['TCH_username'] . '.JPG';

    move_uploaded_file($tmp, $path);
    return $_SESSION['TCH_username'] . '.jpg';
}

$uploadImage = UploadTopath($imgFile);
$sql = "UPDATE db_teacher SET TCH_fname='$fname',
TCH_lname='$lname',TCH_email='$email',TCH_password='$password',TCH_department='$department', 	TCH_imageProfilepath='$uploadImage' WHERE TCH_id = '$id'";
$result = $conn->query($sql);
if ($result) {
    echo "<script>
        Swal.fire({
            title: 'แก้ไขข้อมูลสำเร็จ',
            icon: 'success',
            timer: 3000,
            showConfirmButton: false
        }).then(function() {
            window.location.href = 'editprofileTCH.php?id=$_SESSION[id]';
        });
        </script>";
    exit();
} else {
    // แสดงข้อผิดพลาดที่เกิดขึ้น
    echo "แก้ไขไม่สำเร็จ: " . $conn->error;
}
$conn->close();
?>