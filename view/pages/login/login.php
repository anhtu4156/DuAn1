<?php
$users = [];
$errMsg = [];


if (isset($_POST['login'])) {


    $user = isset($_POST['username']) ? $_POST['username'] : ''; //toan tu 3 ngoi
    $users['username'] = $user;
    if ($users['username'] == '') {
        $errMsg['username'] = "Username không được bỏ trống";
    } elseif (strlen($users['username']) <= 2) {
        $errMsg['username'] = "Username phải có độ dài lớn hơn 2 ký tự";
    }



    $password = isset($_POST['password']) ? $_POST['password'] : ''; //toan tu 3 ngoi
    $users['password'] = $password;
    // var_dump($users);
    if ($users['password'] == '') {
        $errMsg['password'] = "Password không được bỏ trống";
    }

    
    // $thongbao = dangnhap($user, $password);
    // if (isset($_SESSION['user'])) {
    //     header("Location: index.php?act=");
    // }
}
?>
<div class="t_container">
    <div class="wrapper">
        <form method="post" action="" >
            <h1>ĐĂNG NHẬP</h1>
            <div class=" input-box">
            <input name="username" id="username" type="text" placeholder="Tên tài khoản">
            <i class='bx bxs-user'></i>
            <span><?php echo isset($errMsg['username']) ? $errMsg['username'] : ''; ?></span>
    </div>
    <div class="input-box">
        <input name="password" id="password" type="password" placeholder="Mật Khẩu">
        <i class='bx bxs-lock-alt'></i>
        <span><?php echo isset($errMsg['password']) ? $errMsg['password'] : ''; ?></span>
    </div>

    <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="index.php?act=quenmk">Forgot Password</a>
    </div>
    <input name="login" type="submit" class="btn" value="Đăng Nhập"></input>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo "<div class='alert alert-success mt-3'>'.$thongbao.'</div>";
    }

    ?>
    <div class="register-link">
        <p>Chưa có tài khoản? <a href="index.php?act=reg">Đăng Ký ngay</a></p>
    </div>
    </form>
</div>
</div>