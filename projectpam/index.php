<?php include('server_another/boostap.php');
include('server_another/font.php');
include('server_another/sweetaleart.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regis_login/register.css">
    <title>สมัครสมาชิก TVC E-library</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-- img -->
                </div>
                <div class="col-md-6 right">
                    <form action="regis_login/registerdb.php" method="post">
                        <div class="input-box">
                            <header>สมัครสมาชิก</header>
                            <div class="input-field">
                                <input type="text" class="input" id="fname" name="fname" required autocomplete="off">
                                <label for="fname">ชื่อ:</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" id="lname" name="lname" required autocomplete="off">
                                <label for="lname">นามสกุล:</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" id="username" name="username" required
                                    autocomplete="off">
                                <label for="username">ชื่อผู้ใช้:</label>
                            </div>
                            <div class="input-field">
                                <input type="email" class="input" id="email" name="email" required autocomplete="off">
                                <label for="email">อีเมล:</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required>
                                <label for="password">รหัสผ่าน:</label>
                            </div>
                            <div class="input-select">
                                <select class="selectleft" id="department" name="department">
                                    <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                                    <option value="แฟชั่นและสิ่งทอ">แฟชั่นและสิ่งทอ</option>
                                    <option value="อาหารและโภชนาการ">อาหารและโภชนาการ</option>
                                    <option value="คหกรรมศาสตร์">คหกรรมศาสตร์</option>
                                    <option value="วิจิตรศิลป์">วิจิตรศิลป์</option>
                                    <option value="การออกแบบ">การออกแบบ</option>
                                    <option value="ถ่ายภาพและมัลติมีเดีย">ถ่ายภาพและมัลติมีเดีย</option>
                                    <option value="การบัญชี">การบัญชี</option>
                                    <option value="การตลาด">การตลาด</option>
                                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                                    <option value="ธุรกิจค้าปลีก">ธุรกิจค้าปลีก</option>
                                    <option value="การโรงแรม">การโรงแรม</option>
                                    <option value="ดิจิทัลกราฟิก">ดิจิทัลกราฟิก</option>
                                </select>
                                <select id="role" name="role">
                                    <option id="taecher" value="นักศึกษา">นักศึกษา</option>
                                    <option id="student" value="อาจารย์">อาจารย์</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="สมัครสมาชิก">
                            </div>
                            <div class="signin">
                                <span>ท่านเป็นสมาชิกอยู่แล้วใช่หรือไม่?<a href="regis_login/login.php">
                                        เข้าสู่ระบบ</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>