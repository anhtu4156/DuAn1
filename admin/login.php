<?php
session_start();
include "../model/pdo.php";
include "../model/admin/login.php";
$users = [];
$errMsg = [];


if (isset($_POST['login'])) {


    $email = isset($_POST['email']) ? $_POST['email'] : ''; //toan tu 3 ngoi
    $users['email'] = $email;
    // var_dump($users);
    if ($users['email'] == '') {
        $errMsg['email'] = "Email không được bỏ trống";
    }



    $password = isset($_POST['password']) ? $_POST['password'] : ''; //toan tu 3 ngoi
    $users['password'] = $password;
    // var_dump($users);
    if ($users['password'] == '') {
        $errMsg['password'] = "Password không được bỏ trống";
    }


    if (isset($email) && isset($password) && $email != '' && $password != '') {
        $thongbao = dangnhap_admin($email, $password);
        if (isset($_SESSION['admin'])) {
            header("Location: index.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="t_container">
        <div class="wrapper">
            <form method="post" action="#">
                <h1>ĐĂNG NHẬP</h1>
                <div class="input-box">
                    <input name="email" type="email" placeholder="Email">
                    <i class='bx bx-envelope'></i>
                    <span><?php echo isset($errMsg['email']) ? $errMsg['email'] : ''; ?></span>
                </div>
                <div class="input-box">
                    <input name="password" id="password" type="password" placeholder="Mật Khẩu">
                    <i class='bx bxs-lock-alt'></i>
                    <span><?php echo isset($errMsg['password']) ? $errMsg['password'] : ''; ?></span>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <input name="login" type="submit" class="btn" value="Đăng Nhập"></input>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo "<div class='alert alert-success mt-3'>'.$thongbao.'</div>";
                }

                ?>
                <div class="register-link">
                    <p>Vui lòng đăng nhập để tiếp tục tới trang Admin</p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>