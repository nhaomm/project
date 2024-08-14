<?php include('../server_another/boostap.php') ?>
<?php include('../server_another/font.php') ?>
<?php include('../server_another/sweetaleart.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <title>เข้าสู่ระบบ TVC E-library</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-- img -->
                </div>
                <div class="col-md-6 right">
                    <form action="loginserver.php" method="post">
                        <div class="input-box">
                            <header>เข้าสู่ระบบ</header>
                            <div class="input-field">
                                <input type="text" class="input" id="username" name="username" required
                                    autocomplete="off">
                                <label for="username">ชื่อผู้ใช้:</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required>
                                <label for="password">รหัสผ่าน:</label>
                            </div>
                            <div class="input-fieldbutton">
                                <input type="submit" class="submit" value="เข้าสู่ระบบ">
                            </div>
                            <div class="signin">
                                <span>ท่านยังไม่ได้เป็นสมาชิกใช่หรือไม่?<a href="../index.php"> สมัครสมาชิก</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>