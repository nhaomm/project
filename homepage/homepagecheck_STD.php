<?php
include('../server_another/sweetaleart.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <title>TVC E-library</title>
</head>

<body>

</body>

</html>

<!-- popup -->
<script>
    <?php if (isset($_SESSION['STD_username'])): ?>
        Swal.fire({
            title: "ยินดีต้อนรับ คุณ",
            html: '<div class="custom-text"><?php echo $_SESSION['STD_username']; ?></div>',
            icon: "success",
            confirmButtonText: 'Continue To TVC E-library',
            customClass: {
                icon: 'custom-icon',
                popup: 'custom-popup',
                confirmButton: 'custom-tvc'
            }
        });
    <?php else: ?>
        Swal.fire({
            title: 'กรุณาเข้าสู่ระบบ',
            text: 'คุณต้องเข้าสู่ระบบก่อนเข้าถึงหน้านี้',
            icon: 'info',
            background: '#f5f5f5', // สีพื้นหลัง
            confirmButtonText: 'ตกลง',
            confirmButtonColor: '#3085d6', // สีปุ่มตกลง
            customClass: {
                confirmButton: 'custom-button'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../regis_login/login.php';
            }
        });

    <?php endif; ?>
</script>
<!--  -->
<script>
    <?php if (isset($_SESSION['TCH_username'])): ?>
        Swal.fire({
            title: 'กรุณาออกจากระบบ',
            text: 'คุณต้องออกจากระบบก่อนเข้าถึงหน้านี้',
            icon: 'info',
            background: '#f5f5f5', // สีพื้นหลัง
            confirmButtonText: 'ตกลง',
            confirmButtonColor: '#3085d6', // สีปุ่มตกลง
            customClass: {
                confirmButton: 'custom-button'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = './homepage_TCH.php';
            }
        });
    <?php endif; ?>
</script>
<?php
// ตรวจสอบว่ามีการออกจากระบบหรือไม่
if (isset($_GET['logout'])) {
    // ทำลายเซสชันและเปลี่ยนเส้นทางไปยังหน้าเข้าสู่ระบบ
    session_destroy();
    unset($_SESSION['STD_username']);

    // แสดง SweetAlert2 สำหรับการออกจากระบบ

    echo "<script>
    Swal.fire({
        title: 'ออกจากระบบ',
        text: 'คุณได้ออกจากระบบแล้ว',
        icon: 'success',
        background: '#f5f5f5', // สีพื้นหลัง
        confirmButtonText: 'ตกลง',
        confirmButtonColor: '#eb7200', // สีปุ่มตกลง
        customClass: {
        confirmButton: 'custom-button' 
    }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../regis_login/login.php';
        }
    });
    </script>";
    exit(); // หยุดการทำงานของสคริปต์
}
?>