<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <?php
        include '../server_another/server.php';
        $sql = "SELECT * FROM db_teacher";
        $result = $conn->query($sql);
        echo '<div class="container"><h3> TCH_db 
                <a href="./addteacher.php" class="btn btn-primary"> + เพิ่มสมาชิก </a>
                </h3></div>';
        echo '
                <div class="container">
                <table class="table table-hover">
                    <thead>
                            <tr class="table-primary">
                                <th>id</th>
                                <th>ชื่อผู้ใช้</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>email</th>
                                <th>สาขาวิชา</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                        </tr>
                </thead>
                ';
        echo '<tbody>';
        foreach ($result as $TCH) {
            echo '<tr>';
            echo "<td>" . $TCH['TCH_id'] . "</td>";
            echo "<td>" . $TCH['TCH_Username'] . "</td>";
            echo "<td>" . $TCH['TCH_fname'] . "</td>";
            echo "<td>" . $TCH['TCH_lname'] . "</td>";
            echo "<td>" . $TCH['TCH_email'] . "</td>";
            echo "<td>" . $TCH['TCH_department'] . "</td>";
            echo "<td>"
                . "<a href='./updateteacher.php?id=" . $TCH['TCH_id'] . "' class='btn btn-warning btn-sm'>"
                . "แก้ไข</a></td>";
            echo "<td>"
                . "<a href='./deleteteacher.php?id=" . $TCH['TCH_id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('คุณต้องการลบจริงๆใช่มั้ย')\">"
                . "ลบ</a></td>";
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        ?>
    </div>

    <!-- Divider -->
    <hr>

    <div class="container" style="margin-top: 50px;">
        <?php
        include '../server_another/server.php';
        $sql = "SELECT * FROM db_student";
        $result = $conn->query($sql);
        echo '<div class="container"><h3> STD_db 
                <a href="./addstudent.php" class="btn btn-primary"> + เพิ่มสมาชิก </a>
                </h3></div>';
        echo '
                <div class="container">
                <table class="table table-hover">
                    <thead>
                            <tr class="table-primary">
                                <th>id</th>
                                <th>ชื่อผู้ใช้</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>email</th>
                                <th>สาขาวิชา</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                        </tr>
                </thead>
                ';
        echo '<tbody>';
        foreach ($result as $STD) {
            echo '<tr>';
            echo "<td>" . $STD['STD_id'] . "</td>";
            echo "<td>" . $STD['STD_Username'] . "</td>";
            echo "<td>" . $STD['STD_fname'] . "</td>";
            echo "<td>" . $STD['STD_lname'] . "</td>";
            echo "<td>" . $STD['STD_email'] . "</td>";
            echo "<td>" . $STD['STD_department'] . "</td>";
            echo "<td>"
                . "<a href='updatestudent.php?id=" . $STD['STD_id'] . "' class='btn btn-warning btn-sm'>"
                . "แก้ไข</a></td>";
            echo "<td>"
                . "<a href='deletestudent.php?id=" . $STD['STD_id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('คุณต้องการลบจริงๆใช่มั้ย')\">"
                . "ลบ</a></td>";
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        ?>
    </div>
</body>

</html>