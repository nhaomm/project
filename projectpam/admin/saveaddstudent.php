<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสมาชิก(นักเรียน)</title>
</head>

<body>

</body>

</html>

<?php
include '../server_another/server.php';
include('../server_another/userserver.php');
include('../server_another/sweetaleart.php');

// prepare and bind
$username = $_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$department = $_POST['department'];

$sql = "SELECT * FROM `$tableSTD` WHERE `$STD_Username` = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>
        Swal.fire({
            title: 'ชื่อผู้ใช้งานนี้มีอยู่ในระบบแล้ว',
            text: 'กรุณาเลือกชื่อผู้ใช้งานอื่น',
            icon: 'warning',
            background: '#f8d7da', // สีพื้นหลัง
            confirmButtonText: 'ตกลง',
            confirmButtonColor: '#dc3545' // สีปุ่มตกลง
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = './addstudent.php';
            }
        });
        </script>";
    exit();
} else {
    $sql = "INSERT INTO `$tableSTD` ($STD_fname, $STD_lname, $STD_Username, $STD_email, $STD_password, $STD_department) 
                VALUES ('$fname', '$lname', '$username', '$email', '$password', '$department')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            Swal.fire({
                title: 'สมัครสมาชิกสำเร็จ',
                text: '',
                icon: 'success',
                background: '#d4edda', // สีพื้นหลัง
                confirmButtonText: 'ตกลง',
                confirmButtonColor: '#28a745' // สีปุ่มตกลง
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = './adminshowuser.php';
                }
            });
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>