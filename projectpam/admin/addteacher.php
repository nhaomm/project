<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>เพิ่มสมาชิก(คุณครู)</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <br>
                <h3>เพิ่มสมาชิกคุณครูใหม่</h3>
                <form action="./saveaddteacher.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" id="ีusername" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="fname" name="fname" required>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="lname" name="lname" required>
                    </div>
                    <div class="mb-3">
                        <label for="eamil" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">สาขาวิชา</label>
                        <select id="department" name="department" required>
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
                    </div>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>