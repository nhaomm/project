<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
</head>

<body>

</body>

</html>
<?php
include('../server_another/server.php');
include('../server_another/sweetaleart.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// ตรวจสอบผู้ใช้ในฐานข้อมูลของนักศึกษา
$sql = "SELECT * FROM `db_student` WHERE STD_Username = '$username' AND STD_password = '$password'";
$result = $conn->query($sql);

// student
if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();
    $_SESSION['STD_username'] = $username;
    $_SESSION['id'] = $row['STD_id '];
    ;
    echo "<script>
    Swal.fire({
        title: 'เข้าสู่ระบบสำเร็จ!',
        text: 'กดตกลงเพื่อเข้าสู่เว็บไซต์',
        icon: 'success',
        background: 'white',
        confirmButtonText: 'ตกลง',
        confirmButtonColor: '#18c300'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../homepage/homepage_STD.php';
        }
    });
    
    </script>";
    $conn->close();
} else {
    // teacher
    $sql = "SELECT * FROM `db_teacher` WHERE TCH_Username = '$username' AND TCH_password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['TCH_username'] = $username;
        $_SESSION['id'] = $row['TCH_id'];

        echo "<script>
        Swal.fire({
            title: 'เข้าสู่ระบบสำเร็จ!',
            text: 'กดตกลงเพื่อเข้าสู่เว็บไซต์',
            icon: 'success',
            background: 'white',
            confirmButtonText: 'ตกลง',
            confirmButtonColor: '#18c300'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../homepage/homepage_TCH.php';
            }
        });
        </script>";

        $conn->close();
    } else {
        // ถ้าผู้ใช้ไม่พบในทั้งสองฐานข้อมูล
        echo "<script>
        Swal.fire({
            title: 'เข้าสู่ระบบไม่สำเร็จ!',
            text: 'กรุณาตรวจสอบชื่อผู้ใช้และรหัสผ่าน',
            icon: 'warning',
            background: '#f8d7da',
            confirmButtonText: 'ตกลง',
            confirmButtonColor: '#dc3545'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'login.php';
            }
        });
        </script>";
        $conn->close();
    }
}
?>