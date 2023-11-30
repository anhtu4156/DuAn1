<?php
$users = [];
$errMsg = [];


if (isset($_POST['register'])) {


    $user = isset($_POST['username']) ? $_POST['username'] : ''; //toan tu 3 ngoi
    $users['username'] = $user;
    if ($users['username'] == '') {
        $errMsg['username'] = "Username không được bỏ trống";
    } elseif (strlen($users['username']) < 2) {
        $errMsg['username'] = "Username phải có độ dài lớn hơn 2 ký tự";
    }

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

    $repassword = isset($_POST['repassword']) ? $_POST['repassword'] : ''; //toan tu 3 ngoi
    $users['repassword'] = $repassword;
    if (($users['repassword'] != $users['password']) and ($users['password'] != '')) {
        $errMsg['repassword'] = "Password phải trùng nhau";
    }

    
    // $username = $_POST["username"];
    // $password = $_POST["password"];
    // if ((strlen($users['username']) > 3) && ($users['password'] == $users['repassword']) && ($users['password'] != '')) {
    //     header("Location: login.php?username=" . $username . "&password=" . $password);
    // }
}
?>
<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                    <div class="w-full relative mb-4">
                    <div class="t_container">
    <div class="wrapper">
        <form action="#" method="post">
            <h1>Đăng Ký KH</h1>
            <div class="input-box">
                <input name="username" type="text" placeholder="Tên tài khoản">
                <i class='bx bxs-user'></i>
                <span><?php echo isset($errMsg['username']) ? $errMsg['username'] : ''; ?></span>
            </div>
            <div class="input-box">
                <input name="email" type="email" placeholder="Email">
                <i class='bx bx-envelope'></i>
                <span><?php echo isset($errMsg['email']) ? $errMsg['email'] : ''; ?></span>
            </div>
            <div class="input-box">
                <input name="password" type="password" placeholder="Mật Khẩu">
                <i class='bx bxs-lock-alt'></i>
                <span><?php echo isset($errMsg['password']) ? $errMsg['password'] : ''; ?></span>
            </div>
            <div class="input-box">
                <input name="repassword" type="password" placeholder="Nhập lại mật khẩu">
                <i class='bx bxs-lock-alt'></i>
                <span><?php echo isset($errMsg['repassword']) ? $errMsg['repassword'] : ''; ?></span>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <input name="register" type="submit" class="btn" value="Đăng Ký"></input>
            <?php
            if (isset($thanhcong) && ($thanhcong != "")) {
                echo "<div class='alert alert-success mt-3'>'$thanhcong'</div>";
            }

            ?>
            <!-- <div class="register-link">
                <p>Đã có tài khoản? <a href="index.php?act=login">Đăng nhập ngay</a></p>
            </div> -->
        </form>
    </div>
</div>

                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div> <!--end grid-->