<?php
session_start();
include('../server_another/server.php');
include('../server_another/sweetaleart.php');
include('../server_another/userserver.php');
include('../server_another/boostap.php');

$id = $_GET['id'];
$sql = "SELECT TCH_id, TCH_Username, TCH_fname, TCH_lname, TCH_email, TCH_password, TCH_department FROM db_teacher WHERE TCH_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['TCH_id'];
    $_SESSION['username'] = $row['TCH_Username'];
    $_SESSION['fname'] = $row['TCH_fname'];
    $_SESSION['lname'] = $row['TCH_lname'];
    $_SESSION['email'] = $row['TCH_email'];
    $_SESSION['password'] = $row['TCH_password'];
    $_SESSION['department'] = $row['TCH_department'];
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <script src="homepage.js"></script>
    <title>แก้ไขโปรไฟล์</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="my-5">
                    <h3>โปรไฟล์ของฉัน</h3>
                    <hr>
                </div>
                <form class="file-upload" action="editprofileTCH_db.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3  gx-5">
                        <div class="col">
                            <div class="bg-primary px-5 py-5 ">
                                <div class="row g-3">
                                    <h4 class="mb-4 mt-0">รายละเอียด</h4>
                                    <input type="hidden" id="id" name="id" value="<?php echo $_SESSION['id']; ?>">

                                    <div class="col-md-6">
                                        <label class="form-label">ชื่อ</label>
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder=""
                                            value="<?php echo $_SESSION['fname']; ?>" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">นามสกุล</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder=""
                                            value="<?php echo $_SESSION['lname']; ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="<?php echo $_SESSION['email']; ?>" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">รหัสผ่าน</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="" value="<?php echo $_SESSION['password']; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="department" class="form-label">ภาควิชา</label>
                                        <select id="department" name="department" class="form-control" required>
                                            <option value="เทคโนโลยีสารสนเทศ" <?php echo $_SESSION['department'] == 'เทคโนโลยีสารสนเทศ' ? 'selected' : '' ?>>
                                                เทคโนโลยีสารสนเทศ</option>
                                            <option value="แฟชั่นและสิ่งทอ" <?php echo $_SESSION['department'] == 'แฟชั่นและสิ่งทอ' ? 'selected' : '' ?>>
                                                แฟชั่นและสิ่งทอ</option>
                                            <option value="อาหารและโภชนาการ" <?php echo $_SESSION['department'] == 'อาหารและโภชนาการ' ? 'selected' : '' ?>>
                                                อาหารและโภชนาการ</option>
                                            <option value="คหกรรมศาสตร์" <?php echo $_SESSION['department'] == 'คหกรรมศาสตร์' ? 'selected' : '' ?>>
                                                คหกรรมศาสตร์</option>
                                            <option value="วิจิตรศิลป์" <?php echo $_SESSION['department'] == 'วิจิตรศิลป์' ? 'selected' : '' ?>>วิจิตรศิลป์
                                            </option>
                                            <option value="การออกแบบ" <?php echo $_SESSION['department'] == 'การออกแบบ' ? 'selected' : '' ?>>การออกแบบ</option>
                                            <option value="ถ่ายภาพและมัลติมีเดีย" <?php echo $_SESSION['department'] == 'ถ่ายภาพและมัลติมีเดีย' ? 'selected' : '' ?>>
                                                ถ่ายภาพและมัลติมีเดีย</option>
                                            <option value="การบัญชี" <?php echo $_SESSION['department'] == 'การบัญชี' ? 'selected' : '' ?>>การบัญชี</option>
                                            <option value="การตลาด" <?php echo $_SESSION['department'] == 'การตลาด' ? 'selected' : '' ?>>การตลาด</option>
                                            <option value="คอมพิวเตอร์ธุรกิจ" <?php echo $_SESSION['department'] == 'คอมพิวเตอร์ธุรกิจ' ? 'selected' : '' ?>>
                                                คอมพิวเตอร์ธุรกิจ</option>
                                            <option value="ธุรกิจค้าปลีก" <?php echo $_SESSION['department'] == 'ธุรกิจค้าปลีก' ? 'selected' : '' ?>>
                                                ธุรกิจค้าปลีก</option>
                                            <option value="การโรงแรม" <?php echo $_SESSION['department'] == 'การโรงแรม' ? 'selected' : '' ?>>การโรงแรม</option>
                                            <option value="ดิจิทัลกราฟิก" <?php echo $_SESSION['department'] == 'ดิจิทัลกราฟิก' ? 'selected' : '' ?>>
                                                ดิจิทัลกราฟิก</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="bg-primary  px-4 py-3">
                                <div class="row ">
                                    <h4 class="mb-4 mt-0">รูปภาพโปรไฟล์</h4>
                                    <div class="col-md-4  ">
                                        <img src="../user.png" id="profile-image" class="pic">
                                    </div>
                                    <label class="btn btn-success-soft w-70" for="profile">
                                        <input type="file" id="profile" name="profile" hidden
                                            onchange="previewPhoto(this)">
                                        Upload
                                    </label>
                                    <button type="button" class="btn btn-danger-soft">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="gap-3 d-md-flex justify-content-md-end text-center">
                <a href="deleteprofiletch.php"><button type="button" class="btn btn-danger btn-lg"
                        onclick="return confirm('คุณต้องการลบจริงๆใช่มั้ย')">Delete profile</button></a>
                <button type="submit" class="btn btn-primary btn-lg">Update profile</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>