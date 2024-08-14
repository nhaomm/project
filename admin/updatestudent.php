<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขผู้ใช้</title>
</head>

<body>
    <?php include '../server_another/server.php';
    include '../server_another/userserver.php';
    include '../server_another/sweetaleart.php';
    session_start() ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <div class="container">
        <?php
        $id = $_GET['id'];
        $sql = "SELECT STD_id, STD_Username, STD_fname, STD_lname, STD_email, STD_password, STD_department FROM $tableSTD WHERE STD_id = '$id'";
        $result = $conn->query($sql, );
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['STD_Username'];
            $_SESSION['fname'] = $row['STD_fname'];
            $_SESSION['lname'] = $row['STD_lname'];
            $_SESSION['email'] = $row['STD_email'];
            $_SESSION['password'] = $row['STD_password'];
            $_SESSION['department'] = $row['STD_department'];
        }
        ?>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-sm-5">
                    <br>
                    <h3>แก้ไขผู้ใช้</h3>
                    <form action="updatestudent_db .php" method="post">
                        <div class="form-group" style="margin-top:20px;">
                            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                            ชื่อ : <input type="text" id="fname" name="fname" required class="form-control"
                                placeholder="fname" value=<?php echo $_SESSION['fname']; ?>>
                        </div>
                        <div class="form-group">
                            นามสกุล : <input type="text" id="lname" name="lname" required class="form-control"
                                placeholder="lname" value=<?php echo $_SESSION['lname']; ?>>
                        </div>
                        <div class="form-group">
                            email : <input type="email" id="email" name="email" required class="form-control"
                                placeholder="email" value=<?php echo $_SESSION['email']; ?>>
                        </div>
                        <div class="form-group">
                            รหัสผ่าน : <input type="password" id="password" name="password" required
                                class="form-control" placeholder="password" value=<?php
                                echo $_SESSION['password'];
                                ?>>
 </div>
                        <div class="form-group">
                            <select id="department" name="department" required placeholder="department">
                                <option value="เทคโนโลยีสารสนเทศ" <?php echo $_SESSION['department'] == 'เทคโนโลยีสารสนเทศ' ? 'selected' : '' ?>>
                                    เทคโนโลยีสารสนเทศ
                                </option>
                                <option value="แฟชั่นและสิ่งทอ" <?php echo $_SESSION['department'] == 'แฟชั่นและสิ่งทอ' ? 'selected' : '' ?>>แฟชั่นและสิ่งทอ</option>
                                <option value="อาหารและโภชนาการ" <?php echo $_SESSION['department'] == 'อาหารและโภชนาการ' ? 'selected' : '' ?>>
                                    อาหารและโภชนาการ
                                </option>
                                <option value="คหกรรมศาสตร์" <?php echo $_SESSION['department'] == 'คหกรรมศาสตร์' ? 'selected' : '' ?>>คหกรรมศาสตร์</option>
                                <option value="วิจิตรศิลป์" <?php echo $_SESSION['department'] == 'วิจิตรศิลป์' ? 'selected' : '' ?>>วิจิตรศิลป์</option>
                                <option value="การออกแบบ" <?php echo $_SESSION['department'] == 'การออกแบบ' ? 'selected' : '' ?>>
                                    การออกแบบ</option>
                                <option value="ถ่ายภาพและมัลติมีเดีย" <?php echo $_SESSION['department'] == 'ถ่ายภาพและมัลติมีเดีย' ? 'selected' : '' ?>>
                                    ถ่ายภาพและมัลติมีเดีย
                                </option>
                                <option value="การบัญชี" <?php echo $_SESSION['department'] == 'การบัญชี' ? 'selected' : '' ?>>
                                    การบัญชี</option>
                                <option value="การตลาด" <?php echo $_SESSION['department'] == 'การตลาด' ? 'selected' : '' ?>>
                                    การตลาด</option>
                                <option value="คอมพิวเตอร์ธุรกิจ" <?php echo $_SESSION['department'] == 'คอมพิวเตอร์ธุรกิจ' ? 'selected' : '' ?>>คอมพิวเตอร์ธุรกิจ
                                </option>
                                <option value="ธุรกิจค้าปลีก" <?php echo $_SESSION['department'] == 'ธุรกิจค้าปลีก' ? 'selected' : '' ?>>ธุรกิจค้าปลีก</option>
                                <option value="การโรงแรม" <?php echo $_SESSION['department'] == 'การโรงแรม' ? 'selected' : '' ?>>
                                    การโรงแรม</option>
                                <option value="ดิจิทัลกราฟิก" <?php echo $_SESSION['department'] == 'ดิจิทัลกราฟิก' ? 'selected' : '' ?>>ดิจิทัลกราฟิก</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>